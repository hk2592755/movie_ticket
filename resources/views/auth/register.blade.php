

@extends('layout')

@section('main')




 <!-- ==========Preloader========== -->
 <div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ==========Preloader========== -->

<!-- ==========Sign-In-Section========== -->
<section class="account-section bg_img" data-background="assets/images/account/account-bg.jpg">
    <div class="container">
        <div class="padding-top padding-bottom">
            <div class="account-area">
                <div class="section-header-3">
                    <span class="cate">welcome</span>
                    <h2 class="title">to Boleto </h2>
                </div>
                <x-slot name="logo">

                </x-slot>

                <x-jet-validation-errors class="mb-4" />

                <form class="account-form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="form-group">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>

                    <div class="form-group">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="form-group">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="form-group">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif

                     {{-- <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="">
                            {{ __('Already registered?') }}
                        </a>
                    </div> --}}
                    <div class="form-group text-center">
                        <x-jet-button >
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </form>



                <div class="option">
                    Already have an account? <a href="{{ route('login') }}">Login</a>
                </div>
                <div class="or"><span>Or</span></div>
                <ul class="social-icons">
                    <li>
                        <a href="#0">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0" class="active">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-google"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- ==========Sign-In-Section========== -->
{{-- <form  class="account-form">
    <div class="form-group">
        <label for="email1">Email<span>*</span></label>
        <input type="text" placeholder="Enter Your Email" id="email1" required>
    </div>
    <div class="form-group">
        <label for="pass1">Password<span>*</span></label>
        <input type="password" placeholder="Password" id="pass1" required>
    </div>
    <div class="form-group">
        <label for="pass2">Confirm Password<span>*</span></label>
        <input type="password" placeholder="Password" id="pass2" required>
    </div>
    <div class="form-group checkgroup">
        <input type="checkbox" id="bal" required checked>
        <label for="bal">I agree to the <a href="#0">Terms, Privacy Policy</a> and <a href="#0">Fees</a></label>
    </div>
    <div class="form-group text-center">
        <input type="submit" value="Sign Up">
    </div>
</form>
 --}}
