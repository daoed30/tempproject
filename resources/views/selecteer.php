<!DOCTYPE html> <!-- selecteer.php --> 
<html lang="nl"> 
    <head> <!-- VIEW --> 
        <meta charset="UTF-8"> 
        <title>Temperaturen</title> 
    </head> 
    <body> 
        <form action="overzicht" method="get"> 
            Maand: <select name="maand"> 
            <option value="1">Januari</option> 
            <option value="2">Februari</option> 
            <option value="3">Maart</option> 
            <option value="4">April</option> 
            <option value="5">Mei</option> 
            <option value="6">Juni</option> 
            <option value="7">Juli</option> 
            <option value="8">Augustus</option> 
            <option value="9">September</option> 
            <option value="10">Oktober</option> 
            <option value="11">November</option> 
            <option value="12">December</option> 
            </select> 
            <button type="submit">Overzicht</button> 
        </form> 
    </body> 
</html>