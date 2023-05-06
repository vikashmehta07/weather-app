<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        // Retrieve the city name from the request
        $apiKey = '9f650d15b712241a3b9abbc4b053bda3';
        $city = $request->input('city');

        // Make a request to the external weather API using the city name
        $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric";
        $response = file_get_contents($url);

        // Return the weather data as a JSON response
        return response()->json(json_decode($response));
    }
}

