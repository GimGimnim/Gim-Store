<nav class="navbar navbar-expand-sm bg-danger navbar-danger fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{url('user')}}">
        <!-- <img src="/images/logo.png" alt="logo" class="logo" style="width: 15%;"> -->
        GIM Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="{{url('user')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{url('about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{url('shop')}}">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{url('contact')}}">Contact us</a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{url('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> {{$count}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{url('wishlist')}}"><i class="fa fa-star-o" aria-hidden="true"></i></a>
        </li>
      </ul>

    <!-- Log out               -->
      <div class="list-inline-item logout">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <input type="submit" value="Logout">
        </form>
    </div>
  </nav>
