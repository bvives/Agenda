<div class="form-group">
    {!! Form::label('titol', 'Titol:') !!}
    @foreach($contactes as $contacte)
    {!! Form::checkbox($contacte->nom, $contacte->id) !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
