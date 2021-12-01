<?php
    
    
    $score = 0;
    $btn1 = $_POST["ans1"];
    if ($btn1 == '15'){
        $score++;
    }
    $btn2 = $_POST["ans2"];
    if ($btn2 == 'Pacific'){
        $score++;
    }
    $btn3 = $_POST["ans3"];
    if ($btn3 == '19'){
        $score++;
    }
    $btn4 = $_POST["ans4"];
    if ($btn4 == 'word'){
        $score++;
    }
    $btn5 = $_POST["ans5"];
    if ($btn5 == 'blue'){
        $score++;
    }

    echo "<h1> Results: </h1>";
    echo "<h2> You answered " . $score . " question(s) correctly. </h2>";
    $percent = $score*100/5;
    echo "<h2>Percent score: " . $percent . "%</h2>";

    echo "<p>Question1: What is the square root of 225?</p>";
    echo "You answered: " . $btn1 . "<br>";
    echo "Correct answer: 15<br>";

    echo "<br><p>Question2: What is the Earth's largest ocean?</p>";
    echo "You answered: " . $btn2 . "<br>";
    echo "Correct answer: Pacific<br>";

    echo "<br><p>Question3: What's 9 + 10?</p>";
    echo "You answered: " . $btn3 . "<br>";
    echo "Correct answer: 19<br>";

    echo "<br><p>Question4: Which of these is not a programming language?</p>";
    echo "You answered: " . $btn4 . "<br>";
    echo "Correct answer: word<br>";

    echo "<br><p>Question5: What color is the sky?</p>";
    echo "You answered: " . $btn5 . "<br>";
    echo "Correct answer: blue<br>";


?>

