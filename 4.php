<?php
/*ID: 602110199
Name: Cai Anmin(Sandwich)
Wechat: Sandwich*/
for($i=1;;$i++){
    echo "Input score ",$i," ('e' for end of data): ";
    fscanf(STDIN,"%s",$e);
    if($e=="e"||$e=="E"){
    break;
    }else{
        $a[]=$e;
    }
}if($i>1){
    foreach($a as$s){
        $sum+=$s;
        }echo"The average score for ";
foreach($a as$j=>$s){
		if($j>0&&$j<count($a)-1){
            $d=", ";
		}elseif($j!=0&&$j=count($a)-1){
            $d=" and ";
		}printf("%s%.2f",$d,$s);
}printf(" = %.2f",$sum/count($a));
}else{
    echo"No data!!!";
}
?>