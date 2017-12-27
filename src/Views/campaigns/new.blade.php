@extends('vendor.laravelctct.layouts.master')

@section('template_title') Add New Campaign @endsection

@section('container')

<div class="panel panel-default">
	<div class="panel-body">
		<form method="post" action="{{ route('campaigns.store') }}">
			{{ csrf_field() }}

			<div class="col-md-6">
            	<fieldset>
					<div class="form-group">
						<label for="name">Campaign Name</label>
					    <input type="text" name="name" class="form-control" id="name" 
					    	value="{{ old('name') }}">
					    @if ($errors->has('name'))
                        	<span class="help-block">
                                <strong class="text-danger">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
					</div>

					<div class="form-group">
			            <label for="subject">Subject</label>
			            <input type="text" name="subject" class="form-control" id="subject" 
			            	value="{{ old('subject') }}">
			        </div>

			        <div class="form-group">
						<label for="from_name">From Name</label>
					    <input type="text" name="from_name" class="form-control" id="from_name" 
					    	value="{{ old('from_name') }}">
					</div>

					<div class="form-group">
			            <label for="from_email">From Email</label>
			            <input type="email" name="from_email" class="form-control" id="from_email" 
			            	value="{{ old('from_email') }}">
			        </div>

			        <div class="form-group">
						<label for="text_content">Text Content</label>
					    <textarea id="text_content" name="text_content" class="form-control">
					    	{{ old('text_content') }}
					    </textarea>
					</div>

					<div class="form-group">
			            <label for="email_content">Email Content</label>
			             <textarea id="email_content" name="email_content" class="form-control">
			             	{{ old('email_content') }}
			             </textarea>
			        </div>
			   	</fieldset>
			</div>   
			
			<div class="col-md-6">
            	<fieldset>
            		<div class="form-group">
						<label for="greeting_string">Greeting String</label>
					    <input type="text" name="greeting_string" class="form-control" id="greeting_string" 
					    	value="{{ old('greeting_string') }}">
					</div>

					<div class="form-group">
			            <label for="reply_to_addr">Reply-To Email</label>
			            <input type="text" name="reply_to_addr" class="form-control" id="reply_to_addr" 
			            	value="{{ old('reply_to_addr') }}">
			        </div>
			        
			        {{-- 
			        <div class="form-group">
			            <label for="lists">Reply-To Email</label>
			        	<select multiple="multiple" name="lists[]" class="form-control">
                            @foreach ($lists as $list) 
                                <option value="{{ $list->id }} " >{{ $list->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    --}}

			        <div class="form-group">
			        	<label for="format">Email Content Format</label>
			        	<div>
				        	<label><input type="radio" id="name" name="format" value="HTML" checked> HTML</label>
				        	<label><input type="radio" id="name" name="format" value="XHTML"> XHTML</label>
				        </div>
			        </div>
            	</fieldset>
           	</div> 		

           	<div class="clearfix"></div>

           	<div class="col-md-12">
           		<button type="submit" class="btn btn-primary">Create</button>
	        </div>
		</form>
	</div>
</div>

@endsection