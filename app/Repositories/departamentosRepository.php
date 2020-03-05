<?php

namespace App\Repositories;

use App\Models\departamentos;
use App\Repositories\BaseRepository;

/**
 * Class departamentosRepository
 * @package App\Repositories
 * @version March 5, 2020, 8:00 pm UTC
*/

class departamentosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_departamento'
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
        return departamentos::class;
    }
}
