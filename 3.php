<?php
/*ID: 602110199
Name: Cai Anmin(Sandwich)
Wechat: Sandwich*/
echo"Input number of data: ";
fscanf(STDIN,"%d",$n);
for($i=1;$i<=$n;$i++){
	echo"Input score ",$i,": ";
	fscanf(STDIN,"%f",$a[]);
}foreach($a as$s){
	$sum+=$s;
	}echo"The average score for ";
foreach($a as$j=>$s){
		if($j>0&&$j<count($a)-1){
			$d=", ";
		}elseif($j!=0&&$j=count($a)-1){
			$d=" and ";
		}printf("%s%.2f",$d,$s);
}printf(" = %.2f",$sum/count($a));
?>