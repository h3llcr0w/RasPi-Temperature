<html>
<head>
<title>Ras Pi Temperature</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style type="text/css">

div#circle {
      position:relative;

      width: 10em;
      height:10em;
      -webkit-border-radius: 5em;
      -moz-border-radius: 5em;
      border-radius: 50%;
      display: table-cell;
      font-size: 2em;
      vertical-align: middle;
      color: #fff;
      text-align: center;

  <?php
$temp = shell_exec('/opt/vc/bin/vcgencmd measure_temp'); 
$temp = (float) filter_var( $temp, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );

$percent = floor(($temp-52)*100/28);

$r=floor($percent*255/100);
$g=floor((100-$percent)*255/100);

echo "   background:rgb($r,$g,0);\n}\n";

echo "</style>\n";
echo "</head>\n";
echo "<body bgcolor=\"#000000\">\n";
echo "<h2><font color=\"#FFFFFF\">Raspberry Pi Temperarure Monitor</font></h2>";
echo "<div id=\"circle\">";
echo "<font color=\"#FFFFFF\">\n";
echo "Temp:".$temp."<br>\n";
echo $percent."%<br>\n";
?>
</font>
</div>
</body>
</html>
