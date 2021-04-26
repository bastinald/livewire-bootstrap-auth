@section('title', __('Login'))

<div class="row justify-content-center">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                @yield('title')
            </div>
            <form class="card-body" wire:submit.prevent="login">
                <x-forms::input
                    :label="__('Email')"
                    type="email"
                    error="email"
                    wire:model.defer="email"/>

                <x-forms::input
                    :label="__('Password')"
                    type="password"
                    error="password"
                    wire:model.defer="password"/>

                <div class="row justify-content-between mb-3">
                    <div class="col-auto">
                        <x-forms::checkbox
                            :label="__('Remember Me')"
                            wire:model.defer="remember"/>
                    </div>

                    @if(Route::has('password.forgot'))
                        <div class="col-auto">
                            <a href="{{ route('password.forgot') }}">
                                {{ __('Forgot Password?') }}
                            </a>
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    {{ __('Login') }}
                </button>
            </form>
        </div>
    </div>
</div>
