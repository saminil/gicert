<?
	if (!$_GET['start']||!$_GET['end']) die();

	$path = '../common.php';
	for($i=0; $i<5; $i++)
	{
		if(is_file($path))
		{
			include $path;
			break;
		}
		$path = '../'.$path;
	}

	$start = substr($_GET['start'], 0, 10);
	$end = substr($_GET['end'], 0, 10);

	$list = array();
	$rst = sql_query(" select * from {$write_table} where str_to_date(wr_1, '%Y-%m-%d') >= '$start' and str_to_date(wr_2, '%Y-%m-%d') <= '$end'; ");
	while($row = sql_fetch_array($rst))
	{
		$list[] = array(
			'textColor'=>'#FFF',
			'color'=>$row['wr_3'],
			'title'=>$row['wr_subject'],
			'start'=>$row['wr_1'],
			'end'=>$row['wr_2'],
			'url'=>get_pretty_url($bo_table, $row['wr_id'])
		);
	}

	echo json_encode($list);
?>