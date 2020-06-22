<!DOCTYPE html> <!-- resources\views\overzicht.php --> 
<html lang="nl"> 
    <head> <!-- VIEW --> 
        <meta charset="UTF-8"> 
        <title>2010 temperaturen</title> 
        <style>
            table {border : 1px solid black} 
            td {text-align : right}
        </style>
    </head> 
    <body> 
        
        <?php $maanden=array("maand","Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December") ?>
        
        <form action="overzicht" method="get"> 
            Maand: <select name="maand"> 
            <option><?php echo $maanden[$maand]; ?></option>  
            </select> <br/>
            
        </form> 
        
        <h1><?php echo $maanden[$maand]; ?></h1> 
        <table> 
            <tr><th>Dag</th><th>Minimum</th><th>Maximum</th></tr> 
    <?php foreach ($metingen as $m) 
    {
    $dag = $m->dagnr; 
    $min = $m->minimum;
    $max = $m->maximum;
    echo "<tr><td>$dag</td><td>$min &deg;C</td><td>$max &deg;C</td></tr>"; 
   
}
            ?> 
        </table>
    </body> 
</html>