<?php

namespace App\ViewModels\WeatherApp;

use Spatie\ViewModels\ViewModel;

class WeatherViewModel extends ViewModel
{
    
    public $weather;


    public function __construct($weather)
    {  
        $this->weather = $weather;
    }


    public function weather(){

        // dd($this->weather);
        // return collect($this->weather)->map(function ($item, $key) {
        //     $new = [];
        //     $new['weather']     = $item->weather;
        //     $new['main']        = $item->main;
        //     return $new;
        //   });

        return collect($this->weather)->merge([
            'temp_actual' => $this->convertTemperatureToCelsius($this->weather['main']['temp']),
            'temp_max' => $this->convertTemperatureToCelsius($this->weather['main']['temp_max']),
            'temp_min' => $this->convertTemperatureToCelsius($this->weather['main']['temp_min']),
            'clima' => $this->weather['weather'][0]['main'],
            'icono_clima' => 'http://openweathermap.org/img/w/'.$this->weather['weather'][0]['icon'].'.png',
            'ciudad' => $this->weather['name'],
            'pais' => $this->weather['sys']['country'],
        ])->only([
            'temp_actual', 'temp_max', 'temp_min', 'clima', 'ciudad', 'icono_clima', 'pais'
        ]);
    }

    private function convertTemperatureToCelsius($temp){
        return round($temp - 273);
    }
}
