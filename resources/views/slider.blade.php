@extends('masterLayout.kingPasta')
@section('slider')


<!--============ Slider ============-->





<!--============ Best Dishes ============-->



<div class="bestdisheswrapper">
    <div id="bestdishes" class="container">
       
		 <h2 class="wow fadeInUp" data-wow-delay="0.3s">BEST DISHES</h2>
      <div class="slider">
      		    <ul class="slides">
          	 	 <li class="slide">
                         {{-- perulangan buat manggil databases --}}
                         @foreach($pasta as $pa)
                    <div class="item">
                         
                        <img src="{{ asset ('images2/'.$pa->gambar)}}" width="226" height="225" alt="sliderimg" class="wow flipInX"
                        data-wow-delay=".8s"> 
                          <h3>{{$pa->title}}</h3>
                          
                      </div> <!-- end of item-->
                      
                   <div class="item2">
                          <img src="{{ asset ('images2/'.$pa->gambar)}}" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                           <h3>{{$pa->title}}</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="{{ asset ('images2/'.$pa->gambar)}}" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                           <h3>{{$pa->title}}</h3>
                       
                      </div> <!-- end of item-->
                      @endforeach
                  </li>
                   <li class="slide">
                    <div class="item">
                          <img src="{{ asset ('images2/thumb1.png')}}" width="226" height="225" alt="sliderimg" > 
                          <h3>Pasta Capellini</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item2">
                          <img src="{{ asset ('images2/thumb2.jpg')}}" width="226" height="225" alt="sliderimg"> 
                          <h3>Pasta Pillus</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="{{ asset ('images2/thumb3.png')}}" width="226" height="225" alt="sliderimg"> 
                          <h3>Pasta Fusilli</h3>
                      </div> <!-- end of item-->
                  </li>
                   
        </ul>
      </div> <!-- end of slider-->
    </div> <!-- end of besth dishes-->
</div> <!-- end of bestdishes wrapper-->

<!--============ BOOK ONLINE ============-->





<!--============ MAP ============-->





<!--============ Contact us ============-->



@endsection

