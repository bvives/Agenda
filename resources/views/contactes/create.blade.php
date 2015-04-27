@extends('app')
 
@section('content')
    <h2>Crear contacte</h2>
 
    {!! Form::model(new App\Contacte, ['route' => ['contactes.store']]) !!}
        @include('contactes/partials/_form', ['submit_text' => 'Create contacte'])
    {!! Form::close() !!}
@endsection

