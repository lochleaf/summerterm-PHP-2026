<!-- include the header template that will connect the csst o the index -->
<?php include_once 'templates/header.php'; ?>

<!-- so why I added a class so when I was doing my css because I need to mainly pinpoint just background image only so it wouldn't effect the rest of the code because I was working it did so this was my solution -->
<body class="background">

    <main>
            <!-- this will send form to the submit form.php using post -->
            <form action="submit_order.php" method="POST">

            <!-- made menu container which played on couple of my problems/of moving the images -->
                <div class="menu-container"> 
                            
                <!-- part one of the form the customer information made id and class placement and size css image menu text background -->
                    <div id= "menupageone" class= "menupageonesize">
                        <!-- this is only to target the text speciffically for placement and size and this was my solution to one of my problems -->
                        <div class="textplaceone">
                                    
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">phone</label>
                                <input type="tel" id="phone" name="phone" class="form-control" required>
                            </div>

                        </div>

                    </div>

                    <!-- Part two of the form that is the order options made id and class placement and size css image menu text background -->
                            <div id= "menupagetwo" class= "menupagetwosize">
                            <!-- this is only to target the text speciffically for placement and size and this was my solution to one of my problems -->  
                                <div class="textplacetwo">
                                    <h1 class="texttitle">| Pizzas |</h1>

                                    <!-- added values and name for when I worked for the database this will have connect things togther -->
                                    <h2 class="textsubtitle">Size of Pizza</h2>
                                    <label><input type="radio" name="size" value="Small"> Small </label>
                                    <label><input type="radio" name="size" value="Medium"> Medium </label>
                                    <label><input type="radio" name="size" value="Large"> Large </label>

                                    <h2 class="textsubtitle">Shape</h2>
                                    <label><input type="radio" name="shape" value="Round"> Round </label>
                                    <label><input type="radio" name="shape" value="Square"> Square </label>
                                    <label><input type="radio" name="shape" value="Heart"> Heart </label>

                                    <h2 class="textsubtitle">Pizza Type</h2>
                                    <label><input type="checkbox" name="type[]" value="CheesePizza"> Cheese Pizza </label>
                                    <label><input type="checkbox" name="type[]" value="PepperoniPizza"> Pepperoni Pizza </label>
                                    <label><input type="checkbox" name="type[]" value="VeggiePizza"> Veggie Pizza </label>
                                    <label><input type="checkbox" name="type[]" value="HawaiianPizza"> Hawaiian Pizza </label>
                                    <label><input type="checkbox" name="type[]" value="MeatPizza"> Meat Pizza </label>

                                    <h2 class="textsubtitle">Extra Toppings</h2>
                                    <label><input type="checkbox" name="toppings[]" value="Pepperoni"> Pepperoni </label>
                                    <label><input type="checkbox" name="toppings[]" value="Mushrooms"> Mushrooms </label>
                                    <label><input type="checkbox" name="toppings[]" value="Cheese"> Cheese </label>
                                </div>
                            </div>

                        <!-- Part three of the form that is the order options made id and class placement and size css image menu text background -->
                            <div id="menupagethree" class= "menupagethreesize">
                            <!-- this is only to target the text speciffically for placement and size and this was my solution to one of my problems -->
                                <div class="textplacethree">
                                
                                    <h1 class="texttitle">| Extras | Drinks |</h1>

                                    <!-- name for these is to treat it as array -->
                                    <h2 class="textsubtitle">Breads</h2>
                                    <label><input type="checkbox" name="breads[]" value="GarlicBread"> Garlic Bread </label>
                                    <label><input type="checkbox" name="breads[]" value="BreadSticks"> Bread Sticks </label>
                                    <label><input type="checkbox" name="breads[]" value="MozzarellaSticks"> Mozzarella Sticks </label>

                                    <h2 class="textsubtitle">Soft Drinks</h2>
                                    <label><input type="checkbox" name="drinks[]" value="Pepsi"> Pepsi </label>
                                    <label><input type="checkbox" name="drinks[]" value="DietCoke"> Diet coke </label>
                                    <label><input type="checkbox" name="drinks[]" value="OrangeCrush"> Orange Crush </label>

                                    <h2 class="textsubtitle">Sauces</h2>
                                    <label><input type="checkbox" name="sauces[]" value="Garlic"> Garlic </label>
                                    <label><input type="checkbox" name="sauces[]" value="BBQ"> BBQ </label>
                                    <label><input type="checkbox" name="sauces[]" value="Ranch"> Ranch </label>

                                    <!-- textbox special request -->
                                    <label for="message"> Special Request: </label>
                                    <!-- add specific way with the rows and cols -->
                                    <textarea id="message" name="request" rows="4" cols="50"></textarea>
                                    <!-- submit button -->
                                    <button type="submit">Submit</button>

                                </div>
                                
                            </div>


                </div>

            </form>
            
        
<!-- includes the footer -->
<?php include_once 'templates/footer.php'; ?>


