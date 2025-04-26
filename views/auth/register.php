


    <div class="container">
        <div class="registration-form">
            <h2 class="text-center">Create an Account</h2>
            <form method="POST" action="index.php?page=sign_in">
                <div class="form-group">
                    <label for="name"> Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your  name" name="name" >
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter your email"  name="email">
                </div>

                <div class="form-group">
                    <label for="phone">phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter your phone"  name="phone">
                </div>



                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" 
                    placeholder="Confirm your password" name="confirm_password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
            <p class="text-center mt-3">Already have an account? <a href="index.php?page=login">Login here</a></p>
        </div>
    </div>

   