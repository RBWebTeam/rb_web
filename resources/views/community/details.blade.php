@include('layout.header')
<div class="container bs-docs-container"> 
     <div class=col-md-8 role=main> 
          <div style="height: 150px;width: 100%;"></div> 
             <div class="row" style="position: relative; padding-bottom: 30px;border-top: 1px solid #E2E2E2; padding-top: 10px; font-family: " Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 14.4px;">  
             <div style="border: 2px;">
                 <h3 id="headings" class="heading_" >
                         <?php echo $result->description;?></h3> 
                         <?php $i=0;$query=$answer_class->where('question_id',$result->que_id)->get();
                 foreach ($query as $keys => $answer_val) {$i++;?>
                <figure class="highlight"  style="float: left;">
                         <?php echo "<h4>".$i."&ensp;&ensp;Answer:&ensp;&ensp;&ensp;</h4>".$answer_val->answers;?>
                </figure>
                  <div style="height: 100px; width: 100%;"></div> 
            </div>

                         

     <div class="row">   <?php $comment_=$comment_query->where("answers_id",'=',$answer_val->answers_id)->get();?>
         <div class="col-md-1"></div>
            <div class="col-md-2">
             <button type="button"  data-toggle="collapse" data-target="#Comment{{$i}}">Comment &nbsp;&nbsp;({{count($comment_)}})</button>
          </div>
    <!--   <div class="col-md-2">
        <button type="button" class="share_btn" data-toggle="collapse" data-target="#Share{{$i}}">Share</button>

      </div> --><!-- 
                       <?php    $tags_result=explode(',', $result->tags);
               foreach ($tags_result as  $tag_value) {  
                         $tags=$tags_query->where('id',$tag_value)->first();?> 
       <div class="tags">
           <a href="{{url('community/tags')}}/{{str_slug($tags['categories'])}}"><?php echo $tags['categories'];?></a> 
      </div>              <?php }?> -->
  

      <div id="Comment{{$i}}" class="collapse  multi_comment" style="height: auto; width: 100%; background-color: #F8F8F8;" >
          <div class="col-md-10">
              <input type="text"  class="form-control comment_box" id="{{$answer_val->answers_id}}" >
            </div>
         <div class="col-md-1">
             <button type="submit" id="comment_btn" class="btn btn-primary comment_btn" data-id="#{{$answer_val->answers_id}}">Comment</button>
        </div>
                <!--   <h2><p class="message_" ></p></h2> -->
                        <h2><div class="{{$answer_val->answers_id}}"  style="height:auto; width:50%; margin: 10px 10px 10px 10px; float: left;" ></div></h2>
                       <?php  foreach ($comment_ as $key => $value) {?>
                        <div style="height:auto; width:50%; margin: 10px 10px 10px 10px; " >
                   <h3><?php echo $value->comment;?></h3>
              <br>
       </div>
                       <?php } ?>      
    </div>


 


                       <?php  }?>   <div style="height: 100px; width: 100%;"></div> 
<div>                  <?php  if (Session::has('email')){?>
    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-2"><button type="button" data-toggle="collapse" data-target="#Answer">Your Answer</button></div>
   </div>              <?php }else{?>
      <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-2"> <a href="{{url('community/login')}}/<?php echo $result->que_id;?>"> Your Answer</a></div>
     </div>           <?php }?>
</div>


 <div id="Answer" class="collapse" style="background-color: #F6F6F6">
   <textarea class="form-control" name="answer_id" rows="3" id="answer_id"></textarea>
         <div class="form-group">
             <input type="hidden" name="datring" id="datring" value="<?php echo csrf_token();?>">
             <input type="hidden" name="question_id" id="question_id" value="<?php echo $result->que_id;?>">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" id="an_submit" class="btn btn-primary">
                                    submit
                                </button>

                            </div>
          </div>
  </div>



       </div>
   </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
  $(document).ready(function(){


     $("#an_submit").click(function(){
       var answer_id=$("#answer_id").val(); 
       var datring=$("#datring").val(); 
       var question_id=$("#question_id").val();
               var int=answer_id.length;
          if(answer_id !='' && int>20){

             
           $.ajax({
               type:'POST',
               url:'{{url("community/multi_answer")}}',
              data: {_token :datring,answer_id:answer_id,question_id:question_id},
              //dataType: 'JSON',
               success:function(data){
                  $("#msg").html(data.msg);
                   alert(data.msg);
                   window.location = '{{url("community")}}';
               }
            });
              
          }else{

            alert("The Answer must be at least 20 characters");
          }

     }); 
     
   $(".comment_btn").click(function(){

       var datring=$("#datring").val(); 
       var answers_id=$(this).attr("data-id");
       var comment= $(answers_id).val();
       var answers_id_=answers_id.replace('#','');
       var arr = $('.multi_comment');
          len  = arr.length;

       

          if(comment!=''){   

    $.ajax ({
             type:'POST',
             url:'{{url("community/comment")}}',
              
              data: {_token :datring,answers_id_:answers_id_,comment:comment},
            success:function(data){

               
           //$(".message_").html(data.msg);
      //$(".message_").append(data.msg+"<br> <div style='position: absolute;'></div>");
    //...........................................................................
                    // arr.each(function(i) {

                    //       if(i==0){
                    //         $("p:first").addClass("message_").append(data.msg+"<br> <div style='position: absolute;'></div>");
                    //       }

                    //    });

$( "div" ).addClass(function( index, currentClass ) {
  var addedClass;
 
  if ( currentClass === answers_id_ ) { addedClass++
     //alert(currentClass);
     // addedClass = "green";
    $("."+answers_id_).append( data.msg+"<br>");
  } 
 
  return addedClass;
});


//........................................................
               
    setTimeout(function() {
              $('.comment_box').val('');
        }, 0);   
                
          
        }
        });
      }else{
        
      }

}) 


$(".share_btn").click(function(){

     var a=$(this).attr('data-target1');
       
      

})

 

  });

</script> 
<style type="text/css">
  .tags{position: relative;
    display: inline-block;
    padding: .4em .5em;
    margin: 2px 2px 2px 0;
    font-size: 11px;
    line-height: 1;
    white-space: nowrap;
    text-decoration: none;
    text-align: center;
    border-width: 1px;
    border-style: solid;
    border-radius: 0;
    transition: all .15s ease-in-out;}

    .heading_{
       font-size: 19px;
    color: #333;
    letter-spacing: -0.5px;
    line-height: 1.25;
    font-weight: bold;
   
    letter-spacing: -1px;
    
    }


</style>
@include('layout.footer')
@include('layout.script')