@extends('app')
 
@section('content')
    <h2>{{$contacte->nom}}</h2>
    <table>
        <tr>
            <td>Email:</td>
            <td>{{$contacte->email}}</td>
        </tr>
        <tr>
            <td>Telefon:</td>
            <td>{{$contacte->tlf}}</td>
        </tr>
    </table>
    <br/>
    @if(!$contacte->citas->count())
    <p> aquest contacte no te citas</p>
    @else
        <ul>
        @foreach($contacte->citas as $cita)
            <li><a href="{{ route('citas.show', [$cita->slug]) }}">{{ $cita->titol }}</a>
        @endforeach
        </ul>
    @endif
@endsection