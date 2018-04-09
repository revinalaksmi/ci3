<?php
/**
*  
*/
class Modele extends CI_Model
{
	public function getInformation(){
		$data=array(
				'name'=>array('firstname'=> "Revina",'lastname' => "Laksmi"),
				'address'=>"Malang",
				'email'=>"revinaaniver@gmail.com",
				'song'=>array('a'=>"Mic Drop - BTS",'b'=>"Bad Boy - RV",'c'=>"Good Boy - BigBang",'d'=>"Peek a Boo - RV")
			);
		return $data;
	}
}
?>