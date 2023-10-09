<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/controlStructures.css">
</head>
<body>
<div class="main-container wrapper">
    <div class="wrapperOne">
        <div>Задание 1</div>
        <form>
            <select>
                    <?php
                    for($i = 1980; $i <= 2023; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
        </select>
        </form>
    </div>
    <div class="wrapperTwo">
        <div>Задание 2</div>
        <?
            //1
            for($i = 1; $i <= 30; $i++){
                if($i % 2 == 0){
                    echo $i . '<br/>';
                }
            };
        ?>
    </div>
    <div class="wrapperTree">
        <div>Задание 3</div>
        <?
            //2
            for ($i = 1; $i <= 50; $i++) {
                if ($i % 3 == 0 && $i % 5 == 0) {
                    echo "<b>$i</b>" . '<br/>';
                } elseif ($i % 3 == 0) {
                    echo "<i>$i</i>" . '<br/>';
                } else {
                    echo "$i" . '<br/>';
                }
            };
        ?>
    </div>
</div>

</body>
</html>

