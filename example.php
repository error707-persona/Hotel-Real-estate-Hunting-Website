<?php
session_start();
function convertHashtags($str){
	$regex="/#+([a-zA-Z0-9_]+)/";
	$str=preg_replace($regex,'<a href="example.php?tag=$1">$0</a>',$str);
return($str);
}?>
<html>
<body>
<form method="GET" name="form" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="hash" placeholder="put tags here"><br>
<input type="submit" name="go" value="submit"></form>
<?php
if(isset($_GET['go'])){
$string=$_GET['hash'];
$string=convertHashtags($string);
$_SESSION=['tag']=$string;
echo $string; 
if(isset($_SESSION['tag']))
$tag=preg_replace('#[^a-z0-9_]#i','',$_SESSION['tag']);
	//tag is now ready and sanitised fro database queries here
	$fulltag="#".$tag;
	/*foreach($collection as $c){
		if($fulltag==$c){
			
		}
	}*/

echo $fulltag;
}
?>

</body>
</html>