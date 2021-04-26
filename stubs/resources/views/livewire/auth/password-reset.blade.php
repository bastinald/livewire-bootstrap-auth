@section('title', __('Reset Password'))

<div class="row justify-content-center">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                @yield('title')
            </div>
            <form class="card-body" wire:submit.prevent="resetPassword">
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

                <x-forms::input
                    :label="__('Confirm Password')"
                    type="password"
                    wire:model.defer="password_confirmation"/>

                <button type="submit" class="btn btn-primary w-100">
                    {{ __('Reset Password') }}
                </button>
            </form>
        </div>
    </div>
</div>
