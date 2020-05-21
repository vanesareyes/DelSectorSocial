<?php

namespace App\Http\Controllers;

use App\Language;
use App\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $languages = Language::all();
      $countries = Country::all();
        return view('home', compact('languages', 'countries'));
    }
}
