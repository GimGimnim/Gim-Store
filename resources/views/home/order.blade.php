<!DOCTYPE html>
<html>

<head>
 
 @include('home.head')

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
    width: 100%;
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

  .ddg
  {
    padding: 40px;
    border: 1px solid #EF0107;
    width: 100%;
  }

</style>

</head>

<body style="background-color: rgba(255,229,180,0.2);">
  <div class="hero_area">
    
  @include('home.header')

  </div>
  
  <section class="shop_section layout_padding">
    <div class="container">
    <div class="text-center pt-4 pb-3">
      <h3 style="color: #EF0107;" class="display-4">MY ORDERS</h3>
    </div>

    <div class="dsg">

      <table>

        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Color</th>
          <th>Quantity</th>
          <th>Price</th>
        </tr>

        @foreach($order as $order)

        <tr>
          <td><img src="{{$order->product->image}}" style="width: 40%; margin-left: -50px; margin-right: -50px; padding: 0px;"></td>
          <td>{{$order->product->name}}</td>
          <td>{{$order->product->color}}</td>
          <td>{{1}}</td>
          <td>${{$order->product->price * 1}}</td>
        </tr>

        @endforeach

      </table>
    </div>

    </div>
    <!-- End Container -->

  </section>

  <br><br>

  @include('home.footer')

</body>

</html>
