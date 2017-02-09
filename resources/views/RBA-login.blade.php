@include('layout.header')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" id="fh5co-hero">
 <br>
  <form class="form-horizontal" id="rba_form">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="name"><b>Name:</b></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for=""><b>Email:</b></label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contact"><b>Contact:</b></label>
      <div class="col-sm-10">          
        <input type="tel" class="form-control" id="contact" placeholder="Enter number" name="contact" maxlength="10">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success register">Register</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>

@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
  $(".register").click(function(event){
    event.preventDefault();
      $form=$('#rba_form');
      if(! $form.valid()){
      }else{
        //var s=$('#'+form).serialize();

   
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('RBA-login')}}",
         data : $('#rba_form').serialize(),
         success: function(msg){
         console.log(msg);
          if(msg){
             window.location.href ="{{URL::to('thank-you')}}";
            
          }else{
            window.location.href ="{{URL::to('went-wrong')}}";
          } 
          

        }  
      }); 
      }

    });


</script>




