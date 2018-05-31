@extends('layouts.formulario_general')

@section('title', "Vincular aulas equipos")

@section('objeto_informacion', 'vincular un aula y equipos')

@section('metodo_envio_formulario')
    <form class="form-horizontal" action = "{{action('AulaController@relacionar_equipos_post', $aula->id, $url_regreso)}}" method="POST" enctype="multipart/form-data">
@endsection

@section('contenido_formulario')
    <p align="justify"><font size="4">
        <b>Nota:</b> sólo se muestran los equipos que marcados como relacionados al
        aula o aquellos equipos que no esten relacionados con algun aula.
        Si desea relacionar un equipo que este en otra aula, primero deseleccionelo
        de aquella aula y despues relacionelo con esta.

        Si no hay equipos para relacionar, le recomendamos agregar mas y después
        relacionarlos.
    </p>
    @component('layouts.componentes.tabla_general')
        @slot('cabeza_tabla')
            <th>Aulas</th>
            <th>Equipos de computo</th>
            <th>Equipos audiovisuales</th>
        @endslot

        @slot('cuerpo_tabla')
            @if(!empty($equipos_computo) && !empty($equipos_audiovisuales))
                <tr>
                    <td>
                        {{$aula->nombre}}
                    </td>

                    <td>
                        @foreach($equipos_computo as $equipo)
                            @if($equipo->aula_id == $aula->id)
                                <input type='checkbox' name='computos[]' value="{{$equipo->serial}}" checked/>
                                {{$equipo->serial}}
                                <br>
                            @elseif($equipo->aula_id == null)
                                <input type='checkbox' name='computos[]' value="{{$equipo->serial}}" />
                                {{$equipo->serial}}
                                <br>
                            @endif
                        @endforeach
                    </td>

                    <td>
                        @foreach($equipos_audiovisuales as $equipo)
                            @if($equipo->aula_id == $aula->id)
                                <input type='checkbox' name='audiovisuales[]' value="{{$equipo->serial}}" checked/>
                                {{$equipo->serial}}
                                <br>
                            @elseif($equipo->aula_id == null)
                                <input type='checkbox' name='audiovisuales[]' value="{{$equipo->serial}}" />
                                {{$equipo->serial}}
                                <br>
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endif
        @endslot
    @endcomponent
@endsection

@section('boton_submit_formulario')
    <div class="col-sm-offset-4 col-sm-8">
        {{ Form::submit('Vincular', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
@endsection

