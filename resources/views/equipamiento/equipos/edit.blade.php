@extends('layouts.formulario_edit_general')

@section('title' , "Editar equipo")
@section("objeto_informacion", "editar un equipo")

@section('ruta_regresar')
    {{action('EquipoController@index')}}
@endsection

@section('formopen')
    {{Form::open(['action' => ['EquipoController@update', $equipo->serial, $url_regreso],
                'class' => 'form-horizontal'])}}
@endsection

@section('contenido_formulario')
    <script type="text/javascript">
        function deshabilitar(){
            var x = document.getElementById("mySelect").value;

            if(x == 'Audiovisual'){
                document.getElementById('sistema_operativo').disabled = true;
                document.getElementById('cpu').disabled = true;
                document.getElementById('ram').disabled = true;
                document.getElementById('almacenamiento').disabled = true;
            }else{
                document.getElementById('sistema_operativo').disabled = false;
                document.getElementById('cpu').disabled = false;
                document.getElementById('ram').disabled = false;
                document.getElementById('almacenamiento').disabled = false;
            }
        }
        $(document).ready(function(){
            if($("#mySelect").val() == 'Audiovisual'){
                $('#sistema_operativo').attr('disabled', true);
                $('#cpu').attr('disabled', true);
                $('#ram').attr('disabled', true);
                $('#almacenamiento').attr('disabled', true);
            }else{
                $('#sistema_operativo').attr('disabled', false);
                $('#cpu').attr('disabled', false);
                $('#ram').attr('disabled', false);
                $('#almacenamiento').attr('disabled', false);
            }
        });
    </script>

    @component("layouts.text_input")
        @slot("nombre_input", "serial")
        @slot("tooltip_input", "Serial del equipo. Identificador del equipo")
        @slot("label_input", "Serial")
        @slot("placeholder_input", "NA00013")
        @slot("valor_default", $equipo->serial)
        @slot("extra", "maxlength=80")
    @endcomponent

    <div class="form-group">
        <label for="tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Que tipo de equipo es, de computo, redes, audiovisual o de servidor">
            Tipo
        </label>

        <div class="col-sm-8">
            <select id="mySelect" name="tipo" class="form-control" onchange="deshabilitar()">
                @foreach($tipos as $tipo)
                    @if($equipo->tipo == $tipo)
                        @component('layouts.option_general')
                            @slot('var', $tipo)
                            @slot('extra', "selected")
                        @endcomponent
                    @else
                        @component('layouts.option_general')
                            @slot('var', $tipo)
                        @endcomponent
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    @component("layouts.text_input")
        @slot("nombre_input", "sistema_operativo")
        @slot("tooltip_input", "Sistema operativo principal que tiene el equipo")
        @slot("label_input", "Sistema operativo")
        @slot("placeholder_input", "Windows 10")
        @slot("valor_default", $equipo->sistema_operativo)
        @slot('extra')
            id = "sistema_operativo" maxlenght=80
        @endslot
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "marca")
        @slot("tooltip_input", "Marca del manufacturador. Ejemplo LANIX")
        @slot("label_input", "Marca")
        @slot("placeholder_input", "LANIX")
        @slot("extra", "maxlength=80")
        @slot("valor_default", $equipo->marca)
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "cpu")
        @slot("tooltip_input", "Que especificaciones tiene la CPU del equipo")
        @slot("label_input", "CPU")
        @slot("placeholder_input", "Qualcorexeon X5460 2X 6MB Cache")
        @slot("valor_default", $equipo->cpu)
        @slot('extra')
            id = "cpu" maxlength=80
        @endslot
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "ram")
        @slot("tooltip_input", "Que especificaciones tiene la memoria RAM del equipo")
        @slot("label_input", "RAM")
        @slot("placeholder_input", "8GB 667 MHZ (4X2 GB)")
        @slot("valor_default", $equipo->ram)
        @slot('extra')
            id = "ram" maxlength=80
        @endslot
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "almacenamiento")
        @slot("tooltip_input", "Que especificaciones tiene la memoria de almacenamiento del equipo")
        @slot("label_input", "Memoria almacenamiento")
        @slot("placeholder_input", "HDD 300 GB")
        @slot("valor_default", $equipo->almacenamiento)
        @slot('extra')
            id = "almacenamiento" maxlength=80
        @endslot
    @endcomponent

    @component("layouts.textarea_input")
        @slot("nombre_input", "otras_caracteristicas")
        @slot("tooltip_input", "Alguna otra característica importante a tomar en cuenta")
        @slot("label_input", "Otras características")
        @slot("placeholder_input", "Tarjeta gráfica o algún otra característica que se debería mencionar")
        @slot("valor_default", $equipo->otras_caracteristicas)
    @endcomponent

@endsection

