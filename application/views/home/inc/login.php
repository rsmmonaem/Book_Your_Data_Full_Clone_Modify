
<div class="jumbotron jumbotron--login jumbotron--regular-bg">
    <div class="container jumbotron__container">
        <div class="jumbotron__inner">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="clearfix gap-bottom">
                        <h1 class="jumbotron__title jumbotron--login__title">Login</h1>
                        <a class="jumbotron--login__member-link link-primary" href="<?=base_url()?>sign_up">Not a member? Sign up</a>
                    </div>
                    <form action="<?= base_url() ?>login/login_process" method="post" class="form form--soft gap-bottom"
                        data-gtm-form-interact-id="0">

                        <div class="gap-bottom" style="color: red;">
                        </div>
                        <div>
                            <input type="text" class="form__control" placeholder="Email" name="user_name"
                                   id="user_name" data-validetta="required,email"
                                   style="width: 100%; height: 50px; padding: 12px 20px; font-size: 16px; border: 1px solid #e3e3e3; border-radius: 1px;">
                        </div>
                        <hr class="hr-line">
                        <div class="gap-bottom">
                            <input type="password" name="pass_word" class="form__control" placeholder="Password"
                                   style="width: 100%; height: 50px; padding: 12px 20px; font-size: 16px; border: 1px solid #e3e3e3; border-radius: 1px;">

                        </div>
                        <input type="hidden" name="_target_path" value="">
                        <button type="submit" class="button button--primary full-width">Login To My Account</button>
                    </form>
                    <div class="clearfix font-xsmall">
                        <div class="pull-left">
                            <div class="custom-checkbox custom-checkbox--secondary gap-right-small">
                                <input class="custom-checkbox__inp" type="checkbox" name="" id="cb1">
                                <label class="custom-checkbox__mask" for="cb1"></label>
                            </div>
                            <label class="align-middle" for="cb1">Keep me logged in</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-offset-1 hidden-tpd">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// 	// Before login, capture and store the current URL in a cookie
// document.cookie = "redirectUrl=" + encodeURIComponent(window.location.href);

// // After successful login, retrieve and redirect to the stored URL
// var redirectUrl = decodeURIComponent(getCookie("redirectUrl"));
// if (redirectUrl) {
//     window.location.href = redirectUrl;
// } else {
//     // If there's no stored URL, you can redirect to a default page
//     window.location.href = "<?=base_url()?>"; // Change this to your desired default URL
// }

// // Helper function to get the value of a cookie by name
// function getCookie(name) {
//     var value = "; " + document.cookie;
//     var parts = value.split("; " + name + "=");
//     if (parts.length === 2) {
//         return parts.pop().split(";").shift();
//     }
// }

</script>
