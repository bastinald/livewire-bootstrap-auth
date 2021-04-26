<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class PasswordForgot extends Component
{
    public $email, $status;

    public function route()
    {
        return Route::get('/password-forgot', static::class)
            ->name('password.forgot')
            ->middleware('guest');
    }

    public function render()
    {
        return view('livewire.auth.password-forgot');
    }

    public function rules()
    {
        return [
            'email' => ['required', 'email'],
        ];
    }

    public function sendResetLink()
    {
        $this->validate();

        $status = Password::sendResetLink($this->only(['email']));

        if ($status == Password::RESET_LINK_SENT) {
            $this->status = __($status);
        } else {
            $this->addError('email', __($status));
        }
    }
}
