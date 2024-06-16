<nav class="navbar navbar-expand-sm bg-black navbar-black fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="index.html">GIM Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <i class="fa fa-bars" aria-hidden="true" style="color:white;"></i>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{url('shop')}}">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="contact.html">Contact us</a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="{{url('register')}}"> <i class="fa fa-user" aria-hidden="true"></i>
          <span> Register</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{url('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i>
            <span> Login</span></a>
        </li>
      </ul>
    </div>
  </nav>
