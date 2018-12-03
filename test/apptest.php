<?php
class AppTest extends PHPUnit_Framework_Testcase{

/**
* @covers App::cek
*/
public function testMuda(){
require "../application/controllers/Pilihkandidat.php";
$app = new Pilihkandidat();
}
}
?>