<?php
    $product_name = "ノートパソコン";
    $price = 80000;
    $quantity = 2;
    $tax_rate = 0.1;
?>

<p>    
    <?php echo "商品名:";
          echo $product_name;
    ?>
<br>
    <?php echo "単価:";
          echo number_format($price,0, '.', ',')."円";
    ?>
<br>
    <?php echo "数量:";
          echo number_format($quantity,0, '.', ',')."個";
    ?>
<br>
    <?php echo "小計:";
          echo number_format($price*$quantity,0, '.', ',')."円";
    ?>
<br>
    <?php echo "消費税(10%):";
          echo number_format($price*$quantity*$tax_rate,0,'.', ',')."円";
    ?>
<br>
<strong>
    <?php echo  "合計金額:";
          echo  number_format( $price*$quantity+$price*$quantity*$tax_rate,0,'.', ',')."円";
    ?>
</strong>
</p>
