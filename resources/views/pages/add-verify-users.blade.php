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
                        <div class="row">

                            <div class="col-12">
                                <div id="floating-label" class="card p-20 top_border mb-3">

                                    <h2 class="_head03">Approve  Event Attendees<span></span></h2>



                                    <div class="form-wrap p-0">
                                        <div class="row">


                                            <div class="col-md-12 PB-10">
                                                <div class="form-s2 pt-19">
                                                    <select class="form-control formselect" name="event_type"
                                                        placeholder="Select Events">
                                                        <option selected>Select Event</option>
                                                        <option value="upcomming">Upcomming</option>
                                                        <option value="past">Past</option>
                                                        <option value="current">Current</option>
                                                    </select>
                                                </div>
                                            </div>



                                            <div class="col-md-12 PB-10">
                                                <div class="form-s2 pt-19">
                                                    <select class="form-control formselect" name="event_type"
                                                        placeholder="Select Events Type">
                                                        <option selected>Select User</option>
                                                        <option value="upcomming">Upcomming</option>
                                                        <option value="past">Past</option>
                                                        <option value="current">Current</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-md-12 PB-10">
                                                <div class="form-s2 pt-19">
                                                    <select class="form-control formselect" name="event_type"
                                                        placeholder="Apporoove ">
                                                        <option selected>approved </option>
                                                        <option value="upcomming">Upcomming</option>
                                                        <option value="past">Past</option>
                                                        <option value="current">Current</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="_cl-bottom">
        <button type="submit" class="btn btn-primary mr-2">Add New</button>
        <button type="submit" class="btn btn-primary mr-2">Continue</button>
        <button id="pl-close" type="submit" class="btn btn-cancel mr-2">Cancel</button>
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
                            <a id="productlist01" href="#" class="btn add_button"><i class="fa fa-plus"></i>
                                <span>New Events</span></a>
                            <h2>Events <span> List</span></h2>
                        </div>
                        <div class="body">

                            <table class="table table-hover dt-responsive nowrap" id="example" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Customer ID</th>
                                        <th>Customer Name</th>
                                        <th>Phone</th>
                                        <th>City</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>0245</td>
                                        <td>Shahid Khan</td>
                                        <td>032444444444</td>
                                        <td>Lahore</td>
                                        <td>
                                            <button class="btn btn-default btn-line">Edit</button>
                                            <button class="btn btn-default">Active</button>
                                            <button class="btn btn-default">Detail</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>0245</td>
                                        <td>Shahid Khan</td>
                                        <td>032444444444</td>
                                        <td>Lahore</td>
                                        <td>
                                            <button class="btn btn-default btn-line">Edit</button>
                                            <button class="btn btn-default">Active</button>
                                            <button class="btn btn-default">Detail</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>0245</td>
                                        <td>Shahid Khan</td>
                                        <td>032444444444</td>
                                        <td>Lahore</td>
                                        <td>
                                            <button class="btn btn-default btn-line">Edit</button>
                                            <button class="btn btn-default">Active</button>
                                            <button class="btn btn-default">Detail</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>0245</td>
                                        <td>Shahid Khan</td>
                                        <td>032444444444</td>
                                        <td>Lahore</td>
                                        <td>
                                            <button class="btn btn-default btn-line">Edit</button>
                                            <button class="btn btn-default">Active</button>
                                            <button class="btn btn-default">Detail</button>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
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
