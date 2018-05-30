<div class="form-group">

    <label for="{{$nombre_input}}" class="control-label" data-toggle="tooltip" title="{{$tooltip_input or ""}}">
        {{$label_input}}
    </label>

    <div>
        <textarea class="form-control" name="{{$nombre_input}}" placeholder="{{$placeholder_input or ""}} "{{$extra or ""}})>{{$valor_default or ""}}</textarea>
    </div>

</div>

