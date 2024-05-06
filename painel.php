
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel PHP</title>
</head>
<body>
    

<h2>Bem  vindo ao painel! </h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<input type="submit" name="logout" value="Logout"></form> 


</body>
</html>