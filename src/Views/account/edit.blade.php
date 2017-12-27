
@extends('vendor.laravelctct.layouts.master')

@section('template_title') Edit Account @endsection

@section('container')

<div class="panel panel-default">
	<div class="panel-body">

		<form method="post" action="{{ route('account.update') }}">
			 {!! csrf_field() !!}

			<div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
				<label for="first_name">First Name</label>
			    <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $account->first_name }}">
			</div>

			<div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
	            <label for="last_name">Last Name</label>
	            <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $account->last_name }}">
	        </div>
	        <div class="clearfix"></div>

	        <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
				<label for="email">Email</label>
			    <input type="email" name="email" class="form-control" id="email" value="{{ $account->email }}">
			</div>

			<div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
	            <label for="phone">Phone</label>
	            <input type="text" name="phone" class="form-control" id="phone" value="{{ $account->phone }}">
	        </div>
	        <div class="clearfix"></div>

	        <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
	            <label for="organization_name">Company Name</label>
	            <input type="text" name="organization_name" class="form-control" id="organization_name" 
	            	value="{{ $account->organization_name }}">
	        </div>
	       
	        <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
	            <label for="company_logo">Company Logo</label>
	            <input type="text" name="company_logo" class="form-control" id="company_logo" value="{{ $account->company_logo }}">
	        </div>
	        <div class="clearfix"></div>

	        <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
	            <label for="time_zone">Timezone</label>
	            <input type="text" name="time_zone" class="form-control" id="time_zone" value="{{ $account->time_zone }}">
	        </div>
	       
	        <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
	            <label for="website">Website</label>
	            <input type="url" name="website" class="form-control" id="website" value="{{ $account->website }}">
	        </div>
	        <div class="clearfix"></div>

	        <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
	            <label for="country_code">Country</label>
	            <input type="text" name="country_code" class="form-control" id="country_code" value="{{ $account->country_code }}">
	        </div>
	       
	        <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
	            <label for="state_code">State</label>
	            <input type="text" name="state_code" class="form-control" id="state_code" value="{{ $account->state_code }}">
	        </div>
	        <div class="clearfix"></div>
	       
	       @foreach( $account->organization_addresses as $address )
	       <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            <label for="address">Address</label>
	            <input type="text" name="organization_addresses[line1]" class="form-control" id="address" 
	            	value="{{ $address['line1'] }}">
	        </div>
	        <div class="clearfix"></div>

	        <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
	            <label for="city">City</label>
	            <input type="text" name="organization_addresses[city]" class="form-control" id="city" 
	            	value="{{ $address['city'] }}">
	        </div>
	        <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
	            <label for="state_code">State</label>
	            <input type="text" name="organization_addresses[state_code]" class="form-control" id="state_code" 
	            	value="{{ $address['state_code'] }}">
	        </div>
	        <div class="clearfix"></div>

	        <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
	            <label for="country_code">Country</label>
	            <input type="text" name="organization_addresses[country_code]" class="form-control" id="country_code" 
	            	value="{{ $address['country_code'] }}">
	        </div>
	        <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
	            <label for="state">Postal Code</label>
	            <input type="text" name="organization_addresses[postal_code]" class="form-control" id="postal_code" 
	            	value="{{ $address['postal_code'] }}">
	        </div>
	        <div class="clearfix"></div>
	        <input type="hidden" name="organization_addresses[state]" value="{{ $address['state'] }}">
	        @endforeach

			<input type="hidden" name="_method" value="put">

			<div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
				<button type="submit" class="btn btn-primary">Save Changes</button>
			</div>
		</form>

		
	</div>
</div>

@endsection