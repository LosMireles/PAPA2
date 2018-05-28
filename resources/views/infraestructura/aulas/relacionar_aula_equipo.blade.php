@extends('layouts.formulario_edit_general')

@section('title', "Relacion aulas equipos")

@section('formopen')
    {{Form::open(['action' => ['AulaController@relacionar_equipos_post', $aula->id],
                'class' => 'form-horizontal'])}}
@endsection


@section('contenido_formulario')
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

