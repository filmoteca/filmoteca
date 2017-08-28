<?php session_start(); // place it on the top of the script ?>
<?php
    $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
    unset($_SESSION['msg']);
    echo $statusMsg;
?>

<div class="subscribe-box hidden-xs">
   {{ Form::open(array('route' => 'exhibitions.frontend.billboard.subscribe')) }}
	    <p>@lang('exhibitions.frontend.exhibition.show.receive_our_digital_billboard')</p>

		{{ Form::hidden('fromchimp', Request::path()) }}

			@if (Session::has('msg'))
				<div class="alert alert-success">
					{{ Session::get('msg') }}
				</div>
			@endif

	    <div class="input-group input-group-sm">
	        <input type="text" name="fname" placeholder="@lang('exhibitions.frontend.exhibition.show.enter_your_name')" class="form-control">
	        <input type="text" name="lname" placeholder="@lang('exhibitions.frontend.exhibition.show.enter_your_last')" class="form-control">
	        <input type="email" name="email" placeholder="@lang('exhibitions.frontend.exhibition.show.enter_your_email')" class="form-control">
	        <span class="input-group-addon">@</span>
	    </div>

	    <button type="submit" name="submit" class="btn btn-success">@lang('exhibitions.frontend.exhibition.show.send')</button>
    
    {{ Form::close() }}
</div>
