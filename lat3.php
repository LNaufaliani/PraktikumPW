<html>
<head><title>POST</title>
<body>
<form action="" method="post">
<h1>Demo Operator</h1>
<h2>Arithmatic</h2>
<table border = "3">
<table width = 25% border=2 cellspacing=0 cellpadding=0>
<tr>
<td align = "center"><b>Operand Kiri</b></td>
<td align = "center"><b>Operator</b></td>
<td align = "center"><b>Operator Kanan</b></td>
<td align = "center"><b></b></td>
</tr>
<tr><td><input type="text" name="angka1" size="20" /></td>
<td><select name="operasi">
<option value="*">x</option>
<option value="/">:</option>
<option value="+">+</option>
<option value="-">-</option>
<option value="-">%</option>
</select></td>
<td><input type="text" name="angka2" size="20" /></td>
<td><input type="submit" value="Submit" /></td></tr>
<?php
if ($_POST["angka1"] && $_POST["angka2"]) {
if ($_POST["operasi"] == '*') {
echo $_POST["angka1"]*$_POST["angka2"];
} elseif ($_POST["operasi"] == '/') {
echo $_POST["angka1"]/$_POST["angka2"];
} elseif ($_POST["operasi"] == '+') {
echo $_POST["angka1"]+$_POST["angka2"];
} elseif ($_POST["operasi"] == '-') {
echo $_POST["angka1"]-$_POST["angka2"];
}elseif ($_POST["operasi"] == '%') {
echo $_POST["angka1"]%$_POST["angka2"];
}
}
?>
</form>
</body>
</html>
