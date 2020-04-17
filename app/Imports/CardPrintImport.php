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
            'member_no'    => trim($row[3]),
            'valid_from'      => trim($row[4]),
            'valid_to'     => trim($row[5]),
            'plan_type'       => trim($row[6]),
            'op'           => trim($row[7]),
            'dt'        => trim($row[8]),
            'co_payment'          => trim($row[9]),
            'deductible'          => trim($row[10]),
            'medical_check_up'          => trim($row[11]),
            'waiting_period'          => trim($row[12]),
            'exclusion_1'          => trim($row[13]),
            'exclusion_2'          => trim($row[14]),
            'first_year'          => trim($row[15]),
            'type'          => trim($row[16]),
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
