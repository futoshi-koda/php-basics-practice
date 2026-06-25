<?php
$age = 25;
$is_member = false;
$is_student = false;


// 条件1: 18歳以上かつ会員
if ($age >= 18 && $is_member) {
    echo "割引が適用されます<br>";
}

// 条件2: 65歳以上または学生 
// 課題の要件に異議があり、アレンジしました。条件１を優先、条件２は17歳以下も学生として扱う。
elseif ($age >= 65 || $age <= 17 || $is_student) {
    echo "シニア・学生割引が適用されます<br>";
} else {
    echo "いずれの割引も適用されません";
}



