@extends('layouts.app')

@section('content')

<section id="sign-up-form" style="margin: 5% 0 15%;">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-4 mt-5 mb-3">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2 class="text-center"><b>Register</b></h2>
                    <h6 class="text-center">Create a New Account</h6><br>
                    @if(Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert"">
                        {{Session::get('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if(Session::get('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{Session::get('error')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="text" id="full_name" class="form-control" name="full_name" value="{{ old('full_name') }}" autofocus placeholder="Full Name">
                        <span class="text-danger">
                            @error('full_name')
                                    {{ $message }}    
                            @enderror
                        </span> 
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror        
                        </span>    
                    </div>  
                    <div class="form-group">
                        <input name="phone" type="text" id="phone" class="form-control" value="{{ old('phone') }}" placeholder="Mobile no.">
                        <span class="text-danger">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" id="password" class="form-control" name="password" placeholder="Password">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror    
                        </span>    
                    </div>  
                    <div class="form-group">
                        <input type="password" id="confirm-password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                        <span class="text-danger">
                            @error('confirm-password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">
                            {{ __('Register') }}
                        </button>       
                    </div>
                    <div class="forgot-password text-center" >
                        <p>Do you have an account? <span><a href="{{ route('login') }}" style="text-decoration:none;">Sign In</a></span></p><hr>
                        <p>Don't remember Password? <span><a href="#" style="text-decoration: none">Forgot Password</a></span></p>
                    </div>
                </form>
            </div>
        </div>
    </div>  
</section>

@endsection
