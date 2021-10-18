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

    </head>
    
    <body  style="background-image: url(https://images.unsplash.com/photo-1526045478516-99145907023c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80);background-repeat: no-repeat;background-size: cover;">
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
                                           طلب جديد
                                        </h3>
                                       
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                
                    
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                    
                                            <div>
                                    
                                                <input id="total" class="block mt-1 w-full" type="hidden" name="total" :value="old('total')"  autofocus autocomplete="total" />
                                            </div>
                                            <div>
                                                <input id="ready" class="block mt-1 w-full" type="hidden" name="ready" :value="old('ready')"  autofocus autocomplete="ready" />
                                            </div>
                                            <div>
                                                <input id="shipped" class="block mt-1 w-full" type="hidden" name="shipped" :value="old('shipped')"  autofocus autocomplete="shipped" />
                                            </div>
                                            <div>
                                                <input id="received" class="block mt-1 w-full" type="hidden" name="received" :value="old('received')"  autofocus autocomplete="received" />
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="name" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('الأسم الأول') }}</label>
                    
                                                <div class="col-md-12">
                                                    <input  style="color: white; font-weight: bold; background-color: black" dir="rtl" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="fathername" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('اسم الأب') }}</label>
                    
                                                <div class="col-md-12">
                                                    <input style="color: white; font-weight: bold; background-color: black" dir="rtl" id="fathername" type="text" class="form-control @error('fathername') is-invalid @enderror" name="fathername" value="{{ old('fathername') }}"  autocomplete="fathername" autofocus>
                    
                                                    @error('fathername')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="lastname" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('اسم العائلة') }}</label>
                    
                                                <div class="col-md-12">
                                                    <input style="color: white; font-weight: bold; background-color: black" dir="rtl" id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}"  autocomplete="lastname" autofocus>
                    
                                                    @error('lastname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="notification_number" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('حساب الانستجرام الخاص بك  لإرسال صورة الإشعار حين الأرسال') }}</label>
                    
                                                <div class="col-md-12">
                                                    <input style="color: white; font-weight: bold; background-color: black" dir="rtl" id="notification_number" type="text" class="form-control @error('notification_number') is-invalid @enderror" name="notification_number" value="{{ old('notification_number') }}"  autocomplete="notification_number" autofocus>
                    
                                                    @error('notification_number')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="mobile" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('رقم موبايل المستلم') }}</label>
                    
                                                <div class="col-md-12">
                                                    <input style="color: white; font-weight: bold; background-color: black" dir="rtl" id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}"  autocomplete="mobile" autofocus>
                    
                                                    @error('mobile')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <label class="col-md-12" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                            -webkit-text-stroke-color: white;" for="male">:المدينة</label>
                                            <select dir="rtl" class="col-md-12" name="city" id="city" onChange="changecat(this.value);">
                                                <option value="" disabled selected>اختر</option>
                                                <option value="Damascus">دمشق</option>
                                                <option value="AlQardahah">القرداحة</option>
                                                <option value="DeirezZur">دير الزور</option>
                                                <option value="Jableh">جبلة</option>
                                                <option value="Aleppo">حلب</option>
                                                <option value="AlQadmus">القدموس</option>
                                                <option value="Tartus">طرطوس</option>
                                                <option value="Hama">حماة</option>
                                                <option value="Homs">حمص</option>
                                                <option value="AsSuwayda">السويداء</option>
                                                <option value="Daraa">درعا</option>
                                            </select>

                                            <br>
                                            <br>

                                            <label class="col-md-12" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                            -webkit-text-stroke-color: white;" for="male">:الفرع</label>
                                            <select dir="rtl" class="col-md-12" name="branch" id="branch">
                                                <option value="" disabled selected>اختر</option>
                                            </select>
                                            
                                            <br>
                                            <br>
                                            <div class="form-group vehicle-type">
                                                <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" for="product">المنتج</label>
                                                <select dir="rtl" style="color: white; font-weight: bold; background-color: black" name="product" class="form-control">
                                                    <option value="" disabled selected>اختر</option>
                                                    <option data-price="5000">تينت وردي</option>
                                                    <option data-price="5000">تينت برونز</option>
                                                    <option data-price="20000">عطر شعر</option>
                                                    <option data-price="10000">مسك أبيض</option>
                                                    <option data-price="5000">تينت الشفايف</option>
                                                    <option data-price="50000">زيت الشعر</option>
                                                    <option data-price="15000">مثبت مكياج</option>
                                                </select>
                                            </div>
                                            
                    
                                            <div class="form-group">
                                                <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" for="price">السعر</label>
                                                <input style="color: white; font-weight: bold; background-color: black" dir="rtl" name="price" type="integer" style="color: black" class="form-control price-input" readonly>
                                            </div>
                    
                                            
                    
                                            <div class="form-group row">
                                                <label for="quantity" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('العدد') }}</label>
                    
                                                <div class="col-md-12">
                                                    <input style="color: white; font-weight: bold; background-color: black" dir="rtl" id="quantity" type="number" min="1" max="10" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}"  autocomplete="quantity" autofocus>
                    
                                                    @error('quantity')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                                <!--first-->

                                            <div class="form-group">
                                                <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" for="seeAnotherFieldGroup">هل تريدي طلب منتج اخر؟</label>
                                                <select style="color: white; font-weight: bold; background-color: black" dir="rtl" class="form-control" id="seeAnotherFieldGroup">
                                                      <option value="no">لا</option>
                                                      <option value="yes">نعم</option>
                                                </select>
                                              </div>
                                              
                                              <div class="form-group" id="otherFieldGroupDiv">
                                                <div class="row">
                                                    <div class="form-group vehicle-type2 col-md-12">
                                                        <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" for="product2">المنتج</label>
                                                        <select dir="rtl" style="color: white; font-weight: bold; background-color: black" name="product2" class="form-control">
                                                            <option data-price2=""></option>
                                                            <option data-price2="5000">تينت وردي</option>
                                                            <option data-price2="5000">تينت برونز</option>
                                                            <option data-price2="20000">عطر شعر</option>
                                                            <option data-price2="10000">مسك أبيض</option>
                                                            <option data-price2="5000">تينت الشفايف</option>
                                                            <option data-price2="50000">زيت الشعر</option>
                                                            <option data-price2="15000">مثبت مكياج</option>
                                                        </select>
                                                    </div>
                                                  
                                                    <div class="form-group col-md-12">
                                                        <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" for="price2">السعر</label>
                                                        <input style="color: white; font-weight: bold; background-color: black" dir="rtl" name="price2" type="integer" style="color: black" class="form-control price-input2" readonly>
                                                    </div>

                                                    <div class="form-group row col-md-12">
                                                        <label for="quantity2" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('العدد') }}</label>
                            
                                                        <div class="col-md-12">
                                                            <input style="color: white; font-weight: bold; background-color: black" dir="rtl" id="quantity2" type="number" min="1" max="10" class="form-control @error('quantity2') is-invalid @enderror" name="quantity2" value="{{ old('quantity2') }}"  autocomplete="quantity2" autofocus>
                            
                                                            @error('quantity2')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>

                                              <!--second-->

                                              <div class="form-group">
                                                <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" for="seeAnotherFieldGroup2">هل تريدي طلب منتج اخر؟</label>
                                                <select style="color: white; font-weight: bold; background-color: black" dir="rtl" class="form-control" id="seeAnotherFieldGroup2">
                                                      <option value="no">لا</option>
                                                      <option value="yes">نعم</option>
                                                </select>
                                              </div>
                                              
                                              <div class="form-group" id="otherFieldGroupDiv2">
                                                <div class="row">
                                                    <div class="form-group vehicle-type3 col-md-12">
                                                        <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" for="product3">المنتج</label>
                                                        <select dir="rtl" style="color: white; font-weight: bold; background-color: black" name="product3" class="form-control">
                                                            <option data-price3=""></option>
                                                            <option data-price3="5000">تينت وردي</option>
                                                            <option data-price3="5000">تينت برونز</option>
                                                            <option data-price3="20000">عطر شعر</option>
                                                            <option data-price3="10000">مسك أبيض</option>
                                                            <option data-price3="5000">تينت الشفايف</option>
                                                            <option data-price3="50000">زيت الشعر</option>
                                                            <option data-price3="15000">مثبت مكياج</option>
                                                        </select>
                                                    </div>
                                                  
                                                    <div class="form-group col-md-12">
                                                        <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" for="price3">السعر</label>
                                                        <input style="color: white; font-weight: bold; background-color: black" dir="rtl" name="price3" type="integer" style="color: black" class="form-control price-input3" readonly>
                                                    </div>

                                                    <div class="form-group row col-md-12">
                                                        <label for="quantity3" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('العدد') }}</label>
                            
                                                        <div class="col-md-12">
                                                            <input style="color: white; font-weight: bold; background-color: black" dir="rtl" id="quantity3" type="number" min="1" max="10" class="form-control @error('quantity3') is-invalid @enderror" name="quantity3" value="{{ old('quantity3') }}"  autocomplete="quantity3" autofocus>
                            
                                                            @error('quantity3')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>

                                              <!--third-->

                                              <div class="form-group">
                                                <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" for="seeAnotherFieldGroup3">هل تريدي طلب منتج اخر؟</label>
                                                <select style="color: white; font-weight: bold; background-color: black" dir="rtl" class="form-control" id="seeAnotherFieldGroup3">
                                                      <option value="no">لا</option>
                                                      <option value="yes">نعم</option>
                                                </select>
                                              </div>
                                              
                                              <div class="form-group" id="otherFieldGroupDiv3">
                                                <div class="row">
                                                    <div class="form-group vehicle-type4 col-md-12">
                                                        <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" for="product4">المنتج</label>
                                                        <select dir="rtl" style="color: white; font-weight: bold; background-color: black" name="product4" class="form-control">
                                                            <option data-price4=""></option>
                                                            <option data-price4="5000">تينت وردي</option>
                                                            <option data-price4="5000">تينت برونز</option>
                                                            <option data-price4="20000">عطر شعر</option>
                                                            <option data-price4="10000">مسك أبيض</option>
                                                            <option data-price4="5000">تينت الشفايف</option>
                                                            <option data-price4="50000">زيت الشعر</option>
                                                            <option data-price4="15000">مثبت مكياج</option>
                                                        </select>
                                                    </div>
                                                  
                                                    <div class="form-group col-md-12">
                                                        <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" for="price4">السعر</label>
                                                        <input style="color: white; font-weight: bold; background-color: black" dir="rtl" name="price4" type="integer" style="color: black" class="form-control price-input4" readonly>
                                                    </div>

                                                    <div class="form-group row col-md-12">
                                                        <label for="quantity4" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('العدد') }}</label>
                            
                                                        <div class="col-md-12">
                                                            <input style="color: white; font-weight: bold; background-color: black" dir="rtl" id="quantity4" type="number" min="1" max="10" class="form-control @error('quantity4') is-invalid @enderror" name="quantity4" value="{{ old('quantity4') }}"  autocomplete="quantity4" autofocus>
                            
                                                            @error('quantity4')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>

                                              <!--fourth-->

                                              <div class="form-group">
                                                <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" for="seeAnotherFieldGroup4">هل تريدي طلب منتج اخر؟</label>
                                                <select style="color: white; font-weight: bold; background-color: black" dir="rtl" class="form-control" id="seeAnotherFieldGroup4">
                                                      <option value="no">لا</option>
                                                      <option value="yes">نعم</option>
                                                </select>
                                              </div>
                                              
                                              <div class="form-group" id="otherFieldGroupDiv4">
                                                <div class="row">
                                                    <div class="form-group vehicle-type5 col-md-12">
                                                        <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" for="product5">المنتج</label>
                                                        <select dir="rtl" style="color: white; font-weight: bold; background-color: black" name="product5" class="form-control">
                                                            <option data-price5=""></option>
                                                            <option data-price5="5000">تينت وردي</option>
                                                            <option data-price5="5000">تينت برونز</option>
                                                            <option data-price5="20000">عطر شعر</option>
                                                            <option data-price5="10000">مسك أبيض</option>
                                                            <option data-price5="5000">تينت الشفايف</option>
                                                            <option data-price5="50000">زيت الشعر</option>
                                                            <option data-price5="15000">مثبت مكياج</option>
                                                        </select>
                                                    </div>
                                                  
                                                    <div class="form-group col-md-12">
                                                        <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" for="price5">السعر</label>
                                                        <input style="color: white; font-weight: bold; background-color: black" dir="rtl" name="price5" type="integer" style="color: black" class="form-control price-input5" readonly>
                                                    </div>

                                                    <div class="form-group row col-md-12">
                                                        <label for="quantity5" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('العدد') }}</label>
                            
                                                        <div class="col-md-12">
                                                            <input style="color: white; font-weight: bold; background-color: black" dir="rtl" id="quantity5" type="number" min="1" max="10" class="form-control @error('quantity5') is-invalid @enderror" name="quantity5" value="{{ old('quantity5') }}"  autocomplete="quantity5" autofocus>
                            
                                                            @error('quantity5')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>

                                              <!--fifth-->

                                              <div class="form-group">
                                                <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" for="seeAnotherFieldGroup5">هل تريدي طلب منتج اخر؟</label>
                                                <select style="color: white; font-weight: bold; background-color: black" dir="rtl" class="form-control" id="seeAnotherFieldGroup5">
                                                      <option value="no">لا</option>
                                                      <option value="yes">نعم</option>
                                                </select>
                                              </div>
                                              
                                              <div class="form-group" id="otherFieldGroupDiv5">
                                                <div class="row">
                                                    <div class="form-group vehicle-type6 col-md-12">
                                                        <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" for="product6">المنتج</label>
                                                        <select dir="rtl" style="color: white; font-weight: bold; background-color: black" name="product6" class="form-control">
                                                            <option data-price6=""></option>
                                                            <option data-price6="5000">تينت وردي</option>
                                                            <option data-price6="5000">تينت برونز</option>
                                                            <option data-price6="20000">عطر شعر</option>
                                                            <option data-price6="10000">مسك أبيض</option>
                                                            <option data-price6="5000">تينت الشفايف</option>
                                                            <option data-price6="50000">زيت الشعر</option>
                                                            <option data-price6="15000">مثبت مكياج</option>
                                                        </select>
                                                    </div>
                                                  
                                                    <div class="form-group col-md-12">
                                                        <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" for="price6">السعر</label>
                                                        <input style="color: white; font-weight: bold; background-color: black" dir="rtl" name="price6" type="integer" style="color: black" class="form-control price-input6" readonly>
                                                    </div>

                                                    <div class="form-group row col-md-12">
                                                        <label for="quantity6" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                        -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('العدد') }}</label>
                            
                                                        <div class="col-md-12">
                                                            <input style="color: white; font-weight: bold; background-color: black" dir="rtl" id="quantity6" type="number" min="1" max="10" class="form-control @error('quantity6') is-invalid @enderror" name="quantity6" value="{{ old('quantity6') }}"  autocomplete="quantity6" autofocus>
                            
                                                            @error('quantity6')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>

                                                <!--sixth-->

                                                <div class="form-group">
                                                    <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                    -webkit-text-stroke-color: white;" for="seeAnotherFieldGroup6">هل تريدي طلب منتج اخر؟</label>
                                                    <select style="color: white; font-weight: bold; background-color: black" dir="rtl" class="form-control" id="seeAnotherFieldGroup6">
                                                          <option value="no">لا</option>
                                                          <option value="yes">نعم</option>
                                                    </select>
                                                  </div>
                                                  
                                                  <div class="form-group" id="otherFieldGroupDiv6">
                                                    <div class="row">
                                                        <div class="form-group vehicle-type7 col-md-12">
                                                            <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                            -webkit-text-stroke-color: white;" for="product7">المنتج</label>
                                                            <select dir="rtl" style="color: white; font-weight: bold; background-color: black" name="product7" class="form-control">
                                                                <option data-price7=""></option>
                                                                <option data-price7="5000">تينت وردي</option>
                                                                <option data-price7="5000">تينت برونز</option>
                                                                <option data-price7="20000">عطر شعر</option>
                                                                <option data-price7="10000">مسك أبيض</option>
                                                                <option data-price7="5000">تينت الشفايف</option>
                                                                <option data-price7="50000">زيت الشعر</option>
                                                                <option data-price7="15000">مثبت مكياج</option>
                                                            </select>
                                                        </div>
                                                      
                                                        <div class="form-group col-md-12">
                                                            <label style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                            -webkit-text-stroke-color: white;" for="price7">السعر</label>
                                                            <input style="color: white; font-weight: bold; background-color: black" dir="rtl" name="price7" type="integer" style="color: black" class="form-control price-input7" readonly>
                                                        </div>
    
                                                        <div class="form-group row col-md-12">
                                                            <label for="quantity7" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                            -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('العدد') }}</label>
                                
                                                            <div class="col-md-12">
                                                                <input style="color: white; font-weight: bold; background-color: black" dir="rtl" id="quantity7" type="number" min="1" max="10" class="form-control @error('quantity7') is-invalid @enderror" name="quantity7" value="{{ old('quantity7') }}"  autocomplete="quantity7" autofocus>
                                
                                                                @error('quantity7')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                            
                    
                                            <div class="form-group row">
                                                <label for="email" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('انشئ بريد إلكتروني خاص للموقع') }}</label>
                    
                                                <div class="col-md-12">
                                                    <input style="color: white; font-weight: bold; background-color: black" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="password" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('كلمة المرور') }}</label>
                    
                                                <div class="col-md-12">
                                                    <input style="color: white; font-weight: bold; background-color: black" dir="rtl" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="password-confirm" style="color: black; font-weight: bold;-webkit-text-stroke-width: 0.3px;
                                                -webkit-text-stroke-color: white;" class="col-md-12 col-form-label text-md-center">{{ __('تأكيد كلمة المرور') }}</label>
                    
                                                <div class="col-md-12">
                                                    <input style="color: white; font-weight: bold; background-color: black" dir="rtl" id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                                                </div>
                                            </div>
                    
                                            <div class="form-group row mb-0">
                                                <div class="col-md-12">
                                                    <button style="outline-style: inset; color: black;" type="submit" class="btn btn-primary">
                                                        {{ __('طلب') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                               
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

<script>$('.vehicle-type2').on('change', function() {
    $('.price-input2')
    .val(
      $(this).find(':selected').data('price2')
    );
  });</script>
  <script>$('.vehicle-type3').on('change', function() {
    $('.price-input3')
    .val(
      $(this).find(':selected').data('price3')
    );
  });</script>
    <script>$('.vehicle-type4').on('change', function() {
        $('.price-input4')
        .val(
          $(this).find(':selected').data('price4')
        );
      });</script>
      <script>$('.vehicle-type5').on('change', function() {
        $('.price-input5')
        .val(
          $(this).find(':selected').data('price5')
        );
      });</script>
      <script>$('.vehicle-type6').on('change', function() {
        $('.price-input6')
        .val(
          $(this).find(':selected').data('price6')
        );
      });</script>
      <script>$('.vehicle-type7').on('change', function() {
        $('.price-input7')
        .val(
          $(this).find(':selected').data('price7')
        );
      });</script>

<script>
    $("#seeAnotherFieldGroup").change(function() {
  if ($(this).val() == "yes") {
    $('#otherFieldGroupDiv').show();
    $('#product2').attr('required', '');
    $('#product2').attr('data-error', 'This field is required.');
    $('#price2').attr('required', '');
    $('#price2').attr('data-error', 'This field is required.');
    $('#quantity2').attr('required', '');
    $('#quantity2').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldGroupDiv').hide();
    $('#product2').removeAttr('required');
    $('#product2').removeAttr('data-error');
    $('#price2').removeAttr('required');
    $('#price2').removeAttr('data-error');
    $('#quantity2').removeAttr('required');
    $('#quantity2').removeAttr('data-error');
  }
});
$("#seeAnotherFieldGroup").trigger("change");
</script>

<script>
    $("#seeAnotherFieldGroup2").change(function() {
  if ($(this).val() == "yes") {
    $('#otherFieldGroupDiv2').show();
    $('#product3').attr('required', '');
    $('#product3').attr('data-error', 'This field is required.');
    $('#price3').attr('required', '');
    $('#price3').attr('data-error', 'This field is required.');
    $('#quantity3').attr('required', '');
    $('#quantity3').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldGroupDiv2').hide();
    $('#product3').removeAttr('required');
    $('#product3').removeAttr('data-error');
    $('#price3').removeAttr('required');
    $('#price3').removeAttr('data-error');
    $('#quantity3').removeAttr('required');
    $('#quantity3').removeAttr('data-error');
  }
});
$("#seeAnotherFieldGroup2").trigger("change");
</script>

<script>
    $("#seeAnotherFieldGroup3").change(function() {
  if ($(this).val() == "yes") {
    $('#otherFieldGroupDiv3').show();
    $('#product4').attr('required', '');
    $('#product4').attr('data-error', 'This field is required.');
    $('#price4').attr('required', '');
    $('#price4').attr('data-error', 'This field is required.');
    $('#quantity4').attr('required', '');
    $('#quantity4').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldGroupDiv3').hide();
    $('#product4').removeAttr('required');
    $('#product4').removeAttr('data-error');
    $('#price4').removeAttr('required');
    $('#price4').removeAttr('data-error');
    $('#quantity4').removeAttr('required');
    $('#quantity4').removeAttr('data-error');
  }
});
$("#seeAnotherFieldGroup3").trigger("change");
</script>

<script>
    $("#seeAnotherFieldGroup4").change(function() {
  if ($(this).val() == "yes") {
    $('#otherFieldGroupDiv4').show();
    $('#product5').attr('required', '');
    $('#product5').attr('data-error', 'This field is required.');
    $('#price5').attr('required', '');
    $('#price5').attr('data-error', 'This field is required.');
    $('#quantity5').attr('required', '');
    $('#quantity5').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldGroupDiv4').hide();
    $('#product5').removeAttr('required');
    $('#product5').removeAttr('data-error');
    $('#price5').removeAttr('required');
    $('#price5').removeAttr('data-error');
    $('#quantity5').removeAttr('required');
    $('#quantity5').removeAttr('data-error');
  }
});
$("#seeAnotherFieldGroup4").trigger("change");
</script>

<script>
    $("#seeAnotherFieldGroup5").change(function() {
  if ($(this).val() == "yes") {
    $('#otherFieldGroupDiv5').show();
    $('#product6').attr('required', '');
    $('#product6').attr('data-error', 'This field is required.');
    $('#price6').attr('required', '');
    $('#price6').attr('data-error', 'This field is required.');
    $('#quantity6').attr('required', '');
    $('#quantity6').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldGroupDiv5').hide();
    $('#product6').removeAttr('required');
    $('#product6').removeAttr('data-error');
    $('#price6').removeAttr('required');
    $('#price6').removeAttr('data-error');
    $('#quantity6').removeAttr('required');
    $('#quantity6').removeAttr('data-error');
  }
});
$("#seeAnotherFieldGroup5").trigger("change");
</script>

<script>
    $("#seeAnotherFieldGroup6").change(function() {
  if ($(this).val() == "yes") {
    $('#otherFieldGroupDiv6').show();
    $('#product7').attr('required', '');
    $('#product7').attr('data-error', 'This field is required.');
    $('#price7').attr('required', '');
    $('#price7').attr('data-error', 'This field is required.');
    $('#quantity7').attr('required', '');
    $('#quantity7').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldGroupDiv6').hide();
    $('#product7').removeAttr('required');
    $('#product7').removeAttr('data-error');
    $('#price7').removeAttr('required');
    $('#price7').removeAttr('data-error');
    $('#quantity7').removeAttr('required');
    $('#quantity7').removeAttr('data-error');
  }
});
$("#seeAnotherFieldGroup6").trigger("change");
</script>



</body>
</html>
