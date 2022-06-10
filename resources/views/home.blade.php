
@extends('layouts.base')

@section('pageTitle')
    DC Comics home
@endsection

@section('mainContent')
<div class="container-fluid bg-dark">
    <div class="container py-5">
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
    </div>
</div>
<style>

</style>
    
@endsection