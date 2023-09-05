<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fun Fundamental</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 2.5;
        $c = 'Hello';
        $d = 'World';
        $words = 'apple banana orange';
        $speace1 = strpos($words, ' ');
        $speace2 = strpos($words, ' ',$speace1+1);
    ?>
    <h3>ผลการทำงานเป็น PHP</h3>
    <pre>
    <?php
    echo '$a = '.$a.';'?>
    
    $b = <?php echo $b?>;
    $c = '<?=$c?>';
    $d = '<?=$d?>';
    ##########
    $a + $d จะมีค่าเป็น <?php echo $a+$b?> 
    $c.' '.$d จะมีค่าเป็น <?echo $c.' '.$d?> 
    ##########
    $words คำที่ 1 คือ <?php echo substr($words, 0 ,$speace1);?> 
    $words คำที่ 2 คือ <?php echo substr($words, $speace1+1,$speace2-($speace1+1));?> 
    $words คำที่ 3 คือ <?php echo substr($words, $speace2+1);?> 
    ตัวอักษรที่สุ่มได้จาก $words คือ "<?php echo $words[rand(0, strlen($words)-1)]?>"
    </pre>
</body>
</html>