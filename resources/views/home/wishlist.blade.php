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

  .dsg
  {
    text-align: center;
    margin: auto;
    margin-top: 20px;
    margin-bottom: 10px;
    width: 90%;
  }

  th
  {
    color: white;
    background-color: #EF0107;
    padding: 15px;
    font-size: 20px;
    font-weight: bold;
    border: 1px solid black;
  }
  td
  {
    color: black;
    padding: 15px;
    font-weight: bold;
    background-color: white;
    border: 1px solid black;
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
        <h2 style="color: #EF0107" class="display-6 text-center">
          My Wishlist
        </h2>
      </div>

      

      <div class="dsg">

        <table class="dsg">
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th></th>
          </tr>

          @foreach($wishlist as $wishlist)

          <tr>
            <td><img src="{{$wishlist->product->image}}" style="width: 40%; padding: 0px;"></td>
            <td>{{$wishlist->product->name}}</td>
            <td>{{$wishlist->product->price}}</td>
            <td>
              <pre><a href="{{url('add_cart',$wishlist->product->id)}}"><i style="color: blue;" class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>    <a href="{{url('deletefav',$wishlist->id)}}"><i style="color: red;" class="fa fa-trash fa-2x" aria-hidden="true"></i></a></pre></td>
          </tr>
          @endforeach
        </table>
      </div>

    </div>
    <!-- End Container -->

    <div>
      {{$wishlist->links()}}
    </div>

  </section>

  <br><br>

  @include('user.footer')

</body>

</html>