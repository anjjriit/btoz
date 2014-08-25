<?php

namespace Buzz\Skrd;

use Crhayes\Validation\ContextualValidator;

class UserValidator extends ContextualValidator
{
    protected $rules = [
        'default' => [
            'nomor_urut'    => 'required'
        ],
    ];

}