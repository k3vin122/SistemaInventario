<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 *
 * @property $id
 * @property $n_invenatario
 * @property $unidad
 * @property $mac
 * @property $recinto
 * @property $ip
 * @property $recepciona
 * @property $entrega
 * @property $id_registroSerie
 * @property $id_tipoEquipo
 * @property $id_modelo
 * @property $id_marca
 * @property $created_at
 * @property $updated_at
 *
 * @property Marca $marca
 * @property Modelo $modelo
 * @property RegistroSeries $registroSeries
 * @property TipoEquipo $tipoEquipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventario extends Model
{
    
    static $rules = [
		'n_invenatario' => 'required',
		'unidad' => 'required',
		'mac' => 'required',
		'recinto' => 'required',
		'ip' => 'required',
		'recepciona' => 'required',
		'entrega' => 'required',
		'id_registroSerie' => 'required',
		'id_tipoEquipo' => 'required',
		'id_modelo' => 'required',
		'id_marca' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['n_invenatario','unidad','mac','recinto','ip','recepciona','entrega','id_registroSerie','id_tipoEquipo','id_modelo','id_marca'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Marca', 'id', 'id_marca');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modelo()
    {
        return $this->hasOne('App\Modelo', 'id', 'id_modelo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function registroSeries()
    {
        return $this->hasOne('App\RegistroSeries', 'id', 'id_registroSerie');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoEquipo()
    {
        return $this->hasOne('App\TipoEquipo', 'id', 'id_tipoEquipo');
    }
    

}
