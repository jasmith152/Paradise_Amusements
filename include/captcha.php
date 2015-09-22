<?php
// destroy the session
function captcha(){ 
	$database = "naturmls_captcha";
	$username = "naturmls_captcha";
	$password = "cTBQck87Tm";
	$table = 'captcha';
	//connect to database
	include ('dbconn.php');
	
	//Set Query to get total number of coordinates in DB - sql1
	if($sql1 = $dbcnx->query('SELECT COUNT(*) FROM '.$table))
	{
		$max = $sql1->fetchColumn();
		$min = 1;
		//create table
		echo "<table id='table_format' align='center' width='100%' border='0' cellspacing='3' cellpadding='3' style='color:#000'>";
		echo "<tr>";
		echo "<td align='left'><em>* To reduce SPAM, please answer the question below.</em></td>";
		echo "</tr>";
		//get a random number
		$id_number = rand($min,$max);
		//Set Query to get coordinates - sql2
		if($sql2 = $dbcnx->query("SELECT id,question,answer FROM ".$table." WHERE id=".$id_number.""))
		{
			//display results
			$row = $sql2->fetch(PDO::FETCH_ASSOC);
			if(!empty($row)){
				echo "<span style='color:#000'>query pulled no info</span><br>";
				echo "random number ".$id_number;
			}else{
			echo "<tr align='left'>";
			echo "<td>".$row['question']."</td>";
			echo "<td align='left'><input type='text' size='10' name='user_answer' /></td>";
			echo "<input type='hidden' name='answer' value=".$row['answer'].">";
			echo "</tr>";	
			}
		}
		else
		{
			echo "problem with query: $sql2 = $dbcnx->query(SELECT id,question,answer FROM .$table.coordinates WHERE id=.$id_number.)";
		}
		echo "</table>";
	}
	else
	{
		echo "problem with query: $sql1 = $dbcnx->query('SELECT COUNT(*) FROM $table')";
	}
}
?>