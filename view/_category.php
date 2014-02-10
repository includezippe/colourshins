<ul style="list-style: none;">
	<li style="list-style: none;"><a href="http://<?php echo WWW;?>/category/1/1/">Категория 1</a></li>
	<li style="list-style: none;"><a href="http://<?php echo WWW;?>/category/2/1/">Категория 2</a></li>
	<li style="list-style: none;"><a href="http://<?php echo WWW;?>/category/3/1/">Категория 3</a></li>
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

echo '<p>';
for ($page = 1; $page <= $data['num_pages']; $page++){

	if ($page == $data['page']){
		echo '<strong>'.$page.'</strong> &nbsp;';
	}
	else{
		echo '<a href="http://'.WWW.'/category/'.$data['cat_id'].'/'.$page.'/">'.$page.'</a> &nbsp;';
	}

}
echo '</p>';

/*
echo '<pre>';
var_dump($data); // For debuging
echo '</pre>';
*/
?>