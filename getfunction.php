<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
$sql = 'SELECT * FROM PRODUCTS;';
$results = mysqli = mysql_query($c, $sql);
$tableOpen = '<table><tr><th>Image</th><th>Product Name</th><th>Price</th><th>Link</th></tr>';
$TableGuts = '';
$TableClose = '</table>';
while ($rows = mysqli_fetch_array($results, MYSQLI_ASSOC))
{
  $id = $rows['ID'];
  $tableguts .= '<tr>;'
  $tableguts .= '<td><img src="img/'.$id.'.jpg"></td>';
  $tableguts .= '<td>'.$rows['NAME'].'</td>';
  $tableguts .= '<td>'.$rows['PRICE'].'</td>';
  $tableguts .= '<td><a href="product.php='.id.'">View Product</a></td>';
  $tableguts .= '</tr>'
}

$table = $tableOpen.$TableGuts.$TableClose;

>?
