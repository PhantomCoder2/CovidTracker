<!DOCTYPE html>
<html lang="en">
<?php
    include "link/links.php";
?>
<body onload="fetch()">
    <?php
        include "header.php";
    ?>
    <section class="stay">
        <p data-aos="zoom-in-left" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-sine"><span>S</span>tay Alert<i class="fas fa-exclamation-triangle al"></i></p>
        <p data-aos="flip-left" data-aos-duration="800" data-aos-offset="200" data-aos-easing="ease-in-sine"><span>C</span>ontrol the Virus<i class="fas fa-virus virus"></i></p>
        <p data-aos="slide-left" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-sine"><span>S</span>ave Lives<i class="fas fa-heartbeat heart animate__pulse"></i></p>
    </section>

    <section id="about" class="about">
        <div class="head">
            <h1 class="text-center">CoviWare</h1>
        </div>
        <div class="para">
            <p><span>C</span>orona Virus also known by the term "Covid-19" has been 
        a serious threat to this generation. Human Civilizaiton are facing a threat for their survival and livelihood.
    The threat which was originated in Wuhan of China, is now spread worldwide affecting serveral countries with 
    monumental damage. Even though now we have solution as vaccines have been prepared to deal with this virus,
    but country like India which first wasn't affected by the virus is now the leading country with one of highest number of affected people.
    The virus is developing and creating its another variants and if the people aren't aware of how dangerous this virus actually is,
    people will walk freely and will effect themselves and the people around.
    <br><br>
    Most people understand the current situation and are implementing social distancing and other preventive measure.
    Many are following trusted sources with key information about the symptoms and prevention to keep themselves and their families safe.
    <br><br>
    CoviWare is a tracker page which updates every day with new cases, deaths and more information of all the states around the globe.</p>
        </div>
    </section>
    <section class="stats bg-light">
        <div class="stathead">
            <h1 class="text-center">Statistics</h1>
        </div>
        <div class="info">
            <h3 class="text-center globe">All the cases around the globe:-</h3>
            <div class="d-flex justify-content-evenly gcase">
                <h5 id="globalcon"></h5>
                <h5 id="globalrec"></h5>
                <h5 id="globaldeath"></h5>
            </div>
            <div class="d-flex justify-content-evenly gcase">
                <h5>Total Cases Found</h5>
                <h5>Total Recovered</h5>
                <h5>Total Deaths</h5>
            </div>
            <div class="india">
                <h3 class="text-center">All the cases in India:-</h3> 
                <div class="d-flex justify-content-evenly">
                <h5 id="indiatotal"></h5>
                <h5 id="indiarec"></h5>
                <h5 id="indiadeath"></h5>
            </div>
            <div class="d-flex justify-content-evenly icase">
                <h5>Total Cases Found</h5>
                <h5>Total Recovered</h5>
                <h5>Total Deaths</h5>
            </div>
            </div>
        </div>
        <div class="all">
            <h4>Click Below, To Find the data statistics of all the countries around the globe-</h4>
            <a href="statistics.php" id="det">Details Of All Countries</a>
        </div>
    </section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/2d72685602.js" crossorigin="anonymous"></script>
<script>
  AOS.init();
</script>
<script src="assets/script.js"></script>
</body>

</html>