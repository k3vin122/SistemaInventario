<?php

namespace App\Imports;
use App\RegistroSeries;
use App\Guia;



use App\Models\Serie;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class RegistroSerieImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{

    /**
    * constuctor para buscar tipo de guia y compara no id de guia, para luego importar file con la funcion pluck
    */

    private $guias;

    public function __construct()
    {
        $this->guias = Guia::all(['id','nombre'])->pluck('id','nombre');
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
     


    public function model(array $row)
    {
        return new RegistroSeries([
            'serie'  => $row['serie'],
            'id_guia' => $this->guias[$row['id_guia']]
        ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 2000;
    }
}