@include('layout.community.header_community')

  
    <div class="container">
  <aside id="fh5co-hero">




<div style="height: 100px; width: 100%"></div>


 
 <form class="form-horizontal" role="form" method="POST" action="{{ url('community/stor_answers') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Question</label>
                            <div class="col-md-6">
                              
                                <?php echo $result->description;?>
                            </div>
                        </div>
                           
                            <input type="hidden" name="question_id"  value="<?php echo $result->que_id;?>">
                         <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Tags</label>
                            <div class="col-md-6">
                                <?php  $tags=explode(",",$result->tags);
                              foreach ($tags as  $tag_value) {?>
                                  <?php
                                     $tag=$tags_query->where('id',$tag_value)->first();
                                     echo $tag->categories.",";?>
                              <?php }?> 
                                
                            </div>
                        </div>

                       <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Answers</label>
                            <div class="col-md-6">
                       <!--        <textarea class="form-control" name="description" rows="3" id="description"></textarea> -->

                              <div ng-app="trixDemo" ng-controller="trixDemoCtrl">
<trix-editor   value="ssssssssssss" ng-model-options="{ updateOn: 'blur' }" spellcheck="false" class="trix-content" ng-model="trix" angular-trix trix-initialize="trixInitialize(e, editor);" trix-change="trixChange(e, editor);" trix-selection-change="trixSelectionChange(e, editor);" trix-focus="trixFocus(e, editor);" trix-blur="trixBlur(e, editor);" trix-file-accept="trixFileAccept(e, editor);" trix-attachment-add="trixAttachmentAdd(e, editor);" trix-attachment-remove="trixAttachmentRemove(e, editor);" placeholder="Write something.."  ></trix-editor>
</div >
        
                              
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    
                       
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit 
                                </button>

                            </div>
                        </div>

                    </form>




        
  </aside>
  </div>

  
@include('layout.footer')
@include('layout.community.communityscript')