<?php function hashtag($string){
	$htag="#";
	$arr=explode(" ",$string);
	$arrc=count($arr);
	$i=0;
	while($i<$arrc)
	{
		if(substr($arr[$i],0,1)===$htag){
			$arr[$i]="<a href='#'>".$arr[$i]."</a>";
		}
		$i++;
	}
	$string=implode(" ",$arr);
	return $string;
}
$tag=hashtag("hello #bestie");
//if(isset($_GET["tag"])){
	
	//$tag=preg_replace('#[^a-z0-9_]#i','',$tag);
	//tag is now ready and sanitised fro database queries here
	//$fulltag="#".$tag;
	/*foreach($collection as $c){
		if($fulltag==$c){
			
		}
	}*/
//}
echo $tag;?>