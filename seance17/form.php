<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input, select{
            display: block;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h2>Form</h2>
    <form action="submit-form.php" method="get">
        <label for="name">Name</label>
        <input id="name" type="text" name="name">
        <label for="pwd">Password</label>
        <input id="pwd" type="password" name="password">
        <label for="age">Age</label>
        <input id="age" type="number"  name="age">
        <label for="city">City</label>
        <select id="city"  name="city">
            <option value="1">Montreal</option>
            <option value="2">Quebec</option>
            <option value="3">Laval</option>
        </select>
        <input type="submit">
    </form>
</body>
</html>

