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
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new RegistroSeries([
            'serie'  => $row['serie'],
            'id_guia'  => $this->guias[$row['guia']]
        ]);
    }
    public function batchSize(): int
    {
        return 2000;
    }
    public function chunkSize(): int
    {
        return 2000;
    }
}