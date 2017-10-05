@extends('master')

@section('content')
 <div class="row">
 	<div class="col-md-12">
 		<h1>My Galleries</h1>


</div>
</div>

<div class="row">
<style>
	h1{

		font-size: 40px;
	}
</style>
	<div class="col-md-12">
		@if ($galleries->count() > 0)
		<table class="table table-striped table-bordered table-responsive">
			<thead>
				<tr class="info">
					<th>Name of gallery</th>
						<th></th>
				</tr>
			</thead>

			<tbody>
				@foreach ($galleries as $gallery)
				<tr>
					<td>{{$gallery->name}} 
						<span class="pull-right">
							{{ $gallery->images()->count() }}

						</span>
				</td>
					<td><a href="{{url('gallery/view/' . $gallery->id)}}">View</a> / 
											
					<a href="{{url('gallery/delete/' . $gallery->id)}}">Delete</a>
				</td>

					
				</tr>
				@endforeach
			</tbody>

		</table>
		@endif
	</div>
	<div class="col-md-4">
		@if (count($errors) > 0)
		<div class="alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form class="form" method="POST" action="{{url('gallery/save')}}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
			<input type="text" name="gallery_name" 
			id="gallery_name" placeholder="Name of the gallery"
			class="form-control
			value="{{ old('gallery_name') }}" />

		</div>

		<button class="btn btn-primary">Save</button>
		<a href="{{url('dashboard')}}" class="btn btn-primary">Back</a>
	</form>
	</div>
</div>

@endsection