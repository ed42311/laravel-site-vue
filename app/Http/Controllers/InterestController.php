<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterestController extends Controller
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
   * Show interest.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('interest');
  }
}
