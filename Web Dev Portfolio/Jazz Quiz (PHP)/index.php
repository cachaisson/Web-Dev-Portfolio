<!DOCTYPE html>
<html>
<head>
  <style>
  input[type=submit] {
    color: green;
  }
  input[type=reset] {
    color: red;
  }
  </style>
<title>Jazz Trivia</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="page-wrap">
  <audio src="So What snippet.m4a" loop="true"
  hidden="true" autoplay="true"></audio>
<h1>Test Your Jazz Knowledge!</h1>
<form action="grade.php" method="post" id="quiz">
<ol>
<li>
  <h3>Which song was not on Miles Davis's <em>Birth of the Cool</em>?</h3>
  <div>
    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
    <label for="question-1-answers-A">A) Boplicity</label>
  </div>
  <div>
    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
    <label for="question-1-answers-B">B) Jeru</label>
  </div>
  <div>
    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
    <label for="question-1-answers-C">C) Sanctuary</label>
  <div>
    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
    <label for="question-1-answers-D">D) Move</label>
  </div>
</li>
<li>
  <h3>Which John Coltrane album was a dedication to his wife Naima?</h3>
    <div>
      <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
      <label for="question-2-answers-A">A) &quot;A Love Supreme&quot;</label>
    </div>
    <div>
      <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
      <label for="question-2-answers-B">B) &quot;My Favorite Things&quot;</label>
    </div>
    <div>
      <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
      <label for="question-2-answers-C">C) &quot;Lush Life&quot;</label>
    </div>
    <div>
      <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
      <label for="question-2-answers-D">D) &quot;Stardust&quot;</label>
    </div>
</li>
<li>
  <h3>What actor portrayed Chet Baker in the movie <em>Born to be Blue</em>?</h3>
  <div>
      <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
      <label for="question-3-answers-A">A) Keanu Reeves </label>
  </div>
  <div>
      <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
      <label for="question-3-answers-B">B) Jared Leto</label>
  </div>
  <div>
      <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
      <label for="question-3-answers-C">C) Ethan Hawke</label>
  </div>
  <div>
      <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
      <label for="question-3-answers-D">D) Himself</label>
  </div>
</li>
<li>
  <h3>What musician wrote and performed &quot;Take Five&quot;?</h3>
  <div>
    <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
    <label for="question-4-answers-A">A) Duke Ellington</label>
  </div>
  <div>
    <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
    <label for="question-4-answers-B">B) Dave Brubek</label>
  </div>
  <div>
    <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
    <label for="question-4-answers-C">C) Sonny Rollins</label>
  </div>
  <div>
    <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
    <label for="question-4-answers-D">D) Charlie Parker</label>
  </div>
</li>
<li>
  <h3>What actor played Miles Davis in <em>Miles Ahead</em>?<h3>
  <input type="text" name="question-5-answers" size="40">
</li>
<li>
  <h3><em>Splanky</em> is a big band song from which artist?</h3>
  <div>
    <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
    <label for="question-6-answers-A">A) Benny Goodman</label>
  </div>
  <div>
    <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
    <label for="question-6-answers-B">B) Duke Ellington</label>
  </div>
  <div>
    <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
    <label for="question-6-answers-C">C) Glenn Miller</label>
  </div>
  <div>
    <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
    <label for="question-6-answers-D">D) Count Basie</label>
  </div>
</li>
<li>
  <h3>Who is the lead singer for the song &quot;Cherokee&quot;?</h3>
  <div>
    <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
    <label for="question-7-answers-A">A) Ella Fitzgerald </label>
  </div>
  <div>
    <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
    <label for="question-7-answers-B">B) Sarah Vaughan</label>
  </div>
  <div>
    <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
    <label for="question-7-answers-C">C) Billie Holiday</label>
  </div>
  <div>
    <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
    <label for="question-7-answers-D">D) Nina Simone</label>
  </div>
</li>
<li>
  <h3>Complete the following lyric: <em>Southern trees bear a __ __ <br></em>(answer in lowercase)</h3>
  <div>
    <input type="text" name="question-8-answers" size="40">
  </div>
</li>
<li>
  <h3>&quot;In a Sentimental Mood&quot; is a collaboration by which duo?</h3>
  <div>
    <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
    <label for="question-9-answers-A">A) Duke Ellington, Miles Davis</label>
  </div>
  <div>
    <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
    <label for="question-9-answers-B">B) Duke Ellington, John Coltrane</label>
  </div>
  <div>
    <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
    <label for="question-9-answers-C">C) John Coltrane, Miles Davis</label>
  </div>
</li>
<li>
<h3>Which Miles Davis album is currently the best selling jazz album of all time?</h3>
<div>
  <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
  <label for="question-10-answers-A">A) Kind of Blue </label>
</div>
<div>
  <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
  <label for="question-10-answers-B">B) Birth of the Cool</label>
</div>
<div>
  <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
  <label for="question-10-answers-C">C) Bitches Brew</label>
</div>
<div>
  <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
  <label for="question-10-answers-D">D) None of the above</label>
</div>
</li>
</ol>
<div class="controls">
  <input type="submit" value="Submit Quiz"/>
  <input type="reset" value="Cancel" />
</div>
</div>
</form>
</body>
</html>
