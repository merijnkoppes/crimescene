<?php
    include_once('includes/connect.php');
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <title>My Newspaper</title>
</head>
<body>
  <header>
    <h1>My Newspaper</h1>
  </header>
    <?php include("includes/nav.php")?>
  <main>
    <section id="section1">
      <h2>Section 1</h2>
      <p> TEST Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, risus a tincidunt laoreet, magna lorem pellentesque magna, eu laoreet lacus sem vel velit.</p>
    </section>
    <section id="section2">
      <h2>Section 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, risus a tincidunt laoreet, magna lorem pellentesque magna, eu laoreet lacus sem vel velit.</p>
    </section>
    <section id="section3">
      <h2>Section 3</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, risus a tincidunt laoreet, magna lorem pellentesque magna, eu laoreet lacus sem vel velit.</p>
    </section>
    <section id="kruispuzzel">
      <!-- <h2 id="h2text">puzzel</h2> -->
      <!-- <p id="ptext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, risus a tincidunt laoreet, magna lorem pellentesque magna, eu laoreet lacus sem vel velit.</p> -->
    </section>
  </main>
  <footer>
    <p>Copyright © 2023 My Newspaper</p>
  </footer>
</body>
</html>