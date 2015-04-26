@extends('app')

@section('content')
    <h2>Edit cita</h2>
 
    {!! Form::model($cita, ['method' => 'PATCH', 'route' => ['citas.update', $cita->slug]]) !!}
        @include('citas/partials/_form', ['submit_text' => 'Edit cita'])
    {!! Form::close() !!}
@endsection