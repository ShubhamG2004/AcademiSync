<?php
session_start();
?>
<?php
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
            <header>Department Details</header><a href="addDept.php">+Add Department</a>
            <table class="table table-striped custom-table table-hover " style="background-color: white;">
                <thead>
                <tr>
				    <th>Action</th>
                     <th>ID</th>
                    <th>department</th>
                    <th>HOD</th>
					<th>description</th>
                </tr>
                </thead>
                <tbody>
               
               
                <?php
                $user=$_SESSION['user'];
                $pass=$_SESSION['pass'];
                echo $user;
                echo $pass;
                 $con = mysqli_connect("localhost", "root", "", "cms");
                 

                    $sql = "SELECT * FROM department_details";
                    $result = mysqli_query($con, $sql);
                    
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        echo "<tr>";
                        echo "<td>
                        <a href='edit_department.php?id=" . $row['id'] . "'onclick='return confirmEdit();'>
                            <img src='../assets/img/favicon/edit.png' alt='edit' width='20px'>
                            
                        </a>
                        <a href='department_details.php?id=" . $row['id'] . "'onclick='return confirmDelete();'>
                            <img src='../assets/img/favicon/delete.png' alt='Delete' width='20px'>
                        </a>
                      </td>";;
                       
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['department'] . "</td>";
                        echo "<td>" . $row['HOD'] . "</td>";
						echo "<td>" . $row['description'] . "</td>";
						
                        echo "</tr>";
                    }
                    mysqli_close($con);
                ?>
                <script>
                    function confirmEdit() {
                    return confirm("Are you sure you want to edit this record?");
                }
                function confirmDelete() {
                    return confirm("Are you sure you want to delete this record?");
                }
                </script>
                </tbody>
            </table>
            <?php
                $con = mysqli_connect("localhost", "root", "", "cms");
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "DELETE FROM department_details WHERE id='$id'";
                    mysqli_query($con, $sql);
                }
                mysqli_close($con);
            ?>
            </div>
        </div>
        </div>
    </div>
    <?php
    include("Footer.php");
?>
    