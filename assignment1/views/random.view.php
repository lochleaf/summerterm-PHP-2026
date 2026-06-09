<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="API assignment1 doing random api which will generate random user informations">
        <meta name="robots" content="noindex, nofollow">
        <title>API Assignment1</title>
        <link rel="stylesheet" href="css/styles.css">
    
    </head>
    <body>
        <main>
            <!-- here is image I tried to add for the css -->
            <!-- <img class="lavaLamp" src="../images/lava-background.gif" alt="Lava Lamp"> -->
            <!-- here is the usercard that gets generated that get the information and brings out the photos that is seen on the page and it keeps generating new profiles -->
            <section class = "userCard">

            <?php foreach($randomUsers as $user): ?>
                <div class = 'card'>
                    <img class='userPhoto' src='<?php echo $user->picture->large; ?>' alt ='user photocard'>
                    
                    <h2>
                        <?php echo $user->name->first; ?>
                    </h2>

                    <h2>
                        <?php echo $user->name->last; ?>
                    </h2>

                    <p><?php echo $user->email; ?></p>

                </div>

            <?php endforeach; ?>    
            </section>

        </main>
    </body>
</html>