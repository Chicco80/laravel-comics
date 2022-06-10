
@extends('layouts.base')

@section('pageTitle')
    DC Comics home
@endsection

@section('mainContent')
<div class="container-fluid bg-dark">
    <div class="container py-5">
        <div class="button-up ">
            <input class="  bg-primary p-2 text-white" type="button" value="CURRENT SERIES">
        </div>
        <div class="row">
            @foreach ($comic as $item)
            <div class="col-2 my-3">
                <div class="card h-100 " >
                    <img src="{{$item['thumb']}}" class="card-img-top" alt="...">
                    <div class="card-body bg-dark">
                    <h5 class="card-title text-white">{{$item['title']}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="button py-3 d-flex justify-content-center">
            <input class="  bg-primary p-2 text-white" type="button" value="LOAD MORE">
        </div>
    </div>
</div>
<div class="container-fluid bg-primary">
    <div class="container">
        <div class="row">
            @foreach($icon as $i)
            <div class="col py-5">
                <img  class="icon" src="{{$i['src']}}" alt="">
                <span class="text-white">{{$i['title']}}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>

    .container-fluid{
        position: relative;
    }
    .button-up{
        position: absolute;
        top:-20px;
        left: 300px;
    }
    .icon{
        width: 50px;
        height: 50px;
    }

</style>
    
@endsection