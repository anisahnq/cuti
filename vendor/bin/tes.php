<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'cuti_online';
$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
$dbselect = mysql_select_db($dbname);

class tes extends PHPUnit_Framework_TestCase
{
	function testPassword(){
		$sql = mysql_query("SELECT * FROM admin where username = 'admin'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['password'];
		$content = $test_user;
		$this->assertEquals('admin',$content);
	}
	
	function testUsername(){
		$sql = mysql_query("SELECT * FROM admin where password = 'admin'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['username'];
		$content = $test_user;
		$this->assertEquals('anisah',$content);
	}
	
	
	function testPersetujuan(){
		$sql = mysql_query("SELECT * FROM permohonan where kd_cuti = '9'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['keterangan'];
		$content = $test_user;
		$this->assertEquals('Disetujui',$content);
	}

	function testJumlahPermohonan(){
		$sql = mysql_query("SELECT count( kd_cuti ) AS id FROM permohonan WHERE keterangan = 'Disetujui'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['id'];
		$content = $test_user;
		$this->assertEquals('8',$content);
	}


}
?>