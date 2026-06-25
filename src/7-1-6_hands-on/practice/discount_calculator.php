<?php
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

function toPercent(float $value, int $decimals = 0): string
{
    // 0.2 → 20, 0.123 → 12.3 などに変換
    $percent = $value * 100;

    // 小数点以下を指定桁数で丸める
    return number_format($percent, $decimals, '.', '') . '%';
}

echo "元の価格：" . number_format($original_price, 0, '.', ',') . "円" . "<br>";
echo "割引き率：" . toPercent($discount_rate) . "<br>";
echo "割引き後の価格：" . number_format($final_price, 0, '.', ',') . "円" . "<br>";
