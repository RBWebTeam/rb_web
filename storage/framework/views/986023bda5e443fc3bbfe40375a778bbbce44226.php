
<!---Talk to us Start -->
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Talk To Us</h4>
        </div>
        <div class="modal-body">
          <form name="talk_to_us_form" id="talk_to_us_form" method="post">
          <?php echo e(csrf_field()); ?>

          <input type="hidden" name="form" value="talk_to_us_form">
                  <div>
                    <fieldset>
                      <input class="newsletter-name" name="name" placeholder="Name" required>
                    </fieldset>
                    </div>
                  <div>
                    <fieldset>
                      <input type="text" class="newsletter-name" name="contact" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
                    </fieldset>                 
                    </div>
                  <div>
                      <button class="btn btn-primary btn-outline with-arrow sidebar-submit">Submit<i class="icon-arrow-right"></i></button>
                  </div>

            </form>
            <div class='msg displaynone' ><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err displaynone' ><p>Ooops. Something went wrong.</p></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default close1" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!---Talk To Us End -->
<!---Email Us Start -->
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Email Us</h4>
        </div>
        <div class="modal-body">
          <form name="email_us_form" id="email_us_form" method="post">
          <?php echo e(csrf_field()); ?>

          <input type="hidden" name="form" value="email_us_form">
                  <div>
                    <fieldset>
                      <input class="newsletter-name" name="name" placeholder="Name" required>
                    </fieldset>
                    </div>
                  <div>
                    <fieldset>
                      <input type="email" class="newsletter-name" name="email"  required  placeholder="Email address">
                    </fieldset>                 
                    </div>
                  <div>
                      <button class="btn btn-primary btn-outline with-arrow sidebar-submit">Submit<i class="icon-arrow-right"></i></button>
                  </div>
            </form>
            <div class='msg displaynone'><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err displaynone' ><p>Ooops. Something went wrong.</p></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default close1" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!---Email Us End -->
<!---Help Start -->
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Help</h4>
        </div>
        <div class="modal-body">
          <form name="help_form" id="help_form" method="post">
          <?php echo e(csrf_field()); ?>

          <input type="hidden" name="form" value="help_form">
                  <div>
                    <fieldset>
                      <input class="newsletter-name" name="name" placeholder="Name" required>
                    </fieldset>
                    </div>
                  <div>
                    <fieldset>
                      <input type="text" class="newsletter-name" name="contact" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
                    </fieldset>                 
                    </div>
                  <div>
                      <button class="btn btn-primary btn-outline with-arrow sidebar-submit">Submit<i class="icon-arrow-right"></i></button>
                  </div>
            </form>
            <div class='msg displaynone'><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err displaynone' ><p>Ooops. Something went wrong.</p></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default close1" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


  <!---Borrow-->
<div class="modal fade" id="myModaltest" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form name="borrow_form" id="borrow_form" method="post" >
        <div class="modal-header">
          
          <h4 class="modal-title"><b>Would You Like To Borrow</b></h4>
        </div>
          <?php echo e(csrf_field()); ?>

          <input type="hidden" name="form" value="balance_transfer_borrow_home_form">
          <input type="hidden" name="Principal_Amt" class="Principal_Amt" value="">
          <input type="hidden" name="Interest_Rate" class="Interest_Rate" value="">
          <input type="hidden" name="Remaining_Tenure" class="Remaining_Tenure" value="">
         
          <div>
                    <fieldset>
                      <input class="newsletter-name" name="name" placeholder="Name" required>
                    </fieldset>
                    </div>
                     <div>
                    <fieldset>
                      <input type="email" class="newsletter-name" name="email"  required  placeholder="Email address">
                    </fieldset>                 
                    </div>
                    <div>
                    <fieldset>
                      <input type="text" class="newsletter-name" name="contact" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
                    </fieldset>                 
                    </div>
                  <div>
                     <button class="btn btn-primary btn-outline with-arrow sidebar-submit">Submit<i class="icon-arrow-right"></i></button>
                  </div>
                  <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="<?php echo e(URL::to('images/ajaxloader.gif')); ?>" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
            </form>
            <div class='msg displaynone' ><b>Thanks.We will reach you soon.</b></div>
            <div class='msg_err displaynone' ><p>Ooops. Something went wrong.</p></div>
        </div>
        
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="borrow_lap" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form name="borrow_form_lap" id="borrow_form_lap" method="post" >
          <div class="modal-header">
          
          <h4 class="modal-title"><b>Would You Like To Borrow</b></h4>
        </div>
         
           <input type="hidden" name="form" value="balance_transfer_borrow_form_lap">
           <input type="hidden" name="Principal_Amt" class="Principal_Amt" value="">
          <input type="hidden" name="Interest_Rate" class="Interest_Rate" value="">
          <input type="hidden" name="Remaining_Tenure" class="Remaining_Tenure" value="">
         
          <?php echo e(csrf_field()); ?>

          
                  <div>
                    <fieldset>
                      <input class="newsletter-name" name="name" placeholder="Name" required>
                    </fieldset>
                    </div>
                     <div>
                    <fieldset>
                      <input type="email" class="newsletter-name" name="email"  required  placeholder="Email address">
                    </fieldset>                 
                    </div>
                    <div>
                    <fieldset>
                      <input type="text" class="newsletter-name" name="contact" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
                    </fieldset>                 
                    </div>
                  <div>
                     <button class="btn btn-primary btn-outline with-arrow sidebar-submit">Submit<i class="icon-arrow-right"></i></button>
                  </div>
                  <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="<?php echo e(URL::to('images/ajaxloader.gif')); ?>" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
            </form>
            <div class='msg displaynone'><b>Thanks.We will reach you soon.</b></div>
            <div class='msg_err displaynone' ><p>Ooops. Something went wrong.</p></div>
        </div>
        
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="borrow_personal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form name="borrow_form_personal" id="borrow_form_personal" method="post" >
          <div class="modal-header">
          
          <h4 class="modal-title"><b>Would You Like To Borrow</b></h4>
        </div>
        
           <input type="hidden" name="form" value="balance_transfer_borrow_form_personal">
           <input type="hidden" name="Principal_Amt" class="Principal_Amt" value="">
          <input type="hidden" name="Interest_Rate" class="Interest_Rate" value="">
          <input type="hidden" name="Remaining_Tenure" class="Remaining_Tenure" value="">
          
          <?php echo e(csrf_field()); ?>

          
                  <div>
                    <fieldset>
                      <input class="newsletter-name" name="name" placeholder="Name" required>
                    </fieldset>
                    </div>
                     <div>
                    <fieldset>
                      <input type="email" class="newsletter-name" name="email"  required  placeholder="Email address">
                    </fieldset>                 
                    </div>
                    <div>
                    <fieldset>
                      <input type="text" class="newsletter-name" name="contact" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
                    </fieldset>                 
                    </div>
                  <div>
                     <button class="btn btn-primary btn-outline with-arrow sidebar-submit">Submit<i class="icon-arrow-right"></i></button>
                  </div>
                  <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="<?php echo e(URL::to('images/ajaxloader.gif')); ?>" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
            </form>

            <div class='msg displaynone'><b>Thanks.We will reach you soon.</b></div>
            <div class='msg_err displaynone' ><p>Ooops. Something went wrong.</p></div>
        </div>
        
      </div>
      
    </div>
  </div>

<!-- New-personal-loan-modal -->
  <div class="modal fade" id="Modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Call RM</h4>
        </div>
        <div class="modal-body">
          <form name="talk_to_us_RM_form" id="talk_to_us_RM_form" method="post">
          <?php echo e(csrf_field()); ?>

          <input type="hidden" name="form" value="talk_to_us_RM_form">
                  <div>
                    <fieldset>
                      <input class="newsletter-name" name="name" placeholder="Name" required>
                    </fieldset>
                    </div>
                  <div>
                    <fieldset>
                      <input type="text" class="newsletter-name" name="contact" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
                    </fieldset>                 
                    </div>
                    <div>
                    <fieldset>
                      <input type="email" class="newsletter-name" name="email"  required  placeholder="Email ">
                    </fieldset>                 
                    </div>
                  <div>
                      <button class="btn btn-primary btn-outline with-arrow sidebar-submit">Submit<i class="icon-arrow-right"></i></button>
                  </div>

            </form>
            <div class='msg displaynone' ><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err displaynone' ><p>Ooops. Something went wrong.</p></div>
        </div>
        
      </div>
      
    </div>
  </div>



  

  
<!---Borrow end -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="Experian_terms_modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content col-md-12 text-justify model-hig">
  <br>
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     <h2 class="text-center"> Rupeeboss Terms</h2>
  <br>
<h3>TERMS OF USE</h3>
<p>RupeeBoss Value Added-Credit Score Service, is an online service (“Credit Score Service” / “Service”) that enables you to access your Credit Score/Report, based on the data/information/report supplied by our third party data processing service provider, M/s Experian Credit Information Services Private Limited (the “Processing Service Provider”). The said Credit Score Service consists of receipt of your credit report/score. This information is for your personal use only and the said Service/report is subject to your agreement to the provisions set forth below.
Please read the following provisions carefully before using this Service. If you do not agree with any of these provisions, you should not use this Service. By accessing or using this Service you agree to be bound by these Terms of Use.</p>

<p>Subject to the Terms of Use, RupeeBoss Financial Services Private Limited (“RupeeBoss”) will provide the Service to you on a best effort basis. By clicking "I AGREE", you indicate that you understand and agree to these Terms of Use.</p>

<h3>1. REQUEST FOR SERVICE</h3>
<p>You agree that by filing up your details in the Credit Report Request (the “Request Form”) and requesting the Service you are providing "written instructions" to RupeeBoss and you authorize and instruct the Processing Service Provider, its affiliates and suppliers, to obtain, and compile your credit information in order to provide the Service to you and you authorize RupeeBoss to provide the Service to you through the website www.rupeeboss.com (“Website”). You agree that the Service is provided for informational purposes only and is intended to provide helpful information concerning the subjects that it addresses. You agree that by processing your request for the Service as provided herein, RupeeBoss is not offering to sell, provide or perform any service to you for the express or implied purpose of either improving your credit record, credit history or credit rating or providing advice or assistance to you with regard to improving your credit record, credit history or credit rating. The processing of your request (Services) will start after receipt of your Request Form with the relevant documents.</p>
<h3>2. AUTHORIZATION</h3>
<p>You must be at least 18 years of age to use the Service, and you must be the subject of the credit report that you are seeking. You agree not to use the Request Form to attempt to obtain Credit Report about any other person other than you.
You hereby authorize RupeeBoss to do all of the following in connection with providing you the Services: (i) verify your identity and share with our Processing Service Provider certain personal identifiable information about You; (ii) request and obtain your Credit report, including your score from our Processing Service Provider  throughout the term in which we provide you the Services; such request constitutes "written instructions"; and (iii) use and retain your credit information, along with the other information you have given us access to under this Authorization, to provide the Services and use with other RupeeBoss services. You agree that we may use and analyze your information as follows: (a) present you an overview of your credit profile including detailed information, where available; (b) provide you with customized recommendations and general information to sell or offer the products and services of RupeeBoss; (c) serve you targeted ads/promotional materials and other communication/s based on your information; and (d) providing assistance to you with regard to improving your credit record, credit history or credit rating. RupeeBoss may send you information via email, text or online display or other means of delivery in RupeeBosss’s reasonable sole discretion. We may also aggregate and evaluate your information to do statistical analysis to provide historical or comparative information about your data. You hereby agree that your authorization shall be contiguous with your account/relation with RupeeBoss, which will enable RupeeBoss to provide you with your credit report from time to time. This authorization shall immediately and automatically terminate with the deactivation of your account.
We will obtain your prior consent if we use your identifying information for any other purpose not expressly permitted under these Terms. Please refer to our Privacy Policy for more information.</p>
<h3>3. YOUR ACCOUNT</h3>
<p>If you use the Service, you are responsible for maintaining the confidentiality of your account, login IDs and password, and for restricting access to your computer. It is your responsibility to protect your computer system from such items, viruses, and other harmful and destructive items. You agree to accept responsibility for all activities that occur under your account or password including any request from your account. We strongly recommend that you exit from your account at the end of each session. You agree to notify RupeeBoss immediately of any unauthorized use of your account or any other breach of security. RupeeBoss reserves the right to refuse service, terminate accounts, or remove in its sole discretion. Notwithstanding the above, we retain the right at our sole discretion to deny access to anyone to the Site and the Services we offer, at any time and for any reason, including, but not limited to, for violation of this Terms of Use or Privacy Policy. Additional Standard terms and conditions of the Processing Service Provider will apply to your use of this Service.</p>
<h3>4. DISCLAIMER OF WARRANTIES AND LIABILITY</h3>
<p class="text-lowercase">This Service is for informational purposes only, and is intended to provide helpful and informative material on the subjects addressed. RupeeBoss does not control your credit score, which is a statistical analysis of information contained in your credit file as maintained in the system and database of Processing Service Provider, and we cannot change that information for you. However, if information in your report is inaccurate and is affecting your score, you have the right to dispute it by contacting the Processing Service Provider at consumer(.)support(@)in(.)experian(.)com.
INFORMATION AND/OR SERVICES OFFERED ON THIS WEB SITE ARE PROVIDED "AS IS" WITHOUT ANY EXPRESS OR IMPLIED WARRANTY OF ANY KIND, INCLUDING WARRANTIES OF CORRECTNESS, COMPLETENESS, ACCURACY MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT. IN NO EVENT WILL RUPEEBOSS OR THE PROCESSING SERVICE  PROVIDER BE LIABLE TO ANY PARTY FOR ANY DAMAGES OF ANY KIND, INCLUDING BUT NOT LIMITED TO DIRECT, INDIRECT, SPECIAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF THE USE OR INABILITY TO USE THIS WEB SITE, OR ANY LINKED WEB SITE, INCLUDING WITHOUT LIMITATION, LOST PROFITS, LOSS OF USE, BUSINESS INTERRUPTION, OR OTHER ECONOMIC LOSSES, LOSS OF PROGRAMS OR OTHER DATA, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER ACTION, EVEN IF RUPEEBOSS IS ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>

<h3>5. RESTRICTIONS</h3>
<p>You agree to provide true, accurate and current information such as your full name, date of birth and address of residency etc., in the Request Form. The Service provided herein is subject to you providing true and accurate information in the Request Form and providing all the required process documents as requested by RupeeBoss and/or the Processing Service Provider. Each request is for one person only, we do not accept joint request. A Service request may be rejected by the Processing Service Provider in the event the particulars furnished by you and Process Documents do not match the information existing with-in the Processing Service Provider. You/customer, for any reason whatsoever, including but not limited to, data rejected by the data collection system maintained by Processing Service Provider or incomplete upload of data provided by you in relation to this Service. RupeeBoss shall inform you of such rejection. You hereby agree to be bound by the relevant terms of use of the Website, the website of the Processing Service Provider.</p>
<h3>6. CONFIDENTIALITY</h3>
<p>Since it affects your use of the Services, please review our Privacy Policy and Terms of Use of this Website. We collect, use and disclose information about you as provided in our Privacy Policy. Our Privacy Policy is located on the Website and you agree to accept the terms of the Privacy Policy as a condition to your acceptance of these terms/agreement.
We use all reasonable physical, administrative, technical and organizational measures to help protect your personal identifiable information from any loss, unauthorized access or use, or modification or disclosure thereof. We will not share your Personal Identifiable Information including Credit Reports except (1) as necessary for us to process you Request Form, (2) as permitted by law, and (3) as required by the government, law enforcement or an order of the court.M</p>
<h3>7. INDEMNIFICATION</h3>
<p>You agree to indemnify, defend and hold harmless RupeeBoss and its affiliates, and their respective officers, directors, employees, agents, licensors and suppliers, and any third party providers of information to this Service, from and against any and all losses, expenses, damages and costs, including reasonable attorneys' fees, resulting from your violation of these Terms of Use or any terms and conditions applicable to Service, or your violation of the intellectual property rights of RupeeBoss, Processing Service Provider, or any of those other parties.</p>
<h3>8. LINKS TO OTHER WEB SITES:</h3>
<p>For purposes of convenience, RupeeBoss's Website may contain links to third party websites. RupeeBoss makes no representations or warranties about any third party website that you may access through the links. By providing a link to those websites, RupeeBoss does not endorse, adopt, or otherwise accept any responsibility for the content or use of those websites.</p>
<h3>9. APPLICABLE LAWS AND JURISDICTION</h3>
<p>These Conditions shall be governed by and understood in accordance with Indian laws, more specifically the Credit Information Companies (Regulation) Act, 2005, Rules and Regulations made there under and Courts in the city of Mumbai will have exclusive jurisdiction.</p>
<h3>10. OTHER TERMS AND CONDITIONS</h3>
<p>(a)The terms and conditions mentioned herein may be modified/altered/revised by RupeeBoss in its sole discretion from time to time, without any prior notice. (b) The rights granted in this agreement/terms are personal. You may not assign, sub-license or otherwise transfer any of your rights under these conditions. (c) If a court finds any part of these conditions to be invalid, the remaining parts of these conditions shall continue unaffected. (d) If either of us fail to exercise any right or legal remedy available to either you or us any such failure shall not prevent you or us from relying on these at a later date. (e) Headings in these terms/conditions are for convenience only and will have no legal meaning or effect. (f) In case of any conflict between the terms and conditions of RupeeBoss as applicable to this service and those of the Processing Service Provider, the terms and conditions of RupeeBoss shall prevail. However, nothing contained herein shall override any provision of the applicable statute(s) in case of any express conflict. (g) In addition to these terms and conditions as applicable to this Service, you agree to be bound by the terms and conditions for the use and access of the Website.</p>
<h3>11. CONTACT US </h3>
<p>In case of any queries with respect the Services, please you can write us at wecare(@)rupeeboss(.)com or call our Toll Free No. 1800 267 629 6. We shall use our best efforts in resolving any such queries.</p>
    </div>
  </div>
  </div>
</div>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="RB_Experian_terms_modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content col-md-12 text-justify model-hig ">
    <br>
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

  <h2 class="text-center">Experian Terms </h2>

  <br>
  <h4 class="text-center ">CONSENT IN RELATION TO ACCESS TO CREDIT INFORMATION THROUGH EXPERIAN</h4>
    <p>This End User Agreement (the <b>“Agreement”</b>) is made between you (the <b>“User” or “You”</b>) and Rupeeboss Financial Services Private Limited, a private limited company having its registered office at C-605, Titenium Square Nr. BMW Showroom, Thaltej Ahmedabad Ahmedabad GJ 380054 India 
  (“Rupeeboss Financial Services Private Limited”, <b>“Us”</b> or <b>“We”</b>, which term shall include its successors and permitted assigns). The User and Rupeeboss Financial Services Private Limited shall be collectively referred to as the <b>“Parties”</b> and individually as a <b>“Party”</b>.</p>

  
  <p>You hereby consent to Rupeeboss Financial Services Private Limited being appointed as your authorized representative to receive your Credit Information from Experian for the purpose of processing the loan applications.</p>
<p><b>BY EXECUTING THIS AGREEMENT / CONSENT FORM, YOU ARE EXPRESSLY AGREEING TO ACCESS THE EXPERIAN CREDIT INFORMATION REPORT AND CREDIT SCORE, AGGREGATE SCORES, INFERENCES, REFERENCES AND DETAILS (AS DEFINED BELOW) (TOGETHER REFERRED AS “CREDIT INFORMATION”). YOU HEREBY ALSO IRREVOCABLY AND UNCONDITIONALLY CONSENT TO SUCH CREDIT INFORMATION BEING PROVIDED BY EXPERIAN TO YOU AND RUPEEBOSS FINANCIAL SERVICES PRIVATE LIMITED BY USING EXPERIAN TOOLS, ALGORITHMS AND DEVICES AND YOU HEREBY AGREE, ACKNOWLEDGE AND ACCEPT THE TERMS AND CONDITIONS SET FORTH HEREIN.</b></p>
  
  
  
  <h3>Terms and Conditions: </h3>
  <h4>Information Collection, Use, Confidentiality, No-Disclosure and Data Purging</h4>
  <p>Information Collection, Use, Confidentiality, No-Disclosure and Data Purging
Rupeeboss Financial Services Private Limited shall access your Credit Information as your authorized representative and Rupeeboss Financial Services Private Limited shall use the Credit Information for limited End Use Purpose consisting of and in relation to the services proposed to be availed by you from Rupeeboss Financial Services Private Limited. We shall not aggregate, retain, store, copy, reproduce, republish, upload, post, transmit, sell or rent the Credit Information to any other person and the same cannot be copied or reproduced other than as agreed herein and in furtherance to CICRA. </p>

<p>The Parties agree to protect and keep confidential the Credit Information both online and offline.</p>
<p>The Credit Information shared by you, or received on by us on your behalf shall be destroyed, purged, erased promptly within 1 (one) Business Day of upon the completion of the transaction/ End Use Purpose for which the Credit Information report was procured. </p>
<h3>Governing Law and Jurisdiction</h3>
<p>The relationship between you and Rupeeboss Financial Services Private Limited shall be governed by laws of India and all claims or disputes arising there from shall be subject to the exclusive jurisdiction of the courts of Mumbai. </p>
<h3>Definitions:</h3>
<p>Capitalised terms used herein but not defined above shall have the following meanings:</p>
<p><b>“Business Day”</b> means a day (other than a public holiday) on which banks are open for general business in Mumbai.</p>
<p><b>“Credit Information Report”</b> means the credit information / scores/ aggregates / variables / inferences or reports which shall be generated by Experian;</p>
<p><b>“Credit Score”</b> means the score which shall be mentioned on the Credit Information Report which shall be computed by Experian.</p>
<p><b>“CICRA”</b> shall mean the Credit Information Companies (Regulation) Act, 2005 read with the Credit Information Companies Rules, 2006 and the Credit Information Companies Regulations, 2006, and shall include any other rules and regulations prescribed thereunder.</p>
<p>** This document is an electronic record in terms of the Information Technology Act, 2000 and Rules made there under, and the amended provisions pertaining to electronic records.</p>



    </div></div></div>
    <!-- <script type="text/javascript">
      $(".iframeloading").show();  
    </script>
     -->

<!-- emp_login modal -->
<!-- 
.modal-header {background:#ed1c24;color:#fff;}
.modal-header h4 {color:#fff;font-weight:bold;}
.modal{margin-top:100px;}
.modal-content {border-radius:0px;}


<a href="#" data-toggle="modal" data-target="#myModal6">Emplyee Login</a>
 -->


<div id="freeze_form_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Freeze Application Form</h4>
      </div>
    <!-- Modal content-->
    <div class="modal-content pad1">
     
      <span class="mrg-btm">If You proceed,your application will be freezed and no changes will be allowed.</span>

      <a class="btn btn-primary btn-outline with-arrow" id="freeze_form">Agree</a>
       <a class="btn btn-primary btn-outline with-arrow " id="decline_freeze">Want To change</a>
    </div>

  </div>
</div>
<div id="tribe_doc_upload_modal" class="modal fade" role="dialog">
<form id="kyc_form" name="kyc_form" enctype="multipart/form-data" >
        <?php echo e(csrf_field()); ?>

    <input type="hidden" name="tribe_id" class="tribe_id">
    <input type="hidden" name="uplaoding_doc_name" id="uplaoding_doc_name">
  <div class="modal-dialog">
 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Add Document</h4>
      </div>
    <!-- Modal content-->
    <div class="modal-content pad1">

     <label >Document title</label><br>
      <input type="text" name="document_title" id="tribe_document_title" required ><br>
      <label >Upload File</label>
      <input type="file" name="document_itself" id="tribe_document_itself" required>
        <div style="display: none;" id="doc_special_fields">
            <label >Document Year</label>
            <select name="document_year" class="drop-arr" required>
            <option disabled selected>Select Year</option>
              <option value="2013-2014">2013-2014</option>
              <option value="2014-2015">2014-2015</option>
              <option value="2015-2016">2015-2016</option>
              <option value="2016-2017">2016-2017</option>
              <option value="2017-2018">2017-2018</option>
              <option value="2018-2019">2018-2019</option>
              <option value="2019-2020">2019-2020</option>
            </select>
            <label >Document Type</label>
             <select name="document_type" class="drop-arr" required>
             <option disabled selected>Select</option>
              <option value="1">IT Returns</option>
              <option value="2">IT Acknowledgement</option>
              
            </select>
        </div>
        <div id="doc_special_fields_ITR" style="display: none;">
          <label for="datefilter_itr"> Date Range</label>
          <input type="text" id="datepicker1" name="input_from" value="" required />
           <input type="text" id="datepicker2" name="input_to" value="" required />
          
        </div>
		<br>
		<div class="mrg-top">
       <a class="btn btn-primary btn-outline with-arrow" data-dismiss="modal" >Cancel</a>
      <a class="btn btn-primary btn-outline with-arrow " id="upload_doc_submit">Save</a>
      </div>
    </div>

  </div>
  </form>
</div>
 
<div id="went_wrong_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Something is not right!!!</h4>
      </div>
    <!-- Modal content-->
    <div class="modal-content pad1">
     
      <span class="mrg-btm">Ooops, something went wrong</span>

     
    </div>

  </div>
</div>


    <div class="modal fade" id="working_capital_model_id" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Talk To Us</h4>
        </div>
        <div class="modal-body">
          <form name="working_capital_form" id="working_capital_form" method="post">
          <?php echo e(csrf_field()); ?>

          <input type="hidden" name="form" value="working_capital">
                  <div>
                    <fieldset>
                      <input type="text" class="newsletter-name" name="name" placeholder="Name" required>
                    </fieldset>
                    </div>
                  <div>
                    <fieldset>
                      <input type="text" class="newsletter-name" name="contact" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
                    </fieldset>                 
                    </div>
                    <div>
                    <fieldset>
                      <input type="email" class="newsletter-name" name="email"  required  placeholder="Email ">
                    </fieldset>                 
                    </div>
                  <div>
                      <a class="btn btn-primary btn-outline with-arrow sidebar-submit" id="work_id">Submit<i class="icon-arrow-right"></i></a>
                  </div>
            </form>
            <div class='msg displaynone' ><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err displaynone' ><p>Ooops. Something went wrong.</p></div>
        </div>
      </div>
    </div>
  </div>
  
  <div id="working_model" class="modal fade mod-mar-tp" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
       
        <div class="modal-header">
		<a type="button" class="close" data-dismiss="modal" aria-hidden="true">×</a>
		<h4 class="modal-title text-center" id="working_i_d"></h4>
       </div>
        
     </div>
   </div>
  </div>
 <!-- Equifax Success Modal -->



 <div class="modal fade" id="equifax_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Talk To Us</h4>
        </div>
        <div class="modal-body">
          
                
                  <div>
                    <fieldset>
                      <div class="text-center">Your Score is<h2 id="equi_score" style="font-size:80px !important;"></h2></div>
                    </fieldset>
                    </div>
                 
                 
           
            
            <div class='equi_msg_err displaynone error' ><p>Ooops. Something went wrong.</p></div>
        </div>
        <div class="modal-footer">
		<a class="btn btn-primary btn-outline with-arrow equi_doc_link pull-left" >See Full report<i class="icon-arrow-right"></i></a>
          <button type="button" class="btn btn-default close1" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

