<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class departamentos
 * @package App\Models
 * @version March 5, 2020, 8:00 pm UTC
 *
 * @property string nombre_departamento
 */
class departamentos extends Model
{

    public $table = 'departamentos';
    



    public $fillable = [
        'nombre_departamento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_departamento' => 'integer',
        'nombre_departamento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
