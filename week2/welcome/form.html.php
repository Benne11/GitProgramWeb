<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome</title>

</head>
<body>
	<form action="" method="post">
        <label for= "val1">Value 1:
        <input type="text" name="val1" id="val1"></label><br />
        <label for= "val2">Value 2:
        <input type="text" name="val2" id="val2"></label><br />
		<label for="calc">Operation:
		<input type="radio" name="calc" value="add" id="add" >
        <label for="add">Add</label>
        <input type="radio" name="calc" value="sub" id="sub" >
        <label for="sub">Subtract</label>
        <input type="radio" name="calc" value="mul" id="mul" >
        <label for="mul">Multiply</label>
        <input type="radio" name="calc" value="div" id="div" >
        <label for="div">Divide</label>
        </label><br />
		<input type="submit" value="Calculate">
	</form>
</body>
</html>