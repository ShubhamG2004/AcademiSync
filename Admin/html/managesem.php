<?php
    ob_start();
    include("header.php");
?>
<div class="container">
            <style>
                body{
                    background:linear-gradient(to bottom ,rgb(155, 165, 164),rgb(156, 181, 192)) ;
                }
                .form-group {
                    margin-bottom: 1rem;
                }
                
                form {
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    padding: 1rem;
                    margin-top: 2rem;
                    background-color:white;
                }
                
                button[type="submit"] {
                    background-color: #007bff;
                    border-color: #007bff;
                }
                
                button[type="submit"]:hover {
                    background-color: #0069d9;
                    border-color: #0062cc;
                }
                header{
                    font-size:25px;
                    color:red;
                    border-radius: 5px;
                    border: 1px solid #ccc;
                    margin-top:20px;
                    text-align:center;
                    font-weight:bold;
                    margin-bottom:15px;
                    background:white;
                }
                .table table-striped custom-table table-hover{
                    border: 1px solid #dee2e6;
                }
                tr:hover {
                    transform: scale(1.05);
                    transition: transform 0.2s ease-in-out;
                }
                td{
                    font-weight:bold;
                    color:black;
                }
                tr{
                    color:black;
                }

            
      </style>

        <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
            <header>Semester Details</header><a href="addsem.php">+Add Semester</a>
                <form method="post">
                <table class="table table-striped custom-table table-hover " style="background-color: white;">
                    <thead>
                        <tr>
                        <th>Sr No.</th>
                        <th>Semname</th>
                        <th>State</th>
            </tr>
            </thead>
            <tbody>
                <?php
$con = mysqli_connect("localhost", "root", "", "cms");
$sql = "SELECT * FROM `semlist`";
$res = mysqli_query($con, $sql);
$i = 1;
while($row = mysqli_fetch_assoc($res)){


?>
                <tr>
                <td><?php echo $i; ?></td>
                        <td><?php echo  $row['semname']; ?></td>
                        <td><input type="radio" name = "active" value="<?php echo  $row['semname'];?>" <?php if($row['status'] == "active") echo "checked"; ?> >Active</td>
            </tr>

            <?php $i++;} ?>
            </tbody>
            </table>
            <input type="submit" value="Submit">
            </form>
            </div>
            <?php

                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    $btnactive = $_POST['active'];
                    $sql = "SELECT * FROM semlist";
                    $res = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($res)){
                        if($row['semname'] == $btnactive){
                            $sql = "UPDATE `semlist` SET `status` = 'active' WHERE `semname` = '$btnactive'";
                            mysqli_query($con , $sql);
                        }
                        else{
                            $sql = "UPDATE `semlist` SET `status` = '' WHERE `semname` = '$btnactive'";
                            mysqli_query($con , $sql);
                        }
                    }
                    header("Location: managesem.php");
                    ob_end_flush();

                }

            ?>
        </div>
        </div>
    </div>
    <?php
    include("Footer.php");
?>