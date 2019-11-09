@extends('layouts.master')
@section('content')
<div id="product-cl-sec">
    <a href="#" id="pl-close" class="close-btn-pl"></a>
    <div class="pro-header-text">New <span> Events </span></div>
    <div class="pc-cartlist">
        <div class="overflow-plist">
            <div class="plist-content">
                <div class="_left-filter">
                    <div class="container">
                        <form id="saveEventForm">
                            {!! Form::hidden('event_updating_id', '') !!}
                            @csrf
                            <input type="text" id="operation" name="operation" hidden>
                            <div class="row">
                                <div class="col-12">
                                    <div id="floating-label" class="card p-20 top_border mb-3">

                                        <h2 class="_head03">Events <span>Details</span></h2>

                                        <div class="form-wrap p-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10"> Name</label>
                                                        <input type="text" name="name" id="name" class="form-control required"
                                                            placeholder="" style="font-size:13px">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Address</label>
                                                        <input type="text" id="address" name="address" class="form-control"
                                                            placeholder="" style="font-size:13px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-wrap p-0">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="PT-10 font12">Date</label>
                                                    <div class="form-group" style="height: auto">
                                                        <input type="text" id="datepicker" name="date" class="form-control"
                                                            placeholder="" style="font-size:13px">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 PB-10">
                                                    <div class="form-s2 pt-19">
                                                        <select class="form-control formselect" name="event_type"
                                                            placeholder="Select Events Type">
                                                            <option selected>Select Event Type</option>
                                                            <option value="upcomming">Upcomming</option>
                                                            <option value="past">Past</option>
                                                            <option value="current">Current</option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="form-wrap p-0">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Ticket</label>
                                                        <input type="text" name="ticket" id="ticket"
                                                            class="form-control" placeholder=""
                                                            style="font-size:13px">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-wrap p-0">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10">Venue Name</label>
                                                        <input type="text" name="venue_name" id="venue_name"
                                                            class="form-control" placeholder=""
                                                            style="font-size:13px">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="_cl-bottom">
        <button type="button" class="btn btn-primary mr-2" id="saveEvent">Save</button>
        <button id="pl-close" type="button" class="btn btn-cancel mr-2" id="cancelEvent">Cancel</button>
    </div>
</div>


<div class="overlay"></div>


<nav class="navbar navbar-expand  static-top">
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

        <!--<li class="nav-item TM_icon">
          <a class="nav-link" href="#"><img src="images/settings-icon.svg" alt=""/></a>
        </li>-->


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

</nav>

<div id="wrapper">
    <div id="content-wrapper">
        <div class="container">
            <div class="row mt-2 mb-3">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2 class="_head01">Events <span>Management</span></h2>
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
                            <a id="productlist01"  class="btn add_button openDataSidebarForAddingEvent"><i
                                    class="fa fa-plus"></i>
                                <span>New Events</span></a>
                            <h2>Events <span> List</span></h2>
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
