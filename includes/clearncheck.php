<?php error_reporting(0);

if (empty($_SESSION['cart'])) {
}
  else{
    $whereIn = implode(',',$_SESSION['cart']);
  $sql = "
  SELECT * FROM products
  WHERE id IN ($whereIn)
      ;
  ";
$result = $conn->query($sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  $totalPrice = 0.00;
  $shippingprice = 1.99;
    while($row = mysqli_fetch_assoc($result)){
      if (isset($whereIn)) {
        $quantity = substr_count($whereIn, $row['id']);
          }
            $price += $row['price'] * $quantity;
            $totalprice = $price + $shippingprice;
      }
      echo "
      <div class='total'>
          <div class='total_title'>Sub Total</div>
          <div class='total_price'>$ {$price}</div>
          <div class='total_title'>Shipping</div>
          <div class='total_price'>$ {$shippingprice}</div>
          <div class='total_title'>Total</div>
          <div class='total_price'>$ {$totalprice}</div>
      </div>
      ";
  }
  if ($resultCheck > 0){
  echo"
  <a href='includes/pay.php'><div class='check'>Checkout</div></a>
  <a href='includes/clear.php'><div class='clear'>Clear cart</div></a>
  ";
  }
}
?>