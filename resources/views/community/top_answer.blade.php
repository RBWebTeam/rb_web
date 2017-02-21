@include('layout.community.header_community')
<div class="container bs-docs-container"> 
<div class=col-md-8 role=main> 
<div style="height: 150px;width: 100%;"></div>

   <?php foreach ($result as $key => $value) {?>
<div class="row" style="position: relative; padding-bottom: 30px;border-top: 1px solid #E2E2E2; padding-top: 10px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 13px;
  font-style: normal;
  font-variant: normal;
  font-weight: 400;
  line-height: 14.4px;"> 
 <h3 id="headings" class="heading_" ><?php echo $value->description;?></h3> 
  <figure class=highlight>
    <?php 

                   $query=$answer_class->where('question_id',$value->que_id)->first();
                   $qu_c=$answer_class->where('question_id',$value->que_id)->get();
                   if (Session::has('email')){
 
              if($query['answers']!=''){  
                    echo substr($query['answers'],0,300);?>
        <a href="{{url('community/details')}}/<?php echo $value->que_id;?>">.......more</a>         
             <?php }  }else{

              if($query['answers']!=''){  
                    echo substr($query['answers'],0,300);?>
        <a href="{{url('community/login')}}/<?php  echo $value->que_id;?>">.......more</a>         
             <?php }

              } ?>
</figure>
  

<div class="row">
  <div class="col-md-1"></div>
  <?php  if (Session::has('email')){?>
   <div class="col-md-2"><a href="{{url('community/details')}}/<?php echo $value->que_id;?>">Answer(<?php echo count($qu_c);?>)</a></div>
   <?php }else{?>
 <a href="{{url('community/login')}}/<?php  echo $value->que_id;?>">Answer</a>
   <?php }?>
  <div class="tags">home loan</div>
 <div class="tags">personal loan</div>
</div>

  <!-- <div id="Comment" class="collapse" style="background-color: #F6F6F6">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
  

  <div id="Share" class="collapse" style="background-color: #F6F6F6">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
   -->
  </div>

   <?php  }  ?>
<!--    <figure class=highlight><pre><code class=language-html data-lang=html><span class=cp>&lt;!DOCTYPE html&gt;</span>
<span class=nt>&lt;html</span> <span class=na>lang=</span><span class=s>"en"</span><span class=nt>&gt;</span>

</code>
</pre>
</figure> -->




</div>

</div>



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