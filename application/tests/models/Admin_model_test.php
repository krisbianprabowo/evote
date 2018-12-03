<?php
class Admin_model_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Admin_model');
        $this->obj = $this->CI->Admin_model;
    }

    public function test_tampilKandidat(){
    	$actual = $this->obj->tampilKandidat();
    	$expected = Array
						(
						    '0' => Array
						        (
						            'id_kandidat' => '1',
						            'nama' => 'Joko Widodo',
						            'tempat_lahir' => 'Surakarta',
						            'tanggal_lahir' => '1998-08-12',
						            'jenis_kelamin' => 'L',
						            'foto' => 'http://localhost/evote/assets/img/kandidat/jokowi.jpg1537914764'
						        ),

						    '1' => Array
						        (
						            'id_kandidat' => '2',
						            'nama' => 'Prabowo Subianto',
						            'tempat_lahir' => 'Jakarta',
						            'tanggal_lahir' => '1978-07-12',
						            'jenis_kelamin' => 'L',
						            'foto' => 'http://localhost/evote/assets/img/kandidat/prabowo.png1537914788'
						        )

						);
		$this->assertEquals($expected,$actual);
    }

    public function test_tambahPemilih(){
    	$d = Array ( 'nama' => 'wumBowo', 'tempat_lahir' => 'Samarinda' ,'tanggal_lahir' => '2018-10-15' ,'jenis_kelamin' => 'L' ,'address_eth' => '0xC80952529A1c2f0f2e648518d48213b1645f571E' ,'private_key' => 'f62211129e3d826b38ed8226331f7d0' );
    	$actual = $this->obj->tambahPemilih($d);
    	$expected = 1;
    	$this->assertEquals($expected,$actual);
    }


}
?>