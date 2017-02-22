@include('layout.header')
<style>
    td {padding:0px;}
</style>
<br>


<div class="container" id="fh5co-hero">
<div class=" text-center"><input type="button" class="btn btn-success" onclick="printDiv('fh5co-hero')" value="Print Report" /></div>
               <?php
                print_r($result->html_report);
                ?>
</div>


@include('layout.footer')
@include('layout.script')
  <script type="text/javascript">
  function printDiv(divName) {
     //var htm=document.getElementById(divName).innerHTML;
     var printContents = '<html><head><title>RupeeBoss Credit Report</title></head><body >' +document.getElementById(divName).innerHTML+'</body></html>';
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

