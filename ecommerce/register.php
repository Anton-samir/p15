
<?php
$title = "Register";
include_once "layouts/header.php";
include_once "layouts/nav.php";
include_once "layouts/bread-crumb.php";
if($_POST){
    // validation
    // {
    //     first_name: "Galal", // required
    //     last_name: "Husseny", // required
    //     email: "galal.husseny@gmail.com", // required , regex , unique
    //     phone: "01000498488",  // required , regex , unique
    //     password: "", // required , regex , confirmed
    //     password_confirmation: "", // required
    //     gender: "m" //  required , m , f
    // },
    // generate code
    // insert in database
    // send email with code
    // header => check-code.php
    print_r($_POST);
}
?>
    <div class="login-register-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a  class="active" data-toggle="tab" href="#lg2">
                                <h4> register </h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg2" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="post">
                                            <input type="text" name="first_name" placeholder="First Name">
                                            <input type="text" name="last_name" placeholder="Last Name">
                                            <input name="email" placeholder="Email" type="email">
                                            <input name="phone" placeholder="Phone" type="number">
                                            <input type="password" name="password" placeholder="Password">
                                            <input type="password" name="password_confirmation" placeholder="Password Confirmation">
                                            <select name="gender" class="form-control " id="">
                                                <option value="m">Male</option>
                                                <option value="f">Female</option>
                                            </select>
                                            <div class="button-box mt-5">
                                                <button type="submit"><span>Register</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once "layouts/footer.php";
include_once "layouts/footer-scripts.php";
?>