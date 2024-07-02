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
		<div class="heading_container heading_center">
			<h2 style="color: #EF0107" class="display-6 text-center">
				My Cart
			</h2>
		</div>
		<div class="dsg">

  		<table>

  			<?php

  				$total = 0;
  			?>

  			<tr>
  				<th>Image</th>
  				<th>Name</th>
  				<th>Color</th>
  				<th>Quantity</th>
  				<th>Unit Price</th>
  				<th>Total Price</th>
  				<th>Remove</th>
  			</tr>

  			@foreach($cart as $cart)

  			<tr>
  				<td><img src="{{$cart->product->image}}" style="width: 40%; margin-left: -50px; margin-right: -50px; padding: 0px;"></td>
  				<td>{{$cart->product->name}}</td>
  				<td>{{$cart->product->color}}</td>
  				<td>{{1}}</td>
  				<td>${{$cart->product->price}}</td>
  				<td>${{$cart->product->price * 1}}</td>
  				<td><pre><a href="{{url('favorite',$cart->product->id)}}"><i style="color: red;" class="fa-sharp fa-solid fa-star fa-2x"></i></a>    <a href="{{url('deletecartitem',$cart->id)}}"><i style="color: red;" class="fa fa-trash fa-2x"></i></a></pre></td>
  			</tr>
        
  			<?php

  				$total = $total + ($cart->product->price * 1);
  			?>

  			@endforeach

  		</table>
    </div>

  	<div class="detail-box">
  		<h5 style="padding: 30px;" class="display-6">Total: ${{$total}}</h5>
  	</div>


    <div class="ddg">
        <form role="form" method="POST" action="{{url('checkout')}}">
          @csrf

          <div class="form-group">
            
          <h3 style="color: rgba(85,107,47, 1.0);">CHECKOUT</h3>
          <br>
              <div class="ntem">
                <label for="name">Receiver Name</label>
                <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
              </div>
              <br>
              <div class="ntem">
                <label for="phone">Receiver Phone</label>
                <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}">
              </div>
          </div>
          <br>
          <div class="form-group pb-2">
            <label class="form-label" for="address">Receiver Address</label>
            <textarea type="textarea" class="form-control" name="address" rows="5">{{Auth::user()->address}}</textarea>
          </div>
          <div class="form-group">
            <input type="submit" style="font-weight: bold; background-color: #EF0107; color: white;" class="form-control btn btn-block" value="Place Order">
          </div>
        </form>
    </div>

    </div>
    <!-- End Container -->

  </section>

  <br><br>

  @include('home.footer')

</body>

</html>