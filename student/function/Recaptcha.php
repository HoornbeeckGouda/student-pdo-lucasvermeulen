<?php
include('../view/header.php');
?>

<div id="formContainer" style="height:fit-content;">
    <div id="InnerContainer">
        <form class="Form" action="./demorecap.php" method="POST">
            <!-- onderin de form zet je: <div class="g-recaptcha" data-sitekey="your_site_key"></div>-->
            <div class="g-recaptcha" data-sitekey="6LeBiIEpAAAAAAOqKv4UJOtiv5g2U2iKYyKuB5tK"></div>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>


<?php   
include('../view/footer.php')
?>