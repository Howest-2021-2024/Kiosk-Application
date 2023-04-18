<?php

namespace App\Modules\Services;

use App\Models\Patient;

class RegistrationService extends Service
{
    protected $_rules = [];

    public function __construct(Patient $model)
    {
        parent::__construct($model);
    }

    
}