
@extends('layouts.indexapp')

@section('page_title')
    INDEX
@endsection

@section('tags')
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection

@section('content')
<style>
.active{
    padding: unset;
}
.slick-next{
    right: 10px !important;
    top: 42px;

}
.slick-prev{
    left: 25px !important;
    top: 42px;
}
.auto-sl{
    padding: 0px 80px !important;
}
.btn-palma-de{
    background-color: #034f84;
    color: #FFFFFF;
    cursor: unset !important;
}
.btn-palma-de:hover{
    background-color: #023b64;
    color: #FFFFFF;
}
.relaxed-journey{
    top:unset;
    bottom: 34px;
    left: 64px;
}
</style>



<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12" style="background-color:#408080; ">
                    <div class="col-lg-12 ">
                        <div class="col-lg-12 header-image" style=" width:100%; height:600px; position: relative; ">
                            <img src="pilotpublic/images/cover.jpg" style="height:100%; width:100%;" class="object-image" />
                            <div class="col-lg-8 relaxed-journey">
                                    <div class="col-lg-12" style="padding:20px; text-align:left; padding-right: 250px; padding-top:15px">
                                        <div style="font-family: 'Gentona Book'; font-size: 13px; font-weight:400; color:#ffffff !important;">
                                            THE ROYAL ESSENCE OF JOURNEY
                                        </div>
                                        <div style="font-family: 'Gentona Book'; font-size: 50px; font-weight:600; color:#ffffff;">
                                            RELAXED JOURNEY EVER
                                        </div>
                                    </div>
                                </div>
                            
    
                            <div class="col-lg-4 centered-form-div">
                                <section class="loginWrapper">
                                    <ul class="tabs">
                                        <li class="active" style="font-size: 16px; border-top-left-radius:3px;">ONE WAY</li>
                                        <li style="font-size: 16px; border-top-right-radius:3px;">BY THE HOUR</li>
                                    </ul>
                                    <ul class="tab__content">
                                        <li class="active">
                                            <div class="content__wrapper">
<<<<<<< HEAD
                                                <form method="GET" action="searchbyhour" class="form">
                                                    {{ csrf_field() }}
=======
                                                <form method="POST" action="" class="form ind-form">
>>>>>>> 8c5910c0497518761b563ccf04fcd928e1aea5ca
                                                    
                                                    <div class="ipar">
                                                        <div class="cinner cinner-border-rem">
                                                            <label for="addr" class="label">
                                                                From
                                                            </label>
                                                            <label class="licon" for="addr"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                                            <input type="text" class="inputfocus" placeholder="Current Location" name="addressone" id="current" onfocus="initializeAutocompleteLocOne()" aria-required="true" required>
                                                            <input type="hidden" name="cityone" id="cityone" placeholder="City" value="">
                                                            <input type="hidden" name="latitudeone" id="latitudeone" placeholder="Latitude" value="" class="inputfocus">
                                                            <input type="hidden" name="longitudeone" id="longitudeone" placeholder="Longitude" value="" class="inputfocus">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="ipar">
                                                        <div class="cinner">
                                                            <label for="to" class="label">
                                                                To
                                                            </label>
                                                            <label class="licon" for="to"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                                            <input type="text" class="inputfocus" placeholder="Enter Ride" name="address" onfocus="initializeAutocomplete()" id="locality" aria-required="true" value="" required>
                                                            <input type="hidden" name="city" id="city" placeholder="City" value="" class="inputfocus">
                                                            <input type="hidden" name="latitude" id="latitude" placeholder="Latitude" value="" class="inputfocus">
                                                            <input type="hidden" name="longitude" id="longitude" placeholder="Longitude" value="" class="inputfocus">

                                                        </div>
                                                    </div>
                                                    <div class="ipar">
                                                        <div class="cinner">
                                                            <label for="date" class="label">
                                                                Date
                                                            </label>
                                                            <label class="licon" for="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></label>
                                                            <input id="date" type="date" name="dateone" placeholder="Adress, airport, hotel,..." class="inputfocus">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="ipar">
                                                        <div class="cinner">
                                                            <label for="time" class="label">
                                                                Time
                                                            </label>
                                                            <label class="licon" for="time"><i class="fa fa-clock-o" aria-hidden="true"></i></label>
                                                            <input id="time" type="text" name="timeone"  placeholder="" class="inputfocus">
                                                        </div>
                                                    </div>
                                                    <div id="output" class="output">
                                                       
                                                    </div>
                                                    
                                                    <button type="submit" class="search btn">Search One</button>
                                                    <script>
                                                    $(".inputfocus").focus(function(){
                                                        $(this).parent().removeClass("cinner-border-rem");
                                                        $(this).parent().addClass("cinner-border-add");

                                                        }).blur(function(){
                                                            $(this).parent().removeClass("cinner-border-add");
                                                            $(this).parent().addClass("cinner-border-rem");
                                                    });

                                                        // $(".inputfocus").blur(function(){
                                                        // $(this).parent().removeClass("cinner-border-add");
                                                        // $(this).parent().addClass("cinner-border-rem");

                                                        // });

                                                    </script>
                                                </form>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="content__wrapper">
                                                <form method="POST" action="/searchbyway"  class="form">
                                                    {{ csrf_field() }}                                                    
                                                    <div class="ipar">
                                                        <div class="cinner">
                                                            <label for="addr" class="label">
                                                                From
                                                            </label>
                                                            <label class="licon" for="addr"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                                            <input id="addr" type="text" name="" placeholder="Adress, airport, hotel,...">
                                                        </div>
                                                    </div>
                                                    <div class="ipar">
                                                        <div class="cinner">
                                                            <label for="to" class="label">
                                                                To
                                                            </label>
                                                            <label class="licon" for="to"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                                            <input id="to" type="text" name="" placeholder="Adress, airport, hotel,...">
                                                        </div>
                                                    </div>
                                                    <div class="ipar">
                                                        <div class="cinner">
                                                            <label for="date" class="label">
                                                                Date
                                                            </label>
                                                            <label class="licon" for="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></label>
                                                            <input id="date" type="date" name="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="ipar">
                                                        <div class="cinner">
                                                            <label for="time2" class="label">
                                                                Time
                                                            </label>
                                                            <label class="licon" for="time2"><i class="fa fa-clock-o" aria-hidden="true"></i></label>
                                                            <input id="time2" type="text" name="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="search btn">Search Two</button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Slick Js slider start -->
    <div class="container container-position ">
            <div class="row autoplay slick-slider-bg auto-sl">
            
              <div class=" slick_main slick_main_hover ">
                <div class="content-holder">
                   <ul class="slickslider1" >
                      <li ><!-- <i style=" " class="mt-4 mr-2 fa fa-circle fa-3x"></i> -->
                       <img class="img-fluid  mr-4 " style="float: left" width="40" src="pilotpublic/images/slickimg.png">
                         <a href="#" style="text-decoration:none"><h4 class="slickslidertxt1" style="color:#034f84; font-family: 'Gentona Book';">lorem Ipsum</h4></a>
                         
                         <span>
                             <div class="slickslidertxt2">lorem Ipsum </div> 
                         </span>    
                       </li>
                    </ul>
                  </div>
              </div> 
              <div class=" slick_main slick_main_hover">
                <div class="content-holder">
                   <ul class="slickslider1" >
                      <li ><!-- <i style=" " class="mt-4 mr-2 fa fa-circle fa-3x"></i> -->
                       <img class="img-fluid  mr-4 " style="float: left" width="40" src="pilotpublic/images/slickimg.png">
                         <a href="#" style="text-decoration:none"><h4 class="slickslidertxt1" style=" color:#034f84; font-family: 'Gentona Book';">lorem Ipsum</h4></a>
                         
                         <a href="#" style="text-decoration:none">
                             <div class="slickslidertxt2">lorem Ipsum </div> 
                          </a>    
                       </li>
                    </ul>
                  </div>
              </div> 
              <div class=" slick_main slick_main_hover">
                <div class="content-holder">
                   <ul class="slickslider1" >
                      <li ><!-- <i style=" " class="mt-4 mr-2 fa fa-circle fa-3x"></i> -->
                       <img class="img-fluid  mr-4 " style="float: left" width="40" src="pilotpublic/images/slickimg.png">
                         <a href="#" style="text-decoration:none"><h4 class="slickslidertxt1" style=" color:#034f84">lorem Ipsum</h4></a>
                         
                         <a href="#" style="text-decoration:none">
                             <div class="slickslidertxt2">lorem Ipsum </div> 
                          </a>    
                       </li>
                    </ul>
                  </div>
              </div> 
              <div class=" slick_main slick_main_hover">
                <div class="content-holder">
                   <ul class="slickslider1" >
                      <li ><!-- <i style=" " class="mt-4 mr-2 fa fa-circle fa-3x"></i> -->
                       <img class="img-fluid  mr-4 " style="float: left" width="40" src="pilotpublic/images/slickimg.png">
                         <a href="#" style="text-decoration:none"><h4 class="slickslidertxt1" style=" color:#034f84">lorem Ipsum</h4></a>
                         
                         <a href="#" style="text-decoration:none">
                             <div class="slickslidertxt2">lorem Ipsum </div> 
                          </a>    
                       </li>
                    </ul>
                  </div>
              </div> 
            
                          
            </div>
         </div>
        </div>
         <!-- main slick slider end -->
    
    
   
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="padding-top:70px; padding-bottom:70px;">
                <div class="col-lg-12">
                    
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-12" style="font-size:40px; text-align:center; font-weight:100; color:black">
                            Airport services
                        </div>
                        <div class="col-lg-12 col-md-12">
                        <div class="col-lg-3 col-md-3" style="padding:20px">
                            <div class="col-lg-12 trending">
                                <div class="col-lg-12">
                                    <img src="pilotpublic/images/Car 1.png" style="height:150px; width:150px; margin: 0 auto; display: block;" />
                                </div>
                                <div class="col-lg-12" style="text-align:center">
                                    <div class="ind-center-icon-txt">
                                        airport travel
                                    </div>
                                    <div class="ind-center-icon-txt2">
                                        Relax with 1 hour wait.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3" style="padding:20px">
                            <div class="col-lg-12 trending">
                                <div class="col-lg-12">
                                    <img src="pilotpublic/images/car2-01.png" style="height:150px; width:150px; margin: 0 auto; display: block;" />
                                </div>
                                <div class="col-lg-12" style="text-align:center">
                                    <div class="ind-center-icon-txt">
                                        All-inclusive pricing
                                    </div>
                                    <div class="ind-center-icon-txt2">
                                        Count on all-inclusive rates.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3" style="padding:20px">
                            <div class="col-lg-12 trending">
                                <div class="col-lg-12">
                                    <img src="pilotpublic/images/car3-01.png" style="height:150px; width:150px; margin: 0 auto; display: block;" />
                                </div>
                                <div class="col-lg-12" style="text-align:center">
                                    <div class="ind-center-icon-txt">
                                        Ride flexibility
                                    </div>
                                    <div class="ind-center-icon-txt2">
                                        Change or cancel for free.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3" style="padding:20px">
                            <div class="col-lg-12 trending">
                                <div class="col-lg-12">
                                    <img src="pilotpublic/images/Car 1.png" style="height:150px; width:150px; margin: 0 auto; display: block;" />
                                </div>
                                <div class="col-lg-12" style="text-align:center">
                                    <div class="ind-center-icon-txt">
                                        Ride flexibility
                                    </div>
                                    <div class="ind-center-icon-txt2">
                                        Change or cancel for free.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>	
                    </div>
                </div>
            </div>
        </div>
    </div> 



    
    <div class="container-fluid" style=" padding:0px">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12 col-md-12 col-sm-12" style="background-color:#fbfbfb; padding:10px; padding-top:20px; padding-bottom:50px">
                    <div class="col-lg-12" style=" padding-left:15px; padding-top:20px">
                        <div class="col-md-12" style="border-left:4px solid #FF8040; font-size:36px; font-weight:500;  
                                    padding-left:10px; color:#034f84; font-family:'SigvarRegular'">
                            Singapore Airlines Experience
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-top:10px">
                        <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top:20px">
                            <div class="card2" style="cursor:pointer">
                                <div class="parent">
                                    <div class="child">
                                        <img src="pilotpublic/images/sea.jpg" style="height:100%; width:100%" />
                                    </div>
                                </div>
                                <div class="col-lg-12 card3" style="background-color:#FFFFFF; padding:18px; border:1px solid rgb(245, 242, 242)">
                                    <div class="card3-style">
                                        <img src="pilotpublic/images/car02-01.png" height="100%"/>
                                    </div>
                                    <div style="font-size:24px; font-weight:500; color:#333333">One New SWISS Destinations</div>
                                    <div style="font-size:13px; color:#999999">Fly to basic sea with swiss and discover two new exciting destinations.</div>
                                    <div class="index-six-boxes">
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-apple index-six-boxes-icons"></i>
                                            AC <br>Cabs
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-500px index-six-boxes-icons"></i>
                                            Pocket <br>Friendly
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-acquisitions-incorporated index-six-boxes-icons"></i>
                                            Cashless <br>Rides
                                        </div>
                                    </div>
                                    <div style="font-weight:600; color:#034f84; font-size:16px; margin-top:10px; padding-top:15px; border-top:1px solid lightgray">Discover Now</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top:20px">
                            <div class="card2" style="cursor:pointer">
                                <div class="parent">
                                    <div class="child">
                                        <img src="pilotpublic/images/sea.jpg" style="height:100%; width:100%" />
                                    </div>
                                </div>
                                <div class="col-lg-12 card3" style="background-color:#FFFFFF; padding:18px; border:1px solid rgb(245, 242, 242)">
                                    <div class="card3-style">
                                        <img src="pilotpublic/images/car02-01.png" height="100%"/>
                                    </div>
                                    <div style="font-size:24px; font-weight:500; color:#333333">One New SWISS Destinations</div>
                                    <div style="font-size:13px; color:#999999">Fly to basic sea with swiss and discover two new exciting destinations.</div>
                                    <div class="index-six-boxes">
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-apple index-six-boxes-icons"></i>
                                            AC <br>Cabs
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-500px index-six-boxes-icons"></i>
                                            Pocket <br>Friendly
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-acquisitions-incorporated index-six-boxes-icons"></i>
                                            Cashless <br>Rides
                                        </div>
                                    </div>
                                    <div style="font-weight:600; color:#034f84; font-size:16px; margin-top:10px; padding-top:15px; border-top:1px solid lightgray">Discover Now</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top:20px">
                            <div class="card2" style="cursor:pointer">
                                <div class="parent">
                                    <div class="child">
                                        <img src="pilotpublic/images/sea.jpg" style="height:100%; width:100%" />
                                    </div>
                                </div>
                                <div class="col-lg-12 card3" style="background-color:#FFFFFF; padding:18px; border:1px solid rgb(245, 242, 242)">
                                    <div class="card3-style">
                                        <img src="pilotpublic/images/car02-01.png" height="100%"/>
                                    </div>
                                    <div style="font-size:24px; font-weight:500; color:#333333">One New SWISS Destinations</div>
                                    <div style="font-size:13px; color:#999999">Fly to basic sea with swiss and discover two new exciting destinations.</div>
                                    <div class="index-six-boxes">
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-apple index-six-boxes-icons"></i>
                                            AC <br>Cabs
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-500px index-six-boxes-icons"></i>
                                            Pocket <br>Friendly
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-acquisitions-incorporated index-six-boxes-icons"></i>
                                            Cashless <br>Rides
                                        </div>
                                    </div>
                                    <div style="font-weight:600; color:#034f84; font-size:16px; margin-top:10px; padding-top:15px; border-top:1px solid lightgray">Discover Now</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top:20px">
                            <div class="card2" style="cursor:pointer">
                                <div class="parent">
                                    <div class="child">
                                        <img src="pilotpublic/images/sea.jpg" style="height:100%; width:100%" />
                                    </div>
                                </div>
                                <div class="col-lg-12 card3" style="background-color:#FFFFFF; padding:18px; border:1px solid rgb(245, 242, 242)">
                                    <div class="card3-style">
                                        <img src="pilotpublic/images/car02-01.png" height="100%"/>
                                    </div>
                                    <div style="font-size:24px; font-weight:500; color:#333333">One New SWISS Destinations</div>
                                    <div style="font-size:13px; color:#999999">Fly to basic sea with swiss and discover two new exciting destinations.</div>
                                    <div class="index-six-boxes">
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-apple index-six-boxes-icons"></i>
                                            AC <br>Cabs
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-500px index-six-boxes-icons"></i>
                                            Pocket <br>Friendly
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-acquisitions-incorporated index-six-boxes-icons"></i>
                                            Cashless <br>Rides
                                        </div>
                                    </div>
                                    <div style="font-weight:600; color:#034f84; font-size:16px; margin-top:10px; padding-top:15px; border-top:1px solid lightgray">Discover Now</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top:20px">
                            <div class="card2" style="cursor:pointer">
                                <div class="parent">
                                    <div class="child">
                                        <img src="pilotpublic/images/sea.jpg" style="height:100%; width:100%" />
                                    </div>
                                </div>
                                <div class="col-lg-12 card3" style="background-color:#FFFFFF; padding:18px; border:1px solid rgb(245, 242, 242)">
                                    <div class="card3-style">
                                        <img src="pilotpublic/images/car02-01.png" height="100%"/>
                                    </div>
                                    <div style="font-size:24px; font-weight:500; color:#333333">One New SWISS Destinations</div>
                                    <div style="font-size:13px; color:#999999">Fly to basic sea with swiss and discover two new exciting destinations.</div>
                                    <div class="index-six-boxes">
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-apple index-six-boxes-icons"></i>
                                            AC <br>Cabs
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-500px index-six-boxes-icons"></i>
                                            Pocket <br>Friendly
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-acquisitions-incorporated index-six-boxes-icons"></i>
                                            Cashless <br>Rides
                                        </div>
                                    </div>
                                    <div style="font-weight:600; color:#034f84; font-size:16px; margin-top:10px; padding-top:15px; border-top:1px solid lightgray">Discover Now</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top:20px">
                            <div class="card2" style="cursor:pointer">
                                <div class="parent">
                                    <div class="child">
                                        <img src="pilotpublic/images/sea.jpg" style="height:100%; width:100%" />
                                    </div>
                                </div>
                                <div class="col-lg-12 card3" style="background-color:#FFFFFF; padding:18px; border:1px solid rgb(245, 242, 242)">
                                    <div class="card3-style">
                                        <img src="pilotpublic/images/car02-01.png" height="100%"/>
                                    </div>
                                    <div style="font-size:24px; font-weight:500; color:#333333">One New SWISS Destinations</div>
                                    <div style="font-size:13px; color:#999999">Fly to basic sea with swiss and discover two new exciting destinations.</div>
                                    <div class="index-six-boxes">
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-apple index-six-boxes-icons"></i>
                                            AC <br>Cabs
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-500px index-six-boxes-icons"></i>
                                            Pocket <br>Friendly
                                        </div>
                                        <div class="index-six-boxes-inner-one">
                                            <i class="fab fa-acquisitions-incorporated index-six-boxes-icons"></i>
                                            Cashless <br>Rides
                                        </div>
                                    </div>
                                    <div style="font-weight:600; color:#034f84; font-size:16px; margin-top:10px; padding-top:15px; border-top:1px solid lightgray">Discover Now</div>
                                </div>
                            </div>
                        </div>
                        
                    
                </div>
            </div>
        </div>
    </div>
    
    <style>
    .new-slick-class .slick-prev {
        margin-top: 70px;
        
    }
    .new-slick-class .slick-next {
        margin-top: 70px;
        
    }
    .new-slick-class2 .slick-next{
        margin-top: 200px;
        padding: 20px;
    }
    .new-slick-class2 .slick-prev{
        margin-top: 200px;
        padding: 20px;
    }
    </style>
    <div class="container-fluid" style="padding:0px; padding-top:60px; padding-bottom:0px; margin-bottom:50px; border-bottom:1px solid #f0eeee ">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12" style="padding-left:20px">
                        <div class="col-lg-12 meet-our-fleet">
                                Meet our Awesome Fleet
                                <br> 
                            <span style="font-weight: 100; color:rgba(0,0,0,0.92); font-size:18px;   opacity: 0.5; font-family:'AvenirNextLTPro-Regular'">
                                The widest variety of cars to choose from
                            </span>
                        </div>
                    </div>
                <div class="col-lg-12 sec-4" style="background-color:#FFFFFF; ">
                    <div class="container-fluid mt-5 slick2 " style="text-align:left; padding:0;">
                        <div class="row">
                            <div class="main" >
                                <div class="slider slider-nav h-260 new-slick-class" style="padding:60px 60px 0 60px;">
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="slick2-custom-navigation car-for" src="pilotpublic/images/car2-01.png" style="">
                                   <img class="car-back " src="pilotpublic/images/car3-01.png" />
                                   </div>
    <p class="car-type">Mini</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   <div class="d-inline6 sec-4-img-cont">
                                   <div class="hover-cont">
                                    <div class="img-hold">
                                       <img class="slick2-custom-navigation car-for" src="pilotpublic/images/car2-01.png" style="">
                                   <img class="car-back " src="pilotpublic/images/car3-01.png" />
                                   </div>
    <p class="car-type">Auto</p>
    </div>
    <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div>
                     </div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                 <div class="hover-cont">
                                                                  <div class="img-hold">
                                       <img class="slick2-custom-navigation car-for" src="pilotpublic/images/car2-01.png" style="">
                                   <img class="car-back " src="pilotpublic/images/car3-01.png" />
                                   </div>
    <p class="car-type">Bike</p>
    </div>
    <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div>
                     </div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                  <div class="img-hold">
                                                                      <img class="slick2-custom-navigation car-for" src="pilotpublic/images/car2-01.png" style="">
                                   <img class="car-back " src="pilotpublic/images/car3-01.png" />
                                                                  </div>
                                       
                                   
    <p class="car-type">Bus</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="slick2-custom-navigation car-for" src="pilotpublic/images/car2-01.png" style="">
                                   <img class="car-back" src="pilotpublic/images/car3-01.png" />
                                   </div>
                                   
    <p class="car-type">Micro</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div>
    </div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="slick2-custom-navigation car-for" src="pilotpublic/images/car2-01.png" style="">
                                   <img class="car-back " src="pilotpublic/images/car3-01.png" />
                                   </div>
                                   
    <p class="car-type">Auto</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="slick2-custom-navigation car-for" src="pilotpublic/images/car2-01.png" style="">
                                   <img class="car-back " src="pilotpublic/images/car3-01.png" />
                                   </div>
    <p class="car-type">Auto</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="slick2-custom-navigation car-for" src="pilotpublic/images/car2-01.png" style="">
                                   <img class="car-back " src="pilotpublic/images/car3-01.png" />
                                    </div>
    <p class="car-type">Prime Play</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="slick2-custom-navigation car-for" src="pilotpublic/images/car2-01.png" style="">
                                   <img class="car-back slick2-custom-navigation" src="pilotpublic/images/car3-01.png" />
                                    </div>
    <p class="car-type">Prime SUV</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="slick2-custom-navigation car-for" src="pilotpublic/images/car2-01.png" style="">
                                   <img class="car-back " src="pilotpublic/images/car3-01.png" />
                                    </div>
    <p class="car-type">Auto</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div>
                     </div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="slick2-custom-navigation car-for" src="pilotpublic/images/car2-01.png" style="">
                                   <img class="car-back slick2-custom-navigation" src="pilotpublic/images/car3-01.png" />
                                   </div>
    <p class="car-type">Kaali Peeli</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   <div class="d-inline6 sec-4-img-cont">
                                                                  <div class="hover-cont">
                                                                   <div class="img-hold">
                                       <img class="slick2-custom-navigation car-for" src="pilotpublic/images/car2-01.png" style="">
                                   <img class="car-back " src="pilotpublic/images/car3-01.png" />
                                   </div>
    <p class="car-type">Mini</p>
    </div>
                     <div class="angle">
      <img src="pilotpublic/images/tri.svg">
    </div></div>
                                   
                                </div>
                                
                                
                                <div class="col-lg-12 new-slick-class2">
                                    <div class="col-lg-12 slider slider-for h-300 bg-light for-prev" style="padding-top:100px; padding-bottom:100px; 
                                        background: linear-gradient(to bottom, #e0e7eb 0%, #ffffff 100%);">
                                        
                                        <div class="main_nav"><img src="pilotpublic/images/s1.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 1</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/slick12.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 2</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/s1.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 3</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/slick12.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 4</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/s1.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 5</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/slick12.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 6</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/s1.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 7</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/slick12.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 8</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/s1.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 9</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/slick12.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 10</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/s1.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 11</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        <div class="main_nav"><img src="pilotpublic/images/slick12.png" width="300"></div>
                                        <div class="main_nav">
                                            <p class="slicktext1 mb-3">
                                                <span style="font-size:34px; font-weight:600; ">Mini 12</span><br>
                                                <span style="margin-bottom:20px; font-size:18px; font-weight:400; ">Everyday Dependable Ride</span><br><br>
                                            </p> 
                                        </div>
                                        
                                    </div>
                                </div>
                                    
                                    
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="pilotpublic/js/sina-nav.js"></script>
    <script type="text/javascript" src="pilotpublic/js/nav1.js"></script>
    <script src="pilotpublic/js/main.js"></script> 
    
    <script src="pilotpublic/slick/slick.js"></script>
    
    <script type="text/javascript"> 
    $(function(){
    $('.autoplay').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
     
      responsive: [
    
        {
    
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
            // centerMode:true,
          }
    
        }]
    });
    
     
    $('.slider-for').slick({
            slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        centerMode: true,
        fade: true,
        infinite: false,
        slidesPerRow:2,
        asNavFor: '.slider-nav',
       });
    
      $('.slider-nav').slick({
          slidesToShow: 10,
          slidesToScroll: 1,
          asNavFor: '.slider-for',
          focusOnSelect: true,
          infinite: false,
          arrows: true,
        
        responsive: [
          {
            breakpoint: 1400,
            settings: {
                  slidesToShow: 8,
                  slidesToScroll: 1,
              }
          },
          {
            breakpoint: 1024,
            settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
              }
          },
          {
            breakpoint: 800,
            settings: {
                  slidesToShow: 6,
                  slidesToScroll: 1,
              }
          },
          {
            breakpoint: 768,
            settings: {
                  slidesToShow: 5,
                  swipe: false,
              }
          },
          {
            breakpoint: 600,
            settings: {
                  slidesToShow: 4,
                  swipe: false,
              }
          },
          {
            breakpoint: 480,
            settings: {
                  slidesToShow: 1,
                  swipe: false,
              }
          },
          {
            breakpoint: 350,
            settings: {
                  slidesToShow: 1,
                  swipe: false,
              }
          },
    
        ]
        });
    
    
      $('.slick-cmnts').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
        responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        }
      ]
    
    });
    
    });
    
    
    
    </script>
    
    <div class="container-fluid" style="padding:0px; background-image:url(pilotpublic/images/night.jpg); ">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12" style=" padding-bottom:40px">
                    <div class="col-lg-12" style="text-align:center; padding-top:60px; padding-bottom:40px;">
                        <div class="palma">
                            Palma de Mallorca
                        </div>
                        <div class="palma-sub">
                            Sun-kissed island metropolis
                        </div>
                    </div>
                    <div class="col-lg-12 " style="padding:10px">
                        <div class="col-lg-15 col-lg-3 col-sm-4 col-xs-12 palma-one" style="padding:0px; cursor:pointer" id="HoverChangeText1">
                            <div style="padding:10px">
                                <div class="col-lg-12" style="background-color:#FFFFFF; padding:0px">
                                    <div class="col-lg-12 box-head"  id="changeText1">ACCOMODATIONS</div>
                                    <div class="col-lg-12" style="height:190px;">
                                        <img src="pilotpublic/images/sea.jpg" style="height:100%; width:100%;" />
                                    </div>
                                    <div class="col-lg-12 text-cont">
                                        <div style="font-size:16px; font-weight:600; margin-top:5px; color:#333333">Hotel M House</div>
                                        <div style="font-size:14px; ">Hidden Gem</div>
                                        <div style="font-size:14px; padding:15px; color:#999999; font-family: calibri">
                                            This is handsome moderan hotel with 32 comfortabel rooms. The youngish guest enjoy the view of old town
                                            and short distance to the heart of palma.
                                        </div>
                                        <div style="padding:5px; height:40px">
                                            <div style="display:none" id="hidelogo1">
                                                <img src="pilotpublic/images/slickimg.png" style="height:20px; width:20px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                        </div>
                        <div class="col-lg-15 col-lg-3 col-sm-4 col-xs-12 palma-two" style="padding:0px; cursor:pointer" id="HoverChangeText2">
                            <div style="padding:10px">
                                <div class="col-lg-12" style="background-color:#FFFFFF; padding:0px">
                                    <div class="col-lg-12 box-head" id="changeText2">SHOPPING</div>
    
                                    <div class="col-lg-12" style="height:190px;">
                                        <img src="pilotpublic/images/sea.jpg" style="height:100%; width:100%;" />
                                    </div>
                                    <div class="col-lg-12 text-cont">
                                        <div style="font-size:16px; font-weight:600; margin-top:5px; color:#333333">Hotel M House</div>
                                        <div style="font-size:14px; ">Hidden Gem</div>
                                        <div style="font-size:14px; padding:15px; color:#999999; font-family: calibri">
                                            The youngish guest enjoy the view of old town
                                            and short distance to the heart of palma.
                                        </div>
                                        <div style="height:40px; padding:5px">
                                            <div style="display:none" id="hidelogo2">
                                                <img src="pilotpublic/images/slickimg.png" style="height:20px; width:20px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                        </div>
                        <div class="col-lg-15 col-lg-3 col-sm-4 col-xs-12 palma-three" style="padding:0px; cursor:pointer" id="HoverChangeText3">
                            <div style="padding:10px">
                                <div class="col-lg-12" style="background-color:#FFFFFF; padding:0px">
                                    <div class="col-lg-12  box-head" id="changeText3">RESTAURANT</div>
                                    <div class="col-lg-12" style="height:190px;">
                                        <img src="pilotpublic/images/sea.jpg" style="height:100%; width:100%;" />
                                    </div>
                                    <div class="col-lg-12 text-cont">
                                        <div style="font-size:16px; font-weight:600; margin-top:5px; color:#333333">Hotel M House</div>
                                        <div style="font-size:14px; ">Hidden Gem</div>
                                        <div style="font-size:14px; padding:15px; color:#999999; font-family: calibri">
                                            This is handsome moderan hotel with 32 comfortabel rooms. The youngish guest enjoy the view of old town
                                            and short distance to the heart of palma.
                                        </div>
                                        <div style="height:40px; padding:5px">
                                            <div style="display:none" id="hidelogo3">
                                                <img src="pilotpublic/images/slickimg.png" style="height:20px; width:20px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                        </div>
                        <div class="col-lg-15 col-lg-3 col-sm-4 col-xs-12 palma-four" style="padding:0px; cursor:pointer" id="HoverChangeText4">
                            <div style="padding:10px">
                                <div class="col-lg-12" style="background-color:#FFFFFF; padding:0px">
                                    <div class="col-lg-12  box-head" id="changeText4">ATTRACTIONS</div>
                                    <div class="col-lg-12" style="height:190px;">
                                        <img src="pilotpublic/images/sea.jpg" style="height:100%; width:100%;" />
                                    </div>
                                    <div class="col-lg-12 text-cont" >
                                        <div style="font-size:16px; font-weight:600; margin-top:5px; color:#333333">Hotel M House</div>
                                        <div style="font-size:14px; ">Hidden Gem</div>
                                        <div style="font-size:14px; padding:15px; color:#999999; font-family: calibri">
                                            This is handsome moderan hotel with 32 comfortabel rooms. 
                                        </div>
                                        <div style="height:40px; padding:5px">
                                            <div style="display:none" id="hidelogo4">
                                                <img src="pilotpublic/images/slickimg.png" style="height:20px; width:20px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                        </div>
                        <div class="col-lg-15 col-lg-3 col-sm-4 col-xs-12 palma-five" style="padding:0px; cursor:pointer" id="HoverChangeText5">
                            <div style="padding:10px">
                                <div class="col-lg-12" style="background-color:#FFFFFF; padding:0px">
                                    <div class="col-lg-12  box-head" id="changeText5">CULTURE</div>
                                    <div class="col-lg-12" style="height:190px;">
                                        <img src="pilotpublic/images/sea.jpg" style="height:100%; width:100%;" />
                                    </div>
                                    <div class="col-lg-12 text-cont" >
                                        <div style="font-size:16px; font-weight:600; margin-top:5px; color:#333333">Hotel M House</div>
                                        <div style="font-size:14px; ">Hidden Gem</div>
                                        <div style="font-size:14px; padding:15px; color:#999999; font-family: calibri">
                                            The youngish guest enjoy the view of old town
                                            and short distance to the heart of palma.
                                        </div>
                                        <div style="height:40px; padding:5px">
                                            <div style="display:none" id="hidelogo5">
                                                <img src="pilotpublic/images/slickimg.png" style="height:20px; width:20px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" style="margin-top:50px; margin-bottom:20px">
                        <div class="container">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-block btn-palma-de" style="border-radius:0px; padding:15px">Discover Palma De Mellorca</button>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $('#HoverChangeText1').hover(function () {
        $("#hidelogo1").toggle();
        $('#changeText1').fadeOut(200, function () {
            $('#changeText1').text('My New Sentence 1').fadeIn();		
        });
    },
    function () {
        $("#hidelogo1").toggle();
        $('#changeText1').fadeOut(200, function () {
            $('#changeText1').text('ACCOMODATIONS').fadeIn();
        });
    });
    
    $('#HoverChangeText2').hover(function () {
        $("#hidelogo2").toggle();
        $('#changeText2').fadeOut(200, function () {
            $('#changeText2').text('My New Sentence 2').fadeIn();
        });
    },
    function () {
        $("#hidelogo2").toggle();
        $('#changeText2').fadeOut(200, function () {
            $('#changeText2').text('SHOPPING').fadeIn();
        });
    });
    
    $('#HoverChangeText3').hover(function () {
        $("#hidelogo3").toggle();
        $('#changeText3').fadeOut(200, function () {
            $('#changeText3').text('My New Sentence 3').fadeIn();
        });
    },
    function () {
        $("#hidelogo3").toggle();
        $('#changeText3').fadeOut(200, function () {
            $('#changeText3').text('RESTAURANT').fadeIn();
        });
    });
    $('#HoverChangeText4').hover(function () {
        $("#hidelogo4").toggle();
        $('#changeText4').fadeOut(200, function () {
            $('#changeText4').text('My New Sentence 4').fadeIn();
        });
    },
    function () {
        $("#hidelogo4").toggle();
        $('#changeText4').fadeOut(200, function () {
            $('#changeText4').text('ATTRACTIONS').fadeIn();
        });
    });
    $('#HoverChangeText5').hover(function () {
        $("#hidelogo5").toggle();
        $('#changeText5').fadeOut(200, function () {
            $('#changeText5').text('My New Sentence 5').fadeIn();
        });
    },
    function () {
        $("#hidelogo5").toggle();
        $('#changeText5').fadeOut(200, function () {
            $('#changeText5').text('CULTURE').fadeIn();
        });
    });
    </script>
    
    <div class="container-fluid" style="padding:0px; margin-top:60px; margin-bottom:10px;">
        <div class="row">
            <div class="col-lg-12" style="padding:0px">
                <div class="col-lg-12" style="padding-left:10px; padding-bottom:15px">
                    <div class="col-lg-12" style="margin-bottom:10px; border-left:4px solid #FF8040; font-size:30px; 
                    font-weight: 500; padding-left:10px; color:#034f84; font-family:'SigvarRegular'">
                        Find Us on Maps
                    </div>
                </div>
                <div class="col-lg-12 map-cont">
                    <img src="pilotpublic/images/map.jpg" style="height:100%; width:100%">
            <img class="car-move move" src="pilotpublic/images/car3-1.png">
            <img class="car-move move1" src="pilotpublic/images/car1.png">
           <!--  <img class="car-move move2" src="pilotpublic/images/car3.png"> -->
            <img class="car-move move3" src="pilotpublic/images/car2.png">
          <!--   <img class="car-move move4" src="pilotpublic/images/car3-1.png">   --> 
                </div>
            </div>
        </div>
    </div>
    
    <section>
      <div class="container-fluid" style="box-shadow: 0 -7px 8px rgba(0, 0, 0, 0.25); padding-top:25px; padding-bottom:10px; margin-top:20px">
        <div class="row">
                <div class="col-lg-12" style="padding-left:10px; padding-bottom:15px">
                        <div class="col-lg-12" style="border-left:4px solid #FF8040; font-size:30px; font-weight: 500; 
                        padding-left:10px; color:#034f84; font-family:'SigvarRegular'">
                            Captan Ratings
                        </div>
                    </div>
          <div class="col-md-3">
            <div class="rate-left">
              <h3 class="text-center">Great</h3>
              <div class="star-cont">
                <span class="starr"><i class="glyphicon glyphicon-star star-one" aria-hidden="true"></i></span>
                <span class="starr"><i class="glyphicon glyphicon-star star-one" aria-hidden="true"></i></span>
                <span class="starr"><i class="glyphicon glyphicon-star star-one" aria-hidden="true"></i></span>
                <span class="starr"><i class="glyphicon glyphicon-star star-one" aria-hidden="true"></i></span>
                <span class="starr"><i class="glyphicon glyphicon-star star-one" aria-hidden="true"></i></span>
              </div>
              <a href="#" class="based">Based on <span class="text-underline">34,247</span></a>
            </div>
          </div>
          <div class="col-md-9 slick-cmnts" style="padding: 0 5% !important">
          <div class="cmnts-cont"><div class="cmnts">
              <div class="stars-cont">
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
              </div>
              <h4 style="color: #333333">Nice Car One</h4>
              <p> Nice car with plenty of space, driver was early, he took quickest root</p>
              <p class="name">SavyNYC</p>
            </div></div>
            <div class="cmnts-cont"><div class="cmnts">
              <div class="stars-cont">
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
              </div>
              <h4 style="color: #333333">Nice Car Two</h4>
              <p> Nice car with plenty of space, driver was early, he took quickest root</p>
              <p class="name">SavyNYC</p>
            </div></div>
            <div class="cmnts-cont"><div class="cmnts">
              <div class="stars-cont">
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
              </div>
              <h4 style="color: #333333">Nice Car Three</h4>
              <p> Nice car with plenty of space, driver was early, he took quickest root</p>
              <p class="name">SavyNYC</p>
            </div></div>
            
            <div class="cmnts-cont"><div class="cmnts">
              <div class="stars-cont">
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
                <span class="star"><i class="glyphicon glyphicon-star star-all" aria-hidden="true"></i></span>
              </div>
              <h4 style="color: #333333">Nice Car Four</h4>
              <p> Nice car with plenty of space, driver was early, he took quickest root</p>
              <p class="name">SavyNYC</p>
            </div></div>
          
        </div>
      </div>
    </section>
    
    
    
    
    
    
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="pilotpublic/js/mdtimepicker.js"></script>
    <script>
      $(document).ready(function(){
        $('#time').mdtimepicker(); //Initializes the time picker
         $('#time2').mdtimepicker();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        
        // Variables
        var clickedTab = $(".tabs > .active");
        var tabWrapper = $(".tab__content");
        var activeTab = tabWrapper.find(".active");
        var activeTabHeight = activeTab.outerHeight();
        
        // Show tab on page load
        activeTab.show();
        
        // Set height of wrapper on page load
        tabWrapper.height(activeTabHeight);
        
        $(".tabs > li").on("click", function() {
            
            // Remove class from active tab
            $(".tabs > li").removeClass("active");
            
            // Add class active to clicked tab
            $(this).addClass("active");
            
            // Update clickedTab variable
            clickedTab = $(".tabs .active");
            
            // fade out active tab
            activeTab.fadeOut(250, function() {
                
                // Remove active class all tabs
                $(".tab__content > li").removeClass("active");
                
                // Get index of clicked tab
                var clickedTabIndex = clickedTab.index();
    
                // Add class active to corresponding tab
                $(".tab__content > li").eq(clickedTabIndex).addClass("active");
                
                // update new active tab
                activeTab = $(".tab__content > .active");
                
                // Update variable
                activeTabHeight = activeTab.outerHeight();
                
                // Animate height of wrapper to new tab height
                tabWrapper.stop().delay(50).animate({
                    height: activeTabHeight
                }, 500, function() {
                    
                    // Fade in active tab
                    activeTab.delay(50).fadeIn(250);
                    
                });
            });
        });
    });
    </script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/sina-nav.js"></script>
  <script src="js/main.js"></script> 
  <script src="slick/slick.js"></script>


<script type="text/javascript">
  
$(function(){
$('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
 
  responsive: [

    {

      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode:true,
      }

    }]
});


 // $("#cardhead, #cardhead2, #cardhead3").mouseover(function () {
 //       $('#cardhead, #cardhead2, #cardhead3').text("This is the new html");
 //      $('#cardiconshow, #cardiconshow2, #cardiconshow3').show('slow');
 //    });
 //     $("#cardhead, #cardhead2, #cardhead3").mouseleave(function () {
 //      $('#cardhead, #cardhead2, #cardhead3').text("Lorem Ipsum");
 //      $('#cardiconshow, #cardiconshow2, #cardiconshow3').hide('slow');

 //    });
 // $('.cardhead').on({
 //    mouseover: function(){
 //      $('.cardhead').text("This is the new html")
 //    }, 
 //    mouseleave: function(){
 //      $(this).css("background-color", "lightblue");
 //    }, 
 //    click: function(){
 //      $(this).css("background-color", "yellow");
 //    } 
 //  });

  

// var perv_for = $('.prev-btn');
//   var next_for = $('.next-btn');
//   var prev_nav = $('.prev-btn-nav');
//   var next_nav = $('.next-btn-nav');
//   var dot_indicator = $('.dot-indicator');
$('.slider-for').slick({
        slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    centerMode: true,
    fade: true,
    infinite: false,
    slidesPerRow:2,
    asNavFor: '.slider-nav',
    //  prevArrow: '<div class="slick-prev"><img width="20" src="images/play.png"></div>',
    // nextArrow: '<div class="slick-next"><img width="20" src="images/play.png"></div>',
   });
  $('.slider-nav').slick({
      slidesToShow: 10,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      focusOnSelect: true,
      infinite: false,
      arrows: true,
    
    responsive: [
      {
        breakpoint: 1400,
        settings: {
              slidesToShow: 8,
              slidesToScroll: 1,
          }
      },
      {
        breakpoint: 1024,
        settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
          }
      },
      {
        breakpoint: 800,
        settings: {
              slidesToShow: 6,
              slidesToScroll: 1,
          }
      },
      {
        breakpoint: 768,
        settings: {
              slidesToShow: 5,
              swipe: false,
          }
      },
      {
        breakpoint: 600,
        settings: {
              slidesToShow: 4,
              swipe: false,
          }
      },
      {
        breakpoint: 480,
        settings: {
              slidesToShow: 3,
              swipe: false,
          }
      },
      {
        breakpoint: 350,
        settings: {
              slidesToShow: 2,
              swipe: false,
          }
      },

    ]
    });


 // $('.slider-for').slick({
 //   slidesToShow: 1,
 //   slidesToScroll: 1,
 //   arrows: false,
 //   fade: true,
 //   asNavFor: '.slider-nav',
 //   mobileFirst: true,


 // });
 // $('.slider-nav').slick({
 //   slidesToShow: 7,
 //   slidesToScroll: 1,
 //   asNavFor: '.slider-for',
 //   // dots: true,
 //   focusOnSelect: true,
 //      responsive: [
 //      {
 //          breakpoint: 768,
 //          settings: {
 //              slidesPerRow: 2,
 //              rows: 1,
 //              slidesToScroll: 1,
 //              slidesToShow: 1,
 //              dots: false
 //          }
 //      }
 //  ]
 // });

});

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqqhqN5q545cx57GD5ht6JVidUQuuGd34&sensor=false&v=3&libraries=geometry,places&callback=initAutocomplete" async defer></script>
<script type="text/javascript">

// $(".cinner").click(function(){
// 	$(".cinner").addClass("cinner-border-rem");
// 	$(this).removeClass("cinner-border-rem");
// 	$(this).addClass("cinner-border-add");
	

// });

function initializeAutocomplete(){
	var input = document.getElementById('locality');
	var options = {
    //types: ['(regions)'],
    componentRestrictions: {country: "PK"}
	};

	var autocomplete = new google.maps.places.Autocomplete(input, options);

	google.maps.event.addListener(autocomplete, 'place_changed', function() {
	var place = autocomplete.getPlace();
	var lat = place.geometry.location.lat();
	var lng = place.geometry.location.lng();
	var placeId = place.place_id;
	// to set city name, using the locality param
	var componentForm = {
		locality: 'short_name',
	};
	  
	  for (var i = 0; i < place.address_components.length; i++) {
		var addressType = place.address_components[i].types[0];
		if (componentForm[addressType]) {
		  var val = place.address_components[i][componentForm[addressType]];
		  document.getElementById("city").value = val;
		}
	  }
	  
		document.getElementById("latitude").value = lat;
		document.getElementById("longitude").value = lng;
		
		var latitude2 = document.getElementById("latitudeone").value;
		console.log(latitude2);
		var longitude2 = document.getElementById("longitudeone").value;
		console.log(longitude2);
		var latitude1 = lat;
		console.log(latitude1);
		var longitude1 = lng;
		console.log(longitude1);

		calculateTimeAndDistance(latitude1,longitude1,latitude2,longitude2);
		
	});

}
  
function initializeAutocompleteLocOne(){
    var input = document.getElementById('current');
    var options = {
       //types: ['(regions)'],
       componentRestrictions: {country: "PK"}
    };
    //var options = {}

    var autocomplete = new google.maps.places.Autocomplete(input, options);

    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var place = autocomplete.getPlace();
      var lat = place.geometry.location.lat();
      var lng = place.geometry.location.lng();
      var placeId = place.place_id;
      // to set city name, using the locality param
      var componentForm = {
        locality: 'short_name',
      };
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById("cityone").value = val;
        }
      }
      document.getElementById("latitudeone").value = lat;
      document.getElementById("longitudeone").value = lng;
     
    });
 }
  

var x = document.getElementById("demo");

$('#current_loc_btn').click(function(e){

  e.preventDefault();
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
	
  }
});

function showPosition(position) {
  document.getElementById("current").value = position.coords.latitude + ',' +  position.coords.longitude;
  initMap();
	  
}
  
//set the address in field


function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 8,
	  center: {lat: 40.731, lng: -73.997}
	});
	var geocoder = new google.maps.Geocoder;
	var infowindow = new google.maps.InfoWindow;

	
	geocodeLatLng(geocoder, map, infowindow);
	
  }

function geocodeLatLng(geocoder, map, infowindow) {
	var input = document.getElementById('current').value;
	var latlngStr = input.split(',', 2);
	var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
	geocoder.geocode({'location': latlng}, function(results, status) {
	  if (status === 'OK') {
		if (results[0]) {
		  document.getElementById("current").value =  results[0].formatted_address ;
		  document.getElementById("latitudeone").value = latlngStr[0];
		  document.getElementById("longitudeone").value = latlngStr[1];
		} else {
		  window.alert('No results found');
		}
	  } else {
		window.alert('Geocoder failed due to: ' + status);
	  }
	});
  }

  
  function calculateTimeAndDistance(latitude1,longitude1,latitude2,longitude2){
			var bounds = new google.maps.LatLngBounds;
        var markersArray = [];

        var origin1 = new google.maps.LatLng(latitude1, longitude1);
        
        var destinationA = new google.maps.LatLng(latitude2, longitude2);

        var destinationIcon = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=D|FF0000|000000';
        var originIcon = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=O|FFFF00|000000';
        
        var geocoder = new google.maps.Geocoder;

        var service = new google.maps.DistanceMatrixService;
        service.getDistanceMatrix({
          origins: [origin1],
          destinations: [destinationA],
          travelMode: 'DRIVING',
          unitSystem: google.maps.UnitSystem.METRIC,
          avoidHighways: false,
          avoidTolls: false
        }, function(response, status) {
          if (status !== 'OK') {
            alert('Error was: ' + status);
          } else {
            var originList = response.originAddresses;
            var destinationList = response.destinationAddresses;
            var outputDiv = document.getElementById('output');
            outputDiv.innerHTML = '';
            

            var showGeocodedAddressOnMap = function(asDestination) {
              var icon = asDestination ? destinationIcon : originIcon;
              return function(results, status) {
                if (status === 'OK') {
                  map.fitBounds(bounds.extend(results[0].geometry.location));
                  markersArray.push(new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    icon: icon
                  }));
                } else {
                  alert('Geocode was not successful due to: ' + status);
                }
              };
            };

            for (var i = 0; i < originList.length; i++) {
              var results = response.rows[i].elements;
              geocoder.geocode({'address': originList[i]},
                  showGeocodedAddressOnMap(false));
              for (var j = 0; j < results.length; j++) {
                
                outputDiv.innerHTML += 'Distance : ' + results[j].distance.text + '. Time ' +
                    results[j].duration.text + '<br>';
              }
            }
          }
        });
  }


  
  
  //now and letter change function
$("#nowandlatter").change(function(){
	if($('#nowandlatter').val() == 'later'){
	$("#later").show('slow');
	}
	else{
		$("#later").hide('slow');
	}
});  



$(function() {
  $(document).ready(function () {
	var todaysDate = new Date();
	var year = todaysDate.getFullYear();
	var month = ("0" + (todaysDate.getMonth() + 1)).slice(-2);
	var day = ("0" + todaysDate.getDate()).slice(-2);
	var maxDate = (year +"-"+ month +"-"+ day);
	$('#mindate').attr('min',maxDate);
  });
});

$(".hidden-md").hover(function(){
  $("#ruby-active").removeClass("ruby-active-menu-item");
  });
		
</script>
    
@endsection



