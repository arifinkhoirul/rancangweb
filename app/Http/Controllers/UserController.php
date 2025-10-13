<?php

namespace App\Http\Controllers;

use App\Models\MainCard;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homepage() {
    $dataMainCardYear = MainCard::where('title', 'Years Of Experience')->first();
    $dataMainCardClient = MainCard::where('title', 'Clients')->first();
    $dataMainCardPositive = MainCard::where('title', 'Positive Feedback')->first();

    // dd($dataMainCardYear->title);

        return view('user.homepage', compact('dataMainCardClient', 'dataMainCardYear', 'dataMainCardPositive'));
    }
}
