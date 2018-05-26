<!--Boton editar-->
<td>
    {{$controlador_editar}}
        {{ Form::hidden('_method', 'GET') }}
        {{ Form::submit('Editar', ['class' => 'btn btn-warning']) }}
    {{ Form::close() }}
</td>

