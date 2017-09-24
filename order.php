<!-- Head include -->
<?php
	$title="Online Bestilling - The Burger Shack Aarhus";
	$description="Bestil dit måltid online så det er klar når du kommer ned på burger baren";
	include("includes/head.inc.php");
?>
<body>
    
<!-- nav include -->    
<?php 
    include("includes/nav.inc.php");
?>    

<div class="container topMargin backgroundWhite width100">
     <div class="row">
         <div class="col-md-9 col-xs-12">
         </div>
         <div class="col-md-3 col-xs-12" id="orderBoxWrapper">
		  <div id="orderBox">
        	<h2>Din bestilling</h2>
        </div>	
            <p id="orderBoxPrice">Ingen bestilling</p>
             <button id="toOrder" onclick="goToOrder()">Til Bestilling</button>
        </div>
         <div class="col-md-9 col-xs-12" id="orderItemWrapper">
         </div>
         <!-- row end -->
    </div>  
    </div>

<!-- Footer include -->    
<?php
    include("includes/footer.inc.php");
?>
    <script>   
$(document).ready(function(e) {
    /* we insert some examples to the order menu */
    insertMenuItems(0, "Shack Burger", "images/orderItems/burger.jpg", 50,"Single hamburger with 150g beef from free range cattle, organic lettuce, organic tomato, organic onion, organic homemade pickles, Shack Mayo™ and mustard mayo in a homemade bun");
    
    insertMenuItems(1, "Shack Burger Menu", "images/orderItems/burgerMenu.jpg", 80, "Hamburger with 150g beef from free range cattle, organic lettuce, organic tomato, organic onion, organic homemade pickles, Shack Mayo™ and mustard mayo in a homemade bun. Served with Shack Fries™ and a soda of your choice.");
    
    insertMenuItems(2, "Shack Burger Cheese","images/orderItems/burgerCheese.jpg", 55, "Single cheeseburger with 150g beef from free range cattle, cheddar, organic lettuce, organic tomato, organic onion, organic homemade pickles, Shack Mayo™ and mustard mayo in a homemade bun.");
    
    insertMenuItems(3, "Shack Burger Cheese Menu", "images/orderItems/burgerCheeseMenu.jpg", 85, "Cheeseburger with 150g beef from free range cattle, cheddar, organic lettuce, organic tomato, organic onion, organic homemade pickles, Shack Mayo™ and mustard mayo in a homemade bun. Served with Shack Fries™ and a soda of your choice.");
    
    insertMenuItems(4, "Shack Burger Chicken", "images/orderItems/burgerChicken.jpg", 55, "Juicy burger with panko-fried chicken, organic lettuce, organic tomato, organic onion, organic homemade pickles, Shack Mayo™ and mustard mayo in a homemade bun.");
    
    insertMenuItems(5, "Shack Burger Chicken Menu", "images/orderItems/burgerChickenMenu.jpg", 85, "Juicy burger with panko-fried chicken, organic lettuce, organic tomato, organic onion, organic homemade pickles, Shack Mayo™ and mustard mayo in a homemade bun. Served with Shack Fries™ and a soda of your choice.");
    /* adding the styling to nav */
    $('nav').addClass('navScroll');  
});
</script> 

<script>
/* first we create some variables to store some values*/
	var orders = [];
	var numberOfOrders = 0;
	var totalPrice = 0;
	var orderBoxPrice = document.getElementById("orderBoxPrice");
	
    /* add item creates an item object from the parameters and adds it to the order list */
	function addItem(id, food,itemPrice){
		var order = {itemName:food, price:itemPrice, quantity:1, patty:false, cheese:false, bacon:false};
		var patty = document.getElementById("extraPatty"+id);
		var cheese = document.getElementById("extraCheese"+id);
		var bacon = document.getElementById("addedBacon"+id);
		var quantity = document.getElementById("numberSelector"+id).value;
		order["quantity"]=quantity;
		/* we check for additional toppings */
		if(patty.checked === true){
			order["patty"]=true;
			order["price"] += 20;
		}
		if(cheese.checked === true){
			order["cheese"]=true;
			order["price"] += 5;
		}
		if(bacon.checked === true){
			order["bacon"]=true;
			order["price"] += 5;
		}
		/* we now create a div and some elemets to display the order selected in the order list */
		var orderNumber = numberOfOrders;
		var orderDisplay = document.createElement("div");
		orderDisplay.setAttribute("class", "orderDiv");
		orderDisplay.setAttribute("id", "div"+orderNumber);
		var orderDisplayText = document.createElement("p");
		orderDisplayText.setAttribute("class", "orderText");
				
		var orderText = order["quantity"] + "x " + order["itemName"];
		var text = document.createTextNode(orderText);

		orderDisplayText.appendChild(text);
		orderDisplay.appendChild(orderDisplayText);
		
		var orderDisplayPrice = document.createElement("p");
		
		var orderPrice = order["quantity"]*order["price"];
		var text2 = document.createTextNode(orderPrice);
		orderDisplayPrice.appendChild(text2);
		orderDisplayPrice.setAttribute("id", "price"+orderNumber);
		orderDisplayPrice.setAttribute("class", "priceText");
		orderDisplay.appendChild(orderDisplayPrice);
		
		if(order["patty"] != false || order["cheese"] != false || order["bacon"] != false){
			var extraText = "Ekstra";
			if(order["patty"] === true){
				extraText += " bøf";	
			}
			if(order["cheese"] === true){
				extraText += ", ost";	
			}
			if(order["bacon"] === true){
				extraText += ", bacon";	
			}
			var extraOrderDisplayText = document.createElement("p");
			var insertExtraText = document.createTextNode(extraText);
			extraOrderDisplayText.appendChild(insertExtraText);
			orderDisplay.append(extraOrderDisplayText);
		}
		/* we add the remove buttpn to the order list so the user can cancel it */
		var removeOrderButton = addRemoveButton();
		orderDisplay.appendChild(removeOrderButton);
		
		document.getElementById("orderBox").appendChild(orderDisplay);
		
        /* lastly we add the order to an order list and update the totalprice for the order */
		orders.push(order);
		totalPrice += order["quantity"]*order["price"];
		updateTotalPrice();
		
		numberOfOrders ++;
	}
	
	function addRemoveButton(){
		var orderNumber = numberOfOrders;
		var removeOrderButton = document.createElement("BUTTON");
		removeOrderButton.setAttribute("class", "removeButton");
		removeOrderButton.innerHTML = "X";
		removeOrderButton.addEventListener("click", function() {
   		removeOrder(orderNumber);
		}); 
		
		return removeOrderButton;
	}
	
	function removeOrder(id){
		var orderPrice = document.getElementById("price"+id).innerHTML;
		totalPrice -= orderPrice;
		updateTotalPrice();
		
		document.getElementById("div"+id).remove();
	}
	
	function updateTotalPrice(){
			orderBoxPrice.innerHTML ="Totalt:" + totalPrice+" kr";
	}
    
    /* this function creates a div and with the parameters it creates everything needed to display one of the menu items */
    function insertMenuItems(id, desc, imgSrc, price, descText){
        var orderItemWrapper = document.createElement("div"); // div wrapper
        orderItemWrapper.setAttribute("class", "orderItem");
        var itemDesc = document.createElement("div"); // description wrapper
        itemDesc.setAttribute("class", "orderItemDesc");
        var itemTitle = document.createElement("h4");   // title
        itemTitle.innerHTML = desc;
        itemDesc.appendChild(itemTitle);
        var image = document.createElement("img");  // image of item
        image.setAttribute("src",imgSrc);
        image.setAttribute("class","orderItemImage img-responsive");
        itemDesc.appendChild(image);
        orderItemWrapper.appendChild(itemDesc); // append description wrapper
        var orderPrice = document.createElement("p"); // price
        orderPrice.innerHTML= price;
        orderPrice.setAttribute("class", "orderItemPrice");
        orderItemWrapper.appendChild(orderPrice); // append price
        var orderButton = document.createElement("button"); // order button
        orderButton.setAttribute("class", "orderButton frontPageButton");
        orderButton.addEventListener("click", function(){
           addItem(id, desc, price); 
        });
        orderButton.innerHTML = "Vælg";
        orderItemWrapper.appendChild(orderButton);  // append order button
        var itemDescText = document.createElement("p"); // item description text
        itemDescText.setAttribute("class", "orderItemDescText");
        itemDescText.innerHTML= descText;
        orderItemWrapper.appendChild(itemDescText); // append item description text
        
        
        var selector = document.createElement("select");
        selector.setAttribute("class","numberSelector");
        selector.setAttribute("id",("numberSelector"+id));
        

        
        orderItemWrapper.appendChild(selector);
        
	for(var i = 1; i <= 10; i++)
	{
	  $(selector).append("<option value='"+i+"'>"+i+"</option>");
	}
        
        
        var checkboxPatty = document.createElement("input");
        checkboxPatty.type="checkbox";
        checkboxPatty.setAttribute("id",("extraPatty"+id));
        
        var label = document.createElement('label');
        label.setAttribute("class","labelInfo");
        label.appendChild(document.createTextNode('Ekstra bøf'));
        
        orderItemWrapper.appendChild(checkboxPatty);
        orderItemWrapper.appendChild(label);
        
        var checkboxCheese = document.createElement("input");
        checkboxCheese.type="checkbox";
        checkboxCheese.setAttribute("id",("extraCheese"+id));
        
        var label2 = document.createElement('label')
        label2.setAttribute("class","labelInfo");
        label2.appendChild(document.createTextNode('Ekstra ost'));
        
        orderItemWrapper.appendChild(checkboxCheese);
        orderItemWrapper.appendChild(label2);
        
        var checkboxBacon = document.createElement("input");
        checkboxBacon.type="checkbox";
        checkboxBacon.setAttribute("id",("addedBacon"+id));
        
        var label3 = document.createElement('label')
        label3.setAttribute("class","labelInfo");
        label3.appendChild(document.createTextNode('Bacon'));
        
        orderItemWrapper.appendChild(checkboxBacon);
        orderItemWrapper.appendChild(label3);
        
        document.getElementById("orderItemWrapper").appendChild(orderItemWrapper); // append to document  
    }
    
    /* this function sends the order to a new window where the user can see the order and type in name and tlf to finish it */
    function goToOrder (){ 
        var myWindow = window.open("", "", "width=400,height=400");
        
        var intro = document.createElement("p");
        intro.innerHTML="Din ordre";
        myWindow.document.body.appendChild(intro);
        
        for(var i = 0; i <orders.length; i++){
            var string = "";
            var orderItem = orders[i];
            
            string += orderItem["itemName"]+" x"+orderItem["quantity"]; 
            
            if(orderItem["patty"] != false || orderItem["cheese"] != false || orderItem["bacon"] != false){
			var extraText = " Ekstra: ";
			if(orderItem["patty"] === true){
				extraText += " bøf";	
			}
			if(orderItem["cheese"] === true){
				extraText += ", ost";	
			}
			if(orderItem["bacon"] === true){
				extraText += ", bacon";	
			}
			string += extraText;
		}
            
            string +=" pris: "+orderItem["price"]+"kr";
            
        var order = document.createElement("p");
        order.innerHTML=string;    
        myWindow.document.body.appendChild(order); 
 
            
        }          
        var total = document.createElement("p");
        total.innerHTML="I alt: "+totalPrice+"kr";    
        myWindow.document.body.appendChild(total);  
        
        var inputNameText = document.createElement("p");
        inputNameText.innerHTML="Navn";    
        myWindow.document.body.appendChild(inputNameText);  
        
        var input = document.createElement("input");
        input.type="text";
        input.setAttribute("id","inputName");
        myWindow.document.body.appendChild(input);  
        
        var inputTlfText = document.createElement("p");
        inputTlfText.innerHTML="Tlf";
        myWindow.document.body.appendChild(inputTlfText); 
        
        var inputTlf = document.createElement("input");
        inputTlf.type="text";
        inputTlf.setAttribute("id","inputTlf");
        myWindow.document.body.appendChild(inputTlf); 
        
        var button = document.createElement("button");
        button.innerHTML="Bestil";
        button.addEventListener("click", function(){
           window.alert("Din ordre er sent " + myWindow.document.getElementById("inputName").value + ", tlf: " + myWindow.document.getElementById("inputTlf").value+ ", pris: "+ totalPrice+"kr");
            myWindow.close();
        });
        
        myWindow.document.body.appendChild(button);
        
    myWindow.focus();
    }
    
</script>

</body>
</html>
