<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Camp;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    public function view() {
        return view('welcome');
    }
}