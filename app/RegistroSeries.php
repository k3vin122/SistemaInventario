<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegistroSeries
 *
 * @property $id
 * @property $serie
 * @property $id_guia
 * @property $created_at
 * @property $updated_at
 *
 * @property Guia $guia
 * @property Inventario[] $inventarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RegistroSeries extends Model
{
    
    static $rules = [
		'serie' => 'required',
		'id_guia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['serie','id_guia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function guia()
    {
        return $this->hasOne('App\Guia', 'id', 'id_guia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventarios()
    {
        return $this->hasMany('App\Inventario', 'id_registroSerie', 'id');
    }
    

}
