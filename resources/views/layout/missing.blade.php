@include('layout.header')
<br>
<div id="fh5co-hero">
<div class="container">
    <div class="row">
    <img src="{{URL::to('images/error.jpg')}}" class="img-responsive error-img >
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">
                    Sorry, an error has occured, Requested page not found!
                </div>
                <div class="error-actions">
                    <a href="{{URL::to('/')}}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a><a href="{{URL::to('contact-us')}}" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout.footer')
@include('layout.script')
