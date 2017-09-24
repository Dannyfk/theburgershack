<!-- Head include -->
<?php
	$title="The Burger Shack Aarhus";
	$description="Kom og prøv lækre burgere med nøje udvalgte økologiske og bæredygtige råvarer";
	include("includes/head.inc.php");
?>

<!-- body start -->
<body id="frontPageBody">
    
    <!-- Nav include -->
<?php
    include("includes/nav.inc.php");
?>
    
<section>
 <div class="container width100" id="frontPageImageDiv">
      <div class="row">
        <div class="col-md-12 col-xs-12">
        <img class="img-responsive"  src="images/frontPageImage.jpg" alt="Forside Billede"  usemap="#Map" />
            <!-- We create an image map to map out the link buttons on our images  -->
            <map name="Map" id="Map">
                <area class="smoothScroll" alt="contact" title="contact" href="#footer" shape="poly" coords="498,601,555,454,406,308,289,595" />
                <area alt="menu" title="menu" href="menu.php" shape="poly" coords="576,433,437,289,716,171,717,373" />
                <area alt="order" title="order" href="order.php" shape="poly" coords="744,372,747,167,1033,288,891,425" />
                <area class="smoothScroll" alt="find" title="find" href="#footer" shape="poly" coords="909,457,975,597,1179,598,1054,318" />
            </map>
        </div>
      </div>
     <!-- FrontPageImageDiv end -->
    </div>
</section>
<section>
<div class="container text-center width100">
  <div class="row">
    <div class="col-md-12 col-xs-12 contentDiv" id="contentDiv1">
        <h1 id="emTest">Aarhus' bedste burger</h1>
        <p class="frontPageMediumHeader">Vi elsker økologi, bæredygtighed og vi har fokus på</p>
        <p class="frontPageMediumHeader"> madspild og dyrevelfærd</p>
        <div class="verticalLine" id="verticalLine1"></div>
        
        <div class="col-md-2 col-md-offset-3 col-xs-4 socialMediaWrapper">
               <a href="koncept.php"> <img class="img-responsive" src="images/icons/iconTrashcan.png" alt="Ikon for mindre madspild"></a>
        </div>
        <div class="col-md-2 col-xs-4 socialMediaWrapper">
            <a href="koncept.php"><img class="img-responsive" src="images/icons/iconCow.png" alt="Ikon for fritgående køer"></a>
        </div>     
        <div class="col-md-2 col-xs-4 socialMediaWrapper">
            <a href="koncept.php"> <img class="img-responsive" src="images/icons/iconEco.png" alt="Ikon for øko"></a>
        </div>  
    </div>
      <!-- Row end -->
  </div>
    
    <div class="row">
    <div class="col-md-5 col-xs-12 contentDiv" id="contentDiv2"> 
        <h2 id="letterSpacing">Lækre burgere</h2>
        <p class="paragraphText">med nøje udvalgte økologiske og bæredygtige råvarer.</p>
        <p class="paragraphText">Don't miss it!</p>
        <br>
        <p class="paragraphText" id="hashTag">#onceyougoshackyounevergoback</p>
        <br>
        <form action="menu.php">
        <button class="frontPageButton" ><p class="paragraphText">Menu</p></button>
        </form>
    </div>
    <div class="col-md-7 hidden-xs hidden-sm contentDiv" id="contentDiv3">
        <img class="img-responsive" src="images/frontPageBurger.jpg" alt="Billed af en shack burger">
    </div>
    <!-- Row end -->
  </div>

    <div class="row">
    <div class="col-md-7 hidden-xs hidden-sm contentDiv" id="contentDiv4">
        <img class="img-responsive" src="images/frontPagePaper.jpg" alt="Billed af textur">
        <h2 class="review" id="reviewText">Læs vores anmeldelser</h2>
        <a href="http://stiften.dk/nyheder/Overblik-Her-er-alle-vinderne-ved-AOA-Byens-Bedste-2016/artikel/420941" class="review" id="reviewAoa" target="_blank"><img src="images/reviews/aoa.png" alt="Ikon for alt om Aahus"></a>
        <a href="http://aarhusupdate.dk/the-burger-shack-anstaendig-haandholdt-bedste-fried-chicken/" class="review" id="reviewUpd" target="_blank"><img src="images/reviews/aarhusUpdate.png" alt="Ikon for Aarhus update"></a>
        <a href="http://borsen.dk/nyheder/avisen/artikel/11/140587/artikel.html" class="review" id="reviewBors" target="_blank"><img src="images/reviews/borsen.png" alt="Ikon for børsen"></a>
        <a href="http://stiften.dk/aarhus/Stiften-kaarer-Byens-bedste-burger/artikel/346788" class="review" id="reviewStift" target="_blank"><img src="images/reviews/aarhusStiftstidende.png" alt="Ikon for stiftidende"></a>
    </div>
    <div class="col-md-5 col-xs-12 contentDiv" id="contentDiv5">
        <h2 id="letterSpacing">Årets burger</h2>
        <h3>2016</h3>
        <img class="img-responsive" id="trophyImg" src="images/trophy.png" alt="Billede af en pokal">
        <p class="paragraphText">Vi er stolte af vores priser!</p>
    </div>
    <!-- Row end -->
  </div>
    
    <div class="row">
        <div class="col-md-4 col-xs-12 contentDiv" id="contentDiv6">
            <br>
            <br>
            <h2 id="letterSpacing">Koncept</h2>
            <p class="paragraphText">Vi stræber efter at yde den bedste</p>
            <p class="paragraphText">service til alle vores kunder</p>
            <br>
            <p class="paragraphText" id="hashTag">#theburgerheroes</p>
            <br>
            <form action="koncept.php">
                <button class="frontPageButton" ><p class="paragraphText">Om os</p></button>
            </form>
    </div>
    <div class="col-md-8 hidden-xs hidden-sm contentDiv" id="contentDiv7">
        <img class="img-responsive" src="images/frontPageKoncept2.jpg" alt="Billed af medarbejdere">
    </div>
        <!-- Row end -->
    </div>

      <!-- Main div end -->
</div>
</section>
    
<!-- Footer include -->    
<?php
    include("includes/footer.inc.php");
?>

<!-- 3rd party code to make the imagemap on frontpage responsive-->    
<script src="js/jquery.rwdImageMaps.min.js"></script> 

<!-- Script that creates the object with countdown value to either opening or closing -->
<script src="js/dateCountdown.js"></script> 
    
<!-- Script that creates a div with the values from the countdown object -->
<script src="js/createCountdownDiv.js"></script> 
      
    
<script>   
$(document).ready(function(e) {
    /* Activates the script that makes the image map responsive */
	$('img[usemap]').rwdImageMaps();
    /* We activate the script to set how long the restaurant open or when it opens */
    var dateCountdown = setDate();
    /* And use another script to create a div with the values from setDate */
    var countdownDiv = createCountdownDiv(dateCountdown);   
    var insertDiv = document.getElementById("contentDiv1"); 
    insertDiv.appendChild(countdownDiv);
});
</script> 
    
<script>
    // value for the nav change on scroll
var scrollLimit = 100;

// on scroll, 
$(window).on('scroll',function(){
    // we round here to reduce a little workload
    stop = Math.round($(window).scrollTop());
    // we add the class for styling of the nav if the user scrolls past the scrollLimit
    if (stop > scrollLimit) {
        $('nav').addClass('navScroll');
    } else {
        $('nav').removeClass('navScroll');
   }
});
</script>
 

</body>
</html>
