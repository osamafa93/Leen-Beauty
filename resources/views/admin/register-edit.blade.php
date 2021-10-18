@extends('layouts.master')


@section('title')
تعديل معلومات المستخدمين - لوحة التحكم
    
@endsection



@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>تعديل معلومات المستخدمين</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="/role-register-update/{{ $users->id }}" method="POST" class="text-center">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">الاسم الأول</label>
                                    <input type="text" name="name" value="{{ $users->name }}" class="form-control text-center">
                                  </div>
                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">اسم الأب</label>
                                    <input type="text" name="fathername" value="{{ $users->fathername }}" class="form-control text-center">
                                  </div>
                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">اسم العائلة</label>
                                    <input type="text" name="lastname" value="{{ $users->lastname }}" class="form-control text-center">
                                  </div>
                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">حساب الانستجرام</label>
                                    <input type="text" name="notification_number" value="{{ $users->notification_number }}" class="form-control text-center">
                                  </div>
                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">البريد الإلكتروني</label>
                                    <input type="text" name="email" value="{{ $users->email }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">المدينة</label>
                                    <input type="text" name="city" value="{{ $users->city }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">الفرع</label>
                                    <input type="text" name="branch" value="{{ $users->branch }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">رقم الموبايل</label>
                                    <input type="text" name="mobile" value="{{ $users->mobile }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">المنتج 1</label>
                                    <input type="text" name="product" value="{{ $users->product }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">عدد المنتج 1</label>
                                    <input type="text" name="quantity" value="{{ $users->quantity }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">سعر المنتج 1</label>
                                    <input type="text" name="price" value="{{ $users->price }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">المنتج 2</label>
                                    <input type="text" name="product2" value="{{ $users->product2 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">عدد المنتج 2</label>
                                    <input type="text" name="quantity2" value="{{ $users->quantity2 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">سعر المنتج 2</label>
                                    <input type="text" name="price2" value="{{ $users->price2 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">المنتج 3</label>
                                    <input type="text" name="product3" value="{{ $users->product3 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">عدد المنتج 3</label>
                                    <input type="text" name="quantity3" value="{{ $users->quantity3 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">سعر المنتج 3</label>
                                    <input type="text" name="price3" value="{{ $users->price3 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">المنتج 4</label>
                                    <input type="text" name="product4" value="{{ $users->product4 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">عدد المنتج 4</label>
                                    <input type="text" name="quantity4" value="{{ $users->quantity4 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">سعر المنتج 4</label>
                                    <input type="text" name="price4" value="{{ $users->price4 }}" class="form-control text-center">
                                  </div>


                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">المنتج 5</label>
                                    <input type="text" name="product4" value="{{ $users->product5 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">عدد المنتج 5</label>
                                    <input type="text" name="quantity4" value="{{ $users->quantity5 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">سعر المنتج 5</label>
                                    <input type="text" name="price4" value="{{ $users->price5 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">المنتج 6</label>
                                    <input type="text" name="product4" value="{{ $users->product6 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">عدد المنتج 6</label>
                                    <input type="text" name="quantity4" value="{{ $users->quantity6 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">سعر المنتج 6</label>
                                    <input type="text" name="price4" value="{{ $users->price6 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">المنتج 7</label>
                                    <input type="text" name="product4" value="{{ $users->product7 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">عدد المنتج 7</label>
                                    <input type="text" name="quantity4" value="{{ $users->quantity7 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">سعر المنتج 7</label>
                                    <input type="text" name="price4" value="{{ $users->price7 }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">مجموع الطلب</label>
                                    <input type="text" name="total" value="{{ $users->total }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">هل تم التجهيز؟</label>
                                    <input type="text" name="ready" value="{{ $users->ready }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">هل تم الشحن؟</label>
                                    <input type="text" name="shipped" value="{{ $users->shipped }}" class="form-control text-center">
                                  </div>

                                  <div class="form-group">
                                    <label style="font-size: 18px; font-weight: bold; color: black">هل تم الإستلام؟</label>
                                    <input type="text" name="received" value="{{ $users->received }}" class="form-control text-center">
                                  </div>

                                  

                                  
                                 <!-- <div class="form-group">
                                      <label>نوع المستخدم</label>
                                      <select autocomplete="usertype" id="usertype" name="usertype" class="form-control text-center" onchange="console.log(this.value)">
                                          
                                          <option value="admin">مشرف الموقع</option>
                                          <option value="jc">لجنة التحكيم</option>
                                          <option value="hjc">رئيس لجنة التحكيم</option>
                                          <option value="1">فرد</option>
                                          <option value="2">جهة</option>
                                          
                                      </select>
                                  </div> -->
                                  <a href="/role-register" class="btn btn-danger">إلغاء</a>
                                  <button type="submit" class="btn btn-success">تحديث</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection



@section('scripts')


<script>
        window.onload = function() {
        var selItem = sessionStorage.getItem("SelItem");  
        $('#usertype').val(selItem);
        }
        $('#usertype').change(function() { 
            var selVal = $(this).val();
            sessionStorage.setItem("SelItem", selVal);
        });
    </script>

    
@endsection