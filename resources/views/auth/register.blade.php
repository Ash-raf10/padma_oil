@extends('layouts.frontend')

@section('content')
    <section>
        <div class="container">
            <div class="col-md-6 offset-md-3">

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible text-center mar-bot-30"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session()->has('message'))
                    <div class="alert alert-{{session('type')}} alert-dismissible text-center mar-bot-30"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session('message') }}</div>
                @endif

                <div class="card">
                    <form action="{{route('register')}}" method="post" class="form-signin">
                        @csrf
                        <h1 class="card-title text-center">{{ __('Join') }}</h1>

                        <div class="row">
                            <div class="col-6">
                                <label>{{ __('First Name') }} <span class="required">*</span></label>
                                <input type="text" name="first_name" class="form-control" placeholder="{{ __('First Name') }}" value="{{ old('first_name') }}" required>
                            </div>
                            <div class="col-6">
                                <label>{{ __('Last Name') }} <span class="required">*</span></label>
                                <input type="text" name="last_name" class="form-control" placeholder="{{ __('Last Name') }}" value="{{ old('last_name') }}" required>
                            </div>
                        </div>

                        <label>{{ __('Phone') }} <span class="required">*</span></label>
                        <input type="text" name="phone" class="form-control" placeholder="{{ __('Mobile Number') }}" value="{{ old('phone') }}" required>
                        <label>{{ __('Password') }} <span class="required">*</span></label>
                        <input type="password" name="password" class="form-control" placeholder="{{ __('Password') }}" required>
                        <label>{{ __('Confirm Password') }} <span class="required">*</span></label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}" required>

                        <button class="btn btn-primary btn-block mar-top-30" type="submit">{{ __('Register') }}</button>
                        <br>
                        <div class="text-center">
                            {{ __('Already registered') }}? {{ __('Please') }} <a href="{{url('login')}}">{{ __('Login') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
