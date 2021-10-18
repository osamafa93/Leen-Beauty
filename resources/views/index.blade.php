<!DOCTYPE html>
<html lang="en">

  <head>
      
      <style>
          li {
  display: inline-block;
  font-size: 1em;
  list-style-type: none;
  padding: 1em;
  text-transform: uppercase;
}

li span {
  display: block;
  font-size: 1.5rem;
}

.emoji {
  display: none;
  padding: 1rem;
}

.emoji span {
  font-size: 4rem;
  padding: 0 .5rem;
}

@media all and (max-width: 768px) {
  h1 {
    font-size: 1.5rem;
  }
  
  li {
    font-size: 1.125rem;
    padding: .50rem;
  }
  
  li span {
    font-size: 3.375rem;
  }
}
      </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>LEEN BEAUTY</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="css/fullpage.min.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/templatemo-style.css">

    <link rel="stylesheet" href="css/responsive.css">

    <link rel="shortcut icon" href="images/favicon-32x32.png" />

    </head>
    
    <body  style="background-image: url(https://images.unsplash.com/photo-1526045478516-99145907023c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80);background-repeat: no-repeat;background-size: cover">
    
    <div style="" id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <header id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <a href="#" id="logo mr-auto"><img src="images/log_png.png" class="img-fluid" width="150px">
                        
                    </a>
                    <div class="navigation-row">
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                   <!-- <li data-menuanchor="slide01" class="active"><a href="{{ route('register') }}">Order Now!</a></li> -->
                                    
                                </ul>
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                                            </li>
                                        @endif
            
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('طلب جديد') }}</a>
                                            </li>
                                        @endif
                                    @else
                                    
                                    <div class="" >
                                        <a style="color: black"  href="{{ route('home') }}">
                                            {{ __('معلومات الطلب') }}
                                        </a> 
                                        <br>
                                        <a style="color: black"  href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('تسجيل الخروج') }}
                                        </a>
            
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                    @if(Auth::user()->usertype == 'admin')
                                            <li class="nav-item">
                                                <a class="nav-link" href="/admin">{{ __('لوحة التحكم') }}</a>
                                            </li>
                                            
                                        @endif
                                    @endguest
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        
       


        <div id="fullpage" class="fullpage-default">
            
            

            <div class="section animated-row" data-section="slide01">
                
                <div class="section-inner">
                     
                    <div class="welcome-box">
                       
                        <span style="color: black" class="welcome-first animate" data-animate="fadeInUp">Hello, welcome to</span>
                        <h1 style="color: black" class="welcome-title animate" data-animate="fadeInUp">Leen Beauty</h1>
                        <a style="color: black" href="{{ route('register') }}" style="background-color: transparent; color: #fff" class="btn btn-outline-secondary" data-animate="fadeInUp">Order Now!</a>
                    </div>
                </div>
                <br>
                <br>
<!--                <div class="container">-->
<!--  <h5 style="color:black" id="headline">الوقت المتبقي قبل إغلاق استلام الطلبات</h5>-->
<!--  <div style="color:black" id="countdown">-->
<!--    <ul>-->
      
      
      
<!--      <li><span id="seconds"></span>ثانية</li>-->
<!--      <li><span id="minutes"></span>دقيقة</li>-->
<!--      <li><span id="hours"></span>ساعة</li>-->
<!--      <li><span id="days"></span>يوم</li>-->
<!--    </ul>-->
<!--  </div>-->
<!--  <div id="content" class="emoji">-->
<!--    <span>🥳</span>-->
<!--    <span>🎉</span>-->
<!--    <span>🎂</span>-->
<!--  </div>-->
<!--</div>-->
            </div>

          

          
            

           

        </div>

        <div id="social-icons">
            <div class="text-right">
                <ul class="social-icons">
                    <li><a href="https://www.instagram.com/leenfaldeen/" target="_blank" title="instagram"><i class="fa fa-instagram change-color"></i></a></li>
                </ul>
            </div>
        </div>
    </div>  

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/fullpage.min.js"></script>

    <script src="js/scrolloverflow.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/jquery.inview.min.js"></script>

    <script src="js/form.js"></script>

    <script src="js/custom.js"></script>
    
    <script>
      (function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  let birthday = "Sep 10, 2021 00:00:00",
      countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        let now = new Date().getTime(),
            distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          let headline = document.getElementById("headline"),
              countdown = document.getElementById("countdown"),
              content = document.getElementById("content");

          headline.innerText = "It's my birthday!";
          countdown.style.display = "none";
          content.style.display = "block";

          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
    </script>


  </body>
</html>