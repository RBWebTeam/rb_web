//  function validateForm() {
//     var fname = document.forms["myForm"]["fullname"].value;
//     if (fname == "") {
//         alert("Please Enter the Full Name");
//         return false;
//     }


//     var fmobile = document.forms["myForm"]["mobile"].value;
//     if (fmobile == "") {
//         alert("Please Enter the Mobile");
//         return false;
//     }

//     var fmodel = document.forms["myForm"]["makemodel"].value;
//     if (fmodel == "") {
//         alert("Please Enter Your Designation");
//         return false;
//     }

			
			

//     var fmakeyear = document.forms["myForm"]["mfdyear"].value;
//     if (fmakeyear == "") {
//         alert("Please Enter Company Name");
//         return false;
//     }
// 	var city = document.forms["myForm"]["city"].value;
//     if (city == "") {
//         alert("Please Enter City Name");
//         return false;
//     }

//     var fexpiredate = document.forms["myForm"]["turnover"].value;
//     if (fexpiredate == "") {
//         alert("Please Enter Turn Over");
//         return false;
//     }
//     	$('#mask').hide();
// 		$('.window').hide();
//         $('.dis').show();
// }



$(document).ready(function() {

		var id = '#dialog';

		var maskHeight = $(document).height();
		var maskWidth = $(window).width();

		$('#mask').css({'width':maskWidth,'height':maskHeight});

		$('#mask').fadeIn(500);
		$('#mask').fadeTo("slow",0.7);

		var winH = $(window).height();
		var winW = $(window).width();

		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);

		//transition effect
		$(id).fadeIn(2000);

	// $('.close').click(function (e) {
	//     e.preventDefault();
	//    //	$('#mask').hide();
	// 	//$('.window').hide();
 //         var ab= validateForm();
		   
	// 	   if(ab==false){
			    
	// 	   }else{
	// 		   document.location = "sendmail.php";
	// 	   }
		 
		   
	// });

});