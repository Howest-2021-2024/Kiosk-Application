<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Modules\Services\RegistrationService;
use Illuminate\Http\Request;

class KioskController extends Controller
{
    public function index()
    {
        $registrations = Registration::all();
        return view('registrations.index', ['registrations' => $registrations]);
    }

    public function register(Request $request)
    {
        $data = $request->all();
        $registration = RegistrationService::class->register($data);

        if (RegistrationService::class->hasErrors())
        {
            return ["errors" => RegistrationService::class->getErrors()];
        }

        return $registration;
    }
}
