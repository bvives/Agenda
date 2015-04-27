@extends('app')
 
@section('content')
    <h2>{{$cita->titol}}</h2>
    <table>
        <tr>
            <td>Data:</td>
            <td>{{$cita->dataCita}}</td>
        </tr>
        <tr>
            <td>Descripcio:</td>
            <td>{{$cita->descripcio}}</td>
        </tr>
        <tr>
            <td>Lloc:</td>
            <td>{{$cita->lloc}}</td>
        </tr>
    </table>
    <br/>
    @if(!$cita->contactes->count())
    <p> aquestaa cita no te contactes</p>
    @else
        <ul>
        @foreach($cita->contactes as $contacte)
            <li><a href="{{ route('contactes.show', [$contacte->slug]) }}">{{ $contacte->nom }}</a>
        @endforeach
        </ul>
        {!! link_to_route('citas.addContactes', 'Edit', array($cita->slug), array('class' => 'btn btn-info')) !!}
    @endif
@endsection