@extends('adminlte::page')

@section('title','Actualizar Registro')

@section('content')
<div class="container">
    <h1 class="text-center" style="font-family:verdana;">EDICIÓN DE EGRESADO</h1>
    <form action="{{route('egresados.update', $egresado)}}" method="POST">

        @csrf

        @method('put')

        <div class="form-group">
            <label for="nombre_egresado">Nombre:</label>
            <input type="text" class="form-control" id="nombre_egresado" name="nombre_egresado" value="{{ $egresado->nombre_egresado }}">
        </div>

        <div class="form-group">
            <label for="grado_instruccion_egresado">Grado de Instrucción:</label>
            <input type="text" class="form-control" id="grado_instruccion_egresado" name="grado_instruccion_egresado" value="{{ $egresado->grado_instruccion_egresado }}">
        </div>

        <div class="form-group">
            <label for="especializacion_egresado">Especialización:</label>
            <input type="text" class="form-control" id="especializacion_egresado" name="especializacion_egresado" value="{{ $egresado->especializacion_egresado }}">
        </div>

        <div class="form-group">
            <label for="fecha_egreso_egresado">Fecha de Egreso:</label>
            <input type="datetime" class="form-control" id="fecha_egreso_egresado" name="fecha_egreso_egresado" value="{{ $egresado->fecha_egreso_egresado }}">
        </div>

        <div class="form-group">
            <label for="fecha_titulo_egresado">Fecha de titulo:</label>
            <input type="datetime" class="form-control" id="fecha_titulo" name="fecha_titulo_egresado" value="{{$egresado->fecha_titulo_egresado}}">
        </div>

        <div class="form-group">
            <label for="fecha_maestria_egresado">Fecha de maestría:</label>
            <input type="datetime" class="form-control" id="fecha_titulo" name="fecha_maestria_egresado" value="{{$egresado->fecha_maestria_egresado}}">
        </div>

        <div class="form-group">
            <label for="fecha_doctorado_egresado">Fecha de doctorado:</label>
            <input type="datetime" class="form-control" id="fecha_titulo" name="fecha_doctorado_egresado" value="{{$egresado->fecha_doctorado_egresado}}">
        </div>

        <div class="form-group">
            <label for="empresa_id">Id de empresa:</label>
            <input type="number" class="form-control" id="empresa_id" name="empresa_id" value="{{$egresado->empresa_id}}">
        </div>


        <div class="form-group">
            <label for="cargo_empresa_egresado">Cargo de empresa:</label>
            <input type="text" class="form-control" id="cargo_empresa_egresado" name="cargo_empresa_egresado" value="{{$egresado->cargo_empresa_egresado}}">
        </div>


        <div class="form-group">
            <label for="tiempo_laboral_egresado">Tiempo laboral:</label>
            <input type="datetime" class="form-control" id="tiempo_laboral_egresado" name="tiempo_laboral_egresado" value="{{$egresado->tiempo_laboral_egresado}}">
        </div>

        
        <button type="submit" class="btn btn-primary">Actualizar Formulario</button>
    </form>
    
</div>
@endsection