<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts')->object();
        return view('api.posts' , compact('response'));
    }

    public function users()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users')->object();
        return view('api.users' , compact('response'));
    }
}
