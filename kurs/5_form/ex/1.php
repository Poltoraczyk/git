<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./2.php" method="get">
        <?php
            $name = "<input type=\"text\" name=\"name\"";
            if (!empty($_GET['name'])) {
                $name .= " value\"$_GET[name]\">";
            }else{
                $name .= " placeholder=\"Imię\">";
            }
            echo $name;     
        
            $city = "<input type=\"text\" name=\"city\"";
            if (!empty($_GET['name'])) {
                $city .= " value\"$_GET[city]\">";
            }else{
                $city .= " placeholder=\"Miasto\">";
            }
            echo $city;
            
            $age = "<input type=\"text\" name=\"age\"";
            if (!empty($_GET['name'])) {
                $age .= " value\"$_GET[age]\">";
            }else{
                $age .= " placeholder=\"Wiek\">";
            }
            echo $age;
        ?><br><br>
        <input type="submit" value="Wyślij dane">
    </form>
<body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name=form_ex action="./form_ex.php" method="get">
    <input type="text" name="miasto" placeholder="miasto"><br><br>
    <input type="text" name="wiek" placeholder="wiek"><br><br>

    <?php 
$miasto = "<input type=\"text\" miasto=\"miasto\"";
$wiek = "<input type=\"text\" wiek=\"wiek\"";

    if(!empty($_GET['miasto'])&& !empty($_GET['wiek'])){
        $miasto .=" value=\"$_GET[miasto]\">";
        $wiek .=" value=\"$_GET[wiek]\">";
    }else{
        $miasto .=" placeholder=\"miasto\">";
        $wiek .=" placeholder=\"wiek\">";
    }
    ?>
<br>
<input type="submit" value="Wyślij">
</form>
</body>
</html>
