<?php
include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
<button class="btn btn-primary my-5"><a href="user.php" 
class="text-light">Add user</a>

</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">type_id</th>
      <th scope="col">color</th>
      <th scope="col">number_of_legs</th>
      <th scope="col">remarks</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>


<?php

$sql="Select * from `animal`";
$result=mysqli_query($con,$sql);
if($result){
    while( $row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $type_id=$row['type_id'];
        $color=$row['color'];
        $number_of_legs=$row['number_of_legs'];
        $remarks=$row['remarks'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$type_id.'</td>
        <td>'.$color.'</td>
        <td>'.$number_of_legs.'</td>
        <td>'.$remarks.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?
        updateid='.$id.'" class="text-light">Update</a></
        button>
        <button class="btn btn-danger"><a href="delete.php?
        deleteid='.$id.'"class="text-light">Delete</a></
        button>
    </td>
      </tr>';
    }
}

?>

    
  </tbody>
</table>
</div>

</body>
</html>