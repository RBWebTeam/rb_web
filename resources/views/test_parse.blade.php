@include('layout.header')
<div id="fh5co-hero">
	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
<form id="form" method="post" >
  <input type="text" name="first" required="" />
  <input type="text" name="second" required />
  
  <input type="submit" class="button selector" value="Submit" />
  </form>
  <div id="errorTxt"></div>
  </div>
  </div>
  </div>
  </div>


@include('layout.footer')
@include('layout.script')
<script type="text/javascript">
$('#form').validate({
      errorLabelContainer: '#errorTxt',
       messages: {
        first: "answer the question &nbsp",
        second: " answer the selector"

    }
});
  </script>