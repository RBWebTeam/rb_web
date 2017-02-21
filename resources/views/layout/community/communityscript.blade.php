<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
<script src="{{URL::to('js/addonjquery.js')}}"></script>
<script src="{{URL::to('js/addonjquery-ui.min.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function() {
    src = "{{ route('searchajaxqu')}}";
     $(".search_qu").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term
                },
                success: function(data) {
                    response(data);
                   
                }
            });
        },
        min_length: 3,
       
    });
});
</script>



