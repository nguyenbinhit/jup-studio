<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Page;
use App\Models\Plan;
use Illuminate\Http\Request;

class ClientHomeController extends Controller
{
    public function index() {
        return view('welcome', [
            'employees' => Employee::all(),
            'pages' => Page::with('image')->get(),
            'plans'=> Plan::all(),
        ]);
    }

}
