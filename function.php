<?php 
/**
 * 
 */

//include_once('config.php');

/**
 * 
 */
class xcel
{

	
	public $nic=array();

	Public function import($file)
	{
		
		$conn=new mysqli("localhost","root","","php");
		//$db=getdbconnect();

		/**$sql="SELECT nic FROM user;";
		$result=$conn->query($sql);

		if($result->num_rows>0){
			while ($ro=$result->fetch_assoc()) {
				echo $ro["nic"]."<br>";
			}
		}**/
			
			$i=0;
			
			$count2=0;
			
			$sql="SELECT nic,salary FROM user;";
			

			$file = fopen($file, 'r');

			//if($file){
				while ($row=fgetcsv($file)) 
				{
					
					$result=$conn->query($sql);

					//echo $result->num_rows;
					//echo "################################<br><br>";

					$count=0;

					if ($result->num_rows>0) 
					{
						//echo "string<br><br>";
					    while ($ro=$result->fetch_assoc()) 
					    {

							//echo $row[0]."	csv<br><br>" ;
							
						
								if ($ro["nic"]==$row[0]) 
								{

									//echo "Found<br>";

									$val=$ro["salary"]+$row[1];
									//echo "salary is".$val."<br>";

									$sql1="UPDATE user SET salary= '$val' WHERE nic='$row[0]';";
									$result1=$conn->query($sql1);
									//echo $ro["nic"]."	table<br><br><br>";

									$count+=1;
								}
								else
								{
									//echo "Not found <br>";
									$count2+=1;			
								}

						}
						
					} 

					if($count==0){
							//echo "string<br>";
							$nic[]=$row[0];
						} 

				}

				echo "<br><br>" ;
			//}

			echo "Canno found these NIC Numbers<br>";
			echo $nic[0]."<br>".$nic[1];
			
			
			//echo $row[0]."<br>" ;

			//$value = "'". implode("','", $row)."'"; .$value.
			//$sql="INSERT INTO user(nic,salary) VALUES('".$row[0]."','".$row[1]."')";

			//$result = $conn->query($sql);

			



		

	}
}


	


?>

