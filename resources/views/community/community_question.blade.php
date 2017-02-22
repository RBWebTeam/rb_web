@include('layout.header')
<div class="container">
	<aside id="fh5co-hero">
<div style="height: 100px; width: 100%"></div>
 <form class="form-horizontal" role="form" method="POST" action="{{ url('community/stor_question') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}" style="display: none;">
                            <label for="title" class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="1">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Question</label>
                            <div class="col-md-6">
                              <textarea class="form-control" name="description" rows="3" id="description"></textarea>



<!--                       
<trix-editor angular-trix ng-model="foo" trix-initialize="trixInitialize(e, editor);" placeholder="Write something.." ></trix-editor> -->

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Tags</label>
                            <div class="col-md-6">
     
           

                        <div class="ui-widget">
                              <label for="tags">Tag programming languages: </label>
                              <input class=" input-pad" id="tags" name='tags_c' size="50">
                        </div>

 

                                @if ($errors->has('tags'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tags') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                            </div>
                     </div>

             </form>     
	</aside>
	</div>
<?php $arrayName = array(); foreach ($result as $key => $value) { $arrayName[]=$value->categories;} ?>
@include('layout.footer')
@include('layout.community.communityscript')
<script>
  $( function() {
        function remove(arr, what){
             var found = arr.indexOf(what);
                 while (found !== -1) {
                 arr.splice(found, 1);
                 found = arr.indexOf(what);
    }
}

      var myObj=JSON.parse( '<?php echo json_encode($arrayName) ?>' ); 
      var availableTags=myObj;

    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }
 
    $( "#tags" )
      // don't navigate away from the field on tab when selecting an item
      .on( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({
        minLength: 0,
        source: function( request, response ) {
          // delegate back to autocomplete, but extract the last term
          response( $.ui.autocomplete.filter(
            availableTags, extractLast( request.term ) ) );

        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push(ui.item.value );
          // add placeholder to get the comma-and-space at the end
           remove(availableTags, ui.item.value);  //  in array have value than delete dublecate value
             
           terms.push("");
          this.value = terms.join(",");
          return false;
        }

      });
  } );
  </script>
