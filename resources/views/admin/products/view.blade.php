<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
    	.dsg
    	{
    		text-align: center;
    		margin: auto;
    		border: 2px solid greenyellow;
    		margin-top: 50px;
    		width: 90%;
    	}

    	th
    	{
    		color: white;
    		background-color: blue;
    		padding: 15px;
    		font-size: 20px;
    		font-weight: bold;
    		border: 1px solid greenyellow;
    	}
    	td
    	{
    		color: black;
    		background-color: white;
    		padding: 15px;
    		border: 1px solid black;
    	}
    </style>
  </head>
  <body>
  	@include('admin.header')
    
    @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          	<h1 style="color: white;">Products</h1>

          	<div>
          		<table class="dsg">
          			<tr>
          				<th>S/N</th>
          				<th>Product Name</th>
          				<th>Summary</th>
          				<th>Photo</th>
          				<th>Edit</th>
          			</tr>

          			@foreach($data as $data)

          			<tr>
          				<td>{{$data->id}}</td>
          				<td>{{$data->prod_name}}</td>
          				<td>{{$data->prod_name}}</td>
          				<td>{{$data->prod_photo}}</td>
          				<td>
          					<!-- <a href="{{url('edit_product',$data->id)}}"><i style="color: blue;" class="icon-windows"></i></a> -->
          					<a class="btn btn-danger" href="{{url('delete_product',$data->id)}}"><i class="icon-windows"></i></a>
          				</td>
          			</tr>
          			@endforeach
          		</table>
          	</div>

          	
          </div>
        @include('admin.footer')
  </body>
</html>
   