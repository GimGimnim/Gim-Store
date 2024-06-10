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

          	<h1 style="color: white;">Categories</h1>

          	<div>
          		<table class="dsg">
          			<tr>
          				<th>S/N</th>
          				<th>Category Name</th>
          				<th>Photo</th>
          				<th>Modify</th>
          			</tr>

          			@foreach($data as $data)

          			<tr>
          				<td>{{$data->id}}</td>
          				<td>{{$data->cat_name}}</td>
          				<td>{{$data->cat_photo}}</td>
          				<td>
          					<pre><a href="{{url('edit_category',$data->id)}}"><i style="color: blue;" class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>   <a onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}"><i style="color: red;" class="fa fa-trash fa-2x" aria-hidden="true"></i></a></pre>
          				</td>
          			</tr>
          			@endforeach
          		</table>
          	</div>

          	
          </div>
        @include('admin.footer')

        <script type="text/javascript">
        	
        	function confirmation(ev) {
        		ev.preventDefault();

        		var urlToRedirect = ev.currentTarget.getAttribute('href');

        		console.log(urlToRedirect);

        		swal({

        			title:"Delete Confirmation",
        			text:"Are you sure you want to delete this? This cannot be undone",
        			icon:"warning",
        			buttons: true,
        			dangerMode: true,

        		})

        		.then((willCancel)=>{

        			if (willCancel)
        			{
        				window.location.href=urlToRedirect;
        			}

        		});
        	}

        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>
   