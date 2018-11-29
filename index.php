<!DOCTYPE html>
<html>
<head>
	<title>Compteur d'occurrence</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
<h1> Compteur d'Occurrence</h1>
<div class="bloc">
<form method="POST" action="index.php">
	<br>
<textarea name="caractere" placeholder="message"></textarea><br><br>
<input type="text" name="mot" placeholder="occurence a chercher"><br><br>
<input type="submit" name="envoyer">
</form>
</div>
</center>
<?php
/*occurence par caractere*/

/*if (isset($_POST['envoyer'])) 
{


  $text = $_POST['caractere'];
 
  foreach (count_chars($text, 1) as $i => $val) 
  {
    echo 'Il y a <b>' . $val . '</b> occurrence(s) de <b>' . chr($i) . '</b> dans <b>"' . $text . '"</b><br>';
  }
}*/



/*occurrence des mots et des caracteres*/
			if (isset($_POST['envoyer'])) 
{


  $caractere = $_POST['mot'];
  $text = $_POST['caractere'];
 
  echo '<br><center><b>le message</b> contient <b>' . substr_count($text, $caractere) . '</b> fois le caractère <b>' . $caractere . '</b></center>';

}
?>

</body>
</html>