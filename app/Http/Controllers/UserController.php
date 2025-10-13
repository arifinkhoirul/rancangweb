<?php

namespace App\Http\Controllers;

use App\Models\MainCard;
use App\Models\Price;
use App\Models\Question;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homepage()
    {
        $dataMainCardYear = MainCard::where('title', 'Years Of Experience')->first();
        $dataMainCardClient = MainCard::where('title', 'Clients')->first();
        $dataMainCardPositive = MainCard::where('title', 'Positive Feedback')->first();

        $testimonials = Testimonial::all();

        $dataPriceStarter = Price::where('price', '1000000')->first();
        $dataPriceProfesional = Price::where('price', '2000000')->first();
        $dataPriceEnterprice = Price::where('price', '3000000')->first();
        // $dataPriceStarter = Price::first();
        // dd($dataPriceStarter->features->feature);

        $questions = Question::all();

        return view('user.homepage', compact('dataMainCardClient', 'dataMainCardYear', 'dataMainCardPositive', 'testimonials',     'dataPriceStarter', 'dataPriceProfesional', 'dataPriceEnterprice', 'questions'));
    }
}
