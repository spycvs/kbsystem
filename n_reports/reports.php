<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Barangay Management System</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/kb-logo.ico" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/nav-time-date.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/ChartJS/Chart.js"></script>
    <script src="../js/ChartJS/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
</head>

<body>
    <main>
        <?php include('../navbar.php'); ?>

        <div class="residents-section">
        <div class="directory">
                <div class="header">
                    <h1>Reports</h1>
                    <button class="export_pdf_btn" onclick="saveAsPDF();" type="submit" name="export_pdf">
                        <img src="../img/icons/pdf-file.png" class="pdf-file"></img>
                        Export to PDF</button>

                <form action="export_excel.php" method="POST">
                    <button class="export_excel_btn" type="submit" name="export_excel">
                        <img src="../img/icons/excel.png" class="excel-file"></img>
                        Export to Excel</button>
                </form>
            </div>

            <div class="rcontent" id="chart-container">

                <div class="chart-container">
                  
                    <div class="gender_div">
                        <h3>Barangay Population Count by Gender</h3>
                        <canvas class="mygenderChart" id="genderChart"></canvas>
                    </div>

                    <div class="voters_div">
                        <h3>Barangay Population Count by Voter Status</h3>
                        <canvas id="VotersChart"></canvas>
                    </div>
                </div>

                <div class="gtable">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>CATEGORY</th>
                                <th>TOTAL</th>
                                <th></th>
                            </tr>
                        </thead>

                        <?php

        // SQL FOR Gender Population Count//
        $maleSqlChart =  mysqli_query($conn, "SELECT COUNT(id) as countM from residents where sex = 'Male'");
        $male_count = mysqli_fetch_array($maleSqlChart);

        $femaleSqlChart =  mysqli_query($conn, "SELECT COUNT(id) as countF from residents where sex = 'Female'");
        $female_count = mysqli_fetch_array($femaleSqlChart);

                        ?>
  
                            <tr>
                                <td>Male</td>
                                <td><?php echo $male_count['countM']; ?></td>
                            </tr>
                            <tr>
                                <td>Female</td>
                                <td><?php echo $female_count['countF'];?></td>
                            </tr>
                    </table>
                </div>

                <div class="vtable">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>CATEGORY</th>
                                <th>TOTAL</th>
                                <th></th>
                            </tr>
                        </thead>

                        <?php

        // SQL FOR Voter Population Count//
        $registeredVoters =  mysqli_query($conn,"SELECT COUNT(id) as registeredVotersCount from residents where voter_status = 'Registered' " );
        $registered_votersCount = mysqli_fetch_array($registeredVoters);

        $unregisteredVoters =  mysqli_query($conn,"SELECT COUNT(id) as unregisteredVotersCount from residents where voter_status = 'Unregistered' " );
        $unregistered_votersCount = mysqli_fetch_array($unregisteredVoters);

                        ?>
  
                            <tr>
                                <td>Registered</td>
                                <td><?php echo $registered_votersCount['registeredVotersCount']; ?></td>
                            </tr>
                            <tr>
                                <td>Unregistered</td>
                                <td><?php echo $unregistered_votersCount['unregisteredVotersCount'];?></td>
                            </tr>
                    </table>
                </div>
            </div>
        </section>
    </main>

    <?php include "../db_conn.php"; ?>
    <?php include "../n_reports/rqueries.php"; ?>
    <?php include "../n_reports/chart_gender.php"?>
    <?php include "../n_reports/chart_voters.php"?>

<!-- JavaScript Function for Exporting PDF File -->
    <script>
    function saveAsPDF() {
        html2canvas(document.getElementById("chart-container"), {
            onrendered: function(canvas) {
                var img = canvas.toDataURL();
                var doc = new jsPDF('l', 'pt', "a4");
                doc.addImage(img, 10, 10);
                doc.save('export-test.pdf');
            }
        });
    }
    </script>