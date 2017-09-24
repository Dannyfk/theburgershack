<!-- Head include -->
<?php
	$title="Menu - The Burger Shack Århus";
	$description="Se vores lækre sortiment der garanteret før dig sulten";
	include("includes/head.inc.php");
?>
<body>
    
<?php 
    include("includes/nav.inc.php");
?>
<section>  
<div class="container width100 topMargin" style="background-color:#224638">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img id="menuImage" src="images/menu.jpg">
        </div>
        <!-- row end -->
    </div>
</div>
</section>  
<?php
    include("includes/footer.inc.php");
?>
    
    <script>
        /* adding the styling class to nav */
        $(document).ready(function(e) {
    $('nav').addClass('navScroll');  
});
    </script>
</body>
</html>
