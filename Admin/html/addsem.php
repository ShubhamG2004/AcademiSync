<?php
    ob_start();
    include("header.php");
?>
<?php
    include("../database/db.php");
?>
<?php
    //      $nameErr="";
    //       if($_SERVER["REQUEST_METHOD"]=="POST")
    //       {
    //         if(empty($_POST["tname"]))
    //         {
    //           $nameErr="name is required";  
    //         }
    //         else
    //         {
    //             $name=test_input($_POST["tname"]);
    //             if(!preg_match("/^[a-zA-Z]*$/",$name))
    //             {
    //                 $nameErr="only characters and whitespaces are allowed";
    //             }
    //         }
    //       }
    //       function test_input($data)
    //       {
    //         $data=trim($data);
    //         $data=stripcslashes($data);
    //         $data=htmlspecialchars($data);
    //         return $data;
    //       }
    //    ?>


   
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
                
            .error
             {
                color: #FF0000;
            }


            </style>

            <div class="row">
                <div class="col-md-6 mx-auto">
                <form method="post">
                    <center><h2>Insert Semester</h2></center>
					<br>
					 
                    <label>Select Winter/Summer:</label>
                    <select name="winter">
                        <option value="winter">Winter</option>
                        <option value="summer">Summer</option>
                    </select>
					
                    <br>
					<label>Year:</label>
                    <input type="number" name="year" id="year" >
                    <input type="submit" name="submit" id="submit" >
                </form>
                </div>
            </div>
         <?php
		if($_SERVER['REQUEST_METHOD'] == "POST"){
            $con = mysqli_connect("localhost", "root","","cms");
		$winter=$_POST['winter'];
		$year=$_POST['year'];
		$semname = $winter.$year;

        
 
		$sql="insert into semlist values('','$semname','')";
		mysqli_query($con,$sql);

        // $tablename1 = $semname."coursecurri";
        // $sql1 = "CREATE TABLE $tablename1 (
        //     id INT(11) AUTO_INCREMENT PRIMARY KEY ,
        //     name VARCHAR(255),
        //     pdf VARCHAR(255)
        // )";
        // mysqli_query($con, $sql1);
        
        $tablename2 = $semname."studentdetail";
        $sql2 = "CREATE TABLE $tablename2 (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            rollno VARCHAR(255),
            name VARCHAR(255),
            subject VARCHAR(1000)
        )";
        mysqli_query($con, $sql2);

        $tablename3 = $semname."teacher";
        $sql3 = "CREATE TABLE  $tablename3 (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            teacher_code VARCHAR(255),
            teacher_name VARCHAR(255),
            teacher_subject VARCHAR(255)
        )";
        mysqli_query($con, $sql3);

        // $tablename4 = $semname."timetable";
        // $sql4 = "CREATE TABLE $tablename4 (
        //     id INT(11) AUTO_INCREMENT PRIMARY KEY,
        //     name VARCHAR(255),
        //     pdf VARCHAR(255)
        // )";
        // mysqli_query($con, $sql4);

        $tablename4 = $semname."subject";
        $sql4 = "CREATE TABLE $tablename4 (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            subject_code VARCHAR(255),
            subject_name VARCHAR(255)
        )";
        mysqli_query($con, $sql4);

            header("Location: managesem.php");
            ob_end_flush();
        
        }
    

 ?>
        

</div>
<?php
include("Footer.php");
?>