<div class="box box-info padding-1">

    <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <div class="custom-file">
            <input type="file" id="import_file" accept=".xlsx" required name="import_file">

        </div>
    </div>
    <br>

    <div class="text-center">
        <div style="display: inline-block;">
            <a href="{{ route('registro-series.index') }}" class="button button2">Volver</a>
        </div>
        <div style="display: inline-block;">
            <button type="submit" class="button button3">Importar Archivo</button>
        </div>
    </div>


    <a href="{{ asset('/excel-file.xlsx') }}" download="excel-file.xlsx">Descargar Formato de Importación</a>

</div>




