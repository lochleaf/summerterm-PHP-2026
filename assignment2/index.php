<?php include_once 'templates/header.php'; ?>

<body class="background">

    <main>
            
            <form action="submit_order.php" method="POST">

                <div class="menu-container"> 
                            

                    <div id= "menupageone" class= "menupageonesize">
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

                            <div id= "menupagetwo" class= "menupagetwosize">
                                <div class="textplacetwo">
                                    <h2 class="texttitle">| Pizzas |</h2>

                                    <h3 class="textsubtitle">Size of Pizza</h3>
                                    <label><input type="radio" name="size" value="Small"> Small </label>
                                    <label><input type="radio" name="size" value="Medium"> Medium </label>
                                    <label><input type="radio" name="size" value="Large"> Large </label>

                                    <h3 class="textsubtitle">Shape</h3>
                                    <label><input type="checkbox" name="shape" value="Round"> Round </label>
                                    <label><input type="checkbox" name="shape" value="Square"> Square </label>
                                    <label><input type="checkbox" name="shape" value="Heart"> Heart </label>

                                    <h3 class="textsubtitle">Pizza Type</h3>
                                    <label><input type="checkbox" name="type[]" value="CheesePizza"> Cheese Pizza </label>
                                    <label><input type="checkbox" name="type[]" value="PepperoniPizza"> Pepperoni Pizza </label>
                                    <label><input type="checkbox" name="type[]" value="VeggiePizza"> Veggie Pizza </label>
                                    <label><input type="checkbox" name="type[]" value="HawaiianPizza"> Hawaiian Pizza </label>
                                    <label><input type="checkbox" name="type[]" value="MeatPizza"> Meat Pizza </label>

                                    <h3 class="textsubtitle">Extra Toppings</h3>
                                    <label><input type="checkbox" name="toppings[]" value="Pepperoni"> Pepperoni </label>
                                    <label><input type="checkbox" name="toppings[]" value="Mushrooms"> Mushrooms </label>
                                    <label><input type="checkbox" name="toppings[]" value="Cheese"> Cheese </label>
                                </div>
                            </div>

                            <div id="menupagethree" class= "menupagethreesize">

                                <div class="textplacethree">
                                
                                    <h2 class="texttitle">| Extras | Drinks |</h2>

                                    <h3 class="textsubtitle">Breads</h3>
                                    <label><input type="checkbox" name="breads[]" value="GarlicBread"> Garlic Bread </label>
                                    <label><input type="checkbox" name="breads[]" value="BreadSticks"> Bread Sticks </label>
                                    <label><input type="checkbox" name="breads[]" value="MozzarellaSticks"> Mozzarella Sticks </label>

                                    <h3 class="textsubtitle">Soft Drinks</h3>
                                    <label><input type="checkbox" name="drinks[]" value="Pepsi"> Pepsi </label>
                                    <label><input type="checkbox" name="drinks[]" value="DietCoke"> Diet coke </label>
                                    <label><input type="checkbox" name="drinks[]" value="OrangeCrush"> Orange Crush </label>

                                    <h3 class="textsubtitle">Sauces</h3>
                                    <label><input type="checkbox" name="sauces[]" value="Garlic"> Garlic </label>
                                    <label><input type="checkbox" name="sauces[]" value="BBQ"> BBQ </label>
                                    <label><input type="checkbox" name="sauces[]" value="Ranch"> Ranch </label>

                                    <label for="message"> Special Request: </label>

                                    <textarea id="message" name="request" rows="4" cols="50"></textarea>
                                    
                                    <button type="submit">Submit</button>

                                </div>
                                
                            </div>


                </div>

            </form>
            
        </section>

<?php include_once 'templates/footer.php'; ?>


