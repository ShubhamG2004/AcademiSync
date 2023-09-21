<?php
    include("header.php");
?>
<?php
    include("../database/db.php");
?>
<?php
         $nameErr="";
          if($_SERVER["REQUEST_METHOD"]=="POST")
          {
            if(empty($_POST["tname"]))
            {
              $nameErr="name is required";  
            }
            else
            {
                $name=test_input($_POST["tname"]);
                if(!preg_match("/^[a-zA-Z]*$/",$name))
                {
                    $nameErr="only characters and whitespaces are allowed";
                }
            }
          }
          function test_input($data)
          {
            $data=trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;
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
                
            .error
             {
                color: #FF0000;
            }


            </style>

            <div class="row">
                <div class="col-md-6 mx-auto">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"      method="post">
                    <center><h2>Insert subject</h2></center>
					<br>
					 
                    
                    <br>
                    <label>Department Name:</label>
                    <input type="text" name="department" id="department" >
                    
					
                    <br>
					<label>Year:</label>
                   
                    <select name="year" id="year" selected="year">
                    <option value="first">First_Year</option>
                   <option value="second">Second_Year</option>
                        <option value="third">Third_Year</option>
                    </select>
                    
                    <br>
					<label>first year:</label>
                    <select name="semister" id="semister">
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    </select>
                    <br>
                    <label>second year:</label>
                    <select name="semister" id="semister">
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                    </select>
                    <br>
                    <label>third year:</label>
                    <select name="semister" id="semister">
                    <option value="5th">5th</option>
                    <option value="6th">6th</option>
                    </select>
                   <br><br>
                    <label>1st sem:</label>
                    <select name="subject" id="subject">
                    <option value="phy">physics</option>
                    <option value="chem">chemistry</option>
                    </select>
                    <br><br>
                    <label>2nd sem:</label>
                    <select name="subject" id="subject">
                    <option value="m1">m1</option>
                    <option value="ITS">ITS</option>
                    </select>
                    <br>
                    <label>3rd sem:</label>
                    <select name="subject" id="subject">
                    <option value="cpr">1st</option>
                    <option value="2nd">2nd</option>
                    </select>

                    
                    <input type="submit" name="submit" id="submit" >
                </form>
                </div>
            </div>
         <?php
		$con = mysqli_connect("localhost", "root","","cms");
		$id=$_POST['id'];
		$tname=$_POST['tname'];
		$email=$_POST['email'];
		$no=$_POST['no'];
		$education=$_POST['education'];
		$designation=$_POST['designation'];
		$department=$_POST['department'];
		$photo=$_POST['photo'];

        
 
		$sql="insert into staff_details (id,teacher_name,email,phone_no,education,designation,department,photo)
		values('$id','$tname','$email','$no','$education','$designation','$department','$photo')";
		if(mysqli_query($con,$sql))
		{
			echo "successful";
		}
		else
		{
			echo "unsuccessful";
		}
    

 ?>
        

</div>
<?php
    include("Footer.php");
?>