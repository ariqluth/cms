<!DOCTYPE html> 
<!--
    Free  Template by Mohamed Sobhy
    https://www.facebook.com/Mido.HHH
-->
<html lang="en">
<head>
	<title>King Of Pasta</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script src="{{ asset ('js2/jquery.js') }}"></script> 
	<script src="{{ asset ('js2/jquery.glide.js') }}"></script>
    
    <link rel="stylesheet" href="{{ asset ('css2/style.css') }}">
      <link rel="stylesheet" href="{{ asset ('css2/animate.css') }}">
    <script type="text/javascript" src="js2/MyJQ.js"></script>
    <script src="{{ asset ('js2/jquery.localScroll.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset ('js2/jquery.scrollTo.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset ('js2/wow.min.js') }}" type="text/javascript"></script> 

<!-- scroll function -->
<script type="text/javascript">
$(document).ready(function() {
   $('#navigations').localScroll({duration:800});
});
</script>


<script src="{{ asset ('js2/wow.min.js')}}"></script>
<script>
new WOW().init();
</script>


</head>
<body>

<!--============ Navigation ============-->

<div class="headerwrapper">
	<div id="header" class="container">
		<div class="logo"> <a href="#"><img src="{{ asset ('images2/LOGO.png')}}" alt="logo" width="165" height="74"></a> </div> <!--end of Logo-->
        <nav>
            <ul id="navigations">
                <li><a href="home">HOME</a></li>
                <li> <a href="slider">ABOUT</a></li>
                <li><a href="map">LOCATONS</a></li>
                <li><a href="menu">MENU</a></li>
                
                  <!-- Authentication Links -->
                  @guest
                  @if (Route::has('login'))
                      <li>
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li>
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
            </ul>


        </nav>

        
      </div> <!--end of header-->
</div> <!-- end of headerwrapper-->
@yield('utama')

@yield('slider')

<!--============ Slider ============-->


@yield('map')

<!--============ Best Dishes ============-->

@yield('menu')


<!--============ BOOK ONLINE ============-->

@yield('contact')



<!--============ Login ============-->

@yield('login')

<!--============ Contact us ============-->

@yield('daftar')

<!--============ FOOTER ============-->


<div class="footerwrapper">
    <footer class="container">
    	<div class="customerreview">
       		 <h2>Customer Reviews</h2>
          <div class="review">
        	<p><strong>&#8220; </strong>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor 
            aliquet. Aenean 			            sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
             nec sagittis sem nibh id elit.
             Duis sed odio sit amet nibh vulputate  a ornare odio. Sed non  mauris vitae erat consequat  
            <strong>&#8221;</strong></p>
             
             <h4>- JOHN ALVES</h4>
            
            
        	</div> <!-- end of review-->
             
              <div class="clearfix"></div>
              <div class="line"></div>
              
          <div class="review">
        	<p><strong>&#8220; </strong>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor 
            aliquet. Aenean 			            sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
             nec sagittis sem nibh id elit.
             Duis sed odio sit amet nibh vulputate  a ornare odio. Sed non  mauris vitae erat consequat  
            <strong>&#8221;</strong></p>
             
             <h4>- CATHREINE JOHNES</h4>
            
            
        	</div> <!-- end of review-->
             
              
              
            
            
        </div>
        <div class="socialize">
        
      <h2>Socialize</h2>
        <div class="socialimgs">
          <a href="https://www.facebook.com/Mido.HHH"><img src="{{ asset ('images2/fb.png') }}" width="68" height="68" class="facebook"
           alt="fb"></a>
        <a href="https://twitter.com/Mido_A7X"><img src="{{ asset ('images2/twitter.png') }}" width="68" height="68" class="twitter"
        alt="twitter"></a>
        <a href="#"><img src="{{ asset ('images2/youtube.png') }}" width="68" height="69" class="youtube" alt="youtube"></a>
        <a href="#"><img src="{{ asset ('images2/gs.png') }}" width="68" height="68" class="google" alt="g+"></a>
        <a href="#"><img src="{{ asset ('images2/message.png') }}" width="68" height="68" class="message" alt="message"></a>
      </div> <!--end of social imgs-->
      
       </div>
      
      
<div class="sendfeedback">
  	  <h2>Send Feedback</h2>
            <form>
            <h6>Your Name:</h6>
            <input type="text" class="yourname" >
             <h6>Mobile Number :</h6>
            <input type="text" class="mobilenumber">
             <h6>Message :</h6>
            <textarea></textarea>
            
            <button>SUBMIT </button>
            
            
            
            </form>
        
        </div> <!-- end of feedback-->
        
    
    
    
    </footer> <!-- end of footer-->

</div> <!-- end of footer-->




<!--============ COPYRIGHTS ============-->


<div class="copyrightswrapper">
    <div id="copyrights" class="container">
    
 	   <p>Copyright 2014 <a href="https://www.facebook.com/Mido.HHH"> Mohamed Sobhy </a> All Rights Reserved</p>
    
    </div> <!-- end of copyrights-->
</div> <!-- end of website-->
	



<div class="fixedsocial">
<a href="https://www.facebook.com/Mido.HHH"><img src="{{ asset ('images2/facebook.png')}}" width="20" height="20" alt="fb"> </a>
<a href="https://www.behance.net/Mido_HHH"><img src="{{asset  ('images2/behance.png')}}" width="20" height="20" alt="behance"> </a>




</div>

<script type="text/javascript">
    $('.sliderwrapper .slider').glide({
		autoplay: 7000,
		animationDuration: 3000,
		arrows: true,
		
		
	
		});
	
</script>
	
    <script type="text/javascript">
    $('.bestdisheswrapper .slider').glide({
		autoplay: false,
		animationDuration: 700,
		arrows: true,
		navigation:false,
		
		
	
		});
	
	
</script>
	
   
   

</body>

</html>