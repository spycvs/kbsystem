<?php

include "../db_conn.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Barangay Management System</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/kb-logo.ico" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="../css/modal.css" />


    <script src="../js/nav-time-date.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="../js/jquery-paginate.js"></script>

</head>

<body>
    <main>
        <?php include('../navbar.php'); ?>

        <div class="residents-section">
            <div class="directory">
                <div class="header">
                    <h1>Resident Directory</h1>

                    <a href="new-resident.php">
                        <button class="add-resident-btn">
                            <svg fill="#f7f6fb" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12px" height="12px">
                                <path d="M12,2C6.477,2,2,6.477,2,12s4.477,10,10,10s10-4.477,10-10S17.523,2,12,2z M17,13h-4v4h-2v-4H7v-2h4V7h2v4h4V13z" />
                            </svg>
                            Add Resident
                        </button>
                    </a>
                </div>

                <script>
                    $(document).ready(function() {
                        $('#example').dataTable({
                            "bPaginate": false,
                            "bLengthChange": false,
                            "bFilter": true,
                            "bInfo": false,

                            "bAutoWidth": false
                        });
                    });
                </script>

                <div class="content">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FIRST NAME</th>
                                <th>MIDDLE NAME</th>
                                <th>LAST NAME</th>
                                <th>SEX</th>
                                <th>AGE</th>
                                <th>CIVIL STATUS</th>
                                <th>VOTER STATUS</th>
                                <th></th>
                            </tr>
                        </thead>

                        <?php

                        $squery =  mysqli_query($conn, "select * from residents");
                        while ($row = mysqli_fetch_array($squery)) {

                        ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['first_name'] ?></td>
                                <td><?php echo $row['mid_name'] ?></td>
                                <td><?php echo $row['last_name'] ?></td>
                                <td><?php echo $row['sex'] ?></td>
                                <?php

                                //Calculating age
                                $userDob = $row['date_of_birth'];

                                //Create a DateTime object using the user's date of birth.
                                $dob = new DateTime($userDob);

                                //We need to compare the user's date of birth with today's date.
                                $now = new DateTime();

                                //Calculate the time difference between the two dates.
                                $difference = $now->diff($dob);

                                //Get the difference in years, as we are looking for the user's age.
                                $age = $difference->y;
                                ?>
                                <td><?php echo $age ?></td>
                                <td><?php echo $row['civil_status'] ?></td>
                                <td><?php echo $row['voter_status'] ?></td>

                                <td><a href="view-resident.php?id=<?php echo $row['id'] ?>">
                                        <button class="view">VIEW</button></a>
                                </td>

                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<script>
    $('#example').paginate({
        limit: 12
    });
</script>