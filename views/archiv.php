<h3>Briefarchiv</h3>
<form id="form" method="post" action="" style="display:none;">
	<input type="hidden" id="start" name="start" value="archiv">
	<input type="hidden" id="briefe" name="briefe" value="">
</form>
<ul>
<?php
if(isset($_POST['briefe'])){
	$dir = $_POST['briefe'];
	$inhalt = scandir('data/'.$dir);
	echo "Briefe für Zeitraum: ".$dir;
	foreach($inhalt as $value){
		if(strlen($value)>3){
			$value = substr($value, 0, -4);
			echo "<li><a href='?file=data/$dir/$value.pdf'>$value</a></li>";
		}
	}
}
else{
	$inhalt = scandir('data');
	echo "Wählen Sie Zeitraum: ".$dir;
	foreach($inhalt as $value){
		if(strlen($value)>3){
			echo "<li><a href='#' onclick='dirInhalt(\"$value\")'>$value</a></li>";
		}
	}
}
?>
</ul>
<script>
/* отправка формы для сканирования папки с файлами писем */
function dirInhalt(item){
	event.preventDefault();
	document.getElementById('briefe').value = item;
	document.getElementById('form').submit();
}
</script>