<?
include 'dbh.php';

?>



<!DOCTYPE html>
<html>
  <head>
    <title>Friends and More</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <a href="details.html">
      <button>Go to Google</button>
    </a>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1 class="banner">Login or Register To Talk To Your Friends</h1>
          </div>
          <div class="box">
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
              <label for="firstName">First Name</label>
              <br>
              <input
               type="text"
               class="form-control"
               id="firstName"
              name="firstName"
            />
            </div>

              <div class="form-group">
                <label for="lastName">Last Name</label>
                <br>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <br>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <br>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <br>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
                <br>
                <input type="submit" class="btn btn-primary" />
              </div>
             
            </form>
          </div>
          </div>
          <div class="panel-footer text-right">
            <small class="creator">&copy; Musa Moyo</small>
          </div>
        </div>
      </div>
    </div>

  <div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="signupbutton">
  <button onclick="location.href='login.php'">GO TO SIGNUP</button>

  </div>
  
</div>
  </body>
</html>
