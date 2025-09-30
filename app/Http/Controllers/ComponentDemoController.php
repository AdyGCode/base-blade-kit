<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ComponentDemoController extends Controller
{

    public function index(Request $request): View
    {
        return  view('demo.ckeditor', []);
    }
}
