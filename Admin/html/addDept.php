<?php
    include("header.php");
?>
<?php
    include("../database/db.php");
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
                    <center><h2>Insert Department</h2></center>
					<br>
                    <br>
                    <table border="2" align="center" cellspacing="20px" cellpadding="10px">
                    <tr>
                    <th><label>ID  :</label></th>
                    <td><input type="number" name="id" id="id" ></td>
                    </tr>
                    <tr>
                    <th><label>Department :</label></th>
                    <td><input type="text" name="department" id="department" required></td>
                    </tr>
                    <tr>
					<th><label>HOD :</label></th>
                    <td><input type="text" name="HOD" id="HOD" required></td>
                    </tr>
                    <tr>
                    <th><label>Description :</label></th>
                    <td><input type="text" name="description" id="description" required></td>
                    </tr>
                     <tr>                                                                 
                   <th> <input type="submit"  ><a herf="department_details.php"></a></th>
                     </tr>
                    </table>
                </form>
                </div>
            </div>
       <?php

		$con = mysqli_connect("localhost", "root","","cms");
		$id=$_POST['id'];
		$department=$_POST['department'];
		$HOD=$_POST['HOD'];
		$description=$_POST['description'];

        //validation
       
		$sql="insert into department_details (id,department,HOD,description) values('$id','$department','$HOD','$description')";
		mysqli_query($con,$sql);
		
    

 ?>
        

</div>
<?php
    include("header.php");
?>