<?php
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];
    $answer7 = $_POST['question-7-answers'];
    $answer8 = $_POST['question-8-answers'];
    $answer9 = $_POST['question-9-answers'];
    $answer10 = $_POST['question-10-answers'];

    $totalCorrect = 0;
    $totalQuestions = 10;

    if ($answer1 == "C") { $totalCorrect++; }
    if ($answer2 == "A") { $totalCorrect++; }
    if ($answer3 == "C") { $totalCorrect++; }
    if ($answer4 == "B") { $totalCorrect++; }
    if ($answer5 == "Don Cheadle") { $totalCorrect++; }
    if ($answer6 == "D") { $totalCorrect++; }
    if ($answer7 == "B") { $totalCorrect++; }
    if ($answer8 == "strange fruit") { $totalCorrect++; }
    if ($answer9 == "B") { $totalCorrect++; }
    if ($answer10 == "A") { $totalCorrect++; }

    $percentage = $totalCorrect / $totalQuestions;

?>

<html>
<head>
<title>Jazz Trivia</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link href="css/styles.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="page-wrap">
    <audio src="Blue Train snippet.m4a" loop="true"
    hidden="true" autoplay="true"></audio>
<h1>Test Your Jazz Knowledge!</h1>
<form action="grade.php" method="post" id="quiz">
  <?php echo "<div class='grade' align='center'><strong>$totalCorrect/10</strong></div>";
  echo "<br>";
  function percent($percentage){
  return $percentage * 100 . '%';
  }
  $grade = percent($percentage);
  echo "<div class='grade' align='center'><strong>$grade</strong></div>";
  echo "<br>";
  if ($totalCorrect >= '7')
  echo "<div class='pass' align='center'><strong>Congratulations! You passed!</strong></div>";
  else echo "<div class='fail' align='center'><strong>Sorry, please try again.</strong></div>";
   ?>
<ol>
<li>
  <h3>Which song was not on Miles Davis's <em>Birth of the Cool</em>?</h3>
  <div>
    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" <?php if (isset($_POST['question-1-answers']) && $_POST['question-1-answers']=='A') echo ' checked="checked"'; ?> />
    <label for="question-1-answers-A">A) Boplicity</label>
  </div>
  <div>
    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" <?php if (isset($_POST['question-1-answers']) && $_POST['question-1-answers']=='B') echo ' checked="checked"'; ?> />
    <label for="question-1-answers-B">B) Jeru</label>
  </div>
  <div>
    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" <?php if (isset($_POST['question-1-answers']) && $_POST['question-1-answers']=='C') echo ' checked="checked"'; ?> />
    <label for="question-1-answers-C">C) Sanctuary</label>
  </div>
    <?php if ($answer1 == "C")
      echo "<div class='right-answer'><strong>Correct</strong></div>"; ?>
  <div>
    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" <?php if (isset($_POST['question-1-answers']) && $_POST['question-1-answers']=='D') echo ' checked="checked"'; ?> />
    <label for="question-1-answers-D">D) Move</label>
  </div>
  <?php if ($answer1 != "C")
    echo "<div class='wrong-answer'><strong>Incorrect</strong></div>"; ?>
</li>
<li>
  <h3>Which John Coltrane album was a dedication to his wife Naima?</h3>
    <div>
      <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" <?php if (isset($_POST['question-2-answers']) && $_POST['question-2-answers']=='A') echo ' checked="checked"'; ?> />
      <label for="question-2-answers-A">A) &quot;A Love Supreme&quot;</label>
    </div>
    <?php if ($answer2 == "A")
      echo "<div class='right-answer'><strong>Correct</strong></div>"; ?>
    <div>
      <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" <?php if (isset($_POST['question-2-answers']) && $_POST['question-2-answers']=='B') echo ' checked="checked"'; ?> />
      <label for="question-2-answers-B">B) &quot;My Favorite Things&quot;</label>
    </div>
    <div>
      <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" <?php if (isset($_POST['question-2-answers']) && $_POST['question-2-answers']=='C') echo ' checked="checked"'; ?> />
      <label for="question-2-answers-C">C) &quot;Lush Life&quot;</label>
    </div>
    <div>
      <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" <?php if (isset($_POST['question-2-answers']) && $_POST['question-2-answers']=='D') echo ' checked="checked"'; ?> />
      <label for="question-2-answers-D">D) &quot;Stardust&quot;</label>
    </div>
    <?php if ($answer2 != "A")
      echo "<div class='wrong-answer'><strong>Incorrect</strong></div>"; ?>
</li>
<li>
  <h3>What actor portrayed Chet Baker in the movie <em>Born to be Blue</em>?</h3>
  <div>
      <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" <?php if (isset($_POST['question-3-answers']) && $_POST['question-3-answers']=='A') echo ' checked="checked"'; ?> />
      <label for="question-3-answers-A">A) Keanu Reeves </label>
  </div>
  <div>
      <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" <?php if (isset($_POST['question-3-answers']) && $_POST['question-3-answers']=='B') echo ' checked="checked"'; ?> />
      <label for="question-3-answers-B">B) Jared Leto</label>
  </div>
  <div>
      <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" <?php if (isset($_POST['question-3-answers']) && $_POST['question-3-answers']=='C') echo ' checked="checked"'; ?> />
      <label for="question-3-answers-C">C) Ethan Hawke</label>
  </div>
  <?php if ($answer3 == "C")
    echo "<div class='right-answer'><strong>Correct</strong></div>";
    ?>
  <div>
      <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" <?php if (isset($_POST['question-3-answers']) && $_POST['question-3-answers']=='D') echo ' checked="checked"'; ?> />
      <label for="question-3-answers-D">D) Himself</label>
  </div>
  <?php if ($answer3 != "C")
    echo "<div class='wrong-answer'><strong>Incorrect</strong></div>"; ?>
</li>
<li>
  <h3>What musician wrote and performed &quot;Take Five&quot;?</h3>
  <div>
    <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A"<?php if (isset($_POST['question-4-answers']) && $_POST['question-4-answers']=='A') echo ' checked="checked"'; ?> />
    <label for="question-4-answers-A">A) Duke Ellington</label>
  </div>
  <div>
    <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B"<?php if (isset($_POST['question-4-answers']) && $_POST['question-4-answers']=='B') echo ' checked="checked"'; ?> />
    <label for="question-4-answers-B">B) Dave Brubek</label>
  </div>
  <?php if ($answer4 == "B")
    echo "<div class='right-answer'><strong>Correct</strong></div>";
    ?>
  <div>
    <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C"<?php if (isset($_POST['question-4-answers']) && $_POST['question-4-answers']=='C') echo ' checked="checked"'; ?> />
    <label for="question-4-answers-C">C) Sonny Rollins</label>
  </div>
  <div>
    <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D"<?php if (isset($_POST['question-4-answers']) && $_POST['question-4-answers']=='D') echo ' checked="checked"'; ?> />
    <label for="question-4-answers-D">D) Charlie Parker</label>
  </div>
  <?php if ($answer4 != "B")
    echo "<div class='wrong-answer'><strong>Incorrect</strong></div>"; ?>
</li>
<li>
  <h3>What actor played Miles Davis in <em>Miles Ahead</em>?</h3>
<div>
  <input type="text" name="question-5-answers" size="40" value="<?php echo isset($_POST['question-5-answers']) ? $_POST['question-5-answers'] : '' ?>" />
</div>
  <?php if ($answer5 == "Don Cheadle")
  echo "<div class='right-answer'><strong>Correct</strong></div>";
  else echo "<div class='wrong-answer'><strong>Incorrect</strong></div>"; ?>
</li>
<li>
  <h3><em>Splanky</em> is a big band song from which artist?</h3>
  <div>
    <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" <?php if (isset($_POST['question-6-answers']) && $_POST['question-6-answers']=='A') echo ' checked="checked"'; ?> />
    <label for="question-6-answers-A">A) Benny Goodman</label>
  </div>
  <div>
    <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" <?php if (isset($_POST['question-6-answers']) && $_POST['question-6-answers']=='B') echo ' checked="checked"'; ?> />
    <label for="question-6-answers-B">B) Duke Ellington</label>
  </div>
  <div>
    <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" <?php if (isset($_POST['question-6-answers']) && $_POST['question-6-answers']=='C') echo ' checked="checked"'; ?> />
    <label for="question-6-answers-C">C) Glenn Miller</label>
  </div>
  <div>
    <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" <?php if (isset($_POST['question-6-answers']) && $_POST['question-6-answers']=='D') echo ' checked="checked"'; ?> />
    <label for="question-6-answers-D">D) Count Basie</label>
  </div>
  <?php if ($answer6 == "D")
  echo "<div class='right-answer'><strong>Correct</strong></div>";
  if ($answer6 != "D")
  echo "<div class='wrong-answer'><strong>Incorrect</strong></div>"; ?>
</li>
<li>
  <h3>Who is the lead singer for the song &quot;Cherokee&quot;?</h3>
  <div>
    <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" <?php if (isset($_POST['question-7-answers']) && $_POST['question-7-answers']=='A') echo ' checked="checked"'; ?> />
    <label for="question-7-answers-A">A) Ella Fitzgerald </label>
  </div>
  <div>
    <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" <?php if (isset($_POST['question-7-answers']) && $_POST['question-7-answers']=='B') echo ' checked="checked"'; ?> />
    <label for="question-7-answers-B">B) Sarah Vaughan</label>
  </div>
  <?php if ($answer7 == "B")
  echo "<div class='right-answer'><strong>Correct</strong></div>";
  ?>
  <div>
    <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" <?php if (isset($_POST['question-7-answers']) && $_POST['question-7-answers']=='C') echo ' checked="checked"'; ?> />
    <label for="question-7-answers-C">C) Billie Holiday</label>
  </div>
  <div>
    <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" <?php if (isset($_POST['question-7-answers']) && $_POST['question-7-answers']=='D') echo ' checked="checked"'; ?> />
    <label for="question-7-answers-D">D) Nina Simone</label>
  </div>
  <?php if ($answer7 != "B")
    echo "<div class='wrong-answer'><strong>Incorrect</strong></div>"; ?>
</li>
<li>
  <h3>Complete the following lyric: <em>Southern trees bear a __ __ <br></em>(answer in lowercase)</h3>
  <div>
    <input type="text" name="question-8-answers" size="40" value="<?php echo isset($_POST['question-8-answers']) ? $_POST['question-8-answers'] : '' ?>" />
  </div>
  <?php if ($answer8 == "strange fruit")
  echo "<div class='right-answer'><strong>Correct</strong></div>";
  else echo "<div class='wrong-answer'><strong>Incorrect</strong></div>"; ?>
</li>
<li>
  <h3>&quot;In a Sentimental Mood&quot; is a collaboration by which duo?</h3>
  <div>
    <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" <?php if (isset($_POST['question-9-answers']) && $_POST['question-9-answers']=='A') echo ' checked="checked"'; ?> />
    <label for="question-9-answers-A">A) Duke Ellington, Miles Davis</label>
  </div>
  <div>
    <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" <?php if (isset($_POST['question-9-answers']) && $_POST['question-9-answers']=='B') echo ' checked="checked"'; ?> />
    <label for="question-9-answers-B">B) Duke Ellington, John Coltrane</label>
  </div>
  <?php if ($answer9 == "B")
  echo "<div class='right-answer'><strong>Correct</strong></div>";
  ?>
  <div>
    <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" <?php if (isset($_POST['question-9-answers']) && $_POST['question-9-answers']=='C') echo ' checked="checked"'; ?> />
    <label for="question-9-answers-C">C) John Coltrane, Miles Davis</label>
  </div>
  <?php if ($answer9 != "B")
    echo "<div class='wrong-answer'><strong>Incorrect</strong></div>"; ?>
</li>
<li>
<h3>Which Miles Davis album is currently the best selling jazz album of all time?</h3>
<div>
  <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" <?php if (isset($_POST['question-10-answers']) && $_POST['question-10-answers']=='A') echo ' checked="checked"'; ?> />
  <label for="question-10-answers-A">A) Kind of Blue </label>
</div>
<?php if ($answer10 == "A")
echo "<div class='right-answer'><strong>Correct</strong></div>";
?>
<div>
  <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" <?php if (isset($_POST['question-10-answers']) && $_POST['question-10-answers']=='B') echo ' checked="checked"'; ?> />
  <label for="question-10-answers-B">B) Birth of the Cool</label>
</div>
<div>
  <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" <?php if (isset($_POST['question-10-answers']) && $_POST['question-10-answers']=='C') echo ' checked="checked"'; ?> />
  <label for="question-10-answers-C">C) Bitches Brew</label>
</div>
<div>
  <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" <?php if (isset($_POST['question-10-answers']) && $_POST['question-10-answers']=='D') echo ' checked="checked"'; ?> />
  <label for="question-10-answers-D">D) None of the above</label>
</div>
<?php if ($answer10 != "A")
  echo "<div class='wrong-answer'><strong>Incorrect</strong></div>"; ?>
</li>
</ol>
</div>
</form>
</body>
</html>
