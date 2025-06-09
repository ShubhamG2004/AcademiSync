<?php  
    ob_start();  
    include("header.php");  
?>  
<div class="container">  
    <style>  
        :root {  
            --primary-color: #007bff;  
            --primary-hover: #0069d9;  
            --secondary-color: #f8f9fa;  
            --accent-color: #e9ecef;  
            --text-color: #212529;  
            --header-color: #dc3545;  
        }  
  
        body {  
            background: linear-gradient(to bottom, rgb(155, 165, 164), rgb(156, 181, 192));  
            min-height: 100vh;  
            padding-bottom: 2rem;  
        }  
  
        .container {  
            padding: 2rem;  
        }  
  
        .header {  
            font-size: 2rem;  
            color: var(--header-color);  
            border-radius: 8px;  
            border: 1px solid #dee2e6;  
            margin: 1.5rem 0;  
            text-align: center;  
            font-weight: 600;  
            padding: 1rem;  
            background: white;  
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);  
            position: relative;  
        }  
  
        .header a {  
            position: absolute;  
            right: 1rem;  
            top: 50%;  
            transform: translateY(-50%);  
            color: var(--primary-color);  
            text-decoration: none;  
            font-weight: 500;  
            transition: color 0.3s ease;  
        }  
  
        .header a:hover {  
            color: var(--primary-hover);  
        }  
  
        .semester-form {  
            background: white;  
            border: 1px solid #dee2e6;  
            border-radius: 8px;  
            padding: 2rem;  
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);  
        }  
  
        .table {  
            border-collapse: collapse;  
            width: 100%;  
            margin: 1.5rem 0;  
            background-color: white;  
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);  
        }  
  
        .table thead th {  
            background-color: var(--primary-color);  
            color: white;  
            font-weight: 600;  
            border-color: var(--primary-color);  
        }  
  
        .table th,  
        .table td {  
            border: 1px solid var(--accent-color);  
            padding: 0.75rem;  
            text-align: left;  
        }  
  
        .table tbody tr:nth-child(even) {  
            background-color: var(--secondary-color);  
        }  
  
        .table tbody tr:hover {  
            transform: scale(1.02);  
            transition: transform 0.2s ease-in-out, background-color 0.2s ease;  
            background-color: rgba(0, 123, 255, 0.05);  
        }  
  
        .form-group {  
            margin-bottom: 1.5rem;  
        }  
  
        button[type="submit"] {  
            background-color: var(--primary-color);  
            border-color: var(--primary-color);  
            padding: 0.75rem 1.5rem;  
            border-radius: 5px;  
            font-weight: 500;  
            transition: all 0.3s ease;  
            cursor: pointer;  
        }  
  
        button[type="submit"]:hover {  
            background-color: var(--primary-hover);  
            border-color: var(--primary-hover);  
            transform: translateY(-1px);  
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);  
        }  
  
        td {  
            font-weight: 400;  
            color: var(--text-color);  
        }  
  
        tr {  
            color: var(--text-color);  
        }  
  
        .custom-table {  
            transition: all 0.3s ease;  
        }  
    </style>  
  
    <div class="container">  
        <div class="row">  
            <div class="col-md-10 mx-auto">  
                <header class="header">Semester Details <a href="addsem.php">+Add Semester</a></header>  
                <form method="post" class="semester-form">  
                    <table class="table">  
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
                                    <td>  
                                        <input type="radio" name="active" value="<?php echo  $row['semname'];?>"   
                                               <?php if($row['status'] == "active") echo "checked"; ?>>  
                                        Active  
                                    </td>  
                                </tr>  
  
                                <?php $i++;} ?>  
                        </tbody>  
                    </table>  
                    <div class="text-center">  
                        <button type="submit" class="btn">Save Changes</button>  
                    </div>  
                </form>  
            </div>  
        </div>  
    </div>  
    <?php  
    include("Footer.php");  
    ?>  
</div>