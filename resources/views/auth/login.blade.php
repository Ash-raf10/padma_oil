@extends('layouts.frontend')

@section('content')

    <section>
        <div class="container-fluid">
            <div class="card-container col-md-4 offset-md-4">
                @if(session()->has('message'))
                    <div class="alert alert-{{session('type')}} alert-dismissible text-center mar-bot-30"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session('message') }}</div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible text-center mar-bot-30"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card"> <form action="{{route('login')}}" method="post" class="form-signin"> @csrf <h1 class="card-title text-center">Log In</h1> <label>Mobile Number <span class="required">*</span></label> <input type="text" name="phone" class="form-control" value="{{old('phone')}}" placeholder="01X XXXXXXXX" required> <label>{{__('Password')}}<span class="required">*</span></label> <input type="password" name="password" class="form-control" placeholder="{{__('Password')}}" required> <input type="hidden" name="deviceId" id="deviceId"> <div class="text-center mar-top-15"> <a class="underline" href="{{url('forgot-password')}}">{{__('Forgot Password')}}?</a> </div><button class="btn signin btn-primary btn-block">{{__('Log In')}}</button> </form> <button class="btn btn-success btn-block" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">{{__('Sign Up')}}</button> <div class="collapse" id="collapseExample"> <p class="mar-top-15 mar-bot-15 text-center">Sign up as...</p><div class="row"> <div class="col-6"> <a href="{{url('patient-signup')}}" class="btn btn-block btn-sm btn-primary-light" labelfor="patient"> <span>Patient</span> </a> </div><div class="col-6"> <a href="{{url('doctor-signup')}}" class="btn btn-block btn-sm btn-primary-light"> <span>Doctor</span> </a> </div></div></div></div>
            </div>
        </div>
    </section>

@endsection
