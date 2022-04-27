<?php

if (empty($_SESSION['cart'])) {
}
else{
  $whereIn = implode(',',$_SESSION['cart']);

$sql = "
        SELECT * FROM merch
        WHERE id IN ($whereIn);
        ";

$result = $conn->query($sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    while($row= mysqli_fetch_assoc($result)){
      if(isset($whereIn)) {
        $quantity = substr_count($whereIn, $row["id"]);
      }
        echo"
        <div class='cartin'>
        <div class='pimg'><img src='{$row['img']}'></div>
        <div class='cname'><h3>{$row['name']}<p style''></h3></div>
        <div class='cprice'> <p>\${$row['price']}</p><br></div>
        <div class='stock'><p> Count: {$quantity}</p></div>
        <a href='add.php?id={$row['id']}' class='cadd'>+</a>
      </div>
        ";
    }
}
}
?>