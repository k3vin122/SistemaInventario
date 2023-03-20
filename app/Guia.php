<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Guia
 *
 * @property $id
 * @property $nombre
 * @property $id_proveedor
 * @property $created_at
 * @property $updated_at
 *
 * @property Ordene[] $ordenes
 * @property Proveedore $proveedore
 * @property RegistroSeries[] $registroSeries
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Guia extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'id_proveedor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','id_proveedor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordenes()
    {
        return $this->hasMany('App\Ordene', 'id_guia', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Proveedore', 'id', 'id_proveedor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registroSeries()
    {
        return $this->hasMany('App\RegistroSeries', 'id_guia', 'id');
    }
    

}
