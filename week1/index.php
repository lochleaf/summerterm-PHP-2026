<?php 
    /**
     * this how you write a multi-line comment
     */
    //single line comment double slash
    //user data
    $userName = "Eevee";
    $userRole = "student";
    $accountBalance = 1000;
    $isGraduated = false;
    $currentHour = (int)date("H"); //Getting the hour

    //some logic
    //determine a greeting based on the hour
    if($currentHour < 12){
        $greeting = "Good Morning";
    }

    elseif ($currentHour < 17){
        $greeting = "Good Afternoon";
    }

    else{
        $greeting = "Good Evening";
    }

    //Determine a CSS class based on the user role
    if($userRole == "instructor"){
        $themeClass = "gold-border";
    }

    else {
        $themeClass = "blue-border";
    }

    //logical operators: check if they are a student and have a Balance
    $needsToPay = ($userRole == "student" && $accountBalance > 0);
?>

<!DOCTYPE html>
<html lang "en">
    <head>
        <meta chaset= "UTF-8">
        <title>Week 1 | Intro to PHP</title>
        <meta name="viewport" content="initial-scale=1, width=device-width">
        <meta name="description" content="this is our introduction to php">
        <meta name="robots" content="noindex, nofollow">
        <!-- CSS  and fonts go after this -->
    </head>

        <body>
            <header>
                <h1>Week 1 Lesson</h1>
            </header>

            //no br
            //nop re
            //no strong
            <main>
                <section class="card <?php echo $themeClass; ?>">
                    <h2><?php echo $greeting . "," . $userName; ?></h2>
                    <p>Your current role is: <mark><?php $userRole; ?></mark></p>
                    <?php if($userRole == "student"): ?>
                        <p>Instructor Tools: You have blah blah blah</p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptates, ad impedit aliquid distinctio natus dolorum aut quis maxime eveniet facere, dolores, minima ex labore! Dolor tenetur sunt delectus fuga!</p>

                    <?php endif; ?>
                     <!-- add a warni g message using our AND Logic -->
                      <?php 
                        if ($needsToPay):?>
                        <div class="alert">
                            <p>Notice: Pay up! <?php $accountBalance; ?></p>
                        </div>
                        <?php endif; ?>
                </section>
            </main>

            <footer>
              <p>&copy <?php echo date("Y"); ?></p>              
            </footer>
            
        </body>

</html>