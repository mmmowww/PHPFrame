<?php 
class quick_sort {
	public $Arr = Array();
	function __construct(){
		$this->Arr;
	}
	function quick_sort(){ 
        $ARR = $this->Arr;
		$low;
		$high;
		$i = $low;                
        $j = $high;
        $middle = $ARR[ ( $low + $high ) / 2 ];  // middle — опорный элемент; в нашей реализации он находится посередине между low и high
        do {
            while($ARR[$i] < $middle) ++$i;  // ищем элементы для правой части
            while($ARR[$j] > $middle) --$j;  // ищем элементы для левой части
            if($i <= $j){           
                // перебрасываем элементы
                $temp = $this->Arr[$i];
                $ARR[$i] = $arr[$j];
                $ARR[$j] = $temp;
                // следующая итерация
                $i++; $j--;
            }
        } 
        while($i < $j);
        
        if($low < $j){
          // рекурсивно вызываем сортировку для левой части
          quickSort($ARR, $low, $j);
        } 

        if($i < $high){
          // рекурсивно вызываем сортировку для правой части
          quickSort($ARR, $i, $high);
        } 
    }
		
		
		
	}

?>
