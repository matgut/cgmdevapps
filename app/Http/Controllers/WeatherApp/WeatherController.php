<?php

namespace App\Http\Controllers\WeatherApp;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\ViewModels\WeatherApp\WeatherViewModel;

class WeatherController extends Controller
{
    public function index($cityName){

        $weather = Http::get(config('services.openWeather.baseUrl').'q='.$cityName.'&appid='.config('services.openWeather.token'))->json();
        $viewModel = new WeatherViewModel($weather);
        return view('weatherapp.index',$viewModel);
    }


}
