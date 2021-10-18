@extends('layouts.master')
<style>
    .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
  
  @font-face {
  font-family: mainfont;
  src: url(../css/Fairuz-Bold.otf);
}
@font-face {
  font-family: mainfontnormal;
  src: url(../css/Fairuz-Normal.otf);
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
@section('title')
    Dashboard | Leen Beauty
@endsection


@section('content')


<div class="container">
    <div class="row">
    <div class="col-md-12">
      <div class="card-counter">
        <i class="fas fa-list-ol"></i>
        <span class="count-numbers">
            <?php
                use Illuminate\Support\Facades\DB;
                $users = DB::table('users')->where('product','تينت الشفايف')->count();
                echo $users;
                ?>
        </span>
        <span style="font-family:mainfont;" class="count-name">تينت الشفايف</span>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card-counter">
        <i class="fas fa-list-ol"></i>
        <span class="count-numbers">
            <?php
                $users = DB::table('users')->where('product','تينت برونز')->count();
                echo $users;
                ?>
        </span>
        <span style="font-family:mainfont;" class="count-name">تينت برونز</span>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card-counter">
        <i class="fas fa-list-ol"></i>
        <span class="count-numbers">
            <?php
                $users = DB::table('users')->where('product','تينت وردي')->count();
                echo $users;
                ?>
        </span>
        <span style="font-family:mainfont;" class="count-name">تينت وردي</span>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card-counter">
        <i class="fas fa-list-ol"></i>
        <span class="count-numbers">
            <?php
                $users = DB::table('users')->where('product','عطر شعر')->count();
                echo $users;
                ?>
        </span>
        <span style="font-family:mainfont;" class="count-name">عطر شعر</span>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card-counter">
        <i class="fas fa-list-ol"></i>
        <span class="count-numbers">
            <?php
                
                $users = DB::table('users')->where('product','مثبت مكياج')->count();
                echo $users;
                ?>
        </span>
        <span style="font-family:mainfont;" class="count-name">مثبت مكياج</span>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card-counter">
        <i class="fas fa-list-ol"></i>
        <span class="count-numbers">
            <?php
                $users = DB::table('users')->where('product','مسك أبيض')->count();
                echo $users;
                ?>
        </span>
        <span style="font-family:mainfont;" class="count-name">مسك أبيض</span>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card-counter">
        <i class="fas fa-list-ol"></i>
        <span class="count-numbers">
            <?php
                $users = DB::table('users')->where('product','زيت الشعر')->count();
                echo $users;
                ?>
        </span>
        <span style="font-family:mainfont;" class="count-name">زيت الشعر</span>
      </div>
    </div>
    
     <div class="col-md-12">
      <div class="card-counter">
        <i class="fas fa-list-ol"></i>
        <span class="count-numbers">
            <?php
                $users = DB::table('users')->sum('total');
                echo $users;
                ?>
        </span>
        <span style="font-family:mainfont;" class="count-name">مجموع الاسعار</span>
      </div>
    </div>
    
    
    
  </div>
</div>


    
@endsection

@section('script')
    
@endsection