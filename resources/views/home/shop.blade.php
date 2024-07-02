<!DOCTYPE html>
<html>

<head>
 
 @include('home.head')

</head>

<body style="background-color: rgba(255,229,180,0.2);">
  <div class="hero_area">
    
  @include('home.header')

  </div>
  
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 style="color: #EF0107;" class="display-4 text-center">
          Shop
        </h2>
      </div>

      <div class="row">

        @foreach($product as $products)

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="{{url('details', $products->id)}}">
              <div class="img-box">
                <img src="{{$products->image}}" alt="">
              </div>
              <div class="detail-box">
                <h4>{{$products->name}}</h4>
                <h4 class="text-danger">
                  <span>₦{{$products->price}}</span>
                </h4>
              </div>
              <div class="detail-box">
                <a href="{{url('add_cart',$products->id)}}" class="btn btn-danger" style="align-items: left;"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>

                <a href="{{url('favorite',$products->id)}}" class="btn btn-danger"><i class="fa fa-star-o" aria-hidden="true"></i></a>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>

        @endforeach

      </div>
      <!-- End Row -->

      <div class="heading_container heading_center" style="padding-top: 30px;">
        {{$product->links()}}
      </div>

    </div>
    <!-- End Container -->

  </section>

  <br><br>

  @include('home.footer')

</body>

</html>
