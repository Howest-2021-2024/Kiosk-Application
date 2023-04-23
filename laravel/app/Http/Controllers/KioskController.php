<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Modules\Services\RegistrationService;
use Illuminate\Http\Request;

class KioskController extends Controller
{

    private $registerService;
    
    public function __construct(RegistrationService $registerService)
    {
        $this->_registerService = $registerService;
    }

    public function index()
    {
        $registrations = Registration::all();
        return view('registrations.index', ['registrations' => $registrations]);
    }

    public function register(Request $request)
    {
        $data = $request->all();
        $registration = $this->_registerService->register($data);

        if ($this->_registerService->hasErrors())
        {
            return ["errors" => $this->_registerService->getErrors()];
        }

        return $registration;
    }
}
