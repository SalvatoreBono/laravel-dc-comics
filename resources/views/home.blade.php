 @php
     $bottomImgs = [
         [
             'title' => 'digital comics',
             'img' => '/img/buy-comics-digital-comics.png',
         ],
         [
             'title' => 'dc merchandise',
             'img' => '/img/buy-comics-merchandise.png',
         ],
         [
             'title' => 'subscription',
             'img' => '/img/buy-comics-subscriptions.png',
         ],
         [
             'title' => 'comic shop locator',
             'img' => '/img/buy-comics-shop-locator.png',
         ],
         [
             'title' => 'dc power visa',
             'img' => '/img/buy-comics-subscriptions.png',
         ],
     ];
 @endphp
 @extends('layouts.public')
 @section('title', 'Home')
 @section('content')
     <div class="bg-dark">
         <div class="container position-relative">
             <div class="container-series text-white bg-primary p-2">
                 <h3 class="title-series">CURRENT SERIES</h3>
             </div>
             <div class="pt-5 text-white pb-3">
                 <div class="row row-cols-6 gy-5 action-comics-imgs">
                     @foreach ($comics as $comic)
                         <div class="col pb-5">
                             <a href="{{ route('home.show', $comic->id) }}">
                                 <img src="{{ $comic['thumb'] }}" alt="">
                             </a>
                             <div class="pt-3 text-uppercase">{{ $comic['series'] }}</div>
                         </div>
                     @endforeach
                 </div>
                 <div class="d-flex justify-content-center">
                     <a href="{{ route('home.create') }}">
                         <button type="button" class="btn btn-primary m-auto mt-5 rounded-0 fw-bold">
                             ADD COMIC
                         </button>
                     </a>
                 </div>
             </div>
         </div>
     </div>
     <div class="bg-main-bottom">
         <div class="container text-white pt-5 pb-5">
             <div class="main-bottom">
                 <div class="d-flex align-items-center gap-3">
                     @foreach ($bottomImgs as $singleBottomImg)
                         <img style="width: 60px;" src="{{ $singleBottomImg['img'] }}" alt="" />
                         <div class="text-uppercase ps-2 pe-3">{{ $singleBottomImg['title'] }}</div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
 @endsection
