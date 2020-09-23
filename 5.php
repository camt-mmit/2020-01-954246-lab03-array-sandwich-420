<?php
/*ID: 602110199
Name: Cai Anmin(Sandwich)
Wechat: Sandwich*/
echo"Input number of grades: ";
fscanf(STDIN,"%d",$n);
echo"Input grade data from max score to min score\n";
for($i=1;$i<=$n;$i++){
	echo$i,": Input grade data (grade min_score) : ";
	fscanf(STDIN,"%s %f",$g,$ms);
	$array[]=$g;
	$array1[]=$ms;
}for($j=1;;$j++){
	echo"Input score ",$j," ('e' for end of data): ";
	fscanf(STDIN, "%s", $s);
	if($s=="e"||$s=="E"){
    break;
    }else{
		$array2[]=$s;
		for($h=0;$h<=count($array1);$h++){
		if($s>=$array1[$h]){
	echo"Grade is ",$array[$h],"\n";
		break;
	}
	}
}
}if($j>1){
	foreach($array2 as$sc){
		$sum+=$sc;
	}$avg=$sum/count($array2);
	foreach($array2 as$sc){
		$pow2=pow(($sc-$avg),2);
		$m+=$pow2;
	}echo"The average score for ";
	foreach($array2 as$j=>$sc){
			if($j>0&&$j<count($array2)-1){
				$d=", ";
			}elseif($j!=0&&$j=count($array2)-1){
				$d=" and ";
			}printf("%s%.2f",$d,$sc);
		}echo"\n";
printf("Average = %.2f\n",$avg);
printf("Variance = %.2f",$m/count($array2));
}else{
	echo"No data!!!";
}
?>