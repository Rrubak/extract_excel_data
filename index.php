<?php 


    require('php-excel-reader/excel_reader2.php');

    require('SpreadsheetReader.php');
	$file_path = "test.xlsx";
    $Reader = new SpreadsheetReader($file_path);
	    foreach ($Reader as $Row)
	    {
	    	$count = count($Row);
	    	$final_data[] = $Row;
	    	
		}
		for ($i = 0,$k= 0;$i < $count;$i++) { 
			for ($j=0;$j <= 18; $j++) {
				$data[$final_data[$k][$i]][$j] = $final_data[$j][$i]; 
				unset($data[$final_data[$k][$i]][0]);
			}
		}
		echo "<pre>";
		print_r($data);