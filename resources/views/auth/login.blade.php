<!DOCTYPE html>
<html lang="en">

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
                                            تسجيل الدخول
                                        </h3>
                                       
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-work">
                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="tab-content profile-tab" id="myTabContent">
                                
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            
                                             
                                
                                                <div class="card-body">
                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf
                                
                                                        <div class="form-group row">
                                                            <label style="color: black; font-weight: bold" for="email" class="col-md-12 col-form-label text-md-center">{{ __('البريد الإلكتروني') }}</label>
                                
                                                            <div class="col-md-12">
                                                                <input style="background-color: black" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                
                                                        <div class="form-group row">
                                                            <label style="color: black; font-weight: bold" for="password" class="col-md-12 col-form-label text-md-center">{{ __('كلمة المرور') }}</label>
                                
                                                            <div class="col-md-12">
                                                                <input style="background-color: black" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                
                                                        
                                
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                
                                                                    <label style="color: black" class="form-check-label" for="remember">
                                                                        {{ __('حفظ معلومات الدخول؟') }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                
                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-12">
                                                                <button style="outline-style: inset; color: black;" type="submit" class="btn btn-primary">
                                                                    {{ __('تسجيل الدخول') }}
                                                                </button>
                                
                                                                {{-- @if (Route::has('password.request'))
                                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                        {{ __('هل نسيت كلمة المرور؟') }}
                                                                    </a>
                                                                @endif --}}
                                                            </div>
                                                        </div>
                                
                                                        
                                                    </form>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </form>           
            </div>
        </main>

<script src="js/jquery.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/fullpage.min.js"></script>

<script src="js/scrolloverflow.js"></script>

<script src="js/owl.carousel.min.js"></script>

<script src="js/jquery.inview.min.js"></script>

<script src="js/form.js"></script>

<script src="js/custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>




        <script>
            var mealsByCategory = {
    Damascus: ["الحمرا", "البرامكة", "شارع بغداد", "عمارة","الفحامة","جرمانا","قطنا","جديدة عرطوز","يبرود","القطيفة","دير عطية","ضاحية الأسد"],
    AlQardahah: ["الرئيسي"],
    DeirezZur: ["الرئيسي"],
    Jableh: ["الرئيسي", "رأس العين"],
    Aleppo: ["الجميلية", "الفرقان"],
    AlQadmus: ["المدينة", "محطة القدموس",],
    Tartus: ["الرئيسي", "الكراج القديم", "الكراج الجديد", "صناعة", "الشيخ بدر","الشيخ سعد","الدريكيش","صافيتا","بانياس"],
    Hama: ["الكراج", "ساحة العاصي", "السلمية", "سلحب", "مصياف"],
    Homs: ["الحضارة", "جورة الشياح", "الإنشاءات", "الزهراء"],
    AsSuwayda: ["الرئيسي"],
    Daraa: ["الرئيسي", "أزرع", "الصنمين"]
}
        </script>
        <script>    function changecat(value) {
            if (value.length == 0) document.getElementById("branch").innerHTML = "<option></option>";
            else {
                var catOptions = "";
                for (categoryId in mealsByCategory[value]) {
                    catOptions += "<option>" + mealsByCategory[value][categoryId] + "</option>";
                }
                document.getElementById("branch").innerHTML = catOptions;
            }
        }</script>
        <script>$('.vehicle-type').on('change', function() {
            $('.price-input')
            .val(
              $(this).find(':selected').data('price')
            );
          });</script>




</body>
</html>
