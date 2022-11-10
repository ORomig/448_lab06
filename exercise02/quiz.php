<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>POP Quiz!</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <h1>RANDOM QUIZ RESULTS! </h1>
  <h2>Question 1: 
      <h3>A group of Owls is called what?</h3>
  </h2>
  <?php 
    $totalCorrect=0;
   ?>
  <?php 
    if($_POST["q1"]=="answer1"){
      echo "Your answer: a) Troop "."<br>";
      echo "Correct answer: b) Parliament "."<br>";
    }
    if($_POST["q1"]=="answer2"){
      echo "You chose the"."<br>"."Correct answer: b) Parliament "."<br>";
      $totalCorrect+=1;
    }
    if($_POST["q1"]=="answer3"){
      echo "Your answer: c) Colony"."<br>";
      echo "Correct answer: b) Parliament "."<br>";
    }
    if($_POST["q1"]=="answer4"){
      echo "Your answer: d) Company "."<br>";
      echo "Correct answer: b) Parliament "."<br>";
    }
  ?>
  <h2>Question 2: 
      <h3>If I had to be one of the 9 Titans from Attack on Titan which one would I pick? </h3>
  </h2>
    <?php 
    if($_POST["q2"]=="answer1"){
      echo "Your answer: a) the COLOSSAL Titan"."<br>";
      echo "Correct answer: c) the WAR HAMMER Titan "."<br>";
    }
    if($_POST["q2"]=="answer2"){
      echo "Your answer: b) the BEAST Titan"."<br>";
      echo "Correct answer: c) the WAR HAMMER Titan "."<br>";
    }
    if($_POST["q2"]=="answer3"){
      echo "You chose the"."<br>"."Correct answer: c) the WAR HAMMER Titan"."<br>";
      $totalCorrect+=1;
    }
    if($_POST["q2"]=="answer4"){
      echo "Your answer: d) the ATTACK Titan "."<br>";
      echo "Correct answer: c) the WAR HAMMER Titan"."<br>";
    }
  ?>
  <h2>Question 3: 
      <h3>In Hunter x Hunter if impurities appear in the water during the water divination,<br> what Nen type will the user have? </h3>
  </h2>
    <?php 
    if($_POST["q3"]=="answer1"){
      echo "You chose the"."<br>"."Correct answer: a) a Conjurer "."<br>";
      $totalCorrect+=1;
    }
    if($_POST["q3"]=="answer2"){
      echo "Your answer: b) an Enhancer "."<br>";
      echo "Correct answer: a) a Conjurer"."<br>";
    }
    if($_POST["q3"]=="answer3"){
      echo "Your answer: c) a Manipulator"."<br>";
      echo "Correct answer: a) a Conjurer"."<br>";
    }
    if($_POST["q3"]=="answer4"){
      echo "Your answer: d) an Emitter "."<br>";
      echo "Correct answer: a) a Conjurer"."<br>";
    }
  ?>
  <h2>Question 4: 
      <h3>In Taylor Swift's new album Midnights, which song has the lyric: <br>
      "I'm only cryptic and Machiavellian 'cause I care"? </h3>
  </h2>
    <?php 
    if($_POST["q4"]=="answer1"){
      echo "Your answer: a) Maroon "."<br>";
      echo "Correct answer: b) Mastermind t "."<br>";
    }
    if($_POST["q4"]=="answer2"){
      echo "You chose the"."<br>"."Correct answer: b) Mastermind  "."<br>";
      $totalCorrect+=1;
    }
    if($_POST["q4"]=="answer3"){
      echo "Your answer: c) Lavender Haze"."<br>";
      echo "Correct answer: b) Mastermind "."<br>";
    }
    if($_POST["q4"]=="answer4"){
      echo "Your answer: d) Anti-Hero "."<br>";
      echo "Correct answer: b) Mastermind "."<br>";
    }
  ?>
  <h2>Question 5: 
      <h3>Skobeloff is what kind of color? </h3>
  </h2>
    <?php 
    if($_POST["q5"]=="answer1"){
      echo "Your answer: a) A chocolate brown "."<br>";
      echo "Correct answer: c) A blueish greenbr>";
    }
    if($_POST["q5"]=="answer2"){
      echo "Your answer: c) A redish orange"."<br>";
      echo "Correct answer: c) A blueish green"."<br>";
    }
    if($_POST["q5"]=="answer3"){
      echo "You chose the"."<br>"."Correct answer: c) A blueish green "."<br>";
      $totalCorrect+=1;
    }
    if($_POST["q5"]=="answer4"){
      echo "Your answer: d) A dark green "."<br>";
      echo "Correct answer: c) A blueish green"."<br>";
    }
  ?>
  <h2>
  <?php 
  echo "You got ".$totalCorrect." questions correct."."<br>";
  $percent = $totalCorrect/5*100;
  echo "That means you got a ".$percent."%"."<br>";
  ?>
  <br>
  <br> 
  </h2>
</body>
</html>