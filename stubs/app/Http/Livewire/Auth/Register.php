<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Lukeraymonddowning\Honey\Traits\WithHoney;

class Register extends Component
{
    use WithHoney;

    public $name, $email, $password, $password_confirmation;

    public function route()
    {
        return Route::get('/register', static::class)
            ->name('register')
            ->middleware('guest');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed', 'min:8'],
        ];
    }

    public function register()
    {
        $this->validate();

        if ($this->honeyPasses()) {
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            event(new Registered($user));

            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        }
    }
}
