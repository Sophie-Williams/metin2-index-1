<?php

$bagla = array(
	'host'    => 'localhost', // Genellikle localhost olur. Değilse hosting firmanıza danışın. 
	'db_name' => 'simpleindex', // Oluşturduğunuz veritabanının adı.
	'db_user' => 'root', // Oluşturduğunuz veritabanı kullanıcısının kullanıcı adı.
	'db_pw'   => '' // Oluşturduğunuz veritabanı kullanıcısının şifresi.
);

	try {
		$db = new PDO('mysql:host='.$bagla['host'].';dbname='.$bagla['db_name'].';charset=utf8', $bagla['db_user'], $bagla['db_pw']);
	}	catch (PDOException $e) {
		echo $e->GetMessage();
	}
 ?>