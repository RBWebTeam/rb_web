<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<br>
<div class="container" id="fh5co-hero">

<form id="demo_form" name="demo_form" method="POST">
<?php echo e(csrf_field()); ?>

  Name: <input type="text" name="audience_name" id="audience_name" required><br>
  Status:<input type="radio" id="active" value="active" name="status"  /> Active <input type="radio" id="not_active" value="not_active" name="status"/>Not Active
  <a class="btn btn-danger btn-outline with-arrow mrg-top" id="demo_submit">Submit <i class="icon-arrow-right"></i></a>
   
</form>
<br>
<div id="learning_module_table">
    <table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Status</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php foreach ($users as $key => $value){?>
  <tr>
    <td><?php echo e($value->id); ?></td>
    <td><?php echo e($value->audience_name); ?></td>
    <td><?php echo e($value->status); ?></td>
    <td><a class="btn btn-info btn-outline edit" data-id="<?php echo e($value->id); ?>" data-name="<?php echo e($value->audience_name); ?>" data-status="<?php echo e($value->status); ?>">Edit</a></td>
    <td><a class="btn btn-info btn-outline delete" data-id="<?php echo e($value->id); ?>">Delete</a></td>
  </tr>
  <?php }?>
</table>
</div>
<?php echo e($users->links()); ?>



</div>
<br>

<div>

        
        <link type="text/css" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" />

<div class="container">
<div class="row">
    <div class="col-md-6">
      <div id="treeview-checkbox-demo">
            <ul>
                <li>HTML
                <ul>
                        <li data-value="table">HTML table</li>
                        <li data-value="links">HTML links</li>
                 </ul>
                </li>
                
            </ul>
        </div>
        <button type="button" class="btn btn-success" id="show-values">Get Values</button>
        <pre id="values"></pre>
   </div>
  </div>
 </div>       
        
</div>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script type="text/javascript">
    $('#demo_submit').click(function(){
        if($('input[name=status]:checked').length<=0)
     {
         alert("No radio checked")
         return false;
     }
        /*alert("hiee");*/
        if(! $('#demo_form').valid())
       {
              // alert('not valid');
        }
        else
        {
          
        $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('demo-submit')); ?>",
         data : $('#demo_form').serialize(),
         success: function(msg){
            console.log(msg);
         
              if (msg.data==true){
            window.location.reload(); // This is not jQuery but simple plain ol' JS
            }   
              
        }  
      });   
     }
    });
</script>

<script type="text/javascript">
    $('.delete').click(function(){
      var id = $(this).attr('data-id');
      var v_token = "<?php echo e(csrf_token()); ?>";
      alert(id);
      $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('demo-delete')); ?>",
         data : {'id':id,'_token': v_token},
         success: function(msg){
            console.log(msg);
         
              if (msg.data==true){
            window.location.reload(); // This is not jQuery but simple plain ol' JS
            }   
              
        }  
      });   
    });
</script>

<script type="text/javascript">
    $('.edit').click(function(){
         alert('hiee'); 
         var name= $(this).attr('data-name');
         console.log(name);
         $('#audience_name').val(name);
         var status= $(this).attr('data-status');
         $('#audience_name').val(status);
         console.log(status);
      var id = $(this).attr('data-id');
      var v_token = "<?php echo e(csrf_token()); ?>";
      alert(id);
      // $.ajax({  
      //    type: "POST",  
      //    url: "<?php echo e(URL::to('demo-edit')); ?>",
      //    data : {'id':id,'_token': v_token},
      //    success: function(msg){
      //       console.log(msg);
         
      //         if (msg.data==true){
      //       window.location.reload(); // This is not jQuery but simple plain ol' JS
      //       }   
              
      //   }  
      // });   
    });
</script>


        <script src="js/logger.js"></script>
        <script src="js/treeview.js"></script>
        
        <script>
            $('#treeview-checkbox-demo').treeview({
                debug : true,
                data : ['links', 'Do WHile loop']
            });
            $('#show-values').on('click', function(){ 
                $('#values').text(
                    $('#treeview-checkbox-demo').treeview('selectedValues')
                );
            });
        </script>




