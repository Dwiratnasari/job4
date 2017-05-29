<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php echo"<b>";
$pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ",$pizza);
echo "$pieces[0] <br>"; //piece1
echo "$pieces[1] <br>"; //pieces2
//contoh
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user,$pass,$uid,$gid,$home,$shell)= explode(":", $data);
echo $user; //foo
echo $pass; //*
echo"</b>"; ?>
</body>
</html>