@extends('layouts.app')

@section('metaTitle', $comic['title'] . '-' . 'DC Comics')

@section('content')

<section>

    <div class="section-img">
        <img class="comic-img" src="{{$comic['thumb']}}" alt="">
    </div>
    <div class="details-container">
    <div class="details-left">
        <h1 class="details-title">{{$comic['title']}}</h1>
        <div class="green-bar">
            <div class="comic-price"> 
                <p class="light-text"> U.S. Price: <strong> {{$comic['price']}} </strong></p>
                <p class="light-text">AVAILABLE</p>
            </div>
            <div class="comic-check"> 
                <p><strong>Check Availability &#9660;</strong></p>
            </div>
        </div>
        <p>{{$comic['description']}}</p>
    </div>
    <div class="details-right">
        <img src="{{ asset('img/adv.jpg') }}" alt="">
    </div>
    
</div>
</section>

{{-- SPECS --}}
<div class="specifications">
    <div class="spec-container">
        <div class="row">
            <div class="col-50 talent">
            <h3>Talent</h3>
            <div class="artists">
                <div class="col-25">
                    <p>Art by:</p>
                </div>
                <div class="col-75">
                    <p> @foreach($comic['artists'] as $artist)
                    {{$artist}},
                    @endforeach
                    </p>
                </div>
            </div>

            <div class="writters">
                <div class="col-25">
                    <p>Written by:</p>
                </div>
               <div class="col-75">
                    <p> @foreach($comic['writers'] as $writer)
                    {{$writer}},
                    @endforeach
                    </p>
               </div>
            </div>
        </div>

        <div class="col-50 specs">
            <h3>Specs</h3>
            <div class="info_specs">
                <div class="col-25">
                    <p>Series:</p>
                </div>
                <div class="col-75">
                    <p class="series">{{ strtoupper($comic['series']) }}</p>
                </div>
            </div>

             <div class="info_specs">
                <div class="col-25">
                    <p>U.S. Price:</p>
                </div>
                <div class="col-75">
                    <p>{{ $comic['price'] }}</p>
                </div>
            </div>

            <div class="info_specs date">
                <div class="col-25">
                    <p>On Sale Date:</p>
                </div>
                <div class="col-75">
                    <p>{{ $comic['sale_date'] }}</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection