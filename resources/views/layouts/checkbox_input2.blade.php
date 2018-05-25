<div class="form-group">

    <label for="{{$nombre_input}}" class="col-sm-4 control-label" data-toggle="tooltip" title="{{$tooltip_input}}">
        {{$label_input}}
    </label>

    <div class="col-sm-8">
        @if($variable)
            <input type="checkbox" name="{{$nombre_input}}" value="1" checked @yield('extra_checkbox')>
                {{$descripcion or $label_input}}
            </input>
        @else
            <input type="checkbox" name="{{$nombre_input}}" value="0" @yield('extra_checkbox')>
                {{$descripcion or $label_input}}
            </input>
        @endif
    </div>

</div>
