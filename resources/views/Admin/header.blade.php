<div id="headerMain" class="d-none">
    <header id="header" style="background-color: #FAA921"
            class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">

        <div class="navbar-nav-wrap">
            <div class="navbar-brand-wrapper">
                <!-- Logo -->

                <a class="navbar-brand" href="{{route('panel.dashboard')}}" aria-label="">
                    <img class="navbar-brand-logo" style="max-height: 42px;"
                         onerror="this.src='{{asset('assets/front-end/img/image-place-holder.png')}}'"
                          alt="Logo">
                    <img class="navbar-brand-logo-mini" style="max-height: 42px;"
                         onerror="this.src='{{asset('assets/front-end/img/image-place-holder.png')}}'"

                         alt="Logo">
                </a>
                <!-- End Logo -->
            </div>

            <div class="navbar-nav-wrap-content-left">
                <!-- Navbar Vertical Toggle -->
                <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
                    <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip"
                       data-placement="right" title="Collapse"></i>
                    <i class="tio-last-page navbar-vertical-aside-toggle-full-align"
                       data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                       data-toggle="tooltip" data-placement="right" title="Expand"></i>
                </button>
                <!-- End Navbar Vertical Toggle -->
                {{--<div class="d-none d-md-block">
                    <form class="position-relative">
                        <!-- Input Group -->
                        <div
                            class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tio-search"></i>
                                </div>
                            </div>
                            <input type="search" class="js-form-search form-control" id="search-bar-input"
                                   placeholder="{{('search')}}" aria-label="Search in front">
                            <div class="input-group">
                                <diV class="card" id="search-card"
                                     style="position: absolute;background: white;z-index: 999;width: 100%;display: none; text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}}">
                                    <div class="card-body" id="search-result-box"
                                         style="overflow:scroll; height:400px;overflow-x: hidden">

                                    </div>
                                </diV>
                            </div>
                        </div>
                    </form>
                </div>--}}
            </div>


            <!-- Secondary Content -->
            <div class="navbar-nav-wrap-content-right"
                 style="{{Session::get('direction') === "rtl" ? 'margin-left:unset; margin-right: auto' : 'margin-right:unset; margin-left: auto'}}">
                <!-- Navbar -->
                <ul class="navbar-nav align-items-center flex-row">



                {{--<li class="nav-item d-none d-sm-inline-block">
                        <div class="hs-unfold">
                            <a title="Website home"
                               class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                               href="{{url('home')}}" target="_blank">
                                <i class="tio-globe"></i>
                                <span class="btn-status btn-sm-status btn-status-danger"></span>
                            </a>
                        </div>
                    </li>--}}


                    {{--<li class="nav-item d-none d-sm-inline-block">
                        <!-- Notification -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                               href="{{url('admin.contact.list')}}">
                                <i class="tio-email"></i>
                                    <span class="btn-status btn-status btn-status-danger"></span>
                            </a>
                        </div>
                        <!-- End Notification -->
                    </li>--}}

                    <li class="nav-item">
                        <!-- Account -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;"
                               data-hs-unfold-options='{
                                     "target": "#accountNavbarDropdown",
                                     "type": "css-animation"
                                   }'>
                                <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img"
                                         onerror="this.src='{{asset('assets/back-end/img/160x160/img1.jpg')}}'"
                                         src="{{asset('storage/app/public/admin')}}/{{auth('admin')->user()->image}}"
                                         alt="Image Description">
                                    <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                </div>
                            </a>

                            <div id="accountNavbarDropdown"
                                 class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account"
                                 style="width: 16rem;">
                                <div class="dropdown-item-text">
                                    <div class="media align-items-center text-break">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            <img class="avatar-img"
                                                 onerror="this.src='{{asset('assets/back-end/img/160x160/img1.jpg')}}'"
                                                 src="{{asset('storage/app/public/admin')}}/{{auth('admin')->user()->image}}"
                                                 alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span class="card-title h5">{{auth('admin')->user()->name}}</span>
                                            <span class="card-text">{{auth('admin')->user()->email}}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="javascript:" onclick="Swal.fire({
                                    title: 'Do you want to logout?',
                                    showDenyButton: true,
                                    showCancelButton: true,
                                    confirmButtonColor: '#CF2228',
                                    cancelButtonColor: '#363636',
                                    confirmButtonText: `Yes`,
                                    denyButtonText: `Don't Logout`,
                                    }).then((result) => {
                                    if (result.value) {
                                    location.href='{{route('panel.auth.logout')}}';
                                    } else{
                                    Swal.fire('Canceled', '', 'info')
                                    }
                                    })">
                                    <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                                </a>
                            </div>
                        </div>
                        <!-- End Account -->
                    </li>
                </ul>
                <!-- End Navbar -->
            </div>
            <!-- End Secondary Content -->
        </div>
    </header>
</div>
<div id="headerFluid" class="d-none"></div>
<div id="headerDouble" class="d-none"></div>
