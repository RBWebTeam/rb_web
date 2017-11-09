@include('layout.header')
@include('layout.header')
<style>
    td {padding:0px;}
</style>
<br>
<div class="container" id="fh5co-hero">
<div class=" text-center"><input type="button" class="btn btn-success" onclick="printDiv('fh5co-hero')" value="Print Report" />
<?php print_r($html);?>
</div>
</div>

@include('layout.footer')
@include('layout.script')
