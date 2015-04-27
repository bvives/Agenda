@extends('app')

@section('content')
    <h2>Afegir contactes a {{$cita->titol}}</h2>

{!! Form::open(['route' => ['citas.sync', $cita->slug]]) !!}
        @include('citas/partials/_contactesForm', ['submit_text' => 'afegir contactes a cita'])
    {!! Form::close() !!}
@endsection