<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2  class="display-4 text-center text-danger">
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
                  <span>{{$products->price}}</span>
                </h6>
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

  </section>