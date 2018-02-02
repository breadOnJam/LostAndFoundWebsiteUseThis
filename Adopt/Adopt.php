<?php
require("connect.php");
session_start();

if(isset($_GET['pet'])) {
  $pet = toUpper($_GET['pet']);
  $page = "";
  $page .= '<div class="pettable">';
  $petarray = ('adoptdog', 'adoptcat', 'adoptother');
  for($i = 0; $i < 3; $i++) {
    $SQL = "SELECT * FROM petarray[$i] ORDER BY date ASC";
    $result = mysqli_query($connect, $SQL);
    while($field = mysqli_fetch_assoc($result)) {
      $ppic = $field['petPicture'];
      $pmember = $field['memberID'];
      $pdate = $field['date'];
      // output
      $page .= '<div class="pet">';
      $page .= '<img src="'.$ppic.'"/><h2>'.$pmember.'</h2>';
      $page .= '</div>';
    }
  }
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Adopt <?php echo $pet; ?></title>
    <link rel="stylesheet" href = "Stylesheets/styles.css">
    <script src = "Scripts/script.js"></script>
  </head>

  <body>
    <a href="../index.html" title="home">Home</a>
  </body>
</html>
