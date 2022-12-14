@extends('layouts.app')

@if( Auth::check() )
@section('content')

  <!--メインビジュアル-->
      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-bold">↓↓「カテゴリーで検索」↓↓️️</h2>
     
            <!--<div class="input-group">-->
            <!--  <input type="text" class="form-control" placeholder="カテゴリーを入力">-->
            <!--  <button class="btn btn-outline-success" type="button" id="button-addon2"><i class="fas fa-search"></i> 検索</button>-->
            <!--</div>-->
          </div>
        </div>
  
  
    <!--画像-->
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      
       <div class="col">
        <div class="card bg-dark text-white">
          <a href="{{ url('/items') }}"><img src="img/omutu.jpg" class="card-img rounded" alt="..."></a>
        </div>
      </div>
      
      <div class="col">
        <div class="card bg-dark text-white">
          <img src="img/stroller.jpg" class="card-img rounded" alt="...">
          <div class="card-img-overlay">
            <h2 class="card-title text-align text-danger fs-1 text-white bg-warning">Coming Soon</h2>
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="card bg-dark text-white">
          <img src="img/childseat.jpg" class="card-img rounded" alt="...">
          <div class="card-img-overlay">
            <h2 class="card-title text-align text-danger fs-1 text-white bg-warning">Coming Soon</h2>
          </div>
        </div>
      </div>
 
    </div>
  </div
        
       </section>
      
@endsection
@endif
