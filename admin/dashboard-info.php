<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Dashboard</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: white;
            position: fixed;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #495057;
            border-radius: 5px;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <?php include 'head.php'?>

 

    <?php include 'dashboard.php'?>






        
        <?php include 'script.php'?>


        

    <!-- Main Content -->
    <div class="content">
        <div class="container">
            <!-- <h2 class="mb-4">Dashboard Overview</h2> -->
            
            <!-- Dashboard Cards -->
            <div class="row">
            <div class="col-md-3">
                <div class="card bg-primary text-white p-3">
                    <h5><i class="fa fa-users"></i> 
                        <a href="student_report.php" class="text-white text-decoration-none">Student Wise Collection</a>
                    </h5>
                </div>
             </div>

                <div class="col-md-3">
                <div class="card bg-primary text-white p-3">
                    <h5><i class="fa fa-list"></i> 
                        <a href="class_report.php" class="text-white text-decoration-none">Class Wise Collection</a>
                    </h5>
                </div>
                </div>
                <div class="col-md-3">
                <div class="card bg-primary text-white p-3">
                    <h5><i class="fa fa-pie-chart"></i> 
                        <a href="month_report.php" class="text-white text-decoration-none">Monthly Collection</a>
                    </h5>
                </div>
                </div>
                <div class="col-md-3">
                <div class="card bg-primary text-white p-3">
                    <h5><i class="fa fa-pie-chart"></i> 
                        <a href="yearly_report.php" class="text-white text-decoration-none">Yearly Collection</a>
                    </h5>
                </div>
                </div>
            </div>

            <!-- Recent Activity Table -->
            <div class="mt-4">
                <h4>Bangladesh Gas Fields School & College</h4>
                <img src="img/bgfsc.jpg" alt="" height="500px" width="1000px">
            </div>

        </div>
    </div>

</body>
</html>
