<?php
class binary_search {
	public $Arr;
	public $Search;
	public $Answer;
	function __construct(){
		$this->Arr;
		$this->Search; // 11
		$this->Answer;
		}
		function binary_search(){			
			$search = $this->Search;           
			$elementArr = count($this->Arr); 
            $HalfElement = $elementArr/2;    
            $oneArr1 = $this->Arr[0];
			$twoArr1 = $this->Arr[$HalfElement];
			$oneArr2 = $this->Arr[$HalfElement];
		    $twoArr2 = $elementArr; 
		if($search >= $oneArr1  and $twoArr1 >= $search){
							
			for($i=0;$i<=$HalfElement;$i++){
				if($search==$i){
					$this->Answer = $i--;
					break;
				};
			}
			};
			if($search >= $oneArr2 and $twoArr2 >= $search){
			for($i=$oneArr2;$i<=$twoArr2;$i++){
				if($search==$i){
					$this->Answer = $i--;
					break;
				}
			}
			};
		
    
		
	

		}
};

//// All shit вот пример https://www.youtube.com/watch?v=4PP2g7hGqV0
?>