<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persons;

class PersonsController extends Controller
{
    public function index() {
        $persons = Persons::all();

        return view('persons/index', compact('persons'));
    }
}
