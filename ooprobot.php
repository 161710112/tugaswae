<DOCTYPE html>
<html>
<head>
<title></title>
<body>
<?php
 
 class robot {
 	public $suara;
 	public $berat;

 	public function set_suara($suara)
 	{
 		$this->suara = $suara;
 	}
 	public function get_suara()
 	{
 		return $this->suara;
 	}

 	public function set_berat($berat)
 	{
 		$this->berat = $berat;
 	}
 	public function get_berat()
 	{
 		return $this->berat;
 	}

 }
 $robot1 = new robot ;
  $robot1->set_suara ("ngik ngok");
  echo "suara robot : ".$robot1->get_suara().'<br>';

 $robot1 = new robot ;
  $robot1->set_berat ("30 kg");
  echo "berat robot : ".$robot1->get_berat ();



?>
	
</body>
</head>
</html>