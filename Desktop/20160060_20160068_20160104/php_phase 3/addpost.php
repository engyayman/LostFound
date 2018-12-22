<!DOCTYPE html>
<html>
<head>
	<title>Add post</title>
</head>
<body>
<form action="posting.php" method="get">
	<label>post title</label>
	<br>
	<input type="text" name="title" required>
	<br>
	<label>post description</label>
	<br>
	<input type="text" name="desc" style="width: 300px; height: 200px"  required>
    <br>
    <label>image name</label>
    <br>
    <input type="text" name="image" required>
    <br>
    <label>form question in case of someone found his missing thing</label>
    <br>
    <input type="text" name="question" style="width: 250px; height: 200px"  required>
    <br>
    <label>please select from categories</label>
    <select name="select">
    	<option value="clothes">clothes</option>
    	<option value="mobile">mobile</option>
    	<option value="laptop">laptop</option>
    	<option value="others">others</option>
    </select>
    <br>
    <input type="submit" name="">

</form>
</body>
</html>