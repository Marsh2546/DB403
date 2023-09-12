<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dices Rolling</title>
</head>
<body>
    <?php 
    function dice($score = false) {
        $d1 = rand(1,6);
        $d2 = rand(1,6);
        $sum = 'ผมรวมคือ';
        return '2 Dices roll'
        .($score ? ' => '.$d1.' + '.$d2 : '')
        . '=> '.$sum .$d1+$d2;
    }
    ?>
    <h1>without score</h1>
    <?php echo dice(); ?>
    <h1>with score</h1>
    <?php echo dice(TRUE);?>
</body>
</html>