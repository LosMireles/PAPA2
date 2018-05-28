@foreach($conjunto_variables as $variable)
    @if($var == $variable)
        @component('layouts.option_general')
            @slot('var', $variable)
            @slot('extra', 'selected')
        @endcomponent
    @else
        @component('layouts.option_general')
            @slot('var', $variable)
        @endcomponent
    @endif
@endforeach
