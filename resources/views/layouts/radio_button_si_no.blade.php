@if($respuesta == 'Si')
  <input type="radio" name="{{$respuesta}}" value="Si" checked> Sí <br>
  <input type="radio" name="{{$respuesta}}" value="No"> No
@elseif($respuesta == 'No')
  <input type="radio" name="{{$respuesta}}" value="Si"> Sí <br>
  <input type="radio" name="{{$respuesta}}" value="No" checked> No
@else
  <input type="radio" name="{{$respuesta}}" value="Si"> Sí <br>
  <input type="radio" name="{{$respuesta}}" value="No"> No
@endif