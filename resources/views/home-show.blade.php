@php
    $chars = ['[', ']', '"'];
@endphp
@extends('layouts.public')
@section('content')
    <div style="height: 80px" class="bg-primary ">
        <div class="container position-relative">
            <img class="custom-comics" src="{{ $comicsShow['thumb'] }}" alt="">
        </div>
    </div>
    <div class="container pt-5 pb-5">
        <div class="d-flex">
            <div class="pe-5 col-8">

                <h4 class="text-uppercase fw-bold h-action-comics">
                    {{ $comicsShow['title'] }}</h4>
                <div style="height: 50px; border-bottom: 1.5px solid black;"
                    class="d-flex bg-action-comics bg-action-comics align-items-center pe-3 ps-3">
                    <div class=" text-white fw-bold me-auto"><span class="text-action-comics">U.S. Price:
                        </span>${{ $comicsShow['price'] }}</div>
                    <div class="fw-bold text-action-comics ">AVAILABLE</div>
                    <div class="border-right"></div>
                    <div class="dropdown">
                        <button style="background: none; border: none" class="dropdown-toggle text-white fw-bold ps-4 "
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Check Availability
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>

                <p class="pt-3"> {{ $comicsShow['description'] }}</p>
            </div>
            <div>
                <h6 class="text-uppercase  fw-bold text-secondary text-end">advertisement</h6>
                <img class="img-adv" src="/img/adv.jpg" alt="">
            </div>

        </div>
    </div>
    <div style="background-color: rgb(246, 246, 246)">

        <div class="pt-5 pb-5 container">
            <div class="row g-5">
                <div class="col-6 ">

                    <h4 class="p-3 border-bottom h-action-comics pb-5">Talent</h4>
                    <div class="d-flex border-bottom">
                        <div class="fw-bold h-action-comics">Art by:</div>
                        <p style="width: 400px; color: rgb(96, 177, 225)" class="ms-auto fw-bold">
                            {{ str_replace($chars, '', $comicsShow['writers']) }}
                        </p>
                    </div>
                    <div class="d-flex border-bottom">
                        <div class="fw-bold h-action-comics">Written by:</div>
                        <p style="width: 400px; color: rgb(96, 177, 225)" class="ms-auto fw-bold">
                            {{ str_replace($chars, '', $comicsShow['artists']) }}
                        </p>
                    </div>
                </div>
                <div class="col-6 ">

                    <h4 class="p-3 border-bottom h-action-comics pb-5">Specs</h4>
                    <div class="d-flex border-bottom">
                        <div class="fw-bold h-action-comics">Series:</div>
                        <p style="width: 400px; color: rgb(96, 177, 225)" class="ms-auto fw-bold text-uppercase">
                            {{ $comicsShow['series'] }}
                        </p>
                    </div>
                    <div class="d-flex border-bottom">
                        <div class="fw-bold h-action-comics">U.S. Price:</div>
                        <p style="width: 400px;" class="ms-auto fw-bold">
                            ${{ $comicsShow['price'] }}
                        </p>
                    </div>
                    <div class="d-flex border-bottom">
                        <div class="fw-bold h-action-comics">On Sale Date</div>
                        <p style="width: 400px;" class="ms-auto fw-bold">
                            {{ $comicsShow['sale_date'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
