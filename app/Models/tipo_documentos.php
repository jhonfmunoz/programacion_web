<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class tipo_documentos
 * @package App\Models
 * @version March 5, 2020, 8:01 pm UTC
 *
 * @property string tipo_documento
 */
class tipo_documentos extends Model
{

    public $table = 'tipo_documentos';
    



    public $fillable = [
        'tipo_documento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_tipo_documento' => 'integer',
        'tipo_documento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
