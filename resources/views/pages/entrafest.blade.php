@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="style.css">
@endsection

@section('content')

<section id="banner">
    <div class="banner-text">
        <h1 class="titleMo">Entrafest 2021</h1>
        <P class="quoteMo">YOUTH EMPOWERMENT IN ACHIEVING UNITY AND EXECELLENCE THROUGH SPORTS</P>
        <div class="banner-btn">
            <a href="https://www.facebook.com/CSGSTIMalolos" target="_blank"> <span></span>Find Out</a>
            <a href="#"><span></span>Read More</a>

        </div>

    </div>
</section>


<div id="menuBtn">
    <img src="burger.png" id="menu">
</div>

<!--NAVIGATION FEATURES-->
<section id="feature">
    <div class="title-text">
        <p>Opening Day</p>
        <div class="LOTLOT">Lightning of Torch</div>
    </div>

    <div class="feature-box">
        <div class="features">
            <div class="LOT">Lightning of Torch</div>




            <div class="features-desc">
                <div class="feature-icon"></div>
                <div class="feature-text">
                    <p>
                        <b>March 15, 2021</b><br>
                        Let us witness the LIGHTING OF TORCH led by Sir Francis Salazar,
                        our <br>Deputy SchoolAdministrator, STI College Malolos Faculty,
                        and our<br> Student Government Officers!
                        Directed, Videographed, and<br> Edited by:
                        iKONEK Organization
                        #Entrafest2021
                    </p>
                </div>
            </div>
        </div>
        <div class="features-img">
            <img src="LOT_3.PNG" class="open">
        </div>

    </div>
</section>

<!--CAMP TEASERS-->

<section id="service">
    <div class="title-text">
        <div class="DG-text">
            <p>Digital Artistry</p>
            <div class="CT">Camp Teaser</div>
            < <div>
        </div>

        <div class="service-box">
            <div class="single-service">
                <img src="campt1.PNG" class="x">
                <div class="overlay"></div>
            </div>
            <div class="single-service">
                <img src="campt2.PNG" class="x">
                <div class="overlay"></div>
            </div>
            <div class="single-service">
                <img src="campt3.PNG" class="x">
                <div class="overlay"></div>
            </div>
            <div class="single-service">
                <img src="campt4.PNG" class="x">
                <div class="overlay"></div>
            </div>
        </div>

</section>


<!--CAMPS LOGO-->
<section id="camps">
    <div class="title-text">
        <p>Mighty Six</p>
        <div class="campses">Ameliorate Camps</div>
    </div>

    <div class="feature-box">
        <div class="features">
            <h1 class="campF">CAMP FIRE</h1>
            <div class="features-desc">
                <div class="feature-icon"></div>
                <div class="feature-text-new">
                    <p>
                        #CampValiantFIRE
                    </p>
                </div>
            </div>
        </div>
        <div class="features-imgg">
            <img src="Fire.png" class="logos">
        </div>

        <!--CAMP Earth-->
        <div class="features">
            <h1 class="campF">CAMP EARTH</h1>
            <div class="features-desc">
                <div class="feature-icon"></div>
                <div class="feature-text-new">
                    <p>
                        #CampBenevolentEARTH
                    </p>
                </div>
            </div>
        </div>
        <div class="features-imgg">
            <img src="Earth.png" class="logos">
        </div>

        <!--CAMP Lightning-->

        <div class="features">
            <h1 class="campF">CAMP LIGHTNING</h1>
            <div class="features-desc">
                <div class="feature-icon"></div>
                <div class="feature-text-new">
                    <p>
                        #CampVisionaryLIGHTNING
                    </p>
                </div>
            </div>
        </div>
        <div class="features-imgg">
            <img src="Lightning.png" class="logos">
        </div>

        <!--CAMP Water-->
        <div class="features">
            <h1 class="campF">CAMP WATER</h1>
            <div class="features-desc">
                <div class="feature-icon"></div>
                <div class="feature-text-new">
                    <p>
                        #CampResilientWATER
                    </p>
                </div>
            </div>
        </div>
        <div class="features-imgg">
            <img src="Water.png" class="logos">

        </div>

        <!--CAMP Wind-->
        <div class="features">
            <h1 class="campF">CAMP WIND</h1>
            <div class="features-desc">
                <div class="feature-icon"></div>
                <div class="feature-text-new">
                    <p>
                        #CampEuphoricWIND
                    </p>
                </div>
            </div>
        </div>
        <div class="features-imgg">
            <img src="Wind.png" class="logos" center>
        </div>
        <!--CAMP Ice-->
        <div class="features">
            <h1 class="campF">CAMP ICE</h1>
            <div class="features-desc">
                <div class="feature-icon"></div>
                <div class="feature-text-new">
                    <p>
                        #CampEnchantingICE
                    </p>
                </div>
            </div>
        </div>
        <div class="features-img">
            <div class="yelo"><img src="Ice.png"></div>
        </div>

</section>

<!--SCRIPT PARA SA EKONOMIYA-->
<script>
    var menuBtn = document.getElementById("menuBtn")
    var sideNav = document.getElementById("sideNav")
    var menu = document.getElementById("menu")

    sideNav.style.right = "-250px";

    menuBtn.onclick = function () {
        if (sideNav.style.right == "-250px") {
            sideNav.style.right = "0";
            menu.src = "close.png";
        } else {
            sideNav.style.right = "-250px";
            menu.src = "burger.png";
        }
    }
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 500,
        speedAsDuration: true
    });

</script>

@endsection
