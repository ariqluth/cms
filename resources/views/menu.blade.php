@extends('masterLayout.kingPasta')
@section('menu')
<div class="bookonlinewrapper">
    <div class="container" id="bookonline">
    <h3 class="wow fadeInUp" data-wow-delay="0.3s"> BOOK ONLINE</h3>

    @foreach($pasta as $p)
    <h2 hidden>{{$p->id}}</h2>
@endforeach

    <form >
    <input type="text" class="name wow zoomIn" placeholder="Your Name" >
    <input type="text" class="email wow zoomIn" placeholder="Your E-MAIL">
    <input type="text" class="from wow zoomIn" placeholder="09-06-2014">
    <input type="text" class="to wow zoomIn" placeholder="09-06-2014">
    <input type="text" class="persons wow zoomIn" placeholder="Number of persons">
    
   
    
    <button class="booknow wow fadeInUp"> BOOK NOW </button>
    
    </form>
    
    
    </div>
</div> <!-- end of book online wrapper-->
@endsection