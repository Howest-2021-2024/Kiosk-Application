<?php

namespace App\Modules\Services;

use App\Models\Registration;
use Illuminate\Support\Facades\Validator;

class RegistrationService extends Service
{
    protected $_rules = [
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:registrations',
    ];

    public function __construct(Registration $model)
    {
        parent::__construct($model);
    }

    public function register($data)
    {
        // Valideer de input velden
        $validator = Validator::make($data, $this->_rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Maak een nieuwe registratie aan
        $registration = new Registration();
        $registration->first_name = $data['firstname'];
        $registration->last_name = $data['lastname'];
        $registration->email = $data['email'];
        $registration->save();

        // Redirect naar de bedankpagina
        return view('registration.thankyou');
    }
}
