<nav class="navbar navbar-expand-sm bg-danger navbar-danger fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="index.html">GIM Autos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about.html">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">Services</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="autosales.html">Automobile Sales</a></li>
            <li><a class="dropdown-item" href="autoservice.html">Automobile Servicing</a></li>
            <li><a class="dropdown-item" href="autorepair.html">Automobile Repair</a></li>
            <li><a class="dropdown-item" href="s_p.html">Spray and Lighting</a></li>
            <li><a class="dropdown-item" href="carwash.html">Car Loan</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="contact.html">Contact us</a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item" id="myBtn">
            <a class="nav-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#nyModal"><span class="fa fa-user"></span> Sign Up</a>
        </li>
        <li class="nav-item" id="myBtn">
          <a class="nav-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#myModal"><span class="fa fa-sign-in"></span> Login</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"><span class="fa fa-lock"></span> Login</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body" style="padding:25px 50px;">
            <div class="text-wrap text-left d-flex align-items-center order-md-last">
              <div class="text w-100">
                <form role="form">
                  <div class="form-group">
                    <label for="usrname"><span class="fa fa-user"></span> Username</label>
                    <input type="text" class="form-control" id="usrname" placeholder="Enter username or email">
                  </div>
                  <div class="form-group" style="padding:10px 0px;">
                    <label for="psw"><span class="fa fa-eye"></span> Password</label>
                    <input type="text" class="form-control" id="psw" placeholder="Enter password">
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="" checked>Remember me</label>
                  </div>
                    <button type="submit" class="form-control btn btn-dark btn-block"><span class="fa fa-power-off"></span> Login</button>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-center">
            <div class="text-wrap text-center d-flex align-items-center order-md-last">
              <div class="text w-100">
                <p>Not a member? <a class="link-secondary text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target=
                  "#nyModal">Sign Up</a></p>
                <p>Forgot <a class="link-secondary text-decoration-none" href="#">Password?</a></p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <!-- Sign Up -->
    <div class="modal fade" id="nyModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"><span class="fa fa-user"></span> Sign Up</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body" style="padding:25px 50px;">
            <div class="text-wrap text-left d-flex align-items-center order-md-last">
              <div class="text w-100">
                <form role="form">
                  <div class="form-group">
                    <label for="usrname"><span class="fa fa-mail"></span> Email</label>
                    <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                  </div>
                  <div class="form-group" style="padding:10px 0px;">
                    <label for="usrname"><span class="fa fa-user"></span> Username</label>
                    <input type="text" class="form-control" id="usrname" placeholder="Enter username">
                  </div>
                  <div class="form-group" style="padding:10px 0px;">
                    <label for="psw"><span class="fa fa-eye"></span> Password</label>
                    <input type="text" class="form-control" id="psw" placeholder="Enter password">
                  </div>
                  <div class="form-group" style="padding:10px 0px;">
                    <label for="psw"><span class="fa fa-eye"></span> Confirm Password</label>
                    <input type="text" class="form-control" id="psw" placeholder="Confirm password">
                  </div>
                  <button type="submit" id= "sbmt" class="form-control btn btn-dark btn-block">Sign Up</button>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-center">
            <div class="text-wrap text-center d-flex align-items-center order-md-last">
              <div class="text w-100">
                <p>Have an account? <a class="link-secondary text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target=
                  "#myModal">Sign In</a></p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>