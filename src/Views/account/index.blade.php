
@extends('vendor.laravelctct.layouts.master')

@section('template_title') Account @endsection

@section('container')

<div class="panel panel-default">
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<tbody>
					<tr>
						<th>Website</th>
						<td>{{ $account->website }}</td>
					</tr>
					<tr>
						<th>Company Name</th>
						<td>{{ $account->organization_name }}</td>
					</tr>
					<tr>
						<th>TimeZone</th>
						<td>{{ $account->time_zone }}</td>
					</tr>
					<tr>
						<th>First Name</th>
						<td>{{ $account->first_name }}</td>
					</tr>
					<tr>
						<th>Last Name</th>
						<td>{{ $account->last_name }}</td>
					</tr>
					<tr>
						<th>Email</th>
						<td>{{ $account->email }}</td>
					</tr>
					<tr>
						<th>Phone</th>
						<td>{{ $account->phone }}</td>
					</tr>
					<tr>
						<th>Company Logo</th>
						<td>{{ $account->company_logo }}</td>
					</tr>
					<tr>
						<th>Country Code</th>
						<td>{{ $account->country_code }}</td>
					</tr>
					<tr>
						<th>State Code</th>
						<td>{{ $account->state_code }}</td>
					</tr>
					@foreach( $account->organization_addresses as $address )
					<tr>
						<th>City</th>
						<td>{{ $address['city'] }}</td>
					</tr>
					<tr>
						<th>Address1</th>
						<td>{{ $address['line1'] }}</td>
					</tr>
					<tr>
						<th>Postal Code</th>
						<td>{{ $address['postal_code'] }}</td>
					</tr>
					<tr>
						<th>Country Code</th>
						<td>{{ $address['country_code'] }}</td>
					</tr>
					<tr>
						<th>State Code</th>
						<td>{{ $address['state_code'] }}</td>
					</tr>
					<tr>
						<th>State</th>
						<td>{{ $address['state'] }}</td>
					</tr>
					@endforeach					
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection