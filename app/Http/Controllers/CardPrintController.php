<?php

namespace App\Http\Controllers;

use App\DataTables\CardPrintDataTable;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCardPrintRequest;
use App\Http\Requests\UpdateCardPrintRequest;
use App\Repositories\CardPrintRepository;
use App\Models\CardPrint;
use Maatwebsite\Excel\Facades\Excel;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Imports\CardPrintImport;
use Carbon\Carbon;
use Illuminate\Support\Str;
use View;
use ZipArchive;
use Illuminate\Support\Facades\File;

class CardPrintController extends AppBaseController
{
    /** @var  CardPrintRepository */
    private $cardPrintRepository;

    public function __construct(CardPrintRepository $cardPrintRepo)
    {
        $this->cardPrintRepository = $cardPrintRepo;
        //$list_name_remember = CardPrint::select('name_remember')->distinct()->get()->pluck('name_remember','name_remember');
        $latest_name_remember = CardPrint::latest('id')->first();
        $latest_name_remember = isset($latest_name_remember->name_remember) ? $latest_name_remember->name_remember : null;
        $latest_name_remember = $latest_name_remember ? $latest_name_remember  : "";
        View::share('latest_name_remember', $latest_name_remember);
    }

    /**
     * Display a listing of the CardPrint.
     *
     * @param CardPrintDataTable $cardPrintDataTable
     * @return Response
     */
    public function index(CardPrintDataTable $cardPrintDataTable)
    {
        return $cardPrintDataTable->render('card_prints.index');
    }

    /**
     * Show the form for creating a new CardPrint.
     *
     * @return Response
     */
    public function create()
    {
        return view('card_prints.create');
    }

    /**
     * Store a newly created CardPrint in storage.
     *
     * @param CreateCardPrintRequest $request
     *
     * @return Response
     */
    public function store(CreateCardPrintRequest $request)
    {
        $name_remember = 'import-'. Carbon::now()->format('d-m-Y') . '-' . time();
        Excel::import(new CardPrintImport($name_remember),request()->file('file'));
        CardPrint::where('name', "")->forceDelete();
        Flash::success('Card Print saved successfully with name remember: '.$name_remember);
        return redirect(route('cardPrints.index'));
    }

    /**
     * Display the specified CardPrint.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cardPrint = $this->cardPrintRepository->find($id);
        if (empty($cardPrint)) {
            Flash::error('Card Print not found');

            return redirect(route('cardPrints.index'));
        }

        return view('card_prints.show')->with('cardPrint', $cardPrint);
    }

    /**
     * Show the form for editing the specified CardPrint.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cardPrint = $this->cardPrintRepository->find($id);

        if (empty($cardPrint)) {
            Flash::error('Card Print not found');

            return redirect(route('cardPrints.index'));
        }

        return view('card_prints.edit')->with('cardPrint', $cardPrint);
    }

    /**
     * Update the specified CardPrint in storage.
     *
     * @param  int              $id
     * @param UpdateCardPrintRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCardPrintRequest $request)
    {
        $cardPrint = $this->cardPrintRepository->find($id);

        if (empty($cardPrint)) {
            Flash::error('Card Print not found');

            return redirect(route('cardPrints.index'));
        }

        $cardPrint = $this->cardPrintRepository->update($request->all(), $id);

        Flash::success('Card Print updated successfully.');

        return redirect(route('cardPrints.index'));
    }

    /**
     * Remove the specified CardPrint from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cardPrint = $this->cardPrintRepository->find($id);

        if (empty($cardPrint)) {
            Flash::error('Card Print not found');

            return redirect(route('cardPrints.index'));
        }

        $this->cardPrintRepository->delete($id);

        Flash::success('Card Print deleted successfully.');

        return redirect(route('cardPrints.index'));
    }

    public function pdf($id)
    {
        $cardPrint = $this->cardPrintRepository->find($id);
        if (empty($cardPrint)) {
            Flash::error('Card Print not found');

            return redirect(route('cardPrints.index'));
        }
        $file_name = Str::slug($cardPrint->name ."-".$cardPrint->policy_no);
        $mpdf = new \Mpdf\Mpdf(['tempDir' => base_path('resources/fonts/')]);
        
        $mpdf->WriteHTML(view('card_prints.pdf', compact('cardPrint'))->render());
        
        header("Content-Type: application/pdf");
        header("Expires: 0");//no-cache
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
        header("content-disposition: attachment;filename={$file_name}.pdf");
        echo $mpdf->Output('filename.pdf',\Mpdf\Output\Destination::STRING_RETURN);
        
    }

    public function pdf_remember_name(Request $request)
    {
        $cardPrints = CardPrint::where('name_remember',$request->name_remember)->get();
        if (empty($cardPrints)) {
            Flash::error('Card Print not found');

            return redirect(route('cardPrints.index'));
        }
        $fileName = Str::slug($request->name_remember).time().'.zip';
        $zip = new ZipArchive;
        if (!File::exists(public_path("cache_file/")))
        {
            File::makeDirectory(public_path("cache_file/"), 0777, true, true);
        }
        if ($zip->open(public_path("cache_file/".$fileName), ZipArchive::CREATE) === TRUE)
        {
            foreach ($cardPrints as $key => $value) {
                $mpdf = new \Mpdf\Mpdf(['tempDir' => base_path('resources/fonts/')]);
                $cardPrint = $value;
                $mpdf->WriteHTML(view('card_prints.pdf', compact('cardPrint'))->render());
                $content = $mpdf->Output('filename.pdf',\Mpdf\Output\Destination::STRING_RETURN);
                $name_file_split = $value->policy_no."-".Str::slug($value->name).'.pdf' ;
                $zip->addFromString($name_file_split, $content);
            }
    
            $zip->close();
        }
        return response()->download(public_path("cache_file/".$fileName));

    }

}
