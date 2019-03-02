 <?php
 $conn = mysqli_connect('localhost','root','','chatlist');
 $select = "SELECT * FROM chatdata ORDER BY ID DESC";
 $query = mysqli_query($conn,$select);
 $result = array();
 while ($row = mysqli_fetch_assoc($query)) {
 	$result[]=$row;
 }
 echo json_encode($result);

?>



