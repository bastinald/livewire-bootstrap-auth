@section('title', __('Forgot Password'))

<div class="row justify-content-center">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                @yield('title')
            </div>

            @if($status)
                <div class="card-body">
                    {{ $status }}
                </div>
            @else
                <form class="card-body" wire:submit.prevent="sendResetLink">
                    <x-forms::input
                        :label="__('Email')"
                        type="email"
                        error="email"
                        wire:model.defer="email"/>

                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Send Reset Link') }}
                    </button>
                </form>
            @endif
        </div>
    </div>
</div>
