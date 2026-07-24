<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment 2 Pizza Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="background">
    <nav>
        <ul>
            <a href="index.php?page=pizza">Pizza</a>
            <a href="index.php?page=location">Location</a>
            <a href="index.php?page=cart">Cart</a>
        </ul>
    </nav>

    <main>

        <div class="menu-container">
            

            <div id= "menupageone" class= "menupageonesize">
                
            
            </div>

            <div id= "menupagetwo" class= "menupagetwosize">
                
                <h2>Pizzas</h2>

                <h3>Size of Pizza</h3>
                <label><input type="checkbox"> 2 Slices </label>
                <label><input type="checkbox"> 6 Slices </label>
                <label><input type="checkbox"> 8 Slices </label>

                <h3>Shaped</h3>
                <label><input type="checkbox"> Round </label>
                <label><input type="checkbox"> Square </label>
                <label><input type="checkbox"> Heart </label>

                <h3>Pizza Type</h3>
                <label><input type="checkbox"> Cheese Pizza </label>
                <label><input type="checkbox"> Pepperoni Pizza </label>
                <label><input type="checkbox"> Veggie Pizza </label>
                <label><input type="checkbox"> Hawaiian Pizza </label>
                <label><input type="checkbox"> Meat Pizza </label>
                
                <h2>Mixed Pizza</h2>
                <label><input type="checkbox">Check for Yes</label>

                <h3>Extra Toppings</h3>
                <label><input type="checkbox"> Pepperoni </label>
                <label><input type="checkbox"> Mushrooms </label>
                <label><input type="checkbox"> Cheese </label>
        
            </div>

            <div id="menupagethree" class= "menupagethreesize">
                
                <h2>Extras | Drinks</h2>

                <h3>Breads</h3>
                <label><input type="checkbox"> Garlic Bread </label>
                <label><input type="checkbox"> Bread Sticks </label>
                <label><input type="checkbox"> Mozzarella Sticks </label>

                <h3>Soft Drinks</h3>
                <label><input type="checkbox"> Pepsi </label>
                <label><input type="checkbox"> Diet coke </label>
                <label><input type="checkbox"> Orange Crush </label>

                <h3>Sauces</h3>
                <label><input type="checkbox"> Garlic </label>
                <label><input type="checkbox"> BBQ </label>
                <label><input type="checkbox"> Ranch </label>

                <label for="custom extra"> Special Request: </label>

                <textarea id="message" name="message" rows="4" cols="50"></textarea>

            </div>

        </div>

    </main>
    
</body>
</html>