<DOCTYPE html>
<html>
<head>
<title></title>
<body>
<?php
 
 class ayam {
 	public $kaki ;
 	public $sayap ;
 	public $paruh ;
 	public $mata ;
 	public $suara ;

 	public function set_kaki($kaki)
 	{
 		$this->kaki = $kaki;
 	}
 	public function get_kaki()
 	{
 		return $this->kaki;
 	}

 	public function set_sayap($sayap)
 	{
 		$this->sayap = $sayap;
 	}
 	public function get_sayap()
 	{
 		return $this->sayap;
 	}
 	public function set_paruh($paruh)
 	{
 		$this->paruh = $paruh;
 	}
 	public function get_paruh()
 	{
 		return $this->paruh;
 	}

 	public function set_mata($mata)
 	{
 		$this->mata = $mata;
 	}
 	public function get_mata()
 	{
 		return $this->mata;
 	}
 	public function set_suara($suara)
 	{
 		$this->suara = $suara;
 	}
 	public function get_suara()
 	{
 		return $this->suara;
 	}

 }
 $ayam1 = new ayam ;
  $ayam1->set_kaki (2);
  echo "".$ayam1->get_kaki().'<br>';

  $ayam1 = new ayam ;
  $ayam1->set_sayap (2);
  echo "".$ayam1->get_sayap().'<br>';

 $ayam1 = new ayam ;
  $ayam1->set_paruh (1);
  echo "".$ayam1->get_paruh().'<br>';
 
  $ayam1 = new ayam ;
  $ayam1->set_mata (2);
  echo "".$ayam1->get_mata().'<br>';

 $ayam1 = new ayam ;
  $ayam1->set_suara (1);
  echo "".$ayam1->get_suara ();



?>
<br>
<?php
class bebek {
 	public $kaki = 2;
 	public $sayap = 2;
 	public $paruh = 1;
 	public $mata = 2;
 	public $suara = 'ong ong ong';

 }
 $bebek1 = new bebek ;

 echo 'bebek berjalan menggunaka :' .$bebek1->kaki.'<br>';
 echo 'dan mempunyai sayap :' .$bebek1->sayap.'<br>';
 echo 'dan mempunyai paruh :' .$bebek1->paruh.'<br>';
 echo 'dan mempunyai mata :' .$bebek1->mata.'<br>';
 echo 'bagaimana suara ayam :' .$bebek1->suara.'<br>';

 ?>
 <br>
 <?php 
 class angsa {
 	public $kaki = 2;
 	public $sayap = 2;
 	public $paruh = 1;
 	public $mata = 2;
 }
 $angsa1 = new angsa ;

 echo 'angsa berjalan menggunaka :' .$angsa1->kaki.'<br>';
 echo 'dan mempunyai sayap :' .$angsa1->sayap.'<br>';
 echo 'dan mempunyai paruh :' .$angsa1->paruh.'<br>';
 echo 'dan mempunyai mata :' .$angsa1->mata.'<br>';

?>
<br>
<?php
class domba {
 	public $kaki = 4;
 	public $telinga = 2 ;
 	public $hidung = 1;
 	public $mata = 2;
 	public $suara = 'mbe mbe mbe';

 }
 $domba1 = new domba ;

 echo 'domba berjalan menggunaka :' .$domba1->kaki.'<br>';
 echo 'dan mempunyai telinga :' .$domba1->telinga.'<br>';
 echo 'dan mempunyai hidung :' .$domba1->hidung.'<br>';
 echo 'dan mempunyai mata :' .$domba1->mata.'<br>';
 echo 'bagaimana suara domba :' .$domba1->suara.'<br>';
	
	

?>
<br>
<?php
class anjing {
 	public $kaki = 4;
 	public $telinga = 2;
 	public $hidung = 1;
 	public $mata = 2;
 	public $suara = 'gog gog gog';

 }
 $anjing1 = new anjing ;

 echo 'anjing berjalan menggunakan :' .$anjing1->kaki.'<br>';
 echo 'dan mempunyai telinga :' .$anjing1->telinga.'<br>';
 echo 'dan mempunyai hidung :' .$anjing1->hidung.'<br>';
 echo 'dan mempunyai mata :' .$anjing1->mata.'<br>';
 echo 'bagaimana suara anjing :' .$anjing1->suara.'<br>';

 ?>
</body>
</head>
</html>