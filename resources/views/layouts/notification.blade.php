
<div class="btn-group">
    <a class="nav-link dropdown-toggle" id="notifications" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre="">
    	<i data-feather="bell"></i>
    	<span class="badge badge-light"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdown">
        <div id="notificationsMenu">
            No notification at the moment
       	</div>
        <a class="btn btn-primary btn-block" href="/doctor-app-test/all/notifications">See All</a>
    </div>
</div>


<div id="" class="modal doctor-notice-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><span class="notice-title">{{trans('file.Notice')}}</span> </h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;"><span class="notice-body"></span></h4>
            </div>
        </div>
    </div>
</div>

        <!-- <li class="dropdown">
            <a class="dropdown-toggle" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i data-feather="bell"></i>
                <span class="badge badge-light"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="notificationsMenu" id="notificationsMenu">
                <li class="dropdown-header">No notifications</li>
            </ul>
        </li> -->

{{-- <script type="text/javascript">
    $('#notifications').on('click',function () {

        $.ajax({
            url: '{{route('markRead')}}',
            dataType: "json",
            success: function (result) {

            },
        });
    });
</script> --}}
