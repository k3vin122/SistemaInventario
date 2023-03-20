<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $nombre
 * @property $direccion
 * @property $rol
 * @property $created_at
 * @property $updated_at
 *
 * @property Guia[] $guias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'direccion' => 'required',
		'rol' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','direccion','rol'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guias()
    {
        return $this->hasMany('App\Guia', 'id_proveedor', 'id');
    }
    

}
