<div class="form-group">

    <label for="{{$nombre_input}}" class="col-sm-8 control-label" data-toggle="tooltip" title="{{$tooltip_input}}">
        {{$label_input}}
    </label>

    <div class="col-sm-4">
        @if($variable)
            <input type="hidden" name="{{$nombre_input}}" value="0" checked @yield('extra_checkbox')>
            </input>
            <input type="checkbox" name="{{$nombre_input}}" value="1" checked @yield('extra_checkbox')>
            </input>
        @else
            <input type="hidden" name="{{$nombre_input}}" value="0" @yield('extra_checkbox')>
            </input>
            <input type="checkbox" name="{{$nombre_input}}" value="1" @yield('extra_checkbox')>
            </input>
        @endif
    </div>

</div>

