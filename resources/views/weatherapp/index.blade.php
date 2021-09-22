@extends('layouts.main')

@section('content')
<div class="p-28 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-5">
    <!--Card 1 buscar clima-->
    <div class="rounded overflow-hidden shadow-lg card-custom">
      <!--<img class="w-full" src="/mountain.jpg" alt="Mountain">-->
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Ingrese Ciudad</div>
        <input type="text" class="input-custom rounded" id="txtCiudad"/>
      </div>
      <div class="px-6 pt-4 pb-2">
        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span> --}}
        <button class="custom-button nline-block font-semibold rounded-full px-3 py-1 mr-2 mb-2" id='btnBuscar'>
            Buscar
        </button>
      </div>
    </div>
    <!--Card 2 resultado clima-->
    <div class="rounded overflow-hidden shadow-lg card-custom">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2"><img src="{{$weather['icono_clima']}}" alt=""></div>
        <div class="font-bold text-xl mb-2">{{ $weather['clima']}}</div>
        <div class="font-bold text-xl mb-2">Temp Actual: {{ $weather['temp_actual']}} &deg;C</div>
        <div class="font-bold text-xl mb-2">Temp Min: {{ $weather['temp_min']}}&deg;C || Temp Max: {{ $weather['temp_max']}}&deg;C</div>
        <div class="font-bold text-xl mb-2">{{ $weather['ciudad']}} , {{ $weather['pais']}}</div>
      </div>
    </div>
</div>
<script>
  let btnBuscar = document.querySelector('#btnBuscar');
  let ciudad = document.querySelector('#txtCiudad');


  btnBuscar.addEventListener('click', (e) => {
    e.preventDefault();
    console.log(ciudad.value);
    if(ciudad.value !== ""){
      window.location= "/weather-app/"+ciudad.value;
    }
    
    console.log("debe introducir ciudad");
  });
</script>

@endsection
