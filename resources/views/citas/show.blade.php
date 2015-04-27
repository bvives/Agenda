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
        <li><a href="{{ route('contactes.show', [$contacte->slug]) }}">{{ $contacte->nom }}</a></li>
        @endforeach
        </ul>
    @endif
    {!! link_to_route('citas.addContactes', 'Afegir contacte', array($cita->slug), array('class' => 'btn btn-info')) !!}
    {!! link_to_route('citas.removeContactes', 'Treure contactes', array($cita->slug), array('class' => 'btn btn-danger')) !!}
    
@endsection