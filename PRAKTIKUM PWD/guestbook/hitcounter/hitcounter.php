<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
    <?php
        $filecounter = "counter.txt";
        $fl=fopen($filecounter,"r+");
        $hit=fread($fl, filesize($filecounter));

        echo ("<table width = 250 align=center border=1 cellspacing=0 cellpading =0 bordercolor=#0000FF><tr>");
        echo ("<td width=250 valign=middle algin=center>");
        echo("font face=verdana size 2 color=#FF0000><b>");
        echo("anda pengunjung ke : ");
        echo($hit);
        echo("</b></font>");
        echo("</td>");
        echo("</tr></table>");
        fclose($fl);

        $fl=fopen($filecounter,"w+");
        $hit=$hit+1;
        fwrite($fl, $hit,strlen($hit));
        fclose($fl);
    ?>
<!-- </body>
</html> -->