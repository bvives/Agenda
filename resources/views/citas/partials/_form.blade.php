<div class="form-group">
    {!! Form::label('titol', 'Titol:') !!}
    {!! Form::text('titol') !!}
</div>
<div class="form-group">
    {!! Form::label('dataCita', 'Data:') !!}
    {!! Form::date('dataCita') !!}
</div>
<div class="form-group">
    {!! Form::label('descripcio', 'Descripcio:') !!}
    {!! Form::text('descripcio') !!}
</div>
<div class="form-group">
    {!! Form::label('lloc', 'Lloc:') !!}
    {!! Form::text('lloc') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
