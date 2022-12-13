<?
function MYSQLIAuth() {
	return [
		"localhost", //localhost
		"mengxi331", //your database user name
		"976869Ab", //database password
		"ixd608_1" //database name
	];
}

function PDOAuth() {
	return [
		"mysql:host=localhost;dbname=ixd608_1",
		"mengxi331", //your database user name
		"976869Ab", //database password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}


?>