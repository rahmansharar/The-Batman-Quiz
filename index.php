<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <title>Batman Quiz</title>
      <style type="text/css">
      body{
            background-color:#f4f4f4;
            color:#555;
            font-family:Arial, Helvetica, sans-serif;
            font-size:16px;
            line-height:1.6em;
            margin:0;
      }
      
      header{
            background-color:coral;
            color:#fff;
            font-family:Arial, Helvetica, sans-serif;
            font-size:25px;
            line-height:2em;
            padding-left: 5.7em;
            margin:0;
      }
      
      ul.navbar{
            padding:0;
            list-style: none;
            background-color:#333;
            color:#fff;
            font-family:Arial, Helvetica, sans-serif;
            font-size:15px;
            line-height:2.5em;
            padding-left: 9.6em;
            margin:0;
      }
      
      ul.navbar li{
            display:inline;
            padding-right:15px;
      }
      
      main{
            background-image:url('https://wallpapercave.com/wp/wp2602611.jpg');
            background-position:center;
            min-height:230px;
            text-align: center;
            line-height:1.5em;
            padding-top: 2em;
            padding-left: 2.15em;
            padding-right: 2.72em;
            color:#fff;
            font-size:50px;
            
      }
      
      h2{
            background-color:#f4f4f4;
            color:#555;
            font-family:Arial, Helvetica, sans-serif;
            font-size:25px;
            line-height:1.6em;
            padding-top: 1.5em;
            padding-left: 6.2em;   
      }
      
      h3{
            float:right;
            width:30%;
            font-family:Arial, Helvetica, sans-serif;
            font-size:20px;
            background: #333;
            color:#fff;
            padding:15px;
            padding-top: 1em;
            padding-bottom: 1em;
            padding-right: 50px;
            box-sizing: border-box;
            line-height: 1.6em;
            margin-right: 10em;
            margin-top: 3em;
      }

      section{
            background-color: #f4f4f4;
            color:#333;
            font-family:Arial, Helvetica, sans-serif;
            font-size:18px;
            padding-left: 8.7em;
            padding-right: 40em;
      }
      
      footer{
            background: #333;
            color:#fff;
            font-family:Arial, Helvetica, sans-serif;
            font-size:16px;
            text-align: center;
            padding:15px;
            margin-top:20px;
      }
      </style>
</head>
<body>
      <header>The Batman Quiz</header>
      <ul class="navbar">
            <li>Home</a>
            <li>About</a>
            <li>Services</a>
            <li>Contact</a>
      </ul>
      <main>Consider yourself an avid Batman fan? <br> Take the quiz below!</main>
      <h3>
      <?php
            
            $answer1 = $_POST['batman'] ?? "";
            $answer2 = $_POST['robin'] ?? "";
            $answer3 = $_POST['year'] ?? "";
            $answer4 = $_POST['butler'] ?? "";
            $answer5 = $_POST['alterego'] ?? "";
            $answer6 = $_POST['dog'] ?? "";
            $answer7 = $_POST['nickname'] ?? "";
            $answer8 = $_POST['batfamily'] ?? "";
            $answer9 = $_POST['villain'] ?? "";
            $answer10 = $_POST['nightwing'] ?? "";
        
            $score = null;
            
            if ($answer1 == "Bruce Wayne") { $score++; }
            if ($answer2 == "right") { $score++; }
            if ($answer3 == "1939") { $score++; }
            if ($answer4 == "Pennyworth") { $score++; }
            if ($answer5 == "Red Hood") { $score++; }
            if ($answer6 == "ace") { $score++; }
            if ($answer7 == "right") { $score++; }
            if ($answer8 == "batgirl") { $score++; }
            if ($answer9 == "Joker") { $score++; }
            if ($answer10 == "bludhaven") { $score++; }
            
            echo "Your score: $score / 10";
            echo "<br>";
            if ($score >= 1 && $score <= 4) {echo "Oops! Recharge your BATteries and try again next time. (See what I did there?)";}
            if ($score >= 5 && $score < 8) {echo "Satisfactory. It was a tough BATtle, but you held your ground. (Get it?)";}
            if ($score >= 8) {echo "Well Done! You aced the quiz right off the BAT. (Hehe)";}
            
        ?>
      </h3>
      <h2>Start Quiz</h2>
      <section>
            <form action="index.php" method="post" id="quiz">
                  <b> 1. What is Batman's secret identity? </b>
                  <br>
                  <form action="" method="post">
                  <input type="text" name="batman" autocomplete="off" id = "q1"/>
                  <br>
                  <br>

                  <b> 2. Which of the following was/were Robin at one point or another? (You may choose more than one option)</b>
                  <br>
                  <input type="checkbox" value="wrong" name="robin" id = "q2"/>Katherine Kane
                  <br>
                  <input type="checkbox" value="wrong" name="robin" id = "q2"/>Barbara Gordon
                  <br>
                  <input type="checkbox" value="right" name="robin" id = "q2"/>Carrie Kelly
                  <br>
                  <input type="checkbox" value="right" name="robin" id = "q2"/>Stephanie Brown
                  <br>
                  <br>

                  <b> 3. In what year did Batman make his comic debut? </b>
                  <br>
                  <input type="radio" value="1940" name="year" id = "q3"/>1940
                  <br>
                  <input type="radio" value="1941" name="year" id = "q3"/>1941
                  <br>
                  <input type="radio" value="1939" name="year" id = "q3"/>1939
                  <br>
                  <input type="radio" value="1938" name="year" id = "q3"/>1938
                  <br>
                  <br>

                  <b> 4. What is the surname of Batman's butler? </b>
                  <br>
                  <form action="" method="post">
                  <input type="text" name="butler" autocomplete="off" id = "q4">
                  <br>
                  <br>

                  <b> 5. What was the alter ego adopted by Jason Todd after being revived? </b>
                  <br>
                  <form action="" method="post">
                  <input type="text" name="alterego" autocomplete="off" id = "q5"/>
                  <br>
                  <br>

                  <b> 6. What is the name of Batman's dog in "Batman Beyond"? </b>
                  <br>
                  <input type="radio" value="ace" name="dog" id = "q6"/>Ace
                  <br>
                  <input type="radio" value="ventura" name="dog"id = "q6"/>Ventura
                  <br>
                  <input type="radio" value="krypto" name="dog" id = "q6"/>Krypto
                  <br>
                  <input type="radio" value="batdog" name="dog" id = "q6"/>BatDog
                  <br>
                  <br>

                  <b> 7. Which of the following is/are Batman's nickname(s)? (You may choose more than one option)</b>
                  <br>
                  <input type="checkbox" value="right" name="nickname" id = "q7"/>World's Greatest Detective
                  <br>
                  <input type="checkbox" value="right" name="nickname" id = "q7"/>Dark Knight
                  <br>
                  <input type="checkbox" value="right" name="nickname" id = "q7"/>Caped Crusader
                  <br>
                  <input type="checkbox" value="wrong" name="nickname" id = "q7"/>Midnighter
                  <br>
                  <br>

                  <b> 8. Which Batfamily member did Joker shoot and maim? </b>
                  <br>
                  <input type="radio" value="batgirl" name="batfamily" id = "q8"/>Batgirl
                  <br>
                  <input type="radio" value="nightwing" name="batfamily" id = "q8"/>Nightwing
                  <br>
                  <input type="radio" value="robin" name="batfamily" id = "q8"/>Robin
                  <br>
                  <input type="radio" value="red hood" name="batfamily" id = "q8"/>Red Hood
                  <br>
                  <br>

                  <b> 9. Which Batman villain killed Jason Todd? </b>
                  <br>
                  <form action="" method="post">
                  <input type="text" name="villain" autocomplete="off" id = "q9"/>
                  <br>
                  <br>

                  <b> 10. What is Nightwing's primary base of operation? </b>
                  <br>
                  <input type="radio" value="gotham" name="nightwing" id = "q10"/>Gotham
                  <br>
                  <input type="radio" value="bludhaven" name="nightwing" id = "q10"/>Blüdhaven
                  <br>
                  <input type="radio" value="metropolis" name="nightwing" id = "q10"/>Metropolis
                  <br>
                  <input type="radio" value="kahndaq" name="nightwing" id = "q10"/>Kahndaq
                  <br>
                  <br>

                  <input type="submit" name="submit">
            </form>

      </section>
      <br>
      <footer>Copyright © 2021 Rahman Sharar</footer>
</body>
</html>