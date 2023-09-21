<?php
    ob_start();
    include("header.php");
?>
<?php
    include("../database/db.php");
?>
<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM marks WHERE id='$id'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
    }
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
                form{
                    text-align:center;
                    align-items:center;
                    padding:10px;
                    
                }
                input{
                                       
                }
                h2{
                    font-size:30px;
                }


            </style>

            <div class="row">
                <div class="col-md-6 mx-auto">
                <form action="" method="post">
                    <center><h2>UPDATE</h2></center>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <label>Roll No:</label>
                    <?php echo $row['rollno']; ?>
                    <br>
                    <label>Student Name:</label>
                    <?php echo $row['name']; ?>
                    <br>
                    <label>Test1:</label>
                    <input type="text" name="test1" value="<?php echo $row['test1']; ?>">
                    <br>
                    <label>Test2</label>
                    <input type="text" name="test2" value="<?php echo $row['test2']; ?>">
                    <br>
                    <input type="submit" value="Update" onclick='redirectToCode()'>
                </form>
                </div>
            </div>
        </div>
        <?php
            if(isset($_POST['id'])) 
            {
                $id = $_POST['id'];
                $test1 = mysqli_real_escape_string($con, $_POST['test1']);
                $test2 = mysqli_real_escape_string($con, $_POST['test2']);
                $sql = "UPDATE marks SET test1='$test1', test2='$test2' WHERE id='$id'";
                mysqli_query($con, $sql);
                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    header("Location: marks.php");
                    ob_end_flush();
                }
            }
            mysqli_close($con);
            
        ?>
</div>
