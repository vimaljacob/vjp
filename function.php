function check($string,$type,$minlength=1,$maxlength=2)
{
	$mg="bad";$go="ok";
	$stringlength=strlen($string);
	if($stringlength<=0||$stringlength<$minlength||$stringlength>$maxlength){$go="no";}
	$abc[0]='"';$a[1]="'";
    $i=0;
	if($go=="ok")
	{
    while($i<=1)
    {
       if (strpos($string,$a[$i])!== false) {$go="no";} 
	   $i++;
	}
	
		
	if($type=="onlystring"){
	if (preg_match('/^[A-Za-z]*$/', $string)) {$mg="good";}
	}
	elseif($type=="onlyint"){
	if (preg_match('/^[0-9]*$/', $string)) {$mg="good";}
	}
	elseif($type=="email"){
	if (preg_match('/^[_A-Za-z0-9-]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,3})$/', $string)) {$mg="good";}
	}
	elseif($type=="sanitise"){
	if (preg_match('/^[-A-Za-z0-9 ._@]*$/', $string)) {$mg="good";}
	}
	}
	return $mg;
}
//usage eg
$dude='dsfsd".sd -_fsdf';// use post ,get variables 
// email,sanitise,onlyint,onlystring are the available inputs( min and max length of the string ) 
if(check($dude,"sanitise","1","20")=="good"){echo"ok";}else{echo"not ok";}