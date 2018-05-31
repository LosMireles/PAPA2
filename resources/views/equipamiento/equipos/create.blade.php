@extends('layouts.formulario_create_general')

@section('title' , "Agregar equipo")
@section("objeto_informacion", "agregar un equipo")

@section('ruta_regresar')
    {{action('EquipoController@index')}}
@endsection

@section('accion')
    {{action('EquipoController@store', $url_regreso)}}
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
            }
        }
    </script>
    @component("layouts.text_input")
        @slot("nombre_input", "serial")
        @slot("tooltip_input", "Serial del equipo. Identificador del equipo")
        @slot("label_input", "Serial")
        @slot("placeholder_input", "NA00013")
        @slot("extra", "maxlength=80 required")
    @endcomponent

    <div class="form-group">
        <label for="tipo" class="col-sm-4 control-label" data-toggle="tooltip" title="Que tipo de equipo es, de computo, redes, audiovisual o de servidor">
            Tipo
        </label>

        <div class="col-sm-8">
            <select id="mySelect" name="tipo" class="form-control" onchange="deshabilitar()">
                @foreach($tipos as $tipo)
                    @component('layouts.option_general')
                        @slot('var', $tipo)
                    @endcomponent
                @endforeach
            </select>
        </div>

    </div>

    @component("layouts.text_input")
        @slot("nombre_input", "sistema_operativo")
        @slot("tooltip_input", "Sistema operativo principal que tiene el equipo")
        @slot("label_input", "Sistema operativo")
        @slot("placeholder_input", "Windows 10")
        @slot('extra')
            id = "sistema_operativo" maxlength=80
        @endslot
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "marca")
        @slot("tooltip_input", "Marca del manufacturador. Ejemplo LANIX")
        @slot("label_input", "Marca")
        @slot("placeholder_input", "LANIX")
        @slot("extra", "maxlength=80")
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "cpu")
        @slot("tooltip_input", "Que especificaciones tiene la CPU del equipo")
        @slot("label_input", "CPU")
        @slot("placeholder_input", "Qualcorexeon X5460 2X 6MB Cache")
        @slot('extra')
            id = "cpu" maxlenght=80
        @endslot
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "ram")
        @slot("tooltip_input", "Que especificaciones tiene la memoria RAM del equipo")
        @slot("label_input", "RAM")
        @slot("placeholder_input", "8GB 667 MHZ (4X2 GB)")
        @slot('extra')
            id = "ram" maxlenght=80
        @endslot
    @endcomponent

    @component("layouts.text_input")
        @slot("nombre_input", "almacenamiento")
        @slot("tooltip_input", "Que especificaciones tiene la memoria de almacenamiento del equipo")
        @slot("label_input", "Memoria almacenamiento")
        @slot("placeholder_input", "HDD 300 GB")
        @slot('extra')
            id = "almacenamiento" maxlenght=80
        @endslot
    @endcomponent

    @component("layouts.textarea_input")
        @slot("nombre_input", "otras_caracteristicas")
        @slot("tooltip_input", "Alguna otra característica importante a tomar en cuenta")
        @slot("label_input", "Otras características")
        @slot("placeholder_input", "Tarjeta gráfica o algún otra característica que se debería mencionar")
    @endcomponent

@endsection

