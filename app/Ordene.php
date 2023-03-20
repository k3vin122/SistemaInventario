<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ordene
 *
 * @property $id
 * @property $nombre
 * @property $id_guia
 * @property $created_at
 * @property $updated_at
 *
 * @property Guia $guia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ordene extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'id_guia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','id_guia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function guia()
    {
        return $this->hasOne('App\Guia', 'id', 'id_guia');
    }
    

}
