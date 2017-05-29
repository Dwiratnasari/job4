<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
$foo = 'hello world!';
$foo = ucfirst($foo);
$bar = 'HELLO WORLD!';
$bar = ucfirst($bar);
$bar = ucfirst(strtolower($bar));
echo"$foo <br>$bar";
echo"</b>";
?>
</body>
</html>