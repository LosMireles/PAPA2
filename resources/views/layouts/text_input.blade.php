	<div class="form-group">

		<label for="{{$nombre_input}}" class="col-sm-4 control-label" data-toggle="tooltip" title="{{$tooltip_input}}">
		    {{$label_input}}
		</label>

		<div class="col-sm-8">
      		<input type="text-center" class="form-control" name="{{$nombre_input}}" placeholder="{{$placeholder_input or ""}}" value="{{$valor_default or ""}}" @yield("extra")>
      	</div>

	</div>

