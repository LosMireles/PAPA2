<!--Boton borrar-->
<td>
    <!--Ejemplo:
        Form::open(['action' => ['EspacioController@destroy', $espacio->tipo]])
    -->
        {{$controlador_borrar}}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Borrar', ['class' => 'btn btn-danger']) }}
    {{ Form::close() }}
</td>

