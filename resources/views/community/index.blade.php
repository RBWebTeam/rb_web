@include('layout.header')
<div id="fh5co-hero">
  <div class="container bs-docs-container"> 
     <div class=col-md-8 role=main>
   <div id="qlist-wrapper">
<div id="question-mini-list">
<?php
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);
    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;
    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

 foreach ($result as $key => $value) {  if($value->status==0){ ?>
<div class="question-summary narrow  head_v" id="question-summary-41727415" >
    <div  class="cp">
         <a href="#">
             <div class="votes">
                <div class="mini-counts"><span title="196 votes"><?php  echo $value->que_id;?></span></div>
            <div>votes</div>
        </div>
          <?php  if (Session::has('email')){?>
         <a href="{{url('community/details')}}/<?php echo $value->que_id;?>">
         <div class="status answered-accepted" title="one of the answers was accepted as the correct answer">
              <div class="mini-counts"><span title="8 answers">
                  <?php  $qu_c=$answers->where('question_id',$value->que_id)->get();  echo count($qu_c); ?>
                 </span></div>
            <div>answers</div>
        </div>
        </a>
        <?php }else{ ?>
           <a href="{{url('community/login')}}/<?php  echo $value->que_id;?>">
         <div class="status answered-accepted" title="one of the answers was accepted as the correct answer">
              <div class="mini-counts"><span title="8 answers">
                  <?php  $qu_c=$answers->where('question_id',$value->que_id)->get();  echo count($qu_c); ?>
                 </span></div>
            <div>answers</div>
        </div>
        </a>
        <?php } ?>

        <div class="views">
            <div class="mini-counts hot"><span title="11821 views">
              <?php $coun=$views->where('question_id',$value->que_id)->first(); 
                   if($coun['views']!=0){ echo $coun['views'];}else{ echo $coun['views']=0;}?></span>
           </div>
            <div class="hot">views</div>
        </div></a>
    </div>
    <div class="summary">
          <?php  if (Session::has('email')){?>  
               <h3> <a href="{{url('community/answers')}}/<?php echo $value->que_id;?>"><?Php echo ucfirst( $value->description);?></a></h3>
                <?php }else{  ?>
            <h3> <a href="{{url('community/login')}}/<?php  echo $value->que_id;?>"><?Php echo ucfirst( $value->description);?></a></h3>
            <?php }?>
         
        <div class="tags t-c t-switch-statement t-language-lawyer">
            <?php  $tags=explode(",",$value->tags); 
            foreach ($tags as  $tag_value) { $tag=$tags_query->where('id',$tag_value)->first();  if(isset($tag)) { ?>
              <a href="#" class="post-tag" title="" rel="tag"><?php echo $tag->categories.","; ?></a><?php }  } ?>
        </div>
        <div class="started">
            <a href="#" class="started-link">Asked <span title="2017-02-14 19:31:00Z" class="relativetime"><?Php echo time_elapsed_string($value->created_at) ;?></span></a>
            <a href="#"><?Php echo ucfirst( $value->name);?></a> <span class="reputation-score" title="reputation score 10,778" dir="ltr">10.8k</span>
        </div>
    </div>

</div>

  <?php  } }  ?>

</div>
</div>

</div></div></div>
@include('layout.footer')
@include('layout.community.communityscript')

<style type="text/css">

body {
  font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
  font-size:13px;
  line-height:1.3em;
  color:#242729;
  background:#FFF;
  min-width:1075px
}



.head_v{  border-top: 1px solid #E2E2E2;    }






.question-summary {
  overflow:hidden;
  padding:15px 0;
  float:left;
  width:728px;
  border-bottom:1px solid #eff0f1
}
.question {
  clear:both
}
#questions {
  clear:both;
  float:left;
  width:728px;
  margin-bottom:20px
}
.stats {
  margin:0 0 0 0;
  width:58px
}
.statscontainer {
  width:78px;
  float:left;
  margin-right:8px;
  margin-left:8px
}
.statscontainer .views {
  width:58px
}
.statscontainer .status {
  padding:7px 0 5px 0;
  font-size:11px
}
.statscontainer .status strong {
  font-size:18px;
  font-weight:normal
}
.statscontainer .votes {
  color:#6a737c;
  font-size:11px
}
.narrow .status {
  display:inline-block;
  margin:0 3px 0 0;
  min-width:44px;
  height:auto;
  font-size:11px;
  padding:6px
}
.narrow .started {
  width:auto;
  line-height:inherit;
  padding-top:4px;
  white-space:nowrap
}

.narrow .votes {
  display:inline-block;
  height:38px;
  min-width:38px;
  margin:0 3px 0 0;
  font-size:11px;
  color:#848d95;
  padding:5px 5px 6px 5px
}
.narrow .stats {
  background:none;
  margin:0 0 0 7px;
  padding:0;
  width:auto;
  height:48px;
  display:inline-block
}
.narrow .views {
  display:inline-block;
  height:38px;
  min-width:40px;
  margin:0 7px 0 0;
  font-size:11px;
  color:#848d95;
  padding:5px 5px 6px 5px
}
.narrow .summary {
  width:530px;
  padding:0;
  float:left
}
.narrow .summary h3 {
  margin-bottom:.35em;
  line-height:1.3
}
.narrow .cp {
  vertical-align:top;
  float:left;
  margin-right:10px
}
.narrow .mini-counts {
  font-size:17px;
  font-weight:300;
  color:#6a737c;
  margin-bottom:4px
}
.votes {
  padding:0;
  margin-bottom:8px;
  text-align:center
}
.vote-count-post {
  display:block;
  font-size:20px;
  margin:0 0 3px 0
}
.vote-count-post strong {
  font-weight:normal;
  color:#6a737c
}
.status {
  padding:0;
  margin-bottom:8px;
  text-align:center
}
.status strong {
  display:block
}
.vote-up {
  display:block;
  margin:0 auto
}
.vote-down {
  display:block;
  margin:0 auto
}
.vote-count-separator {
  border-top:1px solid silver;
  width:40px;
  margin-top:5px;
  margin-bottom:5px
}
.views {
  padding-top:4px;
  text-align:center
}
.views strong {
  display:block
}
.cool,.mini-counts.cool {
  color:#9199a1
}
.coolbg {
  background-color:#9199a1;
  color:#FFF !important
}
.warm,.mini-counts.warm {
  color:#9B764F
}
.hot,.mini-counts.hot {
  color:#CF7721
}
.hotbg {
  background-color:#CF7721;
  color:#FFF !important
}
.supernova,.mini-counts.supernova {
  color:#F48024
}
.supernovabg {
  background:#F48024
}
.answered {
  background-color:transparent
}
.answered,.answered .mini-counts,.answered strong {
  color:#45A163
}
.answered strong {
  font-weight:normal;
  font-size:18px
}
.answered-accepted {
  background-color:#5fba7d
}

.answered-accepted,.answered-accepted .mini-counts,.answered-accepted .minicounts span {
  color:#FFF
}
.summary {
  float:left;
  width:630px
}
.summary h3 {
  font-size:15px;
  line-height:1.4;
  margin-bottom:.5em
}
.excerpt {
  padding:0;
  padding-bottom:5px;
  margin:0;
  color:#3b4045
}
.excerpt .started {
  float:right;
  width:185px;
  height:55px;
  margin-top:5px
}
.excerpt p {
  margin-bottom:3px
}
.excerpt .tags {
  width:410px;
  margin-top:5px
}
.tags {
  line-height:18px;
  float:left
}
.tags a:hover {
  text-decoration:none
}
.started {
  width:200px;
  float:right;
  line-height:18px
}
.started img {
  vertical-align:baseline
}
.started .user-action-time {
  margin-bottom:2px
}
.started .user-info,.started .reputation-score {
  color:#848d95
}
.started a:not(.started-link),.started .mod-flair {
  font-size:12px;
  color:#07C
}
.started a:not(.started-link):hover,.started .mod-flair:hover {
  color:#3af
}
.started-link {
  font-size:12px;
  color:#9199a1
}
.started-link:hover {
  color:#07C
}
.mod-flair {
  color:#07C;
  margin-left:3px;
  font-weight:bold;
  font-size:15px;
  line-height:1
}
.aside-cta {
  padding-left:10px
}
.aside-cta .btn,.aside-cta .btn-outlined {
  white-space:nowrap
}
.module {
  margin-bottom:1.5em
}
.module .spacer {
  margin-bottom:8px
}
.module ul {
  margin-left:15px;
  list-style-type:square;
  margin-right:30px;
  line-height:120%
}
.module li {
  margin-bottom:4px
}
.module h4 {
  font-size:14px;
  color:#3b4045;
  font-weight:normal
}
.newuser {
  padding:15px 15px 10px 15px;
  background-color:#FFF8DC;
  border:1px solid #E0DCBF;
  font-size:14px
}
.vote {
  text-align:center
}
.vote span {
  display:block;
  color:#6a737c
}
</style>
