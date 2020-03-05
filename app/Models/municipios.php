<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class municipios
 * @package App\Models
 * @version March 5, 2020, 8:21 pm UTC
 *
 * @property string nombre_municipio
 * @property integer id_dep
 */
class municipios extends Model
{

    public $table = 'municipios';
    



    public $fillable = [
        'nombre_municipio',
        'id_dep'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_municipio' => 'string',
        'id_dep' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
