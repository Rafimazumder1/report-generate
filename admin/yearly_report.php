
<?php
include 'connection.php';

// Initialize the search parameter
$search_year = isset($_GET['search_year']) ? $_GET['search_year'] : '';

// Modify the SQL query to include a WHERE clause if a search year is provided
$sql = "SELECT * FROM MIS_YEARLY_COLLECTION";
if (!empty($search_year)) {
    $sql .= " WHERE SUBSTR(TO_CHAR(MONTH), 1, 4) = :search_year";
}

$parse = oci_parse($conn, $sql);

// Bind the search parameter if it exists
if (!empty($search_year)) {
    oci_bind_by_name($parse, ':search_year', $search_year);
}

oci_execute($parse);

$user_row = [];
while ($row = oci_fetch_assoc($parse)) {
    $user_row[] = $row;
}

oci_free_statement($parse);
?>









<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bangladesh Gas Fields School & College </title>
    <link rel="icon" href="img/bgfsclogo.jpeg" type="image/ico">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- datatable  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link href="https://nightly.datatables.net/buttons/css/buttons.dataTables.css?_=c6b24f8a56e04fcee6105a02f4027462.css" rel="stylesheet" type="text/css" />

    <style>
        /* for excel button design start */
        .dt-buttons {
            visibility: hidden;
        }

        .dt-buttons button:after {
            /* content: 'Download Excel';
        visibility: visible;
        background-color: #11c7e0;
        margin-left: 50px;
        padding: 5px;
        margin-top: 5px;
        color: white; */

            content: 'Download Excel';
            visibility: visible;
            background-color: #11c7e0;
            margin-left: 200px;
            padding: 10px;
            /* margin-top: -19px !important; */
            color: white;
            border-radius: 11px;
            font-size: 15px;
        }

        .btn .btn-info {
            margin-bottom: -35px !important;
            margin-left: 385px !important;
        }

        /* for excel button design start */
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'dashboard.php' ?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'topbar.php' ?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->


                    <div class="row mb-4">
    <div class="col-md-6">
        <form method="GET" action="">
            <div class="input-group">
                <input type="text" class="form-control" id="year_input" name="search_year" placeholder="Enter Year (e.g., 2024)" value="<?php echo htmlspecialchars($search_year); ?>">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>


                    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="background-color: #8468F4;;">
                            <!-- <h6 class="m-0 font-weight-bold text-primary text-center m-4">Suhrawardy Hall Alumni Association, BUET</h6> -->
                            <h4 class=" text-center m-4" style="color: white; font-weight: bold;">Bangladesh Gas Fields School & College</h4>
                            <h4 class=" text-center m-4" style="color: white; font-weight: bold;">Birashar, Brahmanbaria</h4>
                            <h6 class=" text-center m-4" style="color: white; font-weight: bold;">Yearly Collection Report</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                                    <thead style="color: #212121;">
                                        <tr>
                                            <th style="text-align: center;">Month</th>
                                            <th style="text-align: center;">ADMISSION_FEE</th>
                                            <th style="text-align: center;">Admission Form Fee </th>
                                            <th style="text-align: center;">Annual Magazine Fee </th>
                                            <th style="text-align: center;">Automation Fee </th>
                                            <th style="text-align: center;">Certification fee </th>
                                            <th style="text-align: center;">Class Test Fee </th>
                                            <th style="text-align: center;">Development Fee </th>
                                            <th style="text-align: center;">Exam Fees </th>
                                            <th style="text-align: center;">Form Fill-up Fee </th>
                                            <th style="text-align: center;">Half-yearly </th>
                                            <th style="text-align: center;">Identity Card Fee </th>
                                            <th style="text-align: center;">Laboratory Fee </th>
                                            <th style="text-align: center;">Milad Fee </th>
                                            <th style="text-align: center;">Miscellaneous Fee </th>
                                            <th style="text-align: center;">Monthly Fee </th>
                                            <th style="text-align: center;">Penalty Fee </th>
                                            <th style="text-align: center;">Poor Fund Fee </th>
                                            <th style="text-align: center;">Pre-test </th>
                                            <th style="text-align: center;">Registration Fee </th>
                                            <th style="text-align: center;">Result Processing Fee </th>
                                            <th style="text-align: center;">SMS Fee </th>
                                            <th style="text-align: center;">Scout Fee </th>
                                            <th style="text-align: center;">Sports Fee </th>
                                            <th style="text-align: center;">STUDENT_DIARY_FEE</th>
                                            <th style="text-align: center;">Syllabus Fee </th>
                                            <th style="text-align: center;">Testimonial Fee </th>
                                            <th style="text-align: center;">TRANSFER_CERTIFICATE_FEE</th>
                                            <th style="text-align: center;">TUITION_FEE</th>
                                            <th style="text-align: center;">WELFARE_FUND_FEE</th>
                                            <th style="text-align: center;">TOTAL_AMOUNT</th>
                                            <th style="text-align: center;">TOTAL_RECEIPT</th>
                                            <!-- <th style="text-align: center;">Channel </th>
                                            <th style="text-align: center;">Present Date </th>
                                            <th style="text-align: center;">Total Person </th>
                                            <th style="text-align: center;">Total Amount </th> -->



                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php

                                        for ($i = 0; $i < count($user_row); $i++) {

                                        ?>
                                        <tr style="color: black!important;">


                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['MONTH'] ?>

                                                </td>

                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['ADMISSION_FEE'] ?>

                                                </td>





                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['ADMISSION_FORM_FEE'] ?>

                                                </td>


                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['ANNUAL_MAGAZINE_FEE'] ?>

                                                </td>


                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['AUTOMATION_FEE'] ?>

                                                </td>

                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['CERTIFICATION_FEE'] ?>

                                                </td>

                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['CLASS_TEST_FEE'] ?>

                                                </td>

                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['DEVELOPMENT_FEE'] ?>

                                                </td>

                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['EXAM_FEES'] ?>

                                                </td>

                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['FORM_FILL_UP_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['HALF_YEARLY'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['IDENTITY_CARD_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['LABORATORY_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['MILAD_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['MISCELLANEOUS_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['MONTHLY_FEE'] ?>

                                                </td><td style="text-align: center;">

                                                    <?php echo $user_row[$i]['PENALTY_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['POOR_FUND_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['PRE_TEST_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['REGISTRATION_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['RESULT_PROCESSING_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['SMS_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['SCOUT_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['SPORTS_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['STUDENT_DIARY_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['SYLLABUS_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['TESTIMONIAL_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['TRANSFER_CERTIFICATE_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['TUITION_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['WELFARE_FUND_FEE'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['TOTAL_AMOUNT'] ?>

                                                </td>
                                                <td style="text-align: center;">

                                                    <?php echo $user_row[$i]['TOTAL_RECEIPT'] ?>

                                                </td>
                                                

                                                <!-- <td style="text-align: center;">
                                                    <a href="http://localhost:8080/social_welfare_du_demo/itbl.php?id=<?php echo ($user_row[$i]['MEM_ID']); ?>" 
                                                    class="btn btn-danger btn-sm">
                                                    Download PDF
                                                    </a>
                                                </td> -->


                                                



                                            </tr>


                                        <?php }
                                        ?>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->



            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- datatable start -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> -->

    <!-- excel starts  -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>


    <!-- using online scripts -->






    <script>
    $(document).ready(function() {
        $('#table_id').DataTable({
            dom: 'lBfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    text: 'Export to Excel',
                    title: function() {
                        var year = $('#year_input').val(); // Input theke year nite hobe
                        return 'YEAR - ' + (year || new Date().getFullYear()); // Default year hisebe current year dekhabe
                    },
                    customize: function(xlsx) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];
                        
                        // A1 cell header ke customize kora
                        var header = $('row c[r="A1"]', sheet); // A1 cell reference
                        
                        // Set bold and center alignment for the header
                        header.attr('s', '64'); // Excel style 64 for bold + center
                        header.css({
                            'text-align': 'center', // Center text horizontally
                            'font-weight': 'bold',  // Make the text bold
                            'font-size': '24pt',    // Optional: Adjust the font size if needed
                            'vertical-align': 'center' // Vertically center the text in the cell
                        });
                    }
                }
            ]
        });
    });
</script>





</body>

</html>