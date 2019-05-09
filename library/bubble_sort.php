<?php
class bubble_sort{
	public $Arr = array();
	function bubble_sort(){ 
	$arr = $this->Arr;
    $size = sizeof($arr)-1;
    for ($i = $size; $i>=0; $i--) {
      for ($j = 0; $j<=($i-1); $j++)
         if ($arr[$j]>$arr[$j+1]) {
              $k = $arr[$j];
               $arr[$j] = $arr[$j+1];
                 $arr[$j+1] = $k;
    }
}
    echo "((((((((";
	print_r($this->Arr);
    echo "))))))))";	
	}
	
}
?>