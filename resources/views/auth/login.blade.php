

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
                    <span class="cate">hello</span>
                    <h2 class="title">welcome back</h2>
                </div>
                <x-slot name="logo">
                    <x-jet-authentication-card-logo />
                </x-slot>

                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="account-form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="form-group">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="form-group checkgroup">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-jet-button class="ml-4">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </form>

                <div class="option">
                    Don't have an account? <a href="{{route('register')}}">sign up now</a>
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

{{-- <form class="account-form">
    <div class="form-group">
        <label for="email2">Email<span>*</span></label>
        <input type="text" placeholder="Enter Your Email" id="email2" required>
    </div>
    <div class="form-group">
        <label for="pass3">Password<span>*</span></label>
        <input type="password" placeholder="Password" id="pass3" required>
    </div>
    <div class="form-group checkgroup">
        <input type="checkbox" id="bal2" required checked>
        <label for="bal2">remember password</label>
        <a href="#0" class="forget-pass">Forget Password</a>
    </div>
    <div class="form-group text-center">
        <input type="submit" value="log in">
    </div>
</form> --}}

