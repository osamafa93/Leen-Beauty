<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

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
        
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <div class="" >
                            <a style="color: black"  href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('تسجيل الخروج') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container emp-profile">
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                                <img src="images/log_png.png" alt=""/>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                        <h1 style="color: black">
                                            Leen Beauty
                                        </h1>
                                        <h3 style="color: black">
                                            الملف الشخصي
                                        </h3>
                                       
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="" role="tab" aria-controls="home" aria-selected="true">معلومات الطلب</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-work">
                                
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label style="color: black">اسم المستخدم</label>
                                                </div>
                                                <br>
                                                <div style="outline-style: inset; color: black;color: black" class="col-md-12">
                                                    {{ Auth::user()->name }}
                                                    {{ Auth::user()->fathername }}
                                                    {{ Auth::user()->lastname }}
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label style="color: black">حساب الانستجرام</label>
                                                </div>
                                                <br>
                                                <div style="outline-style: inset; color: black;color: black" class="col-md-12">
                                                    {{ Auth::user()->notification_number }}
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div style="color: black" class="col-md-12">
                                                    <label style="color: black">البريد الإلكتروني</label>
                                                </div>
                                                <br>
                                                <div style="outline-style: inset; color: black;color: black" class="col-md-12">
                                                    {{ Auth::user()->email }}
                                                </div>
                                                
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div style="color: black" class="col-md-12">
                                                    <label>رقم الهاتف</label>
                                                </div>
                                                <br>
                                                <div style="outline-style: inset; color: black;color: black" class="col-md-12">
                                                    {{ Auth::user()->mobile }}
                                                </div>
                                                
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div style="color: black" class="col-md-12">
                                                    <label>المدينة</label>
                                                </div>
                                                <br>
                                                <div style="outline-style: inset; color: black;color: black" class="col-md-12">
                                                    {{ Auth::user()->city }}
                                                </div>
                                                
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div style="color: black" class="col-md-12">
                                                    <label>الفرع</label>
                                                </div>
                                                <br>
                                                <div style="outline-style: inset; color: black;color: black" class="col-md-12">
                                                    {{ Auth::user()->branch }}
                                                </div>
                                                <br>

                                                <div style="margin-top: 20px; color: black" class="col-md-12">
                                                    <label>تفاصيل الطلب</label>
                                                </div>
                                                <table style="outline-style: inset; color: black;color: black;" class="text-center col-md-12" style="width:100%">
                                                    <tr>
                                                      <th>المنتج</th>
                                                      <th>السعر</th> 
                                                      <th>العدد</th>
                                                    </tr>
                                                    <tr>
                                                      <td>{{ Auth::user()->product }}</td>
                                                      <td>{{ Auth::user()->price }}</td>
                                                      <td>{{ Auth::user()->quantity }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ Auth::user()->product2 }}</td>
                                                        <td>{{ Auth::user()->price2 }}</td>
                                                        <td>{{ Auth::user()->quantity2 }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ Auth::user()->product3 }}</td>
                                                        <td>{{ Auth::user()->price3 }}</td>
                                                        <td>{{ Auth::user()->quantity3 }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ Auth::user()->product4 }}</td>
                                                        <td>{{ Auth::user()->price4 }}</td>
                                                        <td>{{ Auth::user()->quantity4 }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ Auth::user()->product5 }}</td>
                                                        <td>{{ Auth::user()->price5 }}</td>
                                                        <td>{{ Auth::user()->quantity5 }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ Auth::user()->product6 }}</td>
                                                        <td>{{ Auth::user()->price6 }}</td>
                                                        <td>{{ Auth::user()->quantity6 }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ Auth::user()->product7 }}</td>
                                                        <td>{{ Auth::user()->price7 }}</td>
                                                        <td>{{ Auth::user()->quantity7 }}</td>
                                                    </tr>
                                                  </table>
                                                
                                                
                                            </div>
                                            <br>
                                            
                                            
                                            <br>
                                            <div class="row">
                                                <div style="color: black" class="col-md-12">
                                                    <label>مجموع الطلب</label>
                                                </div>
                                                <br>
                                                <div style="outline-style: inset; color: black;color: black" class="col-md-12">
                                                    {{ Auth::user()->total }}
                                                </div>
                                                
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div style="color: black" class="col-md-12">
                                                    <label>هل تم تجهيز الطلب؟</label>
                                                </div>
                                                <br>
                                                <div style="outline-style: inset; color: black;color: black" class="col-md-12">
                                                    {{ Auth::user()->ready }}
                                                </div>
                                                
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div style="color: black" class="col-md-12">
                                                    <label>هل تم شحن الطلب؟</label>
                                                </div>
                                                <br>
                                                <div style="outline-style: inset; color: black;color: black" class="col-md-12">
                                                    {{ Auth::user()->shipped }}
                                                </div>
                                                
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div style="color: black" class="col-md-12">
                                                    <label>هل تم إستلام الطلب؟</label>
                                                </div>
                                                <br>
                                                <div style="outline-style: inset; color: black;color: black" class="col-md-12">
                                                    {{ Auth::user()->received }}
                                                </div>
                                                
                                                
                                            </div>
                                            <br>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Experience</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Expert</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Hourly Rate</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>10$/hr</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Total Projects</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>230</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>English Level</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Expert</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Availability</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>6 months</p>
                                                </div>
                                            </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Your Bio</label><br/>
                                            <p>Your detail description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>           
            </div>
        </main>
    </div>
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/fullpage.min.js"></script>

    <script src="js/scrolloverflow.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/jquery.inview.min.js"></script>

    <script src="js/form.js"></script>

    <script src="js/custom.js"></script>
</body>
</html>
