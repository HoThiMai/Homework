<?php
$server = "localhost";
$user = "root";
$password ="";
$dbName = "imagemanagement";
$db = new mysqli($server, $user, $password, $dbName);
$sql = "SELECT * from image";
  $result = $db->query($sql)->fetch_all() ;
?>
<!DOCTYPE html>
<html>
<style type="text/css">
.line1{
    display: flex;
    width: 300px;
    justify-content: space-between;
    margin-left: 380px;
    text-align: center;
    align-items: center;
    border-style: solid;
    border-color: black;
    color: black;
}
.line2{
		display: flex;
		width: 300px;
		justify-content: space-between;
		margin-left: 385px;
		color: black;
	}
img{
  width:200px;
  height:200px;
}
	}
</style>
<body>
<div class="line2">
		<h3>Id</h3>
		<h3>Image</h3>
	</div>
<form method="post">
<?php for($i = 0; $i < count($result); $i++)
      	{ 
       ?>
       <div class="line1">
            <h3><?php echo $result[$i][0] ?></h3>
            <h3><img src="<?php echo $result[$i][1]; ?>"></h3>
        </div>
        <?php
        }          
       ?>
</form>
</body>
</html>
