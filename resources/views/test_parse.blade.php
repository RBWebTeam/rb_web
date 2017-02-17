@include('layout.header')
<div id="fh5co-hero">
    <div class="fh5co-contact animate-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
                    <h2>Free Credit Report</h2>
                    
                </div>
                <div class="col-md-12 white-bg">
                    <div class="row text-left comp-pg rate">
                        <p><b>Would you like to know your credit score before applying  for a loan?</b></p>
                        <p>Your personal information is required to retrieve your Credit Report and Score. 
                            All the information you provide will be transferred to us through a private secure connection.</p>
                            <form class="" id="compareform" role="form" method="POST" name="Experian_form"
                            action="show-credit-report" >
                             
                                
                                    <div class="row">
                                        <div class="form-group">
                                            <h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Identity Details</h4>
                                            <div class="col-md-4">
                                                <input type="text" id="pan" name="panNo" class="form-control" placeholder="Pancard*" required="required">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Passport No" id="passport" name="passport"   >
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Aadhaar No" id="aadhaar" name="aadhaar">
                                            </div>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Voter Id" name="voterid" id="voterid" >
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Driving License No" name="driverLicenseNo" id="driverLicenseNo" >
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Ration card No" name="rationcard" id="rationcard" >
                                            </div>
                                        
                                        </div>
                                        <div id="id_error" class="error" style="display: none;">Atleast one Identity Proof is required</div>
                                        <div class="col-md-12">
                                    <a class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated" value="Get Checked" onclick ="return checkButton()" >Confirm & Continue<i class="icon-arrow-right"></i>
                                    </a>
                                    <p><b>All <mark style="color:red">*</mark>fields are mandatory.</b></p>
                                    </div>
                                    <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                     <img src="images/ajaxloader.gif" alt="loading" style="top: 50%; position: relative; left: 50%;"  />
                                        </div> 
                                </div>
                            </form>
                    </div>

                </div>
            </div>
        </div>  
    </div>
</div>
@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
function checkButton(){
if(!($("#pan").val() || $("#passport").val() || $("#aadhaar").val() || $("#voterid").val() ||$("#driverLicenseNo").val() || $("#rationcard").val() )){
   
        $('#id_error').show();
   
    return false;
}       
$('#id_error').hide();

}


</script>