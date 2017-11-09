@include('layout.header')
<br>
<style type="text/css">
    .track-form {
    width: 273px;
    margin: 0 auto;
    position: relative;
}
.track-form {
    width: 273px;
    margin: 0 auto;
    position: relative;
}
.track-app-status .dec {
    color: #33495f;
    font-size: 11px;
    padding: 10px 0 0;
}
.dontshow {
    display: none;
}
.or-round {
    height: 42px;
    margin: 8px auto 0;
    padding: 0;
    width: 100%;
    position: relative;
}
.track-form .btn-primary {
    margin: 6px 0 0 0;
}
.track-app-status .track-app-error, .track-app-status .message {
    display: block;
    background-color: #f1c40f;
    border-radius: 6px;
    color: #fff;
    font-size: 15px;
    font-weight: bold;
    padding: 10px 10px 10px 47px;
    width: 100%;
    margin-top: 12px;
    margin-bottom: 0;
    line-height: normal;
    position: relative;
    -moz-animation: bounce 1s 1 alternate;
    -ms-animation: bounce 1s 1 alternate;
    -o-animation: bounce 1s 1 alternate;
    -webkit-animation: bounce 1s 1 alternate;
    animation: bounce 1s 1 alternate;
}
.error-icon {
    display: block;
    float: left;
    padding-right: 5px;
}
.track-form input, .track-form button {
    margin: 20px 0 0 0;
    height: 40px;
}
.or-round .line {
    height: 1px;
    background: #e5e5e5;
    position: absolute;
    width: 100%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}
.or-round .round-box {
    width: 40px;
    height: 40px;
    margin: 0 auto;
    line-height: 40px;
    border-radius: 100px;
    background: #fff;
    border: 1px solid #e5e5e5;
    z-index: 1;
    position: absolute;
    left: 0;
    right: 0;
    text-align: center;
}
.track-app-status h2 {
    font-size: 26px;
    color: #33495f;
    text-align: center;
}
.track-form input, .track-form button {
    margin: 20px 0 0 0;
    height: 40px;
}
input[type="text"], input[type="email"], input[type="tel"], input[type="password"], select {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
}
.btn-secondary {
    background: #34495e;
    color: #fff;
}

</style>
<div class="container" id="fh5co-hero">
        <div class="track-app-status"><br>
            <h2>Track Your Application Status</h2>
            <div class="track-form">
                <div class="dec">To Know Your Loan Application Status, Please fill the following details.</div>
                <div class="dontshow" id="js-server-error"><table class="message"><tbody><tr><td><span class="error-icon"><img src="images/icon-error.png"></span></td><td><span class="error-info"></span></td></tr></tbody></table></div>
                <form id="tracapp" name="tracapp" method="post" action="view-your-application">
                {{ csrf_field() }}
                <input type="text" name="App_Id" maxlength="12" value="" id="applicationId"  placeholder="Application ID" required></label>
                    
                    <div class="js-mobileNumber">
                            <input type="text" name="Mobile" onkeypress="return fnAllowNumeric(event)" placeholder="Mobile Number" minlength="10" maxlength="10" required
                            value ="<?php echo Session::get('contact')?Session::get('contact'):"";?>"></label>
                        </div>
                    <button class=" btn-block btn btn-secondary" id="trackid" type="submit">Track application</button>
                </form>
<?php if(Session::get('is_login')){
                            ?>
                            <?php }else{?>

<div class="or-round">
                        <div class="line"></div>
                        <span class="round-box">OR</span>
                    </div>
                    <button class=" btn-block btn btn-primary js-login" href="#" data-toggle="modal" data-target="#log_popup">Login</button>
                <li class="dontshow">

<input type="hidden" name="errorMsg" value="" id="errorMsg">
</li>
<?php }?>
</div>
        </div>
    </div>

<br>
@include('layout.footer')
@include('layout.script')

<script type="text/javascript">

 $("#trackid").click(function(event){
         event.preventDefault();
      if(!  $('#tracapp').valid()){
        return false;
      }else{
        document.getElementById('tracapp').submit();

            
      //    $.ajax({  
      //    type: "POST",  
      //    url: "{{URL::to('trackapp_sub')}}",
      //    data : $('#tracapp').serialize(),
      //    dataType: 'json',
      //    success: function(msg){
      //    $(".iframeloading").hide(); 
      //     if(msg==2){
      //        alert("Something Went Wrong");       
      //     } 
      //     else{
            
      //     }

      //   }  
      // });
      }
});
</script>