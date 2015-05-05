@extends('app')
 
@section('content')
    <h2>{{Lang::get('messages.titleContactes')}}</h2>
    {{Session::get('locale')}}
    {{App::getLocale()}}
    @if ( !$contactes->count() )
        You have no poblacions
    @else
        <ul>
            @foreach( $contactes as $contacte )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('contactes.destroy', $contacte->slug))) !!}
                        <a href="{{ route('contactes.show', $contacte->slug) }}">{{ $contacte->nom }}</a>
                        (
                            {!! link_to_route('contactes.edit', Lang::get('messages.botoEdit'), array($contacte->slug), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit(Lang::get('messages.botoDelete'), array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
    <p>
        {!! link_to_route('contactes.create', Lang::get('messages.createContacte')) !!}
    </p>
@endsection