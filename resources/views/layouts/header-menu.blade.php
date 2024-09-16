@if(!auth()->guest())
    <script>
        window.userId = <?php echo auth()->user()->id; ?>
    </script>
@endif
<div id="app"  class="btn-group">


    <a class="d-inline nav-link dropdown-toggle pl-0 p-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        @if(!empty(optional(auth()->user())->image))
        <img class="profile-picture xs no-border" src="{{url('/public/images/users')}}/{{optional(auth()->user())->id}}/{{optional(auth()->user())->image}}" alt="{{optional(auth()->user())->first_name}} {{optional(auth()->user())->last_name}}"/>
        @else
        <img class="profile-picture xs no-border" src="{{url('/public/images/users/avatar.jpg')}}" alt="{{optional(auth()->user())->first_name}} {{optional(auth()->user())->last_name}}"/>
        @endif
    </a>



    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <div>
            <a class="dropdown-item" href="{{ url('') }}">
                {{ __('Profile') }}
            </a>
        </div>
        <div>
            <a class="signout dropdown-item" href="{{ route('logout') }}">
                {{ __('Logout') }}
            </a>
        </div>

    </div>
</div>

<script>
    function notifyMe() {
        // Let's check if the browser supports notifications
        if (!("Notification" in window)) {
            alert("This browser does not support desktop notification");
        }

        // Let's check whether notification permissions have already been granted
        else if (Notification.permission === "granted") {
            // If it's okay let's create a notification
           alert('Already Granted')
        }

        // Otherwise, we need to ask the user for permission
        else if (Notification.permission !== "denied") {
            Notification.requestPermission().then(function (permission) {
                // If the user accepts, let's create a notification
                if (permission === "granted") {
                    var notification = new Notification("Thanks");
                }
            });
        }

        // At last, if the user has denied notifications, and you
        // want to be respectful there is no need to bother them any more.
    }
</script>
