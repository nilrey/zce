test
<?php
function br(){
	echo '<br>';
}
function setTitle($title){
	echo '<hr width=100%><p><b>'.$title.'</b></p>';
}
function setErrorMessage($title){
	echo '<p style="color: Red; font-weight: bold">Function '.$title.' does not exists</p>';
}

function setFunction($title, $showError = false){
//	setTitle($title);
	$fileName = 'inc.'.$title.'.php';
	if(is_file($fileName)){
		include($fileName);
	}else if($showError){
		setErrorMessage($title);
	}

}

$showError = true;
$arFunctions = array(
//'addcslashes',
//'xml'
'practice'
);

foreach ($arFunctions as $func) {
	setFunction($func, $showError);
}

?>