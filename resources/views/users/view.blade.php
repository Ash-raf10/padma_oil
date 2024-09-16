@extends('layouts.backend')

@section('content')

    <header>
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <a class="go_back" href=""><i data-feather="arrow-left"></i></a>
                <h1 class="title">Details</h1>
                <div>
                    @include('layouts.notification')
                    @include('layouts.header-menu')
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">

                    <div class="card">
                        <div class="card-body">

                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                @if(!empty($user->image))
                                    <img class="img-fluid responsive"
                                         src="{{url('../public/images/users')}}/{{$user->id}}/{{$user->image}}"
                                         alt="{{$user->first_name}} {{$user->last_name}}"/>
                                @else
                                    <img class="img-fluid responsive" src="{{url('/public/images/users/avatar.jpg')}}"
                                         alt="{{$user->first_name}} {{$user->last_name}}"/>
                                @endif
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="doc-info-text">
                                    <p><h6>{{ $user->first_name }}</h6></p>
                                    <p><h6>{{ $user->phone }}</h6></p>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endsection
