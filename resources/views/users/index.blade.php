@extends('layouts.backend')

@section('content')

<header>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <a class="go_back" href=""><i data-feather="arrow-left"></i></a>
            <h1 class="title">User List</h1>
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
                <div class="doctor-list">
                    <div class="scrolling-pagination">
                        @foreach($users as $user)
                        <div class="card">
                            <a class="btn-small" href="{{ route('users.view',$user->id)}}">
                                <div class="card-body">
                                    <div class="doc-list-item">
                                        <div class="doc-img">
                                            @if(!empty($user->image))
                                                <img class="profile-picture sm no-border" src="{{url('../public/images/users')}}/{{$user->id}}/{{$user->image}}" alt="{{$user->first_name}} {{$user->last_name}}" />
                                                @else
                                                <img class="profile-picture sm no-border" src="{{url('/public/images/users/avatar.jpg')}}" alt="{{$user->first_name}} {{$user->last_name}}" />
                                                @endif
                                        </div>
                                        <div class="doc-info-text">
                                            <p><h6>{{ $user->first_name }}</h6></p>
                                            <p><h6>{{ $user->phone }}</h6></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
<script type="text/javascript">
    $('ul.pagination').hide();
    $(function() {
        $('.scrolling-pagination').jscroll({
            autoTrigger: true,
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.scrolling-pagination',
            callback: function() {
                $('ul.pagination').remove();
            }
        });
    });
</script>
@endsection
