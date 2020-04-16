<?php

namespace App\Repositories;

use App\Models\CardPrint;
use App\Repositories\BaseRepository;

/**
 * Class CardPrintRepository
 * @package App\Repositories
 * @version March 30, 2020, 6:41 am UTC
*/

class CardPrintRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'policy_no',
        'valid_to',
        'plan_type',
        'pos',
        'hcm-hn',
        'created_user',
        'update_user',
        'name_remember'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CardPrint::class;
    }
}
