<div class="form-group">

    <label for="{{$nombre_input}}" class="col-sm-4 control-label" data-toggle="tooltip" title="{{$tooltip_input}}">
        {{$label_input}}
    </label>

    <div class="col-sm-8">
        <select name="{{$nombre_input}}" class="form-control" @yield('extra')>
            {{$opciones}}
        </select>
    </div>

</div>

