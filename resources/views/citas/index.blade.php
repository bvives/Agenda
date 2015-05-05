@extends('app')
 
@section('content')
    <h2>Citas</h2>
 
    @if ( !$citas->count() )
        You have no poblacions
    @else
        <ul>
            @foreach( $citas as $cita )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('citas.destroy', $cita->slug))) !!}
                        <a href="{{ route('citas.show', $cita->slug) }}">{{ $cita->titol }}</a>
                         (
                            {!! link_to_route('citas.edit', Lang::get('messages.botoEdit'), array($cita->slug), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit(Lang::get('messages.botoDelete'), array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
    
    <p>
        {!! link_to_route('citas.create', Lang::get('messages.createCita')) !!}
    </p>
@endsection