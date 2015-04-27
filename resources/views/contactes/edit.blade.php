@extends('app')

@section('content')
    <h2>Edit contacte</h2>
 
    {!! Form::model($contacte, ['method' => 'PATCH', 'route' => ['contactes.update', $contacte->slug]]) !!}
        @include('contactes/partials/_form', ['submit_text' => 'Edit contacte'])
    {!! Form::close() !!}
@endsection