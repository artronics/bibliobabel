<div class="row header">
    <div class="col-md-4">
        <div class="logo">
            <img src="img/logo/bibliobabel_150x30.svg" alt="bibliobabel Logo here!"/>
        </div>
    </div>
    <div class="col-md-4">
        <div class="header-links text-center">
            <ul class="list-inline">
                <li><img src="img/icons/message.svg" height="30px" width="30px" alt="home"></li>
                <li><img src="img/icons/message.svg" height="30px" width="30px" alt="messages"/></li>
                <li><img src="img/icons/notification.svg" height="30px" width="30px" alt="notifications"/></li>
            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class="user text-right">
            <!-- Split button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default">{{Auth::user()->name}}</button>
                <button type="button" class="btn btn-default">
                    <img src="img/icons/setting.svg" alt="messages"/>
                </button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                <li><a href="#">Edit Profile</a></li>
                <li class="divider"></li>
                <li><a href="/help">Help</a></li>
                <li><a href="/report-bug">Report a bug</a></li>
                <li class="divider"></li>
                <li><a href="/logout">Logout</a></li>
              </ul>
            </div>
        </div>
    </div>
</div>