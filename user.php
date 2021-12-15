<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $type_id=$_POST['type_id'];
    $color=$_POST['color'];
    $number_of_legs=$_POST['number_of_legs'];
    $remarks=$_POST['remarks'];

    $sql="insert into `animal` (name,type_id,color,number_of_legs,remarks)
    values('$name','$type_id','$color','$number_of_legs','$remarks')";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Data inserted successfully";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>name</label>
                <input type="text" class="form-control" 
                placeholder="Enter your name" 
                name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>type_id</label>
                <input type="type_id" class="form-control" 
                placeholder="Enter type_id" 
                name="type_id" autocomplete="off">
            </div>
            <div class="form-group">
                <label>color</label>
                <input type="text" class="form-control" 
                placeholder="Enter color" 
                name="color" autocomplete="off">
            </div>
            <div class="form-group">
                <label>number_of_legs</label>
                <input type="text" class="form-control" 
                placeholder="Enter number_of_legs" 
                name="number_of_legs" autocomplete="off">
            </div>
            <div class="form-group">
                <label>remarks</label>
                <input type="text" class="form-control" 
                placeholder="Enter remarks" 
                name="remarks" autocomplete="off">

            <button type="submit" class="btn
            btn-primary" name="submit">Submit</button>
        </form>
    </div>



</body>

</html>