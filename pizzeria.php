<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Exemple de formulari</title>

</head>

<body>
    <?
    $count=0;
    $correct=0;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        foreach ($_REQUEST as $key => $value) {
            if ($key == "oregano" or $key == "masa") {
                $correct++;
            }

        }
        
           if ($correct == 2) {
                echo "Ingredientes: ";
                foreach ($_REQUEST as $key => $value) {
                    echo "$value ";
                    $count++;
                }
                echo "</br>El precio es " ;
                echo 5+0.5*$count;
            }
            else{
                echo "Tu pizza debe terner masa y oregano";
               }
        
    }else{
    ?>
    <div style="margin: 30px 10%;">
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" id="myform" name="myform">
        <h2>PIZZERIA</h2>
            <input type="checkbox" name="masa" value="masa" checked>Masa
            <input type="checkbox" name="tomate" value="tomate" checked>Tomate
            <input type="checkbox" name="atun" value="atun" >Atun
            <input type="checkbox" name="champiñones" value="champiñones" >Champiñones
            <input type="checkbox" name="oregano" value="oregano">Oregano
            <input type="checkbox" name="bacon" value="bacon">Bacon
            <input type="checkbox" name="peperoni" value="peperoni">Peperoni
            <br />
        <button id="mysubmit" type="submit">Submit</button><br /><br />
    </form>
<?}?>
</body>
</html>