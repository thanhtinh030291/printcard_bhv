<?php

namespace App\Imports;

use App\Models\CardPrint;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CardPrintImport implements ToModel, WithStartRow
{
    protected $name_remember = null;
    protected $user_id = null;
        
    public function __construct($name_remember = null)
    {
        $this->name_remember = $name_remember;
        $this->user_id = Auth::user()->id;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        Auth::user()->id;
        $data = [
            'name'     => trim($row[1]),
            'policy_no'    => trim($row[2]),
            'text_valid'    => trim($row[3]),
            'valid_to'      => $row[4] != "" ?  Carbon::createFromFormat('d/m/Y', $row[4])->format('Y-m-d') : null,
            'plan_type'     => trim($row[5]),
            'barcode'       => trim($row[6]),
            'pos'           => trim($row[7]),
            'hcm_hn'        => trim($row[8]),
            'note'          => trim($row[9]),
            'name_remember' => $this->name_remember,
            'created_user'  => $this->user_id,
            'update_user'   => $this->user_id,
        ];
        return new CardPrint($data);
        
    }
    public function startRow(): int
        {
            return 2;
        }
}
