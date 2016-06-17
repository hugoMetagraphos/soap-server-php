<?php 
/**
* @author Hugo Espinosa
* @email hespinosa@metagraphos.com
*
*/

class Server
{
	private $con;

	public function __construct()
	{
		$this->con = (is_null($this->con)) ? self::connect() : $this->con;
	}

	static function connect()
	{
		$con = mysql_connect('localhost', 'homestead', 'secret');
		$db = mysql_select_db('homestead', $con);

		return $con;
	}

	public function getCourse($id_array)
	{
		$id = $id_array['id'];
		$sql = "SELECT course FROM courses WHERE id='.$id.'";
		$qry = mysql_query($sql, $this->con);
		$res = mysql_fetch_array($qry);
		return $res['course'];
	}
}

$params = array('uri' => 'http://dev.app/soap-server/server.php');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();