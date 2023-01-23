<?php
$sex = "woman";
$age = 34;
if ($sex == "woman")
{
    if(($age>=30) && ($age <=40))
    {
        echo "採用です";
    }else{
        echo "３０代の方を募集してます。";
    }
}else{
    echo "女性のみの募集です。";
}
?>