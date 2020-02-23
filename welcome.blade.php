@extends('layouts.master')

@section('content')
<div id="slides" class="carousel slid" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="1" class="active"></li>
        <li data-target="#slides" data-slide-to="2" class="active"></li>
        <li dat a-target="#slides" data-slide-to="3" class="active"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/forest1.png">
            <div class="carousel-caption">
                <h1 class="display-2"> Phillippine Animals Rescue</h1>
                <h3>Rescue System Team</h3>
                <button type="button" class="btn btn-dark btn-lg">Save Nature!</button>
                <button type="button" class="btn btn-primary btn-lg">Sign Up!</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/forest1.png">
        </div>
        <div class="carousel-item">
            <img src="images/forest2.png">
        </div>

    </div>
</div>
<!-- Jumbotro------- -->
<div class="container-fluid">
<div class="row jumbotron">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <p class="lead">
            PHARS  is intended for animals involved in cases of cruelty or neglect. We provide physical and behavioral rehabilitation for these rescued animals to be able to find them forever homes, while their cases are pending in court.
        </p>
        <div class="col-xs-12 col-sm-12 col-m-3 col-xl-2">
            <a href="#"><button type="btn btn-outline-secondary btn-lg">Team Up!</button></a>
        </div>
</div>      
</div>
<!-- Welcome Section -->

<div class="container-fluid padding">
<div class="row welcome text-center">
    <div class="col-12">
        <h1 class="display-4">Quarantine Protocols</h1>
    </div>
    <hr>
    <div class="col-12">
        <p class="lead">Newly admitted animals are placed in quarantine to ensure that disease does not spread within our facility. Our quarantine area is almost always at full capacity, unless people agree to foster or provide a temporary home to these animals until they can be admitted.</p>
    </div>
</div>
</div>

<!--Three Colum Section-->
<div class="container-fluid padding">
<div class="row text-center padding">
    <div class="col-xs-10 col-sm-6 col-md-4">
        <img src="images/tarsier.png" width="100px">
        <h3>Land Animals</h3>
        <p>Save animals who lives on the land areas. </p>
    </div>
    <div class="col-xs-10 col-sm-6 col-md-4">
        <img src="images/bird.png" width="200px">
        <h3>Flying Animals</h3>
        <p>Save animals who lives in the sky areas. </p>
    </div>
    <div class="col-xs-10 col-sm-15 col-md-4">
        <img src="images/turtle.png" width="200px">
        <h3>Aquatic Creaturs</h3>
        <p>Save animals who lives in the seas areas. </p>
    </div>
</div>
<hr class="my-4">
</div>
<!-- Two Column Section -->
<div class="container-fluid padding">
<div class="row padding">
    <div class="col-lg-6">
        <h2>If you help..</h2>
        <p>We can only rescue animals in emergency cases if there are available volunteers and transportation, and if someone can foster the animal temporarily until space becomes available.</p>
        <p>You can save and preserve natures and species for the next generations</p>
    
        <a href="#" style="margin-bottom: 10px;" class="btn btn-primary">Learn More</a>
    </div>

    <div class="col-lg-6">
        <img src="images/rescue.jpg"  class="img-fluid">
    </div>

</div>
</div>
<hr class="my-4">


<!-- Fixed Background -->
<figure>
    <div class="fxed-wrap">
        <div id="fixed">
        </div>
    </div>
</figure>

 
<!-- Team Members -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4"> Meet The Team </h1>
        </div>
        <hr>
    </div>
</div>

<!-- Card Section -->
<div class="container-fluid padding">
    <div class="row padding">

        <div class="col-md-4">
            <div class="card">

                <img class="card-img-top"  src="images/Baldazo.png">
                <div class="card-body">
                    <h4 class="card-title"> Baldazo </h4>
                    <p class="card-text"> 4th Year Bachelor in Science in Computer Science</p>

                    <a href="#" class="btn btn-outline-secondary"> See Profile </a>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">

                <img class="card-img-top" src="images/Cruz.jpg">
                <div class="card-body">
                    <h4 class="card-title"> Cruz </h4>
                    <p class="card-text"> 1st Year Bachelor in Science in Computer Science</p>

                    <a href="#" class="btn btn-outline-secondary"> See Profile </a>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">

                <img class="card-img-top" src="images/Deguzman.jpg">
                <div class="card-body">
                    <h4 class="card-title"> Dominique </h4>
                    <p class="card-text"> 1st Year Bachelor in Science in Computer Science</p>

                    <a href="#" class="btn btn-outline-secondary"> See Profile </a>
                </div>

            </div>
        </div>

    </div>
</div>
<br>
<br>

<!-- Two Column Section -->
<div class="container-fluid padding">
<div class="row padding">
    <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="card-title">
                    <h2 class="display-4">Mission</h2>
                    <p class="card-text"> Phillippine Animal Rescue exists to prevent cruelty, alleviate pain, fear and suffering in animals and to promote a society based on humane principles.</p>
                        </div>
                    </div>
                </div>
            </div>
    <br><br>

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h2 class="display-4"> Vision </h2>
                                <p class="card-text">Phillippine Animal Rescue is a credible nationwide non-profit organization, composed of a network of committed, compassionate and trustworthy individuals and institutions that initiates and leads in the promotion of animal welfare, and the protection of all animals. PAWS envisions a nation that respects animals, practices responsible pet ownership, and protects wildlife.</p><br>
                </div>
            </div>
        </div>  

            

    </div>

    <div class="col-lg-6">
        <img src="images/rescue.jpg" class="img-fluid">
    </div>

</div>
</div>
<hr class="my-4">

<!-- connect Section -->
<div class="container-fluid padding">
    <div class="row text-center padding">

        <div class="col-12">
            <h2> Connect </h2>
        </div>

    <div class="col-12 social padding">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google-plus-g"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>

    </div>
    </div>
</div>


<!-- Footer -->
<footer>
    <div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-md-4">
            <img src="images/img/w3newbie.png">
            <hr class="light">
            <p>55-5-55-5</p>
            <p>email@gmail.com</p>
            <p>100 Street</p>
            <p>Metro Manila 8=D</p>
        </div>
        <div class="col-md-4">
            <hr class="light">
            <h5> Our Hours </h5>
            <hr class="light">
            <p>Monday 8:00AM-5:00PM</p>
            <p>Tuesday 8:00AM-5:00PM<</p>
            <p>Wednesday 8:00AM-5:00PM<</p>
        </div>
        <div class="col-md-4">
            <hr class="light">
            <h5> Service Area </h5>
            <hr class="light">
            <p>Metro Manila 8=D</p>
            <p>Metro Manila 8=D</p>
            <p>Metro Manila 8=D</p>     
        </div>
        <div class="col-12">
            <hr class="light">
            <h5>&copy; w3newbie.com</h5>
        </div>

    

    </div>
    </div>
@endsection