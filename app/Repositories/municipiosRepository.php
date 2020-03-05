<?php

namespace App\Repositories;

use App\Models\municipios;
use App\Repositories\BaseRepository;

/**
 * Class municipiosRepository
 * @package App\Repositories
 * @version March 5, 2020, 8:21 pm UTC
*/

class municipiosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_municipio',
        'id_dep'
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
        return municipios::class;
    }
}
