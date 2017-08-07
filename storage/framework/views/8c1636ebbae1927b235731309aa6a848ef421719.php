<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div class="container " id="fh5co-hero">
   <br>
  <div>
  <div class="col-md-12">
  <h2 class="text-center">RBA Registration</h2>
  <p id="showerror" class="text-center displaynone">Broker already exist</p>
    <br>
  </div>
<div class="col-md-2"></div>
  <div class="col-md-4 white-bg box-shadow rba-dv-hei">
  <form class="form-horizontal" id="rba_form">
    <?php echo e(csrf_field()); ?>

    <div>
      
      <div class="col-sm-12 xyz">
	  
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required="">
      </div>
    </div>
    <div>
      
      <div class="col-sm-12 xyz">
	
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
      </div>
    </div>
    <div>
      <div class="col-sm-12 xyz"> 
  
        <input type="tel" class="form-control" id="contact" placeholder="Enter number" name="contact" maxlength="10" pattern="[789][0-9]{9}" required="">
      </div>
    </div>
    
    <div>        
      <div class="col-sm-4 mrg-tpp">
        <button type="submit" class="btn btn-success btn-outline with-arrow register">Register<i class="icon-arrow-right"></i></button>
      </div>
    </div>
  </form>
  </div>
  
  <div class="col-md-4 rba_bg">
  <img src="images/rba_bg.png" alt="Rupeeboss Agent" title="Rupeeboss Agent" class="img-responsive"/>
  <div class="rba-log xyz">
  <form   name="rba_emp_login" id="rba_emp_login"  method="post"  >

  <?php echo e(csrf_field()); ?>


  <input type="text" placeholder="Username" class="form-control" required="" /> 
  <input type="password" placeholder="password" required="" class="form-control"/>
  <button type="submit" id="login_rba" class="btn btn-primary btn-outline with-arrow">LOGIN <i class="icon-arrow-right"></i></button>
  </div>
  </div>
  </form>
</div>
<div class="col-md-12 pad1 text-center">
  <marquee><h2 class="yellow-clr">Immediate Vacancy for <b>RBA's</b></h2></marquee>
  <p>"Your Android phone could be your workstation, helping you earn a handsome income, Work from anywhere and everywhere"</p>
  <p><b>Make your dreams come true by working for few hours in a day in your spare time!!!</b></p>
  <p>Don’t wait! You could be also one of them to make great money by working few hours a day.</p>
  <p><b>*Any Graduate/Undergraduate Also can Apply</b></p>
  <p>Training Location- Kurla(W)</p>
  <p>Please send your resume to rbaresponse@rupeeboss.com/Call us to book an Appointment  9029672272</p>
  
  </div>
</div>


<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script type="text/javascript">
  $(".register").click(function(event){
    event.preventDefault();
      $form=$('#rba_form');
      if(! $form.valid()){
      }else{
        //var s=$('#'+form).serialize();

   
        $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('RBA-login')); ?>",
         data : $('#rba_form').serialize(),
         success: function(msg){
         
          if(msg=='true'){
            console.log("ok");
             // console.log(msg);
              window.location.href ="<?php echo e(URL::to('thank-you')); ?>";
            
          }else{
            $("#showerror").show();

            //console.log("bye");
            //window.location.href ="<?php echo e(URL::to('went-wrong')); ?>";
          } 
          

        }  
      }); 
      }

    });


</script>
<!-- <script type="text/javascript">




$("#login_rba").click(function(event){



  event.preventDefault();
  var form=$(this).closest("form").attr('id');
    //console.log(form);return false;
    $form=$('#'+form);
    if(! $form.valid()){
    }else{
      var s=$('#'+form).serialize();

      alert(s);

      $.ajax({  
       type: "POST",  
       url: "<?php echo e(URL::to('RBA-login')); ?>",
       data : $('#'+form).serialize(),
       success: function(msg){
        
       

                    }  
                  }); 
    }

  });


</script> -->









