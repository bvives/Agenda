@extends('app')

@section('content')
    <h2>Afegir Contacte</h2>
 
    {!! Form::model($cita, ['method' => 'PATCH', 'route' => ['citas.sync', $cita->slug]]) !!}
        @include('citas/partials/_contactesForm', ['submit_text' => 'afegir contactes a cita'])
    {!! Form::close() !!}
@endsection