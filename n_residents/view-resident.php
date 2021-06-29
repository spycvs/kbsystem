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
    <script src="../js/nav-time-date.js"></script>
</head>

<body>
    <main>
        <?php include('../navbar.php'); ?>
        <section>
            <div class="header">
                <h1>Resident Profile</h1>
                <a href="residents.php">
                    <button class="back-btn">Back</button>
                </a>
            </div>
            <div class="content">

                <div class="resident-profile">

                    <div class="infos">
                        
                        <?php
                        $id = $_GET['id'];
                        $squery =  mysqli_query($conn, "select * from residents where id = $id");
                        while ($row = mysqli_fetch_array($squery)) {
                        ?>

                            <form method="post">
                                <div class="profile-pic">
                                    <img src="image/<?php echo basename($row['img_url']) ?>" alt="">
                                </div>
                                <div class="view-info">
                                    <h5>ID:</h5>
                                    <h6><?php echo $row['id'] ?></h6>
                                </div>

                                <div class="view-info">
                                    <h5>First Name:</h5>
                                    <h6><?php echo $row['first_name'] ?></h6>
                                </div>

                                <div class="view-info">
                                    <h5>Middle Name:</h5>
                                    <h6><?php echo $row['mid_name'] ?></h6>
                                </div>

                                <div class="view-info">
                                    <h5>Last Name:</h5>
                                    <h6><?php echo $row['last_name'] ?></h6>
                                </div>

                                <div class="view-info">
                                    <h5>Suffix:</h5>
                                    <h6><?php echo $row['suffix'] ?></h6>
                                </div>

                                <div class="view-info">
                                    <h5>Sex:</h5>
                                    <h6><?php echo $row['sex'] ?></h6>
                                </div>

                                <div class="view-info">
                                    <h5>Date of Birth:</h5>
                                    <h6><?php echo $row['date_of_birth'] ?></h6>
                                </div>

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
                                $ages = $difference->y;
                                ?>

                                <div class="view-info">
                                    <h5>Age:</h5>
                                    <h6><?php echo $ages ?></h6>
                                </div>

                                <div class="view-info">
                                    <h5>House Number:</h5>
                                    <h6><?php echo $row['house_number'] ?></h6>
                                </div>

                                <div class="view-info">
                                    <h5>Street:</h5>
                                    <h6><?php echo $row['street'] ?></h6>
                                </div>

                                <div class="view-info">
                                    <h5>Purok:</h5>
                                    <h6><?php echo $row['purok'] ?></h6>
                                </div>
                                <div class="view-info">
                                    <h5>Occupation:</h5>
                                    <h6><?php echo $row['occupation'] ?></h6>
                                </div>

                                <div class="view-info">
                                    <h5>Citizenship:</h5>
                                    <h6><?php echo $row['citizenship'] ?></h6>
                                </div>
                                <div class="view-info">
                                    <h5>Health Status:</h5>
                                    <h6><?php echo $row['health_status'] ?></h6>
                                </div>

                                <div class="view-info">
                                    <h5>Civil Status:</h5>
                                    <h6><?php echo $row['civil_status'] ?></h6>
                                </div>

                    </div>



                    <div class="infos">

                        <div class="view-info">
                            <h5>Voter Status:</h5>
                            <h6><?php echo $row['voter_status'] ?></h6>
                        </div>

                        <div class="view-info">
                            <h5>Phone Number:</h5>
                            <h6><?php echo $row['phone_number'] ?></h6>
                        </div>

                        <div class="view-info">
                            <h5>Tel. Number:</h5>
                            <h6><?php echo $row['tel_number'] ?></h6>
                        </div>

                        <div class="view-info">
                            <h5>Email Address:</h5>
                            <h6><?php echo $row['email'] ?></h6>
                        </div>

                        <div class="view-info">

                        </div>
                    </div>
                    </form>

                    <div class="residents-btns">
                        <a href="edit.php?id=<?php echo $row['id'] ?>">
                            <button class="edit-btn">EDIT</button>
                        </a>

                        <!-- generate cert -->
                        <button class="generate-btn" id="generate" style=" display:none">Create Certificate</button>
                        <?php include('modal.php'); ?>

                        <!-- delete residents -->
                        <button class="delete-btn" id="delete">DELETE</button>
                        <?php include('modal.php'); ?>


                    <?php
                        }
                    ?>
                    </div>

                </div>
            </div>


        </section>
        </div>
    </main>
</body>

</html>