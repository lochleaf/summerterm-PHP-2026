<?php 
$students = [
    ["name"=> "Mike", "subject" => "Art", "score" => 87, "category" => "Accessories"],
    ["name"=> "Matt", "subject" => "Science", "score" => 56, "category" => "Accessories"],
    ["name"=> "Meve", "subject" => "Math", "score" => 45, "category" => "Cables"],
    ["name"=> "Moss", "subject" => "English", "score" => 95, "category" => "Screens"]
];

function getGradeStatus($score){

 if ($score > 50){
        return "<span class='pass'>PASS</span>";
    }
    else{
        return "<span class='fail'>FAIL</span>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, device-width=width">
    <title>Week Two Lab 1 | Array & Functions</title>
    <meta name="description" content="Create a script that processes a list of students, calculates their status, and displays it safely.">
    <meta name="robots" content="noindex, nofollow">
    <!-- CSS Link -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <main>
            <section class="report card">
                    <?php  foreach($students as $student): ?>
                        <div class="score-card">
                            <h3><?php echo htmlspecialchars($student['name']); ?> </h3>
                            <p class="subject">Subject: <?php echo htmlspecialchars ($student['subject']); ?> </p>
                            <p class="score">Score: <?php echo getGradeStatus($student['score']); ?> </p>
                        </div>

                        <?php endforeach; ?>
            </section>           

        </main>
        <footer class="System-Status">
            <?php
            $students=array("Mike","Matt","Meve", "Moss");
            echo "Total Students Evaluated: " . count($students);
            ?>
            <p>&copy; <?php echo date("Y-m-d H:i:s"); ?> </p>
        </footer>
    </header>
</body>

</html>