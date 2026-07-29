<?php include_once 'templates/header.php'; ?>

<body class="background">

    <main>

    <div class="menu-container"> 
                

                <div id= "menupageone" class= "menupageonesize">
                    
                
                </div>

                <div id= "menupagetwo" class= "menupagetwosize">
                    
                    <h2>Pizzas</h2>

                    <h3>Size of Pizza</h3>
                    <label><input type="radio" name="size[]" value="Small"> Small </label>
                    <label><input type="radio" name="size[]" value="Medium"> Medium </label>
                    <label><input type="radio" name="size[]" value="Large"> Large </label>

                    <h3>Shape</h3>
                    <label><input type="checkbox" name="shape[]" value="Round"> Round </label>
                    <label><input type="checkbox" name="shape[]" value="Square"> Square </label>
                    <label><input type="checkbox" name="shape[]" value="Heart"> Heart </label>

                    <h3>Pizza Type</h3>
                    <label><input type="checkbox" name="type[]" value="CheesePizza"> Cheese Pizza </label>
                    <label><input type="checkbox" name="type[]" value="PepperoniPizza"> Pepperoni Pizza </label>
                    <label><input type="checkbox" name="type[]" value="VeggiePizza"> Veggie Pizza </label>
                    <label><input type="checkbox" name="type[]" value="HawaiianPizza"> Hawaiian Pizza </label>
                    <label><input type="checkbox" name="type[]" value="MeatPizza"> Meat Pizza </label>

                    <h3>Extra Toppings</h3>
                    <label><input type="checkbox" name="toppings[]" value="Pepperoni"> Pepperoni </label>
                    <label><input type="checkbox" name="toppings[]" value="Mushrooms"> Mushrooms </label>
                    <label><input type="checkbox" name="toppings[]" value="Cheese"> Cheese </label>
            
                </div>

                <div id="menupagethree" class= "menupagethreesize">
                    
                    <h2>Extras | Drinks</h2>

                    <h3>Breads</h3>
                    <label><input type="checkbox" name="breads[]" value="GarlicBread"> Garlic Bread </label>
                    <label><input type="checkbox" name="breads[]" value="BreadSticks"> Bread Sticks </label>
                    <label><input type="checkbox" name="breads[]" value="MozzarellaSticks"> Mozzarella Sticks </label>

                    <h3>Soft Drinks</h3>
                    <label><input type="checkbox" name="drinks[]" value="Pepsi"> Pepsi </label>
                    <label><input type="checkbox" name="drinks[]" value="DietCoke"> Diet coke </label>
                    <label><input type="checkbox" name="drinks[]" value="OrangeCrush"> Orange Crush </label>

                    <h3>Sauces</h3>
                    <label><input type="checkbox" name="sauces[]" value="Garlic"> Garlic </label>
                    <label><input type="checkbox" name="sauces[]" value="BBQ"> BBQ </label>
                    <label><input type="checkbox" name="sauces[]" value="Ranch"> Ranch </label>

                    <label for="custom extra" name="request" value="SpecialRequest"> Special Request: </label>

                    <textarea id="message" name="message" rows="4" cols="50"></textarea>

                    <form action="submit_order.php" method="POST">
                    
                    <button type="submit">Submit</button>
                    
                    </form>

                </div>

    </div>

<?php include_once 'templates/footer.php'; ?>


