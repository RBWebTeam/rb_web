<!DOCTYPE html>
<html>
<head>
	<title>Rupeeboss</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<div class="panel panel-primary">
  <div class="panel-heading"><h2>Upload Your Proof document here</h2></div>
  <div class="panel-body">
Please Upload below documents :
Identity Proof

	  	@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		@if ($message = Session::get('success'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>
		        <strong>{{ $message }}</strong>
		</div>
		<img src="/images/{{ Session::get('path') }}">
		@endif

		<form action="{{ url('doc-upload') }}" enctype="multipart/form-data" method="POST">
			{{ csrf_field() }}
			<div class="row form-group">
				<div class="col-md-12">
					<input type="file" name="Identity_Proof" />
				</div>
			
				<div class="col-md-12">
					<input type="file" name="Income_Proof" />
				</div>
				
			
				<div class="col-md-12">
					<input type="file" name="Address_Proof" />
				</div>
				<div class="col-md-6">
					<button type="submit" class="btn btn-success"> Upload Address Proof</button>
				</div>
			</div>
		</form>

  </div>
</div>

</div>

</body>
</html>