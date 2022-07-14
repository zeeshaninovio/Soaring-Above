<?php include 'inc/app.php' ?>

<!-- css file starts here -->
<link rel="stylesheet" href="css/profile.css">
<!-- css file starts here -->

<!-- Universal Banner Sec Start Here -->
<section class="section-head">
    <div class="head-page">
        <h1 class="heading-page">My Profile</h1>
    </div>
</section>
<!-- Universal Banner Sec End Here -->

<!-- profile starts here -->
<section class="profile">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="profile-sidebar-wrapper">
                    <div class="profile-img-wrapper text-center">
                        <!-- <figure>
                            <img src="img/profile-pic.png" class="img-fluid" alt="">
                        </figure> -->
                        <div class="img_box">
                            <figure><img src="img/tabpic7.png   " class="img-fluid" alt=""></figure>
                            <div class="change-img-btn">
                                <a href="#">Change image</a>
                            </div>
                        </div>
                        <div class="profile-content-wrapper">
                            <h6>John Doe</h6>
                            <h6>Example@gmail.com</h6>
                        </div>
                    </div>
                    <div class="flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <ul class="nav md-pills pills-secondary d-flex flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#panel11" role="tab">Account</a>
                            </li>
                            <li class="nav-item  arrow ">
                                <a class="nav-link" data-toggle="tab" href="#" role="tab">
                                    My Events
                                    <ul class="nav md-pills pills-secondary d-flex flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#panel12" role="tab">Upcoming
                                                Events</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#panel13" role="tab">Past
                                                Events</a>
                                        </li>
                                    </ul>
                                </a>
                            </li>
                            <li class="nav-item  arrow">
                                <a class="nav-link" data-toggle="tab" href="#" role="tab">
                                    My Classes
                                    <ul class="nav md-pills pills-secondary d-flex flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#panel14" role="tab">Booked
                                                Classes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#panel15" role="tab">Completed
                                                Classes</a>
                                        </li>
                                    </ul>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel16" role="tab">Manage Membership</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-tabs-cotent-wrapper">
                    <div class="tab-content pt-0">
                        <div class="tab-pane fade in show active" id="panel11" role="tabpanel">
                            <div class="profile-tabe-wrapper">
                                <div class="pro-detail-wrapper">
                                    <div class="profile-info-box-wrapper">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="profile-content-heading">
                                                    <h4>Account Information</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <button class="edit-profile-btn"> Edit profile
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-lg-4">
                                                <div class="dp-box-wrapper">
                                                    <div class="profile-box-content-wrapper">
                                                        <div class="form-group ">
                                                            <label for="Photo">Email Address</label>
                                                            <h6>Example@gmail.com</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-center">
                                                <div class="form-group1">
                                                    <label for="Photo">Password</label>
                                                    <h6>********** <span> <a href="#">Change Password</a> </span></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 mt-4">
                                                <div class="profile-content-heading">
                                                    <h4>Child Information</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mt-4 text-right">
                                                <button class="edit-profile-btn">Add New</button>
                                            </div>
                                        </div>
                                        <div class="box-fields-wrapper">
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="">First Name</label>
                                                    <input type="text" value="Lorem" disabled class="form-control">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="">Last Name</label>
                                                    <input type="text" value="Ipsum" disabled class="form-control">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="">Date of Birth</label>
                                                    <input type="text" value="17, 02, 2022" disabled
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="">State</label>
                                                    <input type="text" value="Lorem" disabled class="form-control">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="">Country</label>
                                                    <input type="text" value="Ipsum" disabled class="form-control">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="">Province</label>
                                                    <input type="text" value="Lorem ipsum" disabled
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <div class="address">
                                                        <h6>Address</h6>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod tempor incididunt ut</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="event12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="profile-content-heading">
                                            <h4>Add New Child</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-wrapper">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group1 mt-3">
                                                            <input type="email" class="form-control" id="inputemail"
                                                                placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group1 mt-3">
                                                            <input type="email" class="form-control" id="inputemail"
                                                                placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group1 mt-3">
                                                            <input type="email" class="form-control" id="inputemail"
                                                                placeholder="Birthday">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group1 mt-3">
                                                            <input type="email" class="form-control" id="inputemail"
                                                                placeholder="Address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group1 mt-3">
                                                            <input type="email" class="form-control" id="inputemail"
                                                                placeholder="State">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group1 mt-3">
                                                            <input type="email" class="form-control" id="inputemail"
                                                                placeholder="Country">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group1 mt-3">
                                                            <input type="email" class="form-control" id="inputemail"
                                                                placeholder="Province">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 ">
                                                        <div class="btnleft">
                                                            <div class="booked ">
                                                                <a type="button" href="" class="btn"
                                                                    id="backbtn">back</a>
                                                            </div>
                                                            <div class="booked">
                                                                <a href="#" class="btn">Saved</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="event13">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="profile-content-heading">
                                            <h4>Add New Child</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-wrapper">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group1 mt-3">
                                                            <input type="number" class="form-control" id="inputemail"
                                                                placeholder="Current Password">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group1 mt-3">
                                                            <input type="password" class="form-control" id="inputemail"
                                                                placeholder="New Password">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group1 mt-3">
                                                            <input type="password" class="form-control" id="inputemail"
                                                                placeholder="Change Password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 ">
                                                        <div class="btnleft1">
                                                            <div class="booked ">
                                                                <a type="button" href="" class="btn"
                                                                    id="backbtn">back</a>
                                                            </div>
                                                            <div class="booked">
                                                                <a href="#" class="btn">Saved</a>
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

                        <div class="tab-pane fade" id="panel12" role="tabpanel">
                            <div class="event">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="profile-content-heading">
                                            <h4>Upcoming Events</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="img-wrapper">
                                            <figure>
                                                <img src="./img/facedesignpic.png" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="md">
                                            <h3>Mothers Day</h3>
                                            <div class="adressdata">
                                                <img src="./img/group1.png" class="img-fluid" alt="">
                                                <h4>5-8 Years</h4>
                                            </div>
                                            <div class="adressdata">
                                                <img src="./img/group2.png" class="img-fluid" alt="">
                                                <h4>Friday, 08am - 05pm</h4>
                                            </div>
                                            <div class="adressdata">
                                                <img src="./img/group3.png" class="img-fluid" alt="">
                                                <h4>55 Main Street, 2nd Block, 3rd Floor, New York</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="price_booked">
                                            <div class="price">
                                                <h5>Price</h5>
                                                <h4>$ 25.20</h4>
                                            </div>
                                            <div class="booked">
                                                <a href="" class="btn">Booked</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="panel13" role="tabpanel">
                            <div class="event">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="profile-content-heading">
                                            <h4>Past Events</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="img-wrapper">
                                            <figure>
                                                <img src="./img/facedesignpic.png" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="md">
                                            <h3>Mothers Day</h3>
                                            <div class="adressdata">
                                                <img src="./img/group1.png" class="img-fluid" alt="">
                                                <h4>5-8 Years</h4>
                                            </div>
                                            <div class="adressdata">
                                                <img src="./img/group2.png" class="img-fluid" alt="">
                                                <h4>Friday, 08am - 05pm</h4>
                                            </div>
                                            <div class="adressdata">
                                                <img src="./img/group3.png" class="img-fluid" alt="">
                                                <h4>55 Main Street, 2nd Block, 3rd Floor, New York</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="price_booked">
                                            <div class="price">
                                                <h5>Price</h5>
                                                <h4>$ 25.20</h4>
                                            </div>
                                            <div class="booked1">
                                                <a href="" class="btn">Expired</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="panel14" role="tabpanel">
                            <div class="event">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="profile-content-heading">
                                            <h4>Booked Classes</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="borderbottom">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="img-wrapper">
                                                <figure>
                                                    <img src="./img/color.png" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 mt-4">
                                            <div class="md">
                                                <h3>Classes Name</h3>
                                                <div class="adressdata">
                                                    <img src="./img/group2.png" class="img-fluid" alt="">
                                                    <h4>Friday, 08am - 05pm</h4>
                                                </div>
                                                <div class="adressdata">
                                                    <img src="./img/group3.png" class="img-fluid" alt="">
                                                    <h4>25 , June , 2022</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="price_booked">
                                                <div class="price">
                                                    <h5>Price</h5>
                                                    <h4>$ 25.20</h4>
                                                </div>
                                                <div class="booked">
                                                    <a href="" class="btn">Booked</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 ">
                                    <div class="col-lg-3">
                                        <div class="img-wrapper">
                                            <figure>
                                                <img src="./img/color1.png" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 mt-4">
                                        <div class="md">
                                            <h3>Classes Name</h3>
                                            <div class="adressdata">
                                                <img src="./img/group2.png" class="img-fluid" alt="">
                                                <h4>Friday, 08am - 05pm</h4>
                                            </div>
                                            <div class="adressdata">
                                                <img src="./img/group4.png" class="img-fluid" alt="">
                                                <h4>25 , June , 2022</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="price_booked">
                                            <div class="price">
                                                <h5>Price</h5>
                                                <h4>$ 25.20</h4>
                                            </div>
                                            <div class="booked">
                                                <a href="" class="btn">Booked</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="panel15" role="tabpanel">
                            <div class="event">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="profile-content-heading">
                                            <h4>Booked Classes</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="borderbottom">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="img-wrapper">
                                                <figure>
                                                    <img src="./img/color.png" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 mt-4">
                                            <div class="md">
                                                <h3>Classes Name</h3>
                                                <div class="adressdata">
                                                    <img src="./img/group2.png" class="img-fluid" alt="">
                                                    <h4>Friday, 08am - 05pm</h4>
                                                </div>
                                                <div class="adressdata">
                                                    <img src="./img/group3.png" class="img-fluid" alt="">
                                                    <h4>25 , June , 2022</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="price_booked">
                                                <div class="price">
                                                    <h5>Price</h5>
                                                    <h4>$ 25.20</h4>
                                                </div>
                                                <div class="booked2">
                                                    <a href="" class="btn">Completed</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 ">
                                    <div class="col-lg-3">
                                        <div class="img-wrapper">
                                            <figure>
                                                <img src="./img/color1.png" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 mt-4">
                                        <div class="md">
                                            <h3>Classes Name</h3>
                                            <div class="adressdata">
                                                <img src="./img/group2.png" class="img-fluid" alt="">
                                                <h4>Friday, 08am - 05pm</h4>
                                            </div>
                                            <div class="adressdata">
                                                <img src="./img/group4.png" class="img-fluid" alt="">
                                                <h4>25 , June , 2022</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="price_booked">
                                            <div class="price">
                                                <h5>Price</h5>
                                                <h4>$ 25.20</h4>
                                            </div>
                                            <div class="booked2">
                                                <a href="" class="btn">Completed</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="panel16" role="tabpanel">
                            <div class="event1">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="profile-content-heading">
                                            <h4>Your Membership</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="bordersquare">
                                    <h4>Single Classes</h4>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="single">

                                                <p>Full day Stay </p>
                                                <p>2 Hours Special Class</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single">
                                                <p>Transportation Facility
                                                </p>
                                                <p>Learning Practice</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="number">
                                                <span>$45</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="profile-content-heading">
                                            <h4>Managed Membership</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 ">
                                    <div class="col-md-4">
                                        <div class="ourmembership_content "
                                            style="visibility: visible; animation-name: fadeInDown;">
                                            <p class="text-center number_text">$45</p>
                                            <p class="welcome_para text-center">Single Classes</p>
                                            <p class="full_day text-center">
                                                Full day Stay <br>
                                                2 Hours Special Class <br>
                                                Transportation Facility<br>
                                                Learning Practice
                                            </p>
                                            <a href="#" class="btn"> REGISTER A TOUR</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="ourmembership_content "
                                            style="visibility: visible; animation-name: fadeInDown;">
                                            <p class="text-center number_text">$45</p>
                                            <p class="welcome_para text-center">Single Classes</p>
                                            <p class="full_day text-center">
                                                Full day Stay <br>
                                                2 Hours Special Class <br>
                                                Transportation Facility<br>
                                                Learning Practice
                                            </p>
                                            <a href="#" class="btn"> REGISTER A TOUR</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="ourmembership_content "
                                            style="visibility: visible; animation-name: fadeInDown;">
                                            <p class="text-center number_text">$45</p>
                                            <p class="welcome_para text-center">Single Classes</p>
                                            <p class="full_day text-center">
                                                Full day Stay <br>
                                                2 Hours Special Class <br>
                                                Transportation Facility<br>
                                                Learning Practice
                                            </p>
                                            <a href="#" class="btn"> REGISTER A TOUR</a>
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
</section>
<!-- profile end here -->

<?php include 'inc/footer.php' ?>