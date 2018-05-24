<!--Header tabla-->
    <th data-toggle="tooltip" title=@yield('tooltip_header_tabla')>
        @yield('titulo_header_tabla')
    </th>

    <!--Los atributos de un espacio-->
    <td>
        @yield('atributo_tabla')
    </td>

    <!--Boton editar-->
    <td class="text-center">
        <a href=@yield('controlador_editar') class="btn btn-warning">
            Editar
        </a>
    </td>

    <!--Boton borrar-->
    <td>
        <!--Ejemplo: Form::open(['action' => ['EspacioController@destroy', $espacio->tipo]])-->
            @yield('controlador_borrar')
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Borrar', ['class' => 'btn btn-warning']) }}
        {{ Form::close() }}
    </td>

