<?php
require("connect.php");
session_start();

if(isset($_GET['pet'])) {
  $pet = $_GET['pet'];
  $page = "";
  $page .= '<div class="pettable">';
  $SQL = "SELECT * FROM adopt WHERE adoptType = '$pet' ORDER BY postDate DESC";
  $result = mysqli_query($connect, $SQL);
  $row = mysqli_num_rows($result);
  if($row != 0) {
    while($field = mysqli_fetch_assoc($result)) {
      $pid = $field['adoptID'];
      $ppic = $field['adoptPic'];
      $pname = $field['adoptName'];
      $pmember = $field['memberName'];
      $pdate = $field['postDate'];
      // output
      $page .= '<div class="pet">';
      $page .= '<a href="pet.php?id=A'.$petID.'"><img src="'.$ppic.'"/></a><a href="pet.php?id=A'.$petID.'"><h2>'.$pname.'</h2></a><h3>'.$pmember.'</h3><h4>'.$pdate.'</h4>';
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
    <a href="index.html" title="home">Home</a>
    <?php echo $page; ?>
  </body>
</html>
