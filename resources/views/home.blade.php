@extends('layouts.backend')

@section('content')

<header>
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1 class="title">Home</h1>
            <div>
                @include('layouts.notification')
                @include('layouts.header-menu')
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container-fluid">
        <div class="home-slider owl-carousel owl-theme">
            {{-- @foreach($sliders as $slider)
            <div class="item" style="background: url('{{ asset('../public/images/sliders/') }}/{{$slider->image}}') center; background-size: cover;"></div>
            @endforeach --}}
        </div>
        <div class="row">
            <div class="col-12">
                <a class="btn-mobile horizontal" href="#" data-toggle="modal" data-target="#emergencyModal">
                    <i class="fa fa-fire"></i>
                    <span>{{ __('Emergency') }}</span>
                </a>
            </div>
            <div class="col-12">
              <a class="btn-mobile" href="{{ route('users') }}">
                    <i class="fa fa-users"></i>
                    <span>{{ __('User') }}</span>
                </a>
            </div>
            <div class="col-6 col-sm-6">
                <a class="btn-mobile" href="{{ url('/') }}">
                  <i class="fa fa-search"></i>
                    <span>{{ __('Search') }}</span>
                </a>
            </div>
            <div class="col-6 col-sm-6">
                <a class="btn-mobile" href="{{ url('/') }}">
                  <i class="fa fa-mobile-phone"></i>
                    <span>{{ __('Search By') }}</span>
                </a>
            </div>
            <div class="col-6 col-sm-6">
                <a class="btn-mobile" href="{{ url('/') }}">
                  <i class="fa fa-university"></i>
                    <span>{{ __('Department') }}</span>
                </a>
            </div>
            <div class="col-6 col-sm-6">
                <a class="btn-mobile" href="{{ url('/') }}">
                  <i class="fa fa-user-circle-o"></i>
                    <span>{{ __('Designation') }}</span>
                </a>
            </div>
        </div>
        {{-- @if($blogs->count() > 0)
        <p class="dark-text mar-top-15">Related Articles <a class="float-right" href="{{ url('blog/') }}">Show All</a></p>
        <div class="blog-slider owl-carousel owl-theme">
            @foreach($blogs as $blog)
            <a href="{{ url('blog/details/') }}/{{$blog->id}}">
                <div class="item blog-slide" style="background: url('{{ asset('../public/images/blog/') }}/{{ $blog->image }}') center; background-size: cover;">
                    <div class="post-info">
                        <h6>{{ $blog->title }}</h6>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @endif --}}
    </div>
</section>
@include('layouts.footer')
<!-- Modal -->
<div class="modal fade" id="emergencyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <img src="{{asset('../public/images/emergency/emergency.jpg')}}">
                <br><br>
                {{-- @php
                    $district = App\Patients::select('district')->where('user_id', auth()->user()->id)->first();
                @endphp
                @if(empty($district))
                <a href="{{ url('hospital-list') }}?district=&facility=emergency" class="btn btn-primary btn-sm">Search Emergency</a>
                @else
                <a href="{{ url('emergency-hospitals') }}?district={{$district->district}}" class="btn btn-primary btn-sm">Search Emergency</a>
                @endif --}}
            </div>
        </div>
    </div>
</div>
@endsection
