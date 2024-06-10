<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
    	
    	input[type='text']
    	{
    		width: 500px;
    		height: 50px;
    	}

    	.dsg
    	{
    		display: flex;
    		justify-content: center;
    		align-items: center;
    		margin: 30px;
    	}
    </style>
  </head>
  <body>
  	@include('admin.header')
    
    @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          	<h1 style="color: white;">Edit Category</h1>

          	<div class="dsg">
	          	<form action="{{url('edit_cat',$data->id)}}" method="POST">
	          		@csrf

	          		<div class="form-group">
	          			<input type="text" name="editcat" value="{{$data->cat_name}}">
	          		</div>
	          		<div class="form-group">
	          			<input type="text" name="editcatphoto" value="{{$data->cat_photo}}">
	          		</div>
	          		<div class="form-group">
	          			<input class="btn btn-primary" type="submit" value="Edit">
	          		</div>
	          	</form>
	        </div>

          </div>
        @include('admin.footer')
  </body>
</html>