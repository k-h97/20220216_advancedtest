<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Http\Requests\TestFormRequest;

class TestController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }
    public function confirm()
    {
        return view('contacts.confirm');
    }
    public function thanks()
    {
        return view('contacts.thanks');
    }
}