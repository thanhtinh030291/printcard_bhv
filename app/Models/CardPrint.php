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
        'name',
        'policy_no',
        'text_valid',
        'valid_to',
        'plan_type',
        'barcode',
        'pos',
        'hcm_hn',
        'note',
        'created_user',
        'update_user',
        'name_remember'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'policy_no' => 'string',
        'text_valid' => 'string',
        'plan_type' => 'string',
        'barcode' => 'string',
        'pos' => 'string',
        'hcm_hn' => 'string',
        'note' => 'string',
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
