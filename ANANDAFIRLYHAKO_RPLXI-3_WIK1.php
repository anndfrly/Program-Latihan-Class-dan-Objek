<?php 
	class Televisi
	{
		public $merk;

		public function nyalakan()
		{
			return 'Nyalakan Televisi'.$this->merk;
 		}
	}

	$laptop1 = new Televisi();
	$laptop1->merk = 'sharp';
	echo $laptop1->nyalakan();
 ?>