<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php
  echo '<p>Hola Mundo</p>'; 
  
   for($i = 0; $i < 2; $i++)
  {
   echo "Línea número: ", $i, "<br>";
  }
  
  
  //$link = mysql_connect('host','username','password');
  //mysql_select_db($link);

  //$result = mysql_query("SELECT * FROM mitabla",$link);

  //while($row = mysql_fetch_array($result)) {

	// Código para cada fila

  //} 
 
  phpinfo(); 
  ?>
  <FORM method="post" action="upload.php" enctype="multipart/form-data">
         ¡Sube tu foto!: <input type="file" name="foto" /> <input type="submit" name="enviar" value="Enviar" />
  </FORM>
 </body>
</html>
