<!--Boton borrar-->
<td>
    <!--Ejemplo:
        Form::open(['action' => ['EspacioController@destroy', $espacio->tipo]])
    -->
        {{$controlador_borrar}}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Borrar', ['class' => 'btn btn-danger',
                                    'onclick' => "return confirm('¿Estas seguro que deseas borrar este registro?')"]) }}
    {{ Form::close() }}
</td>
