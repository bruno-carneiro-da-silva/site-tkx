<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LoginToggle extends Component
{
    public $buttonText;

    public function __construct($buttonText = 'Login')
    {
        $this->buttonText = $buttonText;
    }

    public function render()
    {
        return view('components.login-toggle');
    }
}

