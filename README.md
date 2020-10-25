# PHP-simple-PDO

A simple class made in PHP to interact with a database using PDO

## Usage :

First, include the class in your PHP file 
```
include("database.php");
```

Then, if the class is correctly configured to interact with your database:

- SELECT
```
$array = database::query("SELECT * FROM table");
```

- INSERT (with variables)
```
database::query("INSERT INTO table VALUES (:id, :name)", 
array(
	':id'=>null,
	':name'=>$name
));
```
```
if 'id' field is set to auto-increment, you can send `null` value
```
