<!-- Head include -->
<?php
	$title="Koncept - The Burger Shack Aarhus";
	$description="Læs om vores gennemtænkte koncept";
	include("includes/head.inc.php");
?>

<body>

<!-- nav include -->
<?php 
    include("includes/nav.inc.php");
?>
<section>
  <div class="container text-center width100 topMargin background yellowText" >
    <div class="row">
      <div class="col-md-12">
        <h1 id="largeHeader">Koncept</h1>
        <br>
      </div>
      <!-- row end --> 
    </div>
    <div class="row conceptDiv">
      <div class="col-md-4 col-xs-12 conceptImageDiv"> <img class="img-responsive" src="images/icons/concept/conceptEarth.png" alt="tegnet ikon jorden"/> </div>
      <div class="col-md-8 col-xs-12 conceptTextDiv">
        <p>Hos The Burger Shack vil vi gerne bidrage til en fremtid med mere økologi, bæredygtighed og bedre dyrevelfærd. Derfor bruger vi også kun økologiske grøntsager af højeste kvalitet og vores kød kommer fra dansk kvæg, der har bevæget sig frit i naturlige omgivelser. </p>
      </div>
      <!-- row end --> 
    </div>
    <div class="row conceptDiv" id="conceptDivCow">
      <div class="col-md-4 col-xs-12 conceptImageDiv"> <img class="img-responsive" src="images/icons/concept/conceptCow.png" alt="tegnet ikon ko"/> </div>
      <div class="col-md-8 col-xs-12 conceptTextDiv" id="conceptTextDivCow">
        <h3><b>Økologi og dyrevelfærd</b></h3>
        <p>Det giver mening for os, da vi på den måde undgår sprøjtegifte, hvilket er sundere for os selv, vores kunder og fremtidige generationer. Samtidig giver det de sprødeste og lækreste grøntsager med mest mulig velsmag.</p>
        <h4>Årsager til at vælge økologisk</h4>
        <ul>
          <li>Ingen rester af sprøjtegifte</li>
          <li>Grøntsager med mere smag</li>
          <li>Ingen tilsætningsstoffer</li>
          <li>Bedre for vores grundvand</li>
          <li>Bevarer den danske natur</li>
          <li>Naturlig mad er sundere</li>
          <li>Maden er grundig kontrolleret og af bedre kvalitet</li>
        </ul>
      </div>
      <!-- row end --> 
    </div>
    <div class="row">
      <div class="col-md-4 col-xs-12 conceptImageDiv"> <img class="img-responsive" src="images/icons/concept/conceptRefood.png" alt="tegnet ikon refood"/> </div>
      <div class="col-md-8 col-xs-12 conceptTextDiv" id="conceptTextDivRefood">
        <h3><b>Bæredygtighed</b></h3>
        <p>Vi har konstant fokus på kvaliteten af vores burgere og derudover er vi også meget opmærksomme på at mindske madspildet. Derfor er vi medlem af REFOOD-ordningen, hvilket betyder, at The Burger Shack aktivt gør en indsats mod madspild og støtter op om en fælles vision om en bæredygtig fremtid.</p>
      </div>
      <!-- row end --> 
    </div>
    <div class="row" id="conceptDivHappy">
      <div class="col-md-4 col-xs-12 conceptImageDiv" id="conceptImageDivHappy"> <img class="img-responsive" src="images/icons/concept/conceptHappy.png" alt="tegnet ikon glad"/> </div>
      <div class="col-md-8 col-xs-12 conceptTextDiv">
        <h3><b>Service</b></h3>
        <p>Udover at have den bedste burger i Aarhus, så mener vi også, at vi har det bedste personale. Når du besøger The Burger Shack, kan du være sikker på, at vores hårdtarbejdende personale vil gøre alt, hvad de kan, for at give dig den bedst mulige oplevelse.</p>
      </div>
      <!-- row end --> 
    </div>
    <div class="row" id="conceptDivMission">
      <div class="col-md-4 col-xs-12 conceptImageDiv" id="conceptImageDivBurger"> <img class="img-responsive" src="images/icons/concept/conceptBurger.png" alt="tegnet ikon burger"/> </div>
      <div class="col-md-8 col-xs-12 conceptTextDiv">
        <h3><b>Mission</b></h3>
        <p>The Burger Shack er en burgerbarkæde, som bidrager til den danske madscene – specifikt burgerscenen med nyskabende højder af kvalitet igennem simple, gode og nøje udvalgte økologiske råvarer, sammensat og tilberedt til perfektion.</p>
      </div>
      <!-- row end --> 
    </div>
    <div class="row">
      <div class="col-md-4 col-xs-12 conceptImageDiv" id="conceptImageDivMountain"> <img class="img-responsive" src="images/icons/concept/conceptMountain.png" alt="tegnet ikon bjerg"/> </div>
      <div class="col-md-8 col-xs-12 conceptTextDiv">
        <h3><b>Vision</b></h3>
        <p>Vi vil være markedsleder inden for branchen på internationalt plan, med anerkendt kvalitet og service, der igennem revolutionerende tiltag vil kunne tilbyde kunderne 100% økologisk mad, til meget konkurrencedygtige priser. Vi vil med disse tiltag også være fuldkommen bæredygtige.</p>
      </div>
      <!-- row end --> 
    </div>
    
    <!-- end div --> 
  </div>
</section>
<!-- Footer include -->
<?php
    include("includes/footer.inc.php");
?>
<script>
        /* adding the styling class to nav  */
        $(document).ready(function(e) {
    $('nav').addClass('navScroll');  
});
    </script>
</body>
</html>