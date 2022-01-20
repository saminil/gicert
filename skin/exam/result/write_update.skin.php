<?
$total = 0;
$count = $_POST[count];
for($i =0 ; $i < $count ; $i++) {
	$tmp=${"a".$i};
	$op .= $tmp."!&";


	$tmp1=${"a1".$i};
		$total = $total + $tmp1;
	$sc .= $tmp1."!&";

	$total = $sc + $total;
	
}
sql_query(" update $write_table set wr_5 = '$op', wr_6 = '$sc', wr_7 = '$wr_7', wr_good = '$total' where wr_id = '$wr_id' ");


?>

