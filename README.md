# decoded-PDO-app
How to Connect to ANY DB using PHP Data Objects.

Install MySQL and PostgreSQL databases in your machine.


In the util.php file, add the values required to connect to your databases - MySQL and PostgreSQL  in turns. For example

```bash
<?php
	class Util{
		
		//About DB
		static $DB_NAME = "my database bname";
		static $DB_USER = "database user ";
		//Use password you set to postgres user
		static $DB_USER_PASS = "database user password";
		static $SERVER_NAME = "server where your database is e.g. 127.0.0.1";
	}
?>

```

You are good to go!
