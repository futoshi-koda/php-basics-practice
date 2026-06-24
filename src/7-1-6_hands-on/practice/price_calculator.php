<?php
    $product_name = "ノートパソコン";
    $price = 80000;
    $quantity = 2;
    $tax_rate = 0.1;
    $sub_total = $price * $quantity;
    $tax_amount = $sub_total * $tax_rate;
    $total = $sub_total + $tax_amount;


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
          echo number_format($sub_total,0, '.', ',')."円";
    ?>
<br>
    <?php echo "消費税(10%):";
          echo number_format($tax_amount,0,'.', ',')."円";
    ?>
<br>
<strong>
    <?php echo  "合計金額:";
          echo  number_format( $total,0,'.', ',')."円";
    ?>
</strong>
</p>
