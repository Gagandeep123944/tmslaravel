@push('css')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endpush
@extends('layouts.main');

@section('title')
Register
@endsection


@section('content')
    <section class="user">
    <div class="user_options-container">
        <div class="user_options-text">
        <div class="user_options-unregistered">
            <h2 class="user_unregistered-title">Don't have an account?</h2>
            <p class="user_unregistered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
            <button class="user_unregistered-signup" id="signup-button">Sign up</button>
        </div>

        <div class="user_options-registered">
            <h2 class="user_registered-title">Have an account?</h2>
            <p class="user_registered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
            <button class="user_registered-login" id="login-button">Login</button>
        </div>
        </div>
        
        <div class="user_options-forms" id="user_options-forms">
        <div class="user_forms-login">
            <h2 class="forms_title">Login</h2>
            <form class="forms_form" data-url="{{ route('loginform') }}" id="login">
            @csrf
            <fieldset class="forms_fieldset">
                <div class="forms_field">
                <input type="email" name="email" placeholder="Email" class="forms_field-input" autofocus />
                <span id="email_error" class="text-danger"></span>
                </div>
                <div class="forms_field">
                <input type="password" name="password" placeholder="Password" class="forms_field-input"  />
                <span id="password_error" class="text-danger"></span>
                </div>
            </fieldset>

            <div class="invalid_credentials">
                <span id="invalid_credentials" class="text-danger"></span>
            </div>
            <div class="forms_buttons">
                <button type="button" class="forms_buttons-forgot">Forgot password?</button>
                <input type="submit" value="Log In" class="forms_buttons-action">
            </div>
            </form>
        </div>
        <div class="user_forms-signup">
            <h2 class="forms_title">Sign Up</h2>
            <form class="forms_form" data-url="{{ route('signup') }}" id="signup">
               @csrf
            <fieldset class="forms_fieldset">
                <div class="forms_field">
                <input type="text" name="fullname" placeholder="Full Name" class="forms_field-input"  />
                <span id="name_error" class="text-danger"></span>
                </div>
                <div class="forms_field">
                <input type="email" name="email" placeholder="Email" class="forms_field-input"  />
                <span id="email_error" class="text-danger"></span>
                </div>
                <div class="forms_field">
                <input type="password" name="password" placeholder="Password" class="forms_field-input"  />
                <span id="password_error" class="text-danger"></span>
                </div>
            </fieldset>
            <div class="forms_buttons" >
            <span id="loginGoogle"><i class="fa-brands fa-google"></i></span>
                <input type="submit" value="Sign up" class="forms_buttons-action">
            </div>
            </form>
        </div>
        </div>
    </div>
    </section>

    <script src="{{ asset('js/scripts.js') }}"></script>
@endsection




