<?php
function __autoload($class_name){
    include $class_name . '.php';
}
/* Procedurele code */
require 'connect.php';
require 'table.php';

$sql = "SELECT * FROM `fruits`";
$result = $conn->query($sql);
//using alias
use \tableBody\Table as TableContent;
//the class tablecontent works even though the original class-name is Table
$table = new TableContent();
$rows =  $result->num_rows;

$tr_top = new Row();
$tr_top->append(new Cell("<strong>ID</strong>"));
$tr_top->append(new Cell("<strong>Name</strong>"));
$tr_top->append(new Cell("<strong>Color</strong>"));
$tr_top->append(new Cell("<strong>Taste</strong>"));

$table->append($tr_top);
while ($row = $result->fetch_assoc()) {
    $new_row = new Row();
    $new_row->append(new Cell($row['id']));
    $new_row->append(new Cell($row['name']));
    $new_row->append(new Cell($row['color']));
    $new_row->append(new Cell($row['taste']));

    $table->append($new_row);
}




$table->draw();

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    
</body>
</html>