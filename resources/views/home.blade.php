@extends('masterLayout.kingPasta')

@section('utama')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    
                </div>
                
            </div>
            
        </div>
        <div class="sliderwrapper">
            <div id="slider" class="container">
                 <div class="slider">
                        <ul class="slides">
                              <li class="slide">
                                <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                {{-- dihapus mau nambahakan login --}}
                            
                                <p class="wow fadeInUp" data-wow-delay="0.8s"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                  the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                   type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                                    also the leap into </p>
                            <img src="{{ asset ('images2/slideimg.png') }}" width="317" height="256" class="wow fadeInRight" 
                            data-wow-delay="0.8s" alt="slide1img"> 
                         
        
        
                            </li>
                               <li class="slide">
                                <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                                <p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                               the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                                 also the leap into 
                               electronic typesetting</p>
                            <img src="{{ asset ('images2/slideimg.png') }}" width="317" height="256" class="wow fadeInRight" 
                            data-wow-delay="0.8s" alt="slideimg2"> 
                            </li>
                              <li class="slide">
                                <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                                <p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                               the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                                 also the leap into 
                               electronic typesetting</p>
                            <img src="{{ asset ('images2/slideimg.png') }}" width="317" height="256" class="wow fadeInRight" 
                            data-wow-delay="0.8s" alt="slideimg2"> 
                            </li>
                        </ul>
                  </div>
            </div> <!-- End of Slider-->
        </div> <!-- end of sliderwrapper-->
    </div>
</div>
@endsection
