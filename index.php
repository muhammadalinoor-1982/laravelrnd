<?php 
include 'male.php';
include 'female.php';

$ali = new male();
$ali->voice();

class owner{

		private $chairman = "Rayhan";
		private $director = "roxy";
		private $managing_director = "Sajit pasha"; 

	protected function managment(){

		echo $this->managing_director;
	}

	protected function getname(){
		echo $this->chairman;
	}

	protected function setname($chairman){

		$this->chairman = $chairman;
		echo $this->chairman;
	}

}

class office extends owner{

	private $hr = "human resouce ";
	private $admin = "administration";
	private $finance = "finace";
	private $marketing = "marketing";
	private $selce = "selce";
	private $technical = "technical";

	public function department(){

		echo $this->technical;
	}

	public function office_managment(){

		echo $this->managment();
	}

}


$link3 = new office;
echo "<pre>";
print_r($link3->office_managment());
exit();


 ?>