<div class="form-group">

    <label for="{{$nombre_input}}" class="col-sm-4 control-label" data-toggle="tooltip" title="{{$tooltip_input}}">
        {{$label_input}}
    </label>

    <div class="col-sm-8">
        <input 
			type="{{$nombre or 'text'}}" 
			oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" 
			pattern="{{$patron}}" 
			title="{{$titulo_error}}"
			class="form-control"
			placeholder="{{$placeholder_input}}"
			name="{{$nombre_input}}"
			value="{{$valor or ""}}">
    </div>

</div>

