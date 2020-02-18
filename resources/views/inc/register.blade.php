{{-- https://www.tutorialrepublic.com/codelab.php?topic=bootstrap&file=simple-registration-form --}}
<div class="container">
    <div class="signup-form">
        <form action="/examples/actions/confirmation.php" method="post">
            <p class="hint-text">Create your account. It's free and only takes a minute.</p>
            <div class="container">
                <div class="form-group">
                    <input type="text" class="form-control" name="first_name" placeholder="First Name"
                        required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                        required="required">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password"
                        required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password"
                        required="required">
                </div>
                <div class="form-group text-center">
                    <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <strong><a
                            href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></strong></label></br>
                {{-- </div> --}}
                {{-- <div class="form-group"> --}}
                        <button class="btn btn-lg btn-primary" type="submit">Register Now</button>
                </div>
        </form></br>
        <div class="text-center">
            <h5 class="font-weight-bold">Already have an account? <a href="{{ url('/login') }}">Sign in</a></h5>
            </div>
    </div>
</div>