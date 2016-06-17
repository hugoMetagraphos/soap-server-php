<?php
/**
* @author Hugo Espinosa
* @email hespinosa@metagraphos.com
*
*/

include './client.php';

$id_array = array('id' => '1');
echo $client->getCourse($id_array);