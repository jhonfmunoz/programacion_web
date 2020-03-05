<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class personas
 * @package App\Models
 * @version March 5, 2020, 8:29 pm UTC
 *
 * @property integer numero_identificacion
 * @property string nombre
 * @property string apellido
 * @property integer fk_municipio
 * @property integer fk_td
 */
class personas extends Model
{

    public $table = 'personas';
    



    public $fillable = [
        'numero_identificacion',
        'nombre',
        'apellido',
        'fk_municipio',
        'fk_td'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numero_identificacion' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'fk_municipio' => 'integer',
        'fk_td' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
