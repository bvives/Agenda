@extends('app')
 
@section('content')
    <h2>Crear cita</h2>
 
    {!! Form::model(new App\Cita, ['route' => ['citas.store']]) !!}
        @include('citas/partials/_form', ['submit_text' => 'Create Cita'])
    {!! Form::close() !!}
@endsection

