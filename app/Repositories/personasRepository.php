<?php

namespace App\Repositories;

use App\Models\personas;
use App\Repositories\BaseRepository;

/**
 * Class personasRepository
 * @package App\Repositories
 * @version March 5, 2020, 8:29 pm UTC
*/

class personasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numero_identificacion',
        'nombre',
        'apellido',
        'fk_municipio',
        'fk_td'
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
        return personas::class;
    }
}
