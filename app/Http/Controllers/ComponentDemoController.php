<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ComponentDemoController extends Controller
{

    public function index(Request $request): View
    {
        return  view('demo.index', []);
    }

    public function ckeditor(Request $request): View
    {
        return  view('demo.ckeditor', []);
    }


    public function textarea(Request $request): View
    {
        return  view('demo.textarea', []);
    }


    public function linkButtons(Request $request): View
    {
        return  view('demo.link-buttons', []);
    }



    public function badges(Request $request): View
    {
        return  view('demo.badges', []);
    }




}
