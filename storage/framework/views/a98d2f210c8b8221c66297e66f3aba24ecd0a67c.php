<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>BALANCE TRANSFER SAVING</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo e(URL::to('css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />    
	<link href="<?php echo e(URL::to('css/component.css')); ?>" rel="stylesheet" type="text/css"  />
    <link href="<?php echo e(URL::to('css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(URL::to('css/style-home-loan.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(URL::to('css/responsive-home-loan.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>css/bootstrap-material-datetimepicker.css
    <![endif]-->

	<link rel="stylesheet" href="<?php echo e(URL::to('css/bootstrap-material-datetimepicker.css')); ?>"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
	<!--<script src="js/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>-->
	
	
	<script type="text/javascript" src="<?php echo e(URL::to('js/material.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(URL::to('js/moment-with-locales.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(URL::to('js/bootstrap-material-datetimepicker.js')); ?>"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>


	<style>
	.slider {
  position: relative;
  margin-top: 20px;
  margin-bottom: 15px;
  width: 90%;
  background: #2A3137;
  /* -moz-box-shadow: inset 0 0 10px #999;
  -webkit-box-shadow: inset 0 0 10px #999;
  box-shadow: inset 0 0 10px #999;*/
  height: 15px;
  border-radius: 10px;
  border: 1px solid #DDDDDD;
  margin-left: 15px;
}

.slider .ui-slider-handle {
  position: absolute;
  background: #10A447;
  border-radius: 5px;
  width: 20px;
  height: 50px;
  top: -16px;
  left: 50px;
  border-style: none;
  box-shadow: none;

}

.no-brd {border-bottom:none;}

	 
.price-box {
	margin: 0 auto;
	border-radius: 10px;
	
}

.ui-widget-content {
	border: 1px solid #bdc3c7;
	background: #e1e1e1;
	color: #222222;
	margin-top: 4px;
}

.ui-slider .ui-slider-handle {
	position: absolute !important;
	z-index: 2 !important;
	width: 4.0em !important;
	height: 2.1em !important;
	cursor: default !important;
	margin: 0 -20px auto !important;
	text-align: center !important;	
	
	color: #FFFFFF !important;
	
}

.ui-corner-all {
	/*border-radius: 20px;*/
}

.ui-slider-horizontal .ui-slider-handle {
	top: -3em !important;
}

.ui-state-default,
.ui-widget-content .ui-state-default {
	background: #393a40 !important;
}

.ui-slider-horizontal .ui-slider-handle {
	margin-left: -27px !important;
}

.ui-slider .ui-slider-handle {
	cursor: pointer;
}

.ui-slider a,
.ui-slider a:focus {
	cursor: pointer;
	outline: none;
}

.price, .lead p {
	font-weight: 600;
	font-size: 32px;
	display: inline-block;
	line-height: 60px;
}

h4.great {
	background: #00ac98;
	margin: 0 0 55px -60px;
	padding: 7px 15px;
	color: #ffffff;
	font-size: 18px;
	font-weight: 600;
	border-radius: 5px;
	display: inline-block;
	-moz-box-shadow:    2px 4px 5px 0 #ccc;
  	-webkit-box-shadow: 2px 4px 5px 0 #ccc;
  	box-shadow:         2px 4px 5px 0 #ccc;
}

.price-slider {
	margin-bottom: 70px;
}

.form-pricing {
	background: #ffffff;
	padding: 20px;
	border-radius: 4px;
}

.price-form {
	background: #ffffff;
	margin-bottom: 10px;
	padding: 20px;
	border: 1px solid #eeeeee;
	border-radius: 4px;
}

.form-group {
	margin-bottom: 0;
}

.form-group span.price {
	font-weight: 200;
	display: inline-block;
	color: #7f8c8d;
	font-size: 14px;
}

.help-text {
	display: block;
	margin-top: 32px;
	margin-bottom: 10px;
	color: #737373;
	position: absolute;
	font-weight: 200;
	text-align: right;
	width: 188px;
}

.price-form label {
	font-weight: 200;
	font-size: 21px;
}

.ui-slider-range-min {
	background: #2980b9;
}

.ui-slider-label-inner {
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 10px solid #393a40;
    display: block;
    left: 50%;
    margin-left: -10px;
    position: absolute;
    top: 100%;
    z-index: 99;
}

label {
    color: #fff;13px
    font-size: ;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left:10px;
    top: 1px;
    transition: all 0.2s ease;
    font-weight: 500;
}
	</style>
	
  </head>
  
  <body class="cbp-spmenu-push">
   
	
	<div class="">
       <!-- Main content -->
        <section class="container-1">
			<div class="row">
				<!-- Tab Attribute -->
				
				
				
				<div class="container">
				<div class="col-xs-12 pad-1">
				<!-- Tab Contents -->
				<div id="myTabContent" class="tab-content content-tab-style">
					<div class="tab-pane fade active top in" id="Property">
							
						
						
						<form action="" class="">
								<div class="form-group">
								<?php if(isset($_GET['product'])){?>
								<input type="hidden" name="product_id" id="product_ids" value="<?php echo $_GET['product'];?>">
								<?php }else{?>
								<input type="hidden" name="product_id" id="product_ids" value="12">
								<?php }?>

								<?php if(isset($_GET['brokerid'])){?>
								<input type="hidden" name="brokerid" id="brokerid" value="<?php echo isset($_GET['brokerid'])?$_GET['brokerid']:'';?>">
								<?php }else{?>
								<input type="hidden" name="brokerid" id="brokerid" value="0">
								<?php }?>

								<?php if(isset($_GET['app'])){?>
								<input type="hidden" name="app" id="appid" value="<?php echo isset($_GET['app'])?$_GET['app']:'';?>">
								<?php }else{?>
								<input type="hidden" name="app" id="appid" value="0">
								<?php }?>

								

								<?php if(isset($_GET['empcode'])){?>
								<input type="hidden" name="empcode" id="empcode" value="<?php echo isset($_GET['empcode'])?$_GET['empcode']:'';?>">
								<?php }else{?>
								<input type="hidden" name="empcode" id="empcode" value="0">
								<?php }?>

								
										
									<div class="col-xs-6 form-padding">
										<div class="form-control" title="Outstanding Principal (should be greater than 500000 and less than 1000000000)" style="margin-bottom:14px; height:50px; position:relative;">

											<input type="text" class="form-input-new" onkeyup="myfun()" required name="loanamount" id="loanamount" maxlength="9"  onkeypress="return isNumberKey(event)" onblur="alert_him(this)" >


											<span class="highlight"></span><span class="bar"></span>
											<label class="form-label-new">Outstanding Principal
										    </label>
											<div class="clear"></div>
										</div>
									</div>
									
									<div class="col-xs-6 form-padding">
										<div class="form-control" title="Present Interest Rate(should be greater than 9.0%)" style="margin-bottom:14px; height:50px; position:relative;">

											<input type="text" class="form-input-new" onkeyup="myfun();alert_him1(this);" required name="loaninterest" id="loaninterest" step="0.01" min="0"  onkeypress="return isNumberKey(event)">

											<span class="highlight"></span><span class="bar"></span>
											<label class="form-label-new">Present Interest Rate </label>
											<div class="clear"></div>
										</div>
									</div>

									<div class="loan-tenure">
									<!-- <center>
										<div class="type-cover" >
											<p>Remaining Tenure</p>
										</div>
									</center> -->
									<!-- <div class="text-center">
										<div class="scaling-slider">
											
									<div class="price-box" >
									        
									            

									                <div class="col-sm-12" style="margin-top:30px;">
									                    <div id="slider" onchange="myfun()"></div>
									                    <a href="javascript:void(0);"><span id="minus1" class="glyphicon glyphicon-minus" style="float:left"></span></a><a href="javascript:void(0)"><span id="plus1" class="glyphicon glyphicon-plus" style="float:right"></span></a> 
									                    
									                </div>
									           
									           
									       
									    </div>	
    									
											
										</div>
									</div> -->
									<div class="col-xs-6 form-padding">
										<div class="form-control" title="Remaining Tenure" style="margin-bottom:14px; height:50px; position:relative;">

											<input type="text" class="form-input-new" onchange="myfun()" required name="loanterm" id="loanterm" onkeypress="return isNumberKey(event)">

											<span class="highlight"></span><span class="bar"></span>
											<label class="form-label-new">Remaining Tenure</label>
											<div class="clear"></div>
										</div>
									</div>
								</div>

								<div style="text-align: center;">
                                <button type="button" class="btn btn-success" id="submit">Submit</button>
                                </div>
                                <br>


								</div><!--End form group-->
								
							
								<input type="hidden" name="loanterm" class="form-control" id="loanterm">	
								<div class="form-group">
									<div class="col-xs-6 form-padding">
										<div class="form-control" style="margin-bottom:14px; height:50px; position:relative;">
											<span type="name" class="form-input-new" required></span>
											<span class="highlight"></span><span class="bar"></span>
											
											<span style="position: absolute; z-index: 999; margin: 1px 0 0 4px; font-size: 10px; color: #bababa;">PRESENT EMI</span>
											<h4 class="em1 pull-right">₹ <b><span id="emi">0</span></b></h4>
											<div class="clear"></div>
										</div>
									</div>
									<div class="col-xs-6 form-padding">
										<div class="form-control" style="margin-bottom:14px; height:50px; position:relative;">
											<span type="name" class="form-input-new" required ></span>
											<span class="highlight"></span><span class="bar"></span>
										
											<span style="position: absolute; z-index: 999; margin: 1px 0 0 4px; font-size: 10px; color: #bababa;">EMI REDUCTION</span>
											<h4 class="em5 pull-right">₹ <b><span id="emi3">0</span></b></h4>
											<div class="clear"></div>
										</div>
									</div>
									
								</div><!--End form group-->
								<div class="form-group">
									<div class="col-xs-6 form-padding">
										<div class="form-control" style="margin-bottom:14px; height:50px; position:relative;">
											<span type="name" class="form-input-new" required ></span>
											<span class="highlight"></span><span class="bar"></span>
										
											<span style="position: absolute; z-index: 999; margin: 1px 0 0 4px; font-size: 10px; color: #bababa;">NEW EMI</span>
											<h4 class="em6 pull-right">₹ <b><span id="emi4">0</span></b></h4>
											<div class="clear"></div>
										</div>
									</div>
									<div class="col-xs-6 form-padding">
										<div class="form-control" style="margin-bottom:14px; height:50px; position:relative;">
											<span type="name" class="form-input-new"  required></span>
											<span class="highlight"></span><span class="bar"></span>
											
											<span style="position: absolute; z-index: 999; margin: 1px 0 0 4px; font-size: 10px; color: #bababa;">INT. RATE REDUCTION</span>
											<h4 class="em7 pull-right"> <b><span id="emi5">0</span> %</b></h4>
											<div class="clear"></div>
										</div>
									</div>
									
								</div><!--End form group-->
							
							 <div class="loan-tenure">
									
									<div class="text-center">
										<div class="scaling-slider">
											<div class="pad" style="color:#999;padding-top:5px;">YOUR SAVINGS THROUGH REDUCED INTEREST </div>
											<div><b style= " font-size:34px;color:#c00000;">₹ <span  id="emi6" style= " font-size:35px;color:#c00000;">0</span></b></div>
										</div>
									</div>
								</div>
							
							
							
							
							
							
							<div class="scroll-main" id="test" style="display:block;">
							
						</div>

							</form>

					</div>
					
				
						
						<!-- panel close -->
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix top-type-info"></div>
        </div><!-- /.row -->

        <div class="modal fade" tabindex="-1" role="dialog" id="homeTransfer">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h5><p>Outstanding Principal (should be greater than 500000 and less than 1000000000).</p></h5>
        
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


    <div class="modal fade" tabindex="-1" role="dialog" id="homeTransfer1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h5><p>Interest should be <mark style="color:red">greater than 8.0%</mark>.If less.Congrats you are already on lowest rate.</p></h5>
        
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


		</section><!-- /.content -->
	 
      <!-- <footer>
        <div class="row">
            <div class="col-xs-12">
				<p><a href="#">GET QUOTES</a></p>
				<p style="display:none;"><a href="#">BACK TO INPUT</a></p>
			</div>
        </div>
    </footer>
    </div> ./wrapper -->
	
	<script>
		$(document).ready( function(){
		
			$('.income-source > div').click(function(){
				$('.income-source > div').removeClass('income-source-active');
				$(this).toggleClass('income-source-active');
			});
			
			$('.scenario > div').click(function(){
				$('.scenario > div').removeClass('scenario-active');
				$(this).toggleClass('scenario-active');
			});
		});
			
	</script>
	
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('#date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});
			
			$('#date1').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});
			$('#date2').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});
			
			$('#time').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});

			$('#date-format').bootstrapMaterialDatePicker
			({
				format: 'dddd DD MMMM YYYY - HH:mm'
			});
			$('#date-fr').bootstrapMaterialDatePicker
			({
				format: 'DD/MM/YYYY HH:mm',
				lang: 'fr',
				weekStart: 1, 
				cancelText : 'ANNULER',
				nowButton : true,
				switchOnClick : true
			});

			$('#date-end').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm'
			});
			$('#date-start').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
			}).on('change', function(e, date)
			{
				$('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
			});

			$('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

			$.material.init()
		});
		</script>
	
	<script src="js/classie.js"></script>
		
		
		
		<script src="js/bootstrap.min.js" type="text/javascript"></script>  
		
		<script>
			$(window, document, undefined).ready(function() {

			  $('input').blur(function() {
				var $this = $(this);
				if ($this.val())
				  $this.addClass('used');
				else
				  $this.removeClass('used');
			  });

			  var $ripples = $('.ripples');

			  $ripples.on('click.Ripples', function(e) {

				var $this = $(this);
				var $offset = $this.parent().offset();
				var $circle = $this.find('.ripplesCircle');

				var x = e.pageX - $offset.left;
				var y = e.pageY - $offset.top;

				$circle.css({
				  top: y + 'px',
				  left: x + 'px'
				});

				$this.addClass('is-active');

			  });

			  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
				$(this).removeClass('is-active');
			  });

			});
		</script>
		 <script>
	       $(document).ready(function () 
	       {
        $("#slider").slider({
            range: "min",
            animate: true,
            value: 0,
            min: 0,
            max: 30,
            
            slide: function (event, ui)

            {
                update(1, ui.value); //changed

            }

        });
        $("#plus1").click(function (event,ui) {
        	//alert("ok");
    			var value = $("#slider").slider("value");

			    var step = $("#slider").slider("option", "step");
			    $("#slider").slider("value", value + step);
			    var up = value + step;
			    //update(value + step, ui.value);
			    $('#slider a').html('<label>' + up + ' yrs  </label><div class="ui-slider-label-inner"></div>');
		  });

		  $("#minus1").click(function () {
		  	var value = $("#slider").slider("value");

			    var step = $("#slider").slider("option", "step");
			    $("#slider").slider("value", value - step);
			    var down = value - step;
			    $('#slider a').html('<label>' + down + ' yrs  </label><div class="ui-slider-label-inner"></div>');
		  });
        
        //Added, set initial value.
        $("#amount").val(0);
        $("#amount-label").text(0);



        update(0,0);
    });

    //changed. now with parameter
    function update(slider, val) {
       
        var $amount = val;
         //console.log(val);
         $("#amount").val($amount);
        // console.log($("#amount").val($amount));
        $("#amount-label").text($amount);
        //console.log($("#amount-label").text($amount));
        var yrs = "yrs";

        $('#slider a').html('<label>' + $amount + ' yrs  </label><div class="ui-slider-label-inner"></div>');

    }
	</script>
	<script type="text/javascript">

  $(document).ready(function(){
    $("#Month").change(function(){
      var amt = $("#loanterm").val();
      var month = amt;
      
      //console.log(month);
      $('#loanterm').val(month);
    });
    $("#Year").change(function(){
      var amt1 = $("#loanterm").val();
      var yr = amt1 / 12;
      
      $('#loanterm').val(yr);
    });
    });
</script>

<script type="text/javascript">
// $('#slider').slider({
//     change: function(event, ui) { 
//         //alert(ui.value); 
//         $("#loanterm").val(ui.value);
//         myfun();

//     } 

// }
// );


 
  function myfun(){ 
  	alert_him();
    var lm = $("#loanamount").val().length;
       var lin = $("#loaninterest").val().length;
       var lt = $("#loanterm").val().length;
       if(lm >0 && lin >0 && lt>0){
      
      var loanamount = $("#loanamount").val();
      // if(loanamount<500000 || loanamount>1000000000){
      // 	alert("Amount should be greater than 500000 and less than 1000000000  ");
      // }

      var loaninterest = $("#loaninterest").val();
      var product_id = $("#product_ids").val();
      var app_id = $("#appid").val();
      var empcode = $("#empcode").val();
      var brokerid = $("#brokerid").val();
      // console.log(brokerid);
      // if(loaninterest<9){
      // 	alert("Interest Rate should be greater than 9%. If less, you are already on lower rate");
      // }
      var a = $("#loanterm").val();
      var loanterm =a*12;
       

      
       var v_token = "<?php echo e(csrf_token()); ?>";
      $.ajax({  
               type: "POST",  
               url: "<?php echo e(URL::to('calculationfordc')); ?>",
               dataType:'json',
               data : { 'loanamount': loanamount , 'loaninterest': loaninterest ,'loanterm' :loanterm,'product_id': product_id ,'app': app_id ,'empcode':empcode,'brokerid':brokerid,'_token': v_token},
               // 'bank':bank},
               success: function(msg){
                  // console.log(msg.success);
                  if(msg.success ==true){
                  var numb = msg.amount.toFixed();
                   $('#emi').empty().append(numb);
                  
                    var numb1 = msg.drop_emi.toFixed();
                  $('#emi3').empty().append(numb1);

                    var numb2 = msg.new_amount.toFixed();
                   $('#emi4').empty().append(numb2);

                  
                   $('#emi5').empty().append( msg.drop_in_int);

                   var numb4 = msg.savings.toFixed();
                   $('#emi6').empty().append(numb4);
                   	 


                        $("#1").show();
                        $("#4").show();
                        $("#5").show();
                        $("#6").show();
                        $("#7").show();
                        $('#test').html(msg.html);
                        $('#test').show();
                    }

                  else{ 
                   $('#emi').empty().append("");
                  
                  $('#emi3').empty().append("");

                   $('#emi4').empty().append("");

                  
                   $('#emi5').empty().append("");
                   $('#emi6').empty().append("");

                        $("#1").show();
                        $("#4").show();
                        $("#5").show();
                        $("#6").show();
                        $("#7").show();
                        $('#test').hide();
                        $('#').hide();
                        
                      

                   }
                 }  
                }); 
        
        
        $("#err").hide();
      }else{
        $("#err").show();
      }
    
  }

 
</script>
<script type="text/javascript">
	function alert_him(e){
		//console.log(e.id + " "+e.value);
 	
 	//  if(e.id=="loanamount" &&( e.value<500000 || e.value>1000000000)){

 	// 	// alert("Outstanding Principal (should be greater than 500000 and less than 1000000000)");
 	// 	$('#homeTransfer').modal('show');

 	//  }else if(e.id=="loaninterest" && e.value < 9 && e.value != ""){

 	//  	// alert("Congrats you are already on lowest rate.");
 	//  	$('#homeTransfer1').modal('show');

 	// }
 	$("#loanamount").change(function(){
	if(parseInt(this.value) < 500000 || parseInt(this.value)>1000000000){
        $('#homeTransfer').modal('show');
     }
})
 }	
</script>
<script type="text/javascript">
	function alert_him1(e){
		
 	$("#loaninterest").change(function(){
	if(parseInt(this.value) < 8 || this.value == 8){
        $('#homeTransfer1').modal('show');
     }
})
}
</script>
<script>
function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }

</script>




  </body>
  
 
</html>