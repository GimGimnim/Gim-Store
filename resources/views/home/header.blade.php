<nav style="background-color: #EF0107;" class="navdsg navbar navbar-expand-sm fixed-top">
  <div class="container-fluid">
    
    <div class="logo">
    @if (Route::has('login'))

    @auth
      <a class="navbar-brand text-white" href="{{url('home')}}">
        <img src="/images/logo.png" alt="logo" class="logo" style="width: 150px;">
      </a>
    @else
      <a class="navbar-brand text-white" href="{{url('/')}}">
        <img src="/images/logo.png" alt="logo" class="logo" style="width: 150px;">
      </a>
    
    @endauth

    @endif
  </div>

    <button style="color: transparent;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <i style="color: white;" class="fa-solid fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">

          @if (Route::has('login'))

          @auth
            <a class="nav-link" href="{{url('home')}}">Home</a>
          @else
            <a class="nav-link" href="{{url('/')}}">Home</a>
          @endauth

          @endif
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('shop')}}">Shop</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('about')}}">About us</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{url('contact')}}">Contact us</a>
        </li>
        
      </ul>
    </div>
            
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="navbar-nav">

        @if (Route::has('login'))

        @auth

          <li class="nav-item">
            <a class="nav-link" href="{{url('myorders')}}">My Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> {{$count}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('wishlist')}}"><i class="fa fa-star-o" aria-hidden="true"></i> {{$countw}}</a>
          </li>
          <pre>  </pre>

          <!-- Log out               -->
          <div class="list-inline-item logout nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <input class="nav-link" type="submit" value="Logout" style="background-color: transparent; border-style: none; color: white;">
            </form>
          </div>

        @else

          <li class="nav-item">
            <a class="nav-link" href="{{url('register')}}"><i class="fa fa-user"></i> Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('login')}}"><i class="fa fa-sign-in"></i> Login</a>
          </li>
        @endauth

        @endif

      </ul>
    </div>

</div>

</nav>
