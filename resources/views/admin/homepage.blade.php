@include('admin.include.header')
@include('admin.include.sidebar')
<!-- Sidebar chat start -->
<div id="sidebar" class="p-fixed header-users showChat">
    <div class="had-container">
        <div class="card card_main header-users-main">
            <div class="card-content user-box">
                <div class="md-group-add-on p-20">
                    <span class="md-add-on">
                        <i class="icofont icofont-search-alt-2 chat-search"></i>
                    </span>
                    <div class="md-input-wrapper">
                        <input type="text" class="md-form-control" name="username" id="search-friends">
                        <label>Search</label>
                    </div>

                </div>
                <div class="media friendlist-main">

                    <h6>Friend List</h6>

                </div>
                <div class="main-friend-list">
                    <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                        data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{ asset('admin/assets/images/avatar-1.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Josephin Doe</div>
                            <span>20min ago</span>
                        </div>
                    </div>
                    <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"
                        data-toggle="tooltip" data-placement="left" title="Alice">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{ asset('admin/assets/images/avatar-2.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Alice</div>
                            <span>1 hour ago</span>
                        </div>
                    </div>
                    <div class="media friendlist-box" data-id="7" data-status="offline"
                        data-username="Michael Scofield" data-toggle="tooltip" data-placement="left"
                        title="Michael Scofield">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{ asset('admin/assets/images/avatar-3.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-danger"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Michael Scofield</div>
                            <span>3 hours ago</span>
                        </div>
                    </div>
                    <div class="media friendlist-box" data-id="5" data-status="online" data-username="Irina Shayk"
                        data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{ asset('admin/assets/images/avatar-4.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Irina Shayk</div>
                            <span>1 day ago</span>
                        </div>
                    </div>
                    <div class="media friendlist-box" data-id="6" data-status="offline" data-username="Sara Tancredi"
                        data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{ asset('admin/assets/images/avatar-5.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-danger"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Sara Tancredi</div>
                            <span>2 days ago</span>
                        </div>
                    </div>
                    <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                        data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{ asset('admin/assets/images/avatar-1.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Josephin Doe</div>
                            <span>20min ago</span>
                        </div>
                    </div>
                    <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"
                        data-toggle="tooltip" data-placement="left" title="Alice">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{ asset('admin/assets/images/avatar-2.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Alice</div>
                            <span>1 hour ago</span>
                        </div>
                    </div>
                    <div class="media friendlist-box" data-id="1" data-status="online"
                        data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                        title="Josephin Doe">

                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{ asset('admin/assets/images/avatar-1.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Josephin Doe</div>
                            <span>20min ago</span>
                        </div>
                    </div>
                    <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"
                        data-toggle="tooltip" data-placement="left" title="Alice">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{ asset('admin/assets/images/avatar-2.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Alice</div>
                            <span>1 hour ago</span>
                        </div>
                    </div>
                    <div class="media friendlist-box" data-id="1" data-status="online"
                        data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                        title="Josephin Doe">

                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{ asset('admin/assets/images/avatar-1.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Josephin Doe</div>
                            <span>20min ago</span>
                        </div>
                    </div>
                    <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"
                        data-toggle="tooltip" data-placement="left" title="Alice">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle"
                                src="{{ asset('admin/assets/images/avatar-2.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Alice</div>
                            <span>1 hour ago</span>
                        </div>
                    </div>
                    <div class="media friendlist-box" data-id="1" data-status="online"
                        data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                        title="Josephin Doe">

                        <a class="media-left" href="#!">
                            <img class="media-object img-circle"
                                src="{{ asset('admin/assets/images/avatar-1.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Josephin Doe</div>
                            <span>20min ago</span>
                        </div>
                    </div>
                    <div class="media friendlist-box" data-id="1" data-status="online"
                        data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                        title="Josephin Doe">

                        <a class="media-left" href="#!">
                            <img class="media-object img-circle"
                                src="{{ asset('admin/assets/images/avatar-1.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Josephin Doe</div>
                            <span>20min ago</span>
                        </div>
                    </div>
                    <div class="media friendlist-box" data-id="1" data-status="online"
                        data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                        title="Josephin Doe">

                        <a class="media-left" href="#!">
                            <img class="media-object img-circle"
                                src="{{ asset('admin/assets/images/avatar-1.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Josephin Doe</div>
                            <span>20min ago</span>
                        </div>
                    </div>
                    <div class="media friendlist-box" data-id="1" data-status="online"
                        data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                        title="Josephin Doe">

                        <a class="media-left" href="#!">
                            <img class="media-object img-circle"
                                src="{{ asset('admin/assets/images/avatar-1.png') }}"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="friend-header">Josephin Doe</div>
                            <span>20min ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="showChat_inner">
    <div class="media chat-inner-header">
        <a class="back_chatBox">
            <i class="icofont icofont-rounded-left"></i> Josephin Doe
        </a>
    </div>
    <div class="media chat-messages">
        <a class="media-left photo-table" href="#!">
            <img class="media-object img-circle m-t-5" src="{{ asset('admin/assets/images/avatar-1.png') }}"
                alt="Generic placeholder image">
            <div class="live-status bg-success"></div>
        </a>
        <div class="media-body chat-menu-content">
            <div class="">
                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
    </div>
    <div class="media chat-messages">
        <div class="media-body chat-menu-reply">
            <div class="">
                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
        <div class="media-right photo-table">
            <a href="#!">
                <img class="media-object img-circle m-t-5" src="{{ asset('admin/assets/images/avatar-2.png') }}"
                    alt="Generic placeholder image">
                <div class="live-status bg-success"></div>
            </a>
        </div>
    </div>
    <div class="media chat-reply-box">
        <div class="md-input-wrapper">
            <input type="text" class="md-form-control" id="inputEmail" name="inputEmail">
            <label>Share your thoughts</label>
            <span class="highlight"></span>
            <span class="bar"></span> <button type="button" class="chat-send waves-effect waves-light">
                <i class="icofont icofont-location-arrow f-20 "></i>
            </button>

            <button type="button" class="chat-send waves-effect waves-light">
                <i class="icofont icofont-location-arrow f-20 "></i>
            </button>
        </div>

    </div>
</div>
<!-- Sidebar chat end-->
<div class="content-wrapper">
    <!-- Container-fluid starts -->
    <!-- Main content starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="main-header">
                <h4>Dashboard</h4>
            </div>
        </div>
        <!-- 4-blocks row start -->
        <div class="row dashboard-header">
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-product">
                    <span>Products</span>
                    <h2 class="dashboard-total-products">4500</h2>
                    <span class="label label-warning">Sales</span>Arriving Today
                    <div class="side-box">
                        <i class="ti-signal text-warning-color"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-product">
                    <span>Products</span>
                    <h2 class="dashboard-total-products">37,500</h2>
                    <span class="label label-primary">Views</span>View Today
                    <div class="side-box ">
                        <i class="ti-gift text-primary-color"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-product">
                    <span>Products</span>
                    <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                    <span class="label label-success">Sales</span>Reviews
                    <div class="side-box">
                        <i class="ti-direction-alt text-success-color"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-product">
                    <span>Products</span>
                    <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                    <span class="label label-danger">Sales</span>Reviews
                    <div class="side-box">
                        <i class="ti-rocket text-danger-color"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- 4-blocks row end -->

        <!-- 1-3-block row start -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="user-block-2">
                        <img class="img-fluid" src="{{ asset('admin/assets/images/widget/user-1.png') }}"
                            alt="user-header">
                        <h5>Josephin Villa</h5>
                        <h6>Software Engineer</h6>
                    </div>
                    <div class="card-block">
                        <div class="user-block-2-activities">
                            <div class="user-block-2-active">
                                <i class="icofont icofont-clock-time"></i> Recent Activities
                                <label class="label label-primary">480</label>
                            </div>
                        </div>
                        <div class="user-block-2-activities">
                            <div class="user-block-2-active">
                                <i class="icofont icofont-users"></i> Current Employees
                                <label class="label label-primary">390</label>
                            </div>
                        </div>

                        <div class="user-block-2-activities">
                            <div class="user-block-2-active">
                                <i class="icofont icofont-ui-user"></i> Following
                                <label class="label label-primary">485</label>
                            </div>

                        </div>
                        <div class="user-block-2-activities">
                            <div class="user-block-2-active">
                                <i class="icofont icofont-picture"></i> Pictures
                                <label class="label label-primary">506</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button"
                                class="btn btn-warning waves-effect waves-light text-uppercase m-r-30">
                                Follows
                            </button>
                            <button type="button" class="btn btn-primary waves-effect waves-light text-uppercase">
                                Message
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Bar chart</h5>
                    </div>
                    <div class="card-block">
                        <div id="barchart" style="min-width: 250px; height: 330px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 grid-item">
                <div class="card">
                    <div class="card-block horizontal-card-img d-flex">
                        <img class="media-object img-circle" src="{{ asset('admin/assets/images/avatar-3.png') }}"
                            alt="Generic placeholder image">
                        <div class="d-inlineblock  p-l-20">
                            <h6>Josephin Doe</h6>
                            <a href="#">contact@admin.com</a>
                        </div>
                        <h6 class="txt-warning rotate-txt">Designer</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 grid-item">
                <div class="card">
                    <div class="card-block horizontal-card-img d-flex">
                        <img class="media-object img-circle" src="{{ asset('admin/assets/images/lockscreen.png') }}"
                            alt="Generic placeholder image">
                        <div class="d-inlineblock  p-l-20">
                            <h6>Josephin Doe</h6>
                            <a href="#">contact@admin.com</a>
                        </div>
                        <h6 class="txt-danger rotate-txt">Developer</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- 1-3-block row end -->

        <!-- 2-1 block start -->
        <div class="row">
            <div class="col-xl-8 col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table m-b-0 photo-table">
                                <thead>
                                    <tr class="text-uppercase">
                                        <th>Photo</th>
                                        <th>Project</th>
                                        <th>Completed</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle"
                                                src="{{ asset('admin/assets/images/avatar-2.png') }}" alt="User">
                                        </th>
                                        <td>Appestia Project
                                            <p><i class="icofont icofont-clock-time"></i>Created 14.9.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">226,134</span><svg
                                                class="peity" height="30" width="30">
                                                <path
                                                    d="M 15.000000000000002 0 A 15 15 0 1 1 4.209902994920235 25.41987555688496 L 15 15"
                                                    fill="#2196F3"></path>
                                                <path
                                                    d="M 4.209902994920235 25.41987555688496 A 15 15 0 0 1 14.999999999999996 0 L 15 15"
                                                    fill="#ccc"></path>
                                            </svg>
                                        </td>
                                        <td>50%</td>
                                        <td>October 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle"
                                                src="{{ asset('admin/assets/images/avatar-4.png') }}" alt="User">
                                        </th>
                                        <td>Contract with belife Company
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">0.52/1.561</span><svg
                                                class="peity" height="30" width="30">
                                                <path
                                                    d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                    fill="#2196F3"></path>
                                                <path
                                                    d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                    fill="#ccc"></path>
                                            </svg>
                                        </td>
                                        <td>70%</td>
                                        <td>November 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle"
                                                src="{{ asset('admin/assets/images/avatar-1.png') }}" alt="User">
                                        </th>
                                        <td>Web Consultancy project
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">1,4</span><svg class="peity"
                                                height="30" width="30">
                                                <path
                                                    d="M 15.000000000000002 0 A 15 15 0 0 1 29.265847744427305 10.36474508437579 L 15 15"
                                                    fill="#2196F3"></path>
                                                <path
                                                    d="M 29.265847744427305 10.36474508437579 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                    fill="#ccc"></path>
                                            </svg>
                                        </td>
                                        <td>40%</td>
                                        <td>September 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle"
                                                src="{{ asset('admin/assets/images/avatar-3.png') }}" alt="User">
                                        </th>
                                        <td>Contract with belife Company
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">0.52/1.561</span><svg
                                                class="peity" height="30" width="30">
                                                <path
                                                    d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                    fill="#2196F3"></path>
                                                <path
                                                    d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                    fill="#ccc"></path>
                                            </svg>
                                        </td>
                                        <td>70%</td>
                                        <td>November 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle"
                                                src="{{ asset('admin/assets/images/avatar-1.png') }}" alt="User">
                                        </th>
                                        <td>Contract with belife Company
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">0.52/1.561</span><svg
                                                class="peity" height="30" width="30">
                                                <path
                                                    d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                    fill="#2196F3"></path>
                                                <path
                                                    d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                    fill="#ccc"></path>
                                            </svg>
                                        </td>
                                        <td>70%</td>
                                        <td>November 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle"
                                                src="{{ asset('admin/assets/images/avatar-2.png') }}" alt="User">
                                        </th>
                                        <td>Contract with belife Company
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">0.52/1.561</span><svg
                                                class="peity" height="30" width="30">
                                                <path
                                                    d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                    fill="#2196F3"></path>
                                                <path
                                                    d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                    fill="#ccc"></path>
                                            </svg>
                                        </td>
                                        <td>70%</td>
                                        <td>November 21, 2015</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Bar chart</h5>
                    </div>
                    <div class="card-block">
                        <div id="piechart" style="min-width: 250px; height: 460px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2-1 block end -->
    </div>
    <!-- Main content ends -->
    <!-- Container-fluid ends -->
    <div class="fixed-button">
        <a href="#!" class="btn btn-md btn-primary">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
        </a>
    </div>
</div>
</div>

@include('admin.include.footer')
