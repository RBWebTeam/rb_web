@include('layout.header')
  
@foreach ($quote_data as $value)

<p>{{$value}}</p>
@endforeach
@include('layout.footer')
@include('layout.script')