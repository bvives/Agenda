<div class="form-group">
    {!! Form::label('Contactes', 'Contactes:') !!}
    <br />
    <?php $count = 1; ?>
    @foreach($contactes as $contacte)
    {!! Form::checkbox('contactes[]', $contacte->id)!!}{{$contacte->nom}}
        @if ($count % 3 == 0)
        <br />
        @endif
    <?php $count++; ?>
    @endforeach
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
