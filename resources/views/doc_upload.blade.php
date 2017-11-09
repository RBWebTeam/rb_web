@include('layout.header')
<div id="fh5co-hero">
<div class="container">
<div class="panel panel-primary">
  <div class="panel-heading"><h2>Upload Your Document Proof here</h2></div>
  <div class="panel-body">
Please Upload below documents :

		<form action="{{ url('doc-upload') }}" enctype="multipart/form-data" method="POST">
			{{ csrf_field() }}
			<div class="row form-group">
			<input type="hidden" name="app_id" value=<?php if(isset($_GET['app_id']))echo $_GET['app_id'];else echo 0;?>>
				<div class="col-md-6">Identity Proof</div>
				<div class="col-md-6">
				<input type="file" name="Identity_Proof" required="" />
				</div>
			<div class="col-md-6">Income Proof</div>
				<div class="col-md-6">
				
					<input type="file" name="Income_Proof" required/>
				</div>
				
			<div class="col-md-6">Address Proof</div>
				<div class="col-md-6">
				
					<input type="file" name="Address_Proof" required />
				</div>

				<div class="col-md-6">
					<button type="submit" class="btn btn-success"> Upload Address Proof</button>
				</div>
			</div>
		</form>

  </div>
</div>

</div>
</div>
@include('layout.footer')
@include('layout.script')

