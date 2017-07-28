@include('layout.header')
<br>
<div class="container" id="fh5co-hero">

      <div class="col-md-12">
                    <div class="row text-left comp-pg rate white-bg">
          <form name="test_document_upload_form" id="test_document_upload_form" enctype="multipart/form-data"  method="post">
          {{ csrf_field() }}
          
                  <table class="table table-striped">
                    
                   <tr >
                     <td><b>Bank Statements</b></td>
                     <td>
                       <select class="pad" id="bank_statement" name="bank_proof" required>
                         <option disabled selected  value="0">Select</option>
                         <option value="Bank_Statement">Bank Statement</option>
                         
                         </select class="pad">
                     </td>
                     <td><input type="file" name="bank_proof" id="bank_proof" class="pull-right" required="" data-category="1"> <input type="reset" id="reset_1"></td></td>
                   </tr>

                   <tr>
                     <td><b>Identity Proof</b></td>
                     <td>
                       <select  class="pad" id="identity" name="identity_proof" required>
                         <option disabled selected  value="0">Select</option>
                         <option value="PAN">PAN of the entity</option>
                         <option value="DOB">Date of Birth</option>
                         
                         </select class="pad">
                     </td>
                     <td><input type="file" name="identity_proof" id="identity_proof" class="pull-right" required="" data-category="2">
                     <input type="reset"  id="reset_2"></td>
                   </tr>

                    <tr>
                     <td><b>VAT Proof</b></td>
                     <td>
                       <select class="pad" id="vat" name="vat_proof" required>
                         <option disabled selected  value="0">Select</option>
                         <option value="Tax_Returns">VAT/Service Tax Returns</option>
                        </select class="pad">
                     </td>
                     <td><input type="file" name="vat_proof" id="vat_proof" class="pull-right" required data-category="3"> <input type="reset" id="reset_3"></td></td>
                   </tr>

                   <tr>
                     <td><b>Proof of activity</b></td>
                     <td>
                       <select class="pad" id="activity" name="Proof_of_activity" required>
                         <option disabled selected  value="0">Select</option>
                         <option value="Registration_certificate">Registration certificate</option>
                         <option value="Sales_and_income_tax_returns">Sales and income tax returns</option>
                         <option value="CST/VAT_certificate">CST/VAT certificate</option>
                         <option value="Certificate">License issued by the Municipal</option>
                         <option value="Registration_Document">Document Issued By Sales Tax</option>
                         
                         </select class="pad">
                     </td>
                     <td><input type="file" name="Proof_of_activity" id="Proof_of_activity" class="pull-right" required data-category="4"> <input type="reset" id="reset_4"></td></td>
                   </tr>
                  </table>

                  <!-- <span id="statement"></span> -->
                  <div style="text-align: center;">
                                <a class="btn btn-danger btn-outline with-arrow mrg-top" id="lendingkart_doc">Submit<i class="icon-arrow-right"></i></a></div>

                                

            </form>
            
        
</div>
</div>
</div>
<br>
@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
  $('#lendingkart_doc').click(function(){
        alert('ok');
       if(! $('#test_document_upload_form').valid()){
             // alert('not valid');

        }else{

            // $('#financial_doc').show();
        $.ajax({
          url:"{{URL::to('test_doc_upload')}}" ,  
          data:new FormData($("#test_document_upload_form")[0]),
          dataType:'json',
          async:false,
          type:'POST',
          processData: false,
          contentType: false,
          success: function(msg){
             console.log(msg.status);
             if (msg.status==1) 
             {
             alert("Only Pdf are allowed");
             }
            
              
            
            }
        });
     } 
    });
</script>

<!-- <script type="text/javascript">
    $('#reset_1').click(function(){
        $("#bank_statement")[0].selectedIndex = 0;
    });

    $('#reset_2').click(function(){
        $("#identity")[0].selectedIndex = 0;
    });

    $('#reset_3').click(function(){
        $("#vat")[0].selectedIndex = 0;
    });

    $('#reset_4').click(function(){
        $("#activity")[0].selectedIndex = 0;
    });
</script> -->
