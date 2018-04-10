<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepresentDashController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(Request $request)
  {
    $request->user()->authorizeRoles(['manager']);
    $data['header'] = 'Dashboard';
    return view('Represent.dashboard.index',$data);
  }

}
