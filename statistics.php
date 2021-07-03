<!DOCTYPE html>
<html lang="en">
<?php
    include "link/statlink.php";
?>
<body onload="allfetch()">
    <?php
        include "header.php";
    ?>
    <section class="main">
        <p>World At Danger</p>
        <p>Stay Strong</p>
        <p>Recovering...</p>
    </section>

    <section class="data bg-light">
        <div class="datahead">
            <h3>COVID-19 LIVE UPDATES AROUND THE WORLD</h3>
            <div class="blobs-container">
            
                <div class="blob red">
                
                </div>
                <h5>Updated every day</h5>
            </div>
        </div>
        <table class="table table-striped table-hover text-center" id="tbval">
            <tr>
                <th style="background:#7a4a91;">Country</th>
                <th style="background:#4bb7d8;">Total Cases</th>
                <th style="background:#4bb7d8;">Total Recovered</th>
                <th style="background:#f36e23;">Total Deaths</th>
                <th style="background:#4bb7d8;">New Cases</th>
                <th style="background:#9cc850;">Recovered</th>
                <th style="background:#f36e23;">Deaths</th>
            </tr>
        </table>
    </section>






<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/2d72685602.js" crossorigin="anonymous"></script>
<script>
  AOS.init();
</script>
<script src="assets/statscript.js"></script>
</body>
</html>