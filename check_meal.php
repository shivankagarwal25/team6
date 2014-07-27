<?php
if(isset($_POST['submit']))
 { 
    $array_ingredient=array(17,19,21,20,18,17,23,3,14,1,1,10);
	$array_count=array(0,0,0,0,0,0,0,0,0,0,0,0);
    $conn=mysqli_connect("localhost","root","cfg2014!","team6");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                      }
                  else
				 { 
				  //echo "123";
				  $ch=$_POST['check'];
				  
				  
				  $c=1;
				  $r = 0;
				  while(isset($c))
				  {
					$c=$_POST["check[".$r."]"];
					$r++;
					echo $c;
				  }
				  
				  
				  for($i=0;$i<$num;$i++)
				  {
				     echo "hi"; 
				     //echo $ch[];
				  }
				  }
				 /* 
				   $temp="SELECT * FROM menu;";
				   $result=mysqli_query($conn,$temp);
                   while($row = mysqli_fetch_array($result))
				   {
				     
				   }
				  }
                 // $temp="SELECT * FROM ingredients;";
				  $temp="SELECT * FROM menu;";
				  $result=mysqli_query($conn,$temp);
                  while($row = mysqli_fetch_array($result))
				  {
				    while( 
				  }
       }
	              
	else
    {
	  header("location:invalid.php");
    }
	 
 }*/

}

?>
