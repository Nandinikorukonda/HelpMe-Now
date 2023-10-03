<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<?php 

    require_once("conn.php");
    $query = " select * from users";
    $result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css” rel=”nofollow” integrity=”sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm” crossorigin=”anonymous”>
	<style>
	
table {
  border-collapse: collapse;
  width: 100%;
}

tr, td ,th{
  border: 3px solid #123456;
  padding: 10px;
}

tr {
  background-color:  #a24553;
}
.btn{
     background-color: #4682b4;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.btn1{
     background-color: #800000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

}
.mem{
    font-family: "Times New Roman, Times, serif";
    color: #e63e62;
}

	</style>
</head>
<body>

	<a href="logout.php" class="btn">Logout</a>
	<h1 class="mem">Members of higher authorities</h1>

	<br>

	 <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <th> User Name </th>
                                <th>User ID</th>
                                <th> category </th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $user_name = $row['user_name'];
                                        $user_id = $row['password'];
                                        $category = $row['category'];

                            ?>
                                    <tr>
                                        <td><?php echo $user_name?></td>
                                        <td><?php echo $user_id?></td>
                                        <td><?php echo $category ?></td>
                                         <td> <input type="button" class="btn" value="edit"></td>
                                        <td> <input type="button" class="btn1" value="delete"></td>
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>