<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;

class UiComponentController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function CalenderEvent()
    {
        return View::make('calenderevent');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function Nestable()
    {
        return View::make('nestable');
    }
}
