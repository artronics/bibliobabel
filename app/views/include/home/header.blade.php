<div class="fixed contain-to-grid">
        <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
                <li class="name">
                    <a href="#"><img id="logo" src="img/logo/logo_120X40.svg" alt="Bibliobabel Logo"/></a>
                </li>
                <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">
                <!-- Right Nav Section -->
                <ul class="right">
                    <li class="header-divider"><a class="header-icons-a header-icons-divider" href="#"><i class="fa fa-book fa-2x header-icons"></i></a></li>
                    <li><a class="header-icons-a" href="#"><i class="fa fa-comments fa-2x header-icons"></i></a></li>
                    <li><a class="header-icons-a" href="#"><i class="fa fa-bell fa-2x header-icons"></i></a></li>

                    <li class="has-dropdown">
                        <a href="#">{{{Auth::user()->name}}}</a>
                        <ul class="dropdown">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i>My Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-question-circle fa-fw"></i>Help</a></li>
                            <li><a href="#"><i class="fa fa-send-o fa-fw"></i>Send Feedback</a></li>
                            <li class="divider"></li>
                            <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i>Sign Out</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="#"><i class="fa fa-gear"></i></a>
                        <ul class="dropdown">
                            <li><a href="#"><i class="fa fa-edit fa-fw"></i>Edit Setting</a></li>
                            <li><a href="#"><i class="fa fa-eye fa-fw"></i>Privacy</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Left Nav Section -->
                <ul class="left">
                    <li class="has-form">
                      <div class="row collapse">
                        <div class="large-8 small-9 columns">
                          <input type="text" placeholder="Search Articles" class="radius">
                        </div>
                        <div class="large-4 small-3 columns">
                          <a href="#" class="button expand radius"><i class="fa fa-search"></i></a>
                        </div>
                      </div>
                    </li>
                </ul>
            </section>
        </nav>
    </div>