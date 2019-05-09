<?php 
class Algoritm {
	    public $arr = Array();
	    public $Algo;
		public $AlgoInfo;
		public $Patern;
		public $PaternInfo;
	function __construct (){
		$this->arr[] = Array();
		$this->Algo;
		$this->AlgoInfo;
		$this->Patern;
		$this->PaternInfo;
		
	}	
	function Download() {
		$download = __DIR__; // Узнаём что за деректория
		$resault = $download . "\library\\"; // Показываем куда именно смотреть
		$lib = scandir($resault);
		$GodDownload = count($lib);
		if($GodDownload > 2){
			$fin = count($lib);
			$i=2;
			$I=0;
			while($i <= $fin){ 
				$v = $lib[$i]; 
				$v = substr($v,0,-4);
			    $this->arr[$I] = $v;
				$I++;
				$i++;
			}
			$i = 0;
			array_pop($this->arr);
			foreach($this->arr as $incl){
				echo "</br>";
				$load = $resault."".$incl.".php";
				include($load);
			}
			
		}
		
	}
}
/// Далее идёт тест механики
$MayLibral = new Algoritm;
$MayLibral->download();
$art = $MayLibral->arr;
$S = new bubble_sort;
$S->Arr = array(45,99,999,9999,99999,999999,9999999,999999999,9999999999);
$S->bubble_sort($S->Arr);
echo '<script src = "js.js"></script>';
$BS = new binary_search;
$Array = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$BS->Arr = $Array;
echo ",.,.,.,.,.,.,.</bs>";
$BS->Search = 7;
$BS->binary_search();
var_dump($BS->Answer);
echo "</br>///////!!!!!??/////</br>";
$G = new search_division;
$G->Arr = Array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21);
$G->division = 5;
$G->Search = 13;
$G->search_division();
