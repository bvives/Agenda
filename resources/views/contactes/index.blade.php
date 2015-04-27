@extends('app')
 
@section('content')
    <h2>Contactes</h2>
 
    @if ( !$contactes->count() )
        You have no poblacions
    @else
        <ul>
            @foreach( $contactes as $contacte )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('contactes.destroy', $contacte->slug))) !!}
                        <a href="{{ route('contactes.show', $contacte->slug) }}">{{ $contacte->nom }}</a>
                        (
                            {!! link_to_route('contactes.edit', 'Edit', array($contacte->slug), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
    <p>
        {!! link_to_route('contactes.create', 'Create Contacte') !!}
    </p>
@endsection