@extends('layouts.master')
@section('content')


{{-- <div class="overlay"></div> --}}


{{-- <nav class="navbar navbar-expand  static-top">
    <a class="hamburger" href="#" id="sidebarToggle"><i class="fas fa-bars"></i></a>
    <a class="_logo" href="index.html"><img src="images/oriente-engineering-services.jpg" alt="" /></a>


    <ul class="navbar-nav ml-auto top_nav">

        <li class="nav-item TM_icon dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="Qlinks" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><img src="images/q-link-icon.svg" alt="" /></a>
            <div class="dropdown-menu dropdown-menu-right Qlinks" aria-labelledby="Qlinks">
                <h4 class="notiF-title">Quick Actions</h4>
                <a href="#"><img src="images/graph.svg" alt=""> Add New CVR</a>
                <a href="#"><img src="images/add-report.svg" alt=""> CVR List</a>
                <a href="#"><img src="images/employee-list.svg" alt=""> Employee List</a>
                <a href="#"><img src="images/customer-list.svg" alt=""> Customer List</a>
            </div>
        </li>



        <li class="nav-item TM_icon dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="NotiFications" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"> <span class="badge">4</span> <img src="images/bell-icon.svg"
                    alt="" /></a>
            <div class="dropdown-menu dropdown-menu-right notiF" aria-labelledby="NotiFications">
                <h4 class="notiF-title">Notification </h4>
                <a href="#"><img src="images/profile-img.jpg" class="NU-img" alt=""><strong>Usman Khan CVR has been
                        generated </strong>
                    <p>5 minutes ago</p>
                </a>
                <a href="#"><img src="images/profile-img.jpg" class="NU-img" alt=""><strong>Sulman Khan Add New
                        Customer Add New Customer</strong>
                    <p>5 minutes ago</p>
                </a>
                <a href="#"><img src="images/profile-img.jpg" class="NU-img" alt=""><strong>New user
                        registered</strong>
                    <p>5 minutes ago</p>
                </a>
                <a href="#"><img src="images/profile-img.jpg" class="NU-img" alt=""><strong>New user
                        registered</strong>
                    <p>5 minutes ago</p>
                </a>
                <a href="notification.html" class="all-NF">View All</a>
            </div>
        </li>


        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img src="images/profile-img.jpg" class="user_log" alt="" />
                <span class="uname">Tayyab Ali</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <span class="dropdown-item usernamelab">Tayyab Ali</span>
                <a class="dropdown-item" href="user-profile.html"><i class="fa fa-user"> </i> Profile</a>
                <a class="dropdown-item" href="user-profile.html"><i class="fa fa-cogs"> </i> Settings</a>
                <a class="dropdown-item" href="login.html"><i class="fa fa-power-off"> </i> Logout</a>

            </div>
        </li>
    </ul>

</nav> --}}

<div id="wrapper">
    <div id="content-wrapper">
        <div class="container">
            <div class="row mt-2 mb-3">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2 class="_head01">Events <span>Management Detail</span></h2>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <ol class="breadcrumb">
                        <li><a href="#"><span>Events</span></a></li>
                        <li><span>List</span></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <a id="productlist01"  class="btn add_button"><i
                                    class="fa fa-plus"></i>
                                <span>New Events</span></a>
                            <h2>Events Detail<span> List</span></h2>
                        </div>
                        <div style="min-height: 400px" id="tblLoader">
                            <img src="/images/loader.gif" width="30px" height="auto"
                                style="position: absolute; left: 50%; top: 45%;">
                        </div>
                        <div class="body">


                        </div>
                    </div>
                </div>
            </div>


            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        © 2019 Event Management All rights reserved.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

@endsection
