<ul style="list-style: none;">
	<li style="list-style: none;"><a href="http://<?php echo WWW;?>/category/1">Категория 1</a></li>
	<li style="list-style: none;"><a href="http://<?php echo WWW;?>/category/2">Категория 2</a></li>
	<li style="list-style: none;"><a href="http://<?php echo WWW;?>/category/3">Категория 3</a></li>
</ul>

<?php

/*echo $_SERVER['REQUEST_URI'];*/

foreach ($data['list'] as $invalue) {
	
	echo '
	<div>
		<h3>'.$invalue['id'].'.'.$invalue['name'].'</h3>
		<img src="'.$invalue['img'].'" style="width: 100px;">
		<div>
			<span>Диаметр: '.$invalue['caliber'].'мм</span>
			<br>
			<span>Производитель: '.$data['cat_name'].'</span>
		</div>
	</div>
	';

}

/*
echo '<pre>';
var_dump($data); // For debuging
echo '</pre>';*/

?>