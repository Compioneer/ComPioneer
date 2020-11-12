<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Landing</title>
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>

            <div class="container">
            <div class="login-box">
              <div class="row">
                <div class="col-md-6 login-left">
                  <h2>Login</h2>
                  <form action="login.php" method="post">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="user_or_email" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" name = "submit" class="btn btn-primary">Login</button>
                  </form>
                </div>



                <div class="col-md-6 login-right">
                  <h2>Sign Up</h2>
                  <form action="signup.php" method="post">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="password" name="confirm-password" class="form-control" required>
                    </div>
                    <button type="submit" name = "submit" class="btn btn-primary">Sign Up</button>
                  </form>
                </div>

      </div>
    </div>
    </div>
  </body>
</html>
