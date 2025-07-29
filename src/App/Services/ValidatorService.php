<?php

declare(strict_types=1);

namespace App\Services;

use Framework\Validator;
use Framework\Rules\{RequiredRule, EmailRule, MinRule, InRule, MatchRule};

class ValidatorService
{

    private Validator $validator;

    public function __construct()
    {
        $this->validator = new Validator();
        $this->validator->add('required', new RequiredRule());
        $this->validator->add('email', new EmailRule());
        $this->validator->add('min', new MinRule());
        $this->validator->add('in', new InRule());
        $this->validator->add('match', new MatchRule());
    }

    public function validateRegister(array $formData){
        $this->validator->validate($formData, [
            'signup-username' => ['required'],
            // 'signup-age' => ['min':18],
            'signup-gender ' => ['in:male,female'],
            'signup-email' => ['required', 'email'],
            'signup-password' => ['required', 'min:6'],
            'signup-password-confirm' => ['required', 'match:signup-password'],
            'signup-terms' => ['required'],
        ]);
    }

}
