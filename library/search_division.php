<?php
class search_division{
	public $Arr = Array();
	public $Search;
	public $division;
	public $Answer;
	function __construct(){
		$this->Arr;
		$this->Search;
		$this->division;
		$this->Answer;
	}
	function search_division(){
		$ArrLength= count($this->Arr);  // длина
		$Division = $this->division;
		$Arrremainder = $ArrLength % $Division; //остаток масива
        if($Arrremainder > 0){
		  static $ArrayWithoutResidue;
		  $ArrayWithoutResidue = $ArrLength - $Arrremainder;
		  echo "</br> Масив с отатком. Он равен = ".$Arrremainder." ячеек </br>";
		}
        $i = 0;
		while($i < $ArrayWithoutResidue){
			$Start = $i;
			$Finish = $Division + $Start;
			$i = $i + $Division;
			$Finish--;
			echo "</br>Прокрутили столько раз".$i."</br>" ;
			$StartArr = $this->Arr[$Start]; 
			$FinishArr = $this->Arr[$Finish];
			$Search = $this->Search;
			echo "</br> Ищу  = ".$Search." Старт = ".$StartArr." Конец = ".$FinishArr."</br>";
			if($StartArr < $Search and $FinishArr > $Search){echo "Тут!1"; for($I = 0; $I >= $FinishArr; $I++){}};   //Цыклы
			if($StartArr == $Search and $FinishArr > $Search){echo "Тут!2"; for($I = 0; $I >= $FinishArr; $I++){}};  //For
			if($StartArr < $Search and $FinishArr == $Search){echo "Тут!3"; for($I = 0; $I >= $FinishArr; $I++){}};  //Для каждого отрезка
		}		
		
	}
}
?>