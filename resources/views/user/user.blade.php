@extends('layouts.welcome_loggedin')

@section('content')
<script type="text/javascript">
		<?php
		Log::info('start unique_id: '.Session::get('unique_id'));
		Session::put('unique_id', 1);
		Log::info('end unique_id: '.Session::get('unique_id'));
		?>
</script>
<div class="masthead">
	<div class="container h-100">
		<br></br>
		<div class="row h-75 align-items-center">
			<div style="top: 20%;" class="col-12">
				<h1 class="font-weight-bold"><font color="black">Customer: {{$user->username}}</font></h1>
				<?php $desiredAutomobile = $user->userable->desiredAutomobile;?>
				@include('desired-automobile.desired-automobile-box')
				<br></br>
				<br></br>
			</div>
		</div>
	</div>
</div>
@endsection
