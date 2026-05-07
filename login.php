<!DOCTYPE html>
<html lang="en">
<head>

	<title>Login form</title>
	<meta charset="utf-8">
	<meta name="description" content="login Form" >
	<meta name="keywords"    content="login, username, passwordd, sessiontokens" >
	<meta name="author"      content="Jay tr" />
    <!-- Place the general style sheet before specific CSS so the specific overides the general formatting-->
	<!-- <link rel="stylesheet" type="text/css" href="style/style.css" > -->

</head>

<body>

<?php include 'header.inc'; ?>


<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="hidden" name="Jay" value="1234">
    <input type="submit" value="login">
</form>

<?php include 'footer.inc'; ?>