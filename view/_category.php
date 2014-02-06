<?php
foreach ($data as $value) {
	echo '
		<div>
			<h3>'.$value['id'].'.'.$value['name'].'</h3>
			<br>
			<span>Диаметр: '.$value['caliber'].'мм</span>
			<br>
			<span>Номер категории категории: id.'.$value['cat_id'].'</span>
		</div>
	';
}
