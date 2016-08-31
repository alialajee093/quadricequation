<?php 

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];



$result='';
if($a==0) $result= 'has one root : x='.(-$c/$b);
$d = $b*$b-4*$a*$c;
if($d<0)
{
echo json_encode(array('result'=>'impossible'));
	
	}
	else{
$r = sqrt($d);


if($d==0) $result= 'has double root : x='.(-$b/2*$a);
if($d>0 &$a!=0) $result= 'has  2 roots : x1='.(-$b-$r/2*$a).' , x2='.(-$b+$r/2*$a);
echo json_encode(array('result'=>$result));
	
        }

?>
