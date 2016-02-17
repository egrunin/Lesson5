<!DOCTYPE html>

<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>Beer Information</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

<h1>Beer Information</h1>

<a href="beers.php" title="View Beers">View Beer Listings</a>

<p>* indicates Required Fields</p>
<form method="post" action="save-beer.php">
    <fieldset>
        <label for="name" class="col-sm-2">Name: *</label>
        <input name="name" id="name" required placeholder="Beer Name" />
    </fieldset>
    <fieldset>
        <label for="alcohol_content" class="col-sm-2">Alcohol Content: *</label>
        <input name="alcohol_content" id="alcohol_content" required />
    </fieldset>
    <fieldset>
        <label for="domestic" class="col-sm-2">Domestic:</label>
        <input name="domestic" id="domestic" type="checkbox" />
    </fieldset>
    <fieldset>
        <label for="light" class="col-sm-2">Light:</label>
        <input name="light" id="light" type="checkbox" />
    </fieldset>
    <fieldset>
        <label for="price" class="col-sm-2">Price: *</label>
        <input name="price" id="price" required />
    </fieldset>
    <button class="btn btn-primary col-sm-offset-2">Save</button>
</form>

</body>

</html>