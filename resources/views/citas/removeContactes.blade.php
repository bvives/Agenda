@extends('app')

@section('content')
    <h2>Treure contactes de {{$cita->titol}}</h2>
{!! Form::open(['route' => ['citas.detach', $cita->slug]]) !!}
        @include('citas/partials/_contactesForm', ['submit_text' => 'Treure contactes de cita'])
    {!! Form::close() !!}
@endsection