@extends ('index')
    
    @section ('content')

    <div id="app">

      <!-- <abrirmodal></abrirmodal>
      <tablecomponent></tablecomponent> -->
      
    <ul>
        @foreach($plants as $planta)
            <li>
                 {{ $planta->nombre_vulgar }},
                 {{ $planta->nombre_cientifico}}, 
                 {{ $planta->cantidad}}
            </li>
        @endforeach
    </ul>

    </div>

    
    @endsection