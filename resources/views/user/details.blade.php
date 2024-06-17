<!DOCTYPE html>
<html>

<head>
 
 @include('user.head')

<style type="text/css">
  
  .div_center
  {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
  }

  .row_center
  {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .detail-box
  {
    padding: 12px;
  }

</style>

</head>

<body style="background-color: rgba(255,229,180,0.2);">
  <div class="hero_area">
    
  @include('user.header')

  </div>
  
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 class="display-4 text-center text-danger">
          {{$data->name}}
        </h2>
      </div>

      <div class="row row_center">

        <div class="col-md-12">
          <div class="box">
              <div class="div_center">
                <img src="{{$data->image}}" width="400px" alt="">
              </div>

              <div class="detail-box">
                <h4 class="display-5">{{$data->name}}</h4>
                <h4 class="text-danger display-5">
                  <span>${{$data->price}}</span>
                </h4>
              </div>

              <div class="detail-box">
                <h6>Brand: {{$data->brand}}</h6>
                <h6>Category: {{$data->category}}</h6>
              </div>

              <div class="detail-box">
                <h6>Sizes: {{$data->size}}</h6>
                <h6>Color: {{$data->color}}</h6>
              </div>

              <br>

              <div class="detail-box" style="padding: 0px;">
                <h5 class="display-6">Description:</h5>
              </div>
              <div>
                <p>{{$data->description}}</p>
              </div>

              <div class="detail-box">
                <a href="{{url('add_cart',$data->id)}}" class="btn btn-primary">Add to Cart</a>

                <a href="{{url('favorite',$data->id)}}" class="btn btn-primary">Add to Wishlist</a>
              </div>

          </div>

      </div>
      <!-- End Row -->

    </div>
    <!-- End Container -->

  </section>

  <br><br>

  @include('user.footer')

</body>

</html>