<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<br>
<div class="container" id="fh5co-hero">

<form class="" id="document_upload_form" action="<?php echo e(URL::to('excel-upload-submit')); ?>" role="form" method="POST" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<input type="file" name="file">
<input type="submit" name="submit">

<!-- <div style="text-align: center;">
                                <a class="btn btn-danger btn-outline with-arrow mrg-top" id="excel_doc">Submit<i class="icon-arrow-right"></i></a></div> -->
</form>

</div>
<br>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- <script type="text/javascript">
  $('#excel_doc').click(function(){
        alert('ok');
       if(! $('#document_upload_form').valid()){
             // alert('not valid');

        }else{

            // $('#financial_doc').show();
        $.ajax({
          url:"<?php echo e(URL::to('excel-upload-submit')); ?>" ,  
          data:new FormData($("#document_upload_form")[0]),
          dataType:'json',
          async:false,
          type:'POST',
          processData: false,
          contentType: false,
          success: function(msg){
             console.log(msg.status);
             
              
            
            }
        });
     } 
    });
</script>
 -->
