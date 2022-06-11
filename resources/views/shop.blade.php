
@extends('layouts.base')

@section('pageTitle')
    DC Comics Shop
@endsection

@section('mainContent')
    <div class="container-fluid bg-primary super">
        <div class="img-super">
            <img src="images/comic-super.jpg" alt="">
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex justify-content-between bg-success text-white green">
                    <div class="d-flex ">
                        <div class="mt-3">
                            <p>U:S:Price: £19.99</p>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-end ">
                    <div class="text-right px-2 br">
                        <p class="mt-3">AVAIBLE</p>
                    </div>
                    <div>
                        <p class="mt-3 px-2">Check Avaiability ></p>
                    </div>
                </div>
                </div>
                <div class="col-6 debug">
                    <img src="images/adv.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light ">
        <div class="container  ">
            <div class="row ">
                <div class="col-6 debug d-flex">
                   <div class="col debug">Art by:</div>
                   <div class="col debug">Fred Flinstone, Maria Capuala, josè Enanez,Fred Flinstone, Maria Capuala, josè Enanez,Fred Flinstone, Maria Capuala, josè Enanez,Fred Flinstone, Maria Capuala, josè Enanez,Fred Flinstone, Maria Capuala, josè Enanez,</div>
                </div>
                <div class="col-6 debug">fewfwfwfef</div>
            </div>
            <div class="row">
                <div class="col-6 debug d-flex">
                   <div class="col debug">swxwwxwxw</div>
                   <div class="col debug">ndsncis</div>
                </div>
                <div class="col-6 debug">fewfwfwfef</div>
            </div>
            <div class="row">
                <div class="col-6 debug d-flex">
                   <div class="col debug">swxwwxwxw</div>
                   <div class="col debug">ndsncis</div>
                </div>
                <div class="col-6 debug">fewfwfwfef</div>
            </div>
        </div>
        {{-- <ul class="d-flex">
            <li class="d-flex">
                <p>DIGITAL COMICS</p>
                <img src="images/buy-comics-digital-comics.png" alt="">
            </li>
        </ul> --}}
        <div class="container d-flex justify-content-center py-4">
                <div class="icons-grey d-flex me-5">
                    <h6 class="me-5">DIGITAL COMICS</h6>
                    <img src="images/buy-comics-digital-comics.png" alt="" class="icona">
                </div>
                <div class="icons-grey d-flex  me-5">
                    <h6 class="me-5">MERCHANDISE</h6>
                    <img src="images/buy-comics-merchandise.png" alt=""class="icona ">
                </div>
                <div class="icons-grey d-flex  me-5">
                    <h6 class="me-5">SHOP</h6>
                    <img src="images/buy-comics-shop-locator.png" alt=""class="icona">
                </div>
                <div class="icons-grey d-flex  me-5">
                    <h6 class="me-5">SUBSCRIPTION</h6>
                    <img src="images/buy-comics-subscriptions.png" alt=""class="icona">
                </div>
                <div class="icons-grey d-flex  me-5">
                    <h6 class="me-5">BUY</h6>
                    <img src="images/buy-dc-power-visa.svg" alt=""class="icona">
                </div>
            </div>
            
    </div>

    <style>
        .debug{
            border: 1px solid black;
        }
      .super{
          height:80px;
      }
        
      
      .img-super{
            position: relative;
            
        }

        .img-super img{
            position: absolute;
            top: -220px;
            left: 450px;
        }
        .green{
            height:60px;
        }
        .br{
            border-right: 1px solid black;
        }
        .icona{
            width: 60px;
            height: 60px;

            
        }
  
      

    </style>
@endsection