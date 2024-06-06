<div class="d-flex align-items-stretch">
  <nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar">
        <a href="{{url('profile_view')}}">
          <img src="{{asset('/admintemplate/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle">
        </a>
      </div>
      <div class="title">
        <h1 class="h5">change to name and img</h1>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Shop</span>
    <ul class="list-unstyled">
      <li><a href="#category" aria-expanded="false" data-toggle="collapse"><i class="icon-windows"></i>Categories </a>
        <ul id="category" class="collapse list-unstyled ">
          <li><a href="{{url('view_category')}}">View Categories</a></li>
          <li><a href="{{url('add_category')}}">Add Categories</a></li>
        </ul>
      </li>
     <!--  <li><a href="#subcategory" aria-expanded="false" data-toggle="collapse"><i class="icon-windows"></i>Sub-categories </a>
        <ul id="subcategory" class="collapse list-unstyled ">
          <li><a href="{{url('view_subcategory')}}">View Sub-categories</a></li>
          <li><a href="{{url('add_subcategory')}}">Add Sub-categories</a></li>
        </ul>
      </li> -->
      <li><a href="#brands" aria-expanded="false" data-toggle="collapse"><i class="icon-windows"></i>Brands </a>
        <ul id="brands" class="collapse list-unstyled ">
          <li><a href="{{url('view_brand')}}">View Brands</a></li>
          <li><a href="{{url('add_brand')}}">Add Brands</a></li>
        </ul>
      </li>
      <li><a href="#products" aria-expanded="false" data-toggle="collapse"><i class="icon-windows"></i>Products </a>
        <ul id="products" class="collapse list-unstyled ">
          <li><a href="{{url('view_product')}}">View Products</a></li>
          <li><a href="{{url('add_product')}}">Add Products</a></li>
        </ul>
      </li>
            
    </ul>
  </nav>