<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 style="color: #EF0107;" class="display-4 text-center">
          Latest Products
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
                <h6>{{$products->name}}</h6>
                <h6>
                  <span style="color: #EF0107;">₦{{$products->price}}</span>
                </h6>
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

    </div>
    <!-- End Container -->

      <div class="linkk">
        <button style="color: #EF0107;" class="btn btn-sbt" type="button"><a class="text-decoration-none" style="color: white;" href="{{url('shop')}}">View All</a></button>
      </div>


  </section>