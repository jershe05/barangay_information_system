@extends('frontend.layouts.app')

@section('title', __('Login'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>BIS Sign In</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('frontend.auth.login') }}" method="POST">
                                @csrf
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="email"  name="email" class="form-control  form-control-lg" placeholder="email address">

                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control  form-control-lg" placeholder="password" maxlength="100" required autocomplete="current-password">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input name="remember" id="remember" class="form-check-input " type="checkbox" {{ old('remember') ? 'checked' : '' }} />

                                            <label class="form-check-label" for="remember">
                                                @lang('Remember Me')
                                            </label>
                                        </div><!--form-check-->
                                    </div>
                                </div>
                                @if(config('boilerplate.access.captcha.login'))
                                <div class="row">
                                    <div class="col">
                                        @captcha
                                        <input type="hidden" name="captcha_status" value="true" />
                                    </div><!--col-->
                                </div><!--row-->
                                @endif
                                <div class="form-group">
                                    <input type="submit" value="Login" class="btn float-right login_btn btn-dark">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center links text-dark">
                                Don't have an account?<a href="{{ route('frontend.auth.register') }}" class="text-dark">Sign Up</a>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('frontend.auth.password.request') }}" class="text-dark">Forgot your password?</a>
                            </div>
                        </div>
                    </div>

            </div><!--col-md-8-->
        </div><!--row-->
    </div><!--container-->
@endsection
