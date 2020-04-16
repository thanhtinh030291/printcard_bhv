<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CardPrint
 * @package App\Models
 * @version March 30, 2020, 6:41 am UTC
 *
 * @property string name
 * @property string policy_no
 * @property string text_valid
 * @property string valid_to
 * @property string plan_type
 * @property string barcode
 * @property string pos
 * @property integer hcm-hn
 * @property string note
 * @property integer created_user
 * @property integer update_user
 * @property string name_remember
 */
class CardPrint extends Model
{
    use SoftDeletes;

    public $table = 'card_print';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
            'id',
            'name_remember',
            'name',
            'policy_no',
            'member_no',
            'valid_from',
            'valid_to',
            'plan_type',
            'op',
            'dt',
            'co_payment',
            'deductible',
            'medical_check_up',
            'waiting_period',
            'exclusion_1',
            'exclusion_2',
            'first_year',
            'type',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name_remember' => 'string',
        'name' => 'string',
        'policy_no' => 'string',
        'member_no' => 'string',
        'valid_from' => 'string',
        'valid_to' => 'string',
        'plan_type' => 'string',
        'op' => 'string',
        'dt' => 'string',
        'co_payment' => 'string',
        'deductible' => 'string',
        'medical_check_up' => 'string',
        'waiting_period' => 'string',
        'exclusion_1' => 'string',
        'exclusion_2' => 'string',
        'first_year' => 'string',
        'type' => 'string',
        'created_user' => 'integer',
        'update_user' => 'integer',
        'name_remember' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
