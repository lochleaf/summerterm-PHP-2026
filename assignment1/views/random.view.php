<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="API assignment1 doing random api which will generate random user informations">
        <meta name="robots" content="noindex, nofollow">
        <title>API Assignment1</title>
        <link rel="stylesheet" href="../css/styles.css">
    
    </head>
    <body>
        <main>
            <section class='greetings'>
                <h2>Welcome</h2>
            </section>

            <section class = userCard>

            <?php foreach($randomUsers as $user): ?>
                <div class = 'card'>
                    <img class='userPhoto' src='<?php echo $user->picture->large; ?>' alt ='user photocard'>
                    
                    <h2>
                        <?php echo $user->name->first; ?>
                        <?php echo $user->name->last; ?>
                    </h2>

                    <p><?php echo $user->email; ?></p>

                </div>

            <?php endforeach; ?>    
            </section>

        </main>
    </body>
</html>