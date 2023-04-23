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
        $registration = RegistrationService->register($data);

        if (RegistrationService->hasErrors())
        {
            return ["errors" => RegistrationService->getErrors()];
        }

        return $registration;
    }
}
