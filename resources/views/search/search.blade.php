@extends('layouts.welcome_loggedin')

@section('content')
<div class="masthead">
	<div class="container h-100">
		<br></br>
		<div class="row h-75 align-items-center">
			<div style="top: 20%;" class="col-12">
				<h1 class="font-weight-bold">Search Cars</h1>
				<div class="form-group">
 					<input type="text" name="search" id="search" class="form-control" placeholder="Search cars..." />
				</div>
        <h2 class="font-weight-bold">Cars</h2>
				<div id='community_thumbnails'></div>
			</div>
		</div>
	</div>
</div>

<script>

$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('search.search') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
		 $('#car_thumbnails').html(data.community_thumbnails);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});

</script>
@endsection
