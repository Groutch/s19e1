<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php
    include 'StrUtils.php';
    $myStr = new StrUtils('php is awesome !');
    //$myStr = new StrUtils();
    ?>
    <?= $myStr->bold() ?>
    <br>
    <?= $myStr->italic() ?>
    <br>
    <?= $myStr->underline() ?>
    <br>
    <?= $myStr->capitalize() ?>
    <br>
    <?= $myStr->uglify() ?>
</body>

</html>
