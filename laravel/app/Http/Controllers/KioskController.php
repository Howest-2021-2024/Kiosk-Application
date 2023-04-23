<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class KioskController extends Controller
{
    public function index()
    {
        $registrations = Registration::all();
        return view('registrations.index', ['registrations' => $registrations]);
    }
}
