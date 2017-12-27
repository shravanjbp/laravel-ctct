@extends('vendor.laravelctct.layouts.master')

@section('template_title') Campaigns List @endsection

@section('container')

<div class="panel panel-default">
	<div class="panel-body">
		
		<div class="table-responsive">
			<table class="table">
				<tbody>
					@foreach( $campaigns->results as $campaign )
						<tr>
							<td>
								<input type="checkbox" name="campaigns[]" value="{{ $campaign->id }}">
							</td>
							<td>
								<strong>{{ $campaign->name }}</strong><br>
								<span class="text-danger text-uppercase">{{ $campaign->status }}</span>,
								<span>Created {{ date('M, d Y', strtotime( $campaign->modified_date )) }}</span>
							</td>
							<td>
								
								<div class="dropdown">
								  	<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">More
								  	<span class="caret"></span></button>
								  	<ul class="dropdown-menu"  role="menu">
								    	<li><a href="#">Edit</a></li>
								    	<li><a href="#">Delete</a></li>
								    	<li><a href="#">Preview</a></li>
								    	<li><a href="#">Schedule</a></li>
								  	</ul>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

	</div>
</div>

@endsection