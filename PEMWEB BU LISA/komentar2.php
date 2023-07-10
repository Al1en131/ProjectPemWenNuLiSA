<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<?php

include_once("config.php");
$result = mysqli_query($koneksi, "SELECT * FROM komen");

while($user_data = mysqli_fetch_array($result)){
    echo "
        <div id='komen' class='komen'>
        <div class='box-kiri'>
		<h3>".$user_data['nama']."</h3>
		<p>".$user_data['pesan']."</p>
        
	</div>
    ";

}
?>
<br><br><br>
<div class="home"><a href='index.html'>Home</a></div>  
</body>
</html>