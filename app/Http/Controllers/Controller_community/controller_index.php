<?php

namespace App\Http\Controllers\Controller_community;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\community_model\community_Question_model;
use App\community_model\userModel;
use App\community_model\community_answers;
use App\community_model\master_tags;
use App\community_model\comment_model;
use App\community_model\questionview_model; 
use Validator;
use Redirect;
use Session;
use Illuminate\Support\Facades\Hash;
use DB; 
class controller_index extends Controller
{
     public function index(){
          

         
            $query=new comment_model();
            //$result = DB::table('community_question')->orderBy('id', 'desc')->paginate(10);
            $views=new questionview_model();
            $tags_query=new master_tags();
            $answers=new community_answers();
               
      $result= DB::table('community_question')
    ->join('community_users', 'community_users.id', '=', 'community_question.user_id','left outer')
   // ->join('community_answer', 'community_answer.question_id', '=', 'community_question.id')
    ->select(
       'community_question.que_id','community_question.title','community_question.description','community_question.tags','community_question.user_id','community_question.status','community_question.created_at',
       'community_users.id','community_users.name'
       // ,DB::raw('COALESCE(community_answer.question_id, 0) AS question_id')
        )
      ->orderBy('community_question.que_id', 'desc')
      ->get();
 

 

                  return view('community.index',['result'=>$result,'tags_query'=>$tags_query,'answers'=>$answers,'views'=>$views]);
     }
     public function question(){    




                      
                      $question=new master_tags();
                      $result=$question->select('categories')->get();



            return view('community.community_question',['result'=>$result]);
     }
    public function stor_question(Request $request){

 
      $val=array();
      $tags=rtrim($request->tags_c,",");
      $array=explode(',', $tags);
      

             $validator=Validator::make($request->All(),array(
                            'description' => 'required|min:10', 
                          
                           ));
    if($validator->fails()) {

                      return Redirect::back()->withErrors($validator)->withInput();
    }else{

              foreach ($array as $key => $value) { $val[]=$this->master_tags(trim($value)); }

               $query=new community_Question_model();
               $query->title=1;
               $query->description=$request->description;
               $query->tags=implode(",",$val);
               $query->user_id=Session::get('id');
               $query->status=0;
               $query->save();

                      return redirect('community');

           }
   }  


 


  public function master_tags($tags){
   $arra=array();
   $query=new master_tags();
   $val=$query->where('categories',$tags)
              ->select('id','categories')
              ->first(); 
 
     if(isset($val->categories)){
           return $val->id;
 
     }else{
    
        $query->categories=$tags;
        if($query->save()) {
           return $query->id;
     }
   }

   
 }


   public function search(Request $request){
              $search=new master_tags();
              $answer_class=new community_answers();
              $question_class=new community_Question_model();
             $result =$question_class->where('description', 'like', "%{$request->search}%")
            ->orWhere('title', 'like', "%{$request->search}%")
            ->get();

      return view('community.search',['result'=>$result,'answer_class'=>$answer_class,'search'=>$search]);

   }


   public function tags(Request $request){
                

              $tags=str_replace('-',' ',$request->tags);

              // $tags_query=new master_tags();   
              // $question_class=new community_Question_model();
              // $answer_class=new community_answers();
              // $result = $question_class->where('tags',$tags)->get();
              $answer_class=new community_answers();
              $question_class=new community_Question_model();
              $tags_query=new master_tags();
              $search=$tags_query->where('categories',$tags)->first(); 
              $result = $question_class->where('tags',$search['id'])->get();
        return view('community.search',['result'=>$result,'answer_class'=>$answer_class,'search'=>$search]);
   }

   public function top_answer(){
              $tags_query=new master_tags();
              $user_class=new userModel();
              $result = DB::table('community_question')->orderBy('description', 'ASC')->paginate(10);
              $answer_class=new community_answers();
  return  view('community.top_answer',['result'=>$result,'answer_class'=>$answer_class,'tags_query'=>$tags_query]);
   }


  public function answers(Request $request){



                $tags_query=new master_tags(); 
                $question=new community_Question_model();
                $result=$question->where('que_id',$request->id)->first();

             

                if($result==true){

                  $this->question_view($request);
                    
                return view('community.answers',['result'=>$result,'tags_query'=>$tags_query]);
                }else{
                return redirect('community');

             }



   } 






   public function question_view($request){
        $table=new questionview_model();
        $val=$table->where('question_id',$request->id)
         ->select('question_id','views')
         ->first(); 
   if($val){$va=$val->views;
    $va++;
    $update_user=DB::table('community_views')
         ->where('question_id',$request->id)
         ->update(['views'=>$va]);
   
   }else{
  DB::table('community_views')->insert(['question_id' =>$request->id,'views'=>1]);
   }
 

}


   public function stor_answers(Request $request){

      
          $validator=Validator::make($request->All(),array(
                              'description' => 'required|min:10', 
                           ));
               if($validator->fails()) {
                  return Redirect::back()->withErrors($validator)->withInput();
                 }else{
                 $query=new community_answers();
                 $query->answers=$request->description;
                 $query->question_id=$request->question_id;
                 $query->status=0;
                 $query->save();
                 return redirect('community');
           }
   }
   public function details(Request $request){
                 $comment_query=new comment_model();
                 $tags_query=new master_tags();
                 $question=new community_Question_model();
                 $answer_class=new community_answers();
                 $result=$question->where('que_id',$request->id)->first();

                 $this->question_view($request);

                 return  view('community.details',['result'=>$result,'answer_class'=>$answer_class,'tags_query'=>$tags_query,'comment_query'=>$comment_query]);
               
   }

   public function multi_answer(Request $request){


                 $query=new community_answers();
                 $query->answers=$request->answer_id;
                 $query->question_id=$request->question_id;
                 $query->status=0;
                 $query->save();
                 $msg = "Successfully saved.";
              return response()->json(array('msg'=> $msg), 200);
   }


   public function comment(Request $request){

                

                      $query=new comment_model();
                      $query->answers_id=$request->answers_id_;
                      $query->comment=$request->comment;
                      $query->status=0;
                      $query->save();
                      $msg = $request->comment;

              return response()->json(array('msg'=> $msg), 200);
    
   }




}
