@extends('adminlte::page')
@section('title','Egresados')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('egresados.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($egresados as $egresado)
            <li>
               <a href="{{route('egresados.show', $egresado->id)}}">{{$egresado->id}}</a>
            </li>
        @endforeach 
    </ul>

    {{$egresados->links()}}

@endsection