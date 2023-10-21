<?php 
    // Untuk ngelist data path string image2 nya, nanti di ambil sesuai data yang ada di database
    $list_image = [
        "images/merch1.png",
        "images/merch2.png",
        "images/merch3.png",
    ];
?>

@extends('dashboard')

@section('content')
<style>
    body {
        background-color: #331c2e;
    }

    h2,h4,h5,p {
        font-family: goldenbook, serif;
        font-style: normal;
    }

    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        background: #1c0e19;
    }

    ::-webkit-scrollbar-thumb {
        background: #d3b66b;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .merch-container {
        max-height: 70vh;
        overflow-y: scroll;
    }

    .merch-item-container {
        flex-basis: 20%;
        margin-right: 4rem;
        margin-left: 4rem;
    }

    .merch-picture {
        box-shadow: 5px 5px 10px -3px rgba(0,0,0,0.4);
        transition: all .3s;
    }

    .merch-picture:hover {
        box-shadow: 0px 0px 15px -3px rgba(255, 187, 0 ,0.6);
    }

    .merch-img {
        width: 250px;
    }
</style>

<body>
    <h2 class="text-center text-white">2022 IU CONCERT〈The Golden Hour: Under The Orange Sun〉</h2>
    <h4 class="text-center text-white" style="margin-top: 4rem;">Our Official Merchandise</h4>

    <div class="merch-container d-flex flex-wrap justify-content-center pt-3">

        @if($merchandise->isEmpty())
        <div class=""> 
            <p class="text-white text-align-center m-5">No Merchandise Available</p>
        </div>
        @else

        @foreach($merchandise as $merch)
        <div class="merch-item-container">
            <div class="merch-item">
                <div class="merch-picture d-flex justify-content-center">
                    @if($merch->name == 'The Golden Hour DVD')
                    <img src={{$list_image[0]}} alt="" class="merch-img">
                    @elseif($merch->name == 'Metal Spinning Badge')
                    <img src={{$list_image[1]}} alt="" class="merch-img">
                    @elseif($merch->name == 'The Golden Hour T-Shirt')
                    <img src={{$list_image[2]}} alt="" class="merch-img">
                    @endif
                </div>
                <div class="merch-detail">
                    <p class="text-white mt-3">{{$merch->name}}</p>
                    <p class="text-white mt-3">IDR {{number_format($merch->price, 0)}}</p>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</body>
@endsection