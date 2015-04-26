@extends('app')
 
@section('content')
    <h2>Contactes</h2>
 
    @if ( !$contactes->count() )
        You have no poblacions
    @else
        <ul>
            @foreach( $contactes as $contacte )
                <li>
                        <a href="{{ route('contactes.show', $contacte->slug) }}">{{ $contacte->nom }}</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection