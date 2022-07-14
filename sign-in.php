<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->
<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/sign-in.css">
<!-- Css Stylesheet -->

<!-- about us section start here -->
<section class="Sign-In-page">
    <section class="section-head">
        <div class="head-page">
            <h1 class="heading-page">Sign In</h1>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="privacy_head">
                    <h2>Account Information</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="form-group1 mt-3">
                    <input type="email" class="form-control" id="inputemail" placeholder="Email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="form-group1 mt-3">
                    <input type="Password" class="form-control" id="inputemail" placeholder="Password">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mx-auto ">
                <div class="checkbox">
                    <div class="new">
                        <form>
                            <div class="form-group">
                                <input type="checkbox" id="html">
                                <label for="html"> <span> Remember Me </span></label>
                            </div>
                        </form>
                    </div>
                    <div class="forget">
                        <a type="button" href="forgot-password.php">Forgot Password</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="btnleft">
                    <div class="signbtn">
                        <a type="button" href="forgot-password.php" class="btnsign" id="backbtn">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="sign-para">
                    <p>Don't Have An Account</p>
                    <a type="button" href="sign-up.php">Sign Up</a>
                </div>
            </div>
        </div>
    </div>


</section>
<!-- about us section end here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->