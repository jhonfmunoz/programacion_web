<?php

namespace App\Repositories;

use App\Models\tipo_documentos;
use App\Repositories\BaseRepository;

/**
 * Class tipo_documentosRepository
 * @package App\Repositories
 * @version March 5, 2020, 8:01 pm UTC
*/

class tipo_documentosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_documento'
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
        return tipo_documentos::class;
    }
}
