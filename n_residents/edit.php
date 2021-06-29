<?php 
            include "../db_conn.php";
            $id = $_GET['id'];
            $squery =  mysqli_query($conn,"SELECT * FROM `residents` WHERE id = $id");
            while ($row = mysqli_fetch_array($squery))
            {
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

                <a href="view-resident.php?id=<?php echo $id ?>">
                    <button class="back-btn">BACK</button>
                </a>
            </div>
            <div class="content">


                <div class="resident-profile">
                    <form method="post" enctype="multipart/form-data" action="update.php">
                </div>


                <div class="drag-area" id="pic">
                    <img src="image/<?php echo basename($row['img_url']);?>" alt="">
                    <input type="hidden" name="orig_pic" value="<?php echo basename($row['img_url']);?>">
                </div>
                <div class="change-pic">
                        <div class="upload-btn-wrap">                   
                                <p> UPLOAD </p>
                                <input class="file-input" name="my_img" type="file">
                                <input type="hidden" name="default" value="image/default.png">
                        </div> 
              <input type="button" class="pic-btn"id="myBtn" value="TAKE PHOTO">
              <input type="hidden" id="abc" name="camera" value="">
              <?php include('modal_webcam.php'); ?>
              </div> 
               
                

                <div class="infos-container">



                    <div class="infos">

                        <div class="add-info">
                            <h5>ID:</h5>
                            <p><?php echo $row['id']; ?></p>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        </div>

                        <div class="add-info">
                            <h5>First Name:</h5>
                            <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>">
                        </div>

                        <div class="add-info">
                            <h5>Middle Name:</h5>
                            <input type="text" name="mid_name" value="<?php echo $row['mid_name']; ?>">
                        </div>

                        <div class="add-info">
                            <h5>Last Name:</h5>
                            <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>">
                        </div>

                        <div class="add-info">
                            <h5>Suffix:</h5>
                            <input type="text" name="suffix" value="<?php echo $row['suffix']; ?>">
                        </div>

                        <div class="add-info">
                            <h5>Sex:</h5>
                            <select name="sex" id="sex" value="<?php echo $row['sex']; ?>">
                                <option value="<?php echo $row['sex']; ?>" selected hidden><?php echo $row['sex']; ?>
                                </option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="add-info">
                            <h5>Date of Birth:</h5>
                            <input type="date" name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>">
                        </div>



                        <div class="add-info">
                            <h5>House Number:</h5>
                            <input type="text" name="house_number" id="home-address"
                                value="<?php echo $row['house_number']; ?>">
                        </div>

                        <div class="add-info">
                            <h5>Street:</h5>
                            <input type="text" name="street" id="home-address" value="<?php echo $row['street']; ?>">
                        </div>

                        <div class="add-info">
                            <h5>Purok:</h5>
                            <select name="purok" id="prk" required>
                                <option value="<?php echo $row['purok']; ?>" selected hidden>
                                    <?php echo $row['purok']; ?></option>

                                <option value="Purok 1">Purok 1</option>
                                <option value="Purok 2">Purok 2</option>
                                <option value="Purok 3">Purok 3</option>
                                <option value="Purok 4">Purok 4</option>
                                <option value="Purok 5">Purok 5</option>
                                <option value="Purok 6">Purok 6</option>
                                <option value="Purok 7">Purok 7</option>
                                <option value="Purok 8">Purok 8</option>
                                <option value="Purok 9">Purok 9</option>
                                <option value="Purok 10">Purok 10</option>
                                <option value="Purok 11">Purok 11</option>
                                <option value="Purok 12">Purok 12</option>
                                <option value="Purok 13">Purok 13</option>
                            </select>
                        </div>

                        <div class="add-info">
                            <h5>Occupation:</h5>
                            <input type="text" name="occ" value="<?php echo $row['occupation']; ?>">
                        </div>

                        <div class="add-info">
                            <h5>Citizenship:</h5>
                            <input type="text" name="citi" value="<?php echo $row['citizenship']; ?>">
                        </div>

                        <div class="add-info">
                            <h5>Health Status:</h5>
                            <input type="text" name="health" value="<?php echo $row['health_status']; ?>">
                        </div>

                    </div>


                    <div class="infos">
                        <div class="add-info">
                            <h5>Civil Status:</h5>
                            <select name="civil_status" id="civ-stat">
                                <option value="<?php echo $row['civil_status']; ?>" selected hidden>
                                    <?php echo $row['civil_status']; ?></option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>

                        <div class="add-info">
                            <h5>Voter Status:</h5>
                            <select name="voter_status" id="voter-stat">
                                <option value="<?php echo $row['voter_status']; ?>" selected hidden>
                                    <?php echo $row['voter_status']; ?></option>
                                <option value="Registered">Registered</option>
                                <option value="Unregistered">Unregistered</option>
                            </select>
                        </div>

                        <div class="add-info">
                            <h5>Phone Number:</h5>
                            <input type="text" name="phone_number" value="<?php echo $row['phone_number']; ?>">
                        </div>

                        <div class="add-info">
                            <h5>Tel. Number:</h5>
                            <input type="text" name="tel_number" value="<?php echo $row['tel_number']; ?>">
                        </div>

                        <div class="add-info">
                            <h5>Email Address:</h5>
                            <input type="text" name="email" value="<?php echo $row['email']; ?>">
                        </div>

                        <button class="save-btn" name="btn_update" onClick="updatepicture()">SAVE</button>
                    </div>
                    </form>
                    <?php 
            } 
            ?>
                </div>
            </div>

            </div>
        </section>
        </div>
    </main>
    <script src="script.js"></script>
</body>

</html>