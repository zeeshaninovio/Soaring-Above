<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->
<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/sign-up.css">
<!-- Css Stylesheet -->


<!-- top heading -->

<section class="section-head">
    <div class="head-page">
        <h1 class="heading-page">Sign Up</h1>
    </div>
</section>
<!-- End Here -->
<section class="checkout_form">
    <div class="container">
        <form action="index.php">
            <div class="sub_heading text-center">
                <h1>Account Information</h1>
            </div>
            <div class="billing_inputs">
                <div class="form-row">
                    <div class="single_input ">
                        <input type="text" name="" placeholder="Email" id="">
                    </div>
                    <div class="single_input ">
                        <input type="text" name="" placeholder="Password" id="">
                    </div>
                    <div class="single_input ">
                        <input type="text" name="" placeholder="Confirm Password" id="">
                    </div>
                </div>
            </div>
            <div class="sub_heading text-center mt-5">
                <h1>Child Information</h1>
            </div>
            <div class="billing_inputs">
                <div class="form-row">
                    <div class="single_input ">
                        <input type="text" name="" placeholder="First Name" id="">
                    </div>
                    <div class="single_input ">
                        <input type="text" name="" placeholder="Last Name" id="">
                    </div>
                    <div class="single_input ">
                        <input type="text" name="" placeholder="Birthday" id="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="single_input w-100">
                        <input type="text" name="" placeholder="Address" id="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="single_input ">
                        <input type="text" name="" placeholder="State" id="">
                    </div>
                    <div class="single_input ">
                        <input type="text" name="" placeholder="Country" id="">
                    </div>
                    <div class="single_input ">
                        <input type="text" name="" placeholder="Province" id="">
                    </div>
                </div>
            </div>
            <div class="sub_heading text-center mt-5">
                <h1>Parent’s Information</h1>
            </div>
            <div class="billing_inputs">
                <div class="form-row">
                    <div class="single_input ">
                        <input type="text" name="" placeholder="First Name" id="">
                    </div>
                    <div class="single_input ">
                        <input type="text" name="" placeholder="Last Name" id="">
                    </div>
                    <div class="single_input ">
                        <input type="text" name="" placeholder="Phone Number" id="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="single_input w-50">
                        <input type="text" name="" placeholder="Email" id="">
                    </div>
                    <div class="single_input w-50">
                        <select name="" id="">
                            <option value="Relation With Child">Relation With Child</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form_submit">
                <button type="submit" class="btn">Sign Up</button>
                <p>Already Have An Account &nbsp;&nbsp;&nbsp; <a href="sign-in.php">Sign In</a></p>
            </div>
        </form>
    </div>
</section>



<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->