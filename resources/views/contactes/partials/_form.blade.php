<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom') !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email') !!}
</div>
<div class="form-group">
    {!! Form::label('tlf', 'Telefon:') !!}
    {!! Form::text('tlf') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
