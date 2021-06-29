<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Barangay Management System</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/kb-logo.ico" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/nav-time-date.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js">
    </script>
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
                    <!-- preview snapshot id=pic -->
                    <div class="drag-area" id="pic">

                        <img class="upload-icon" src="../img/icons/upload-90.png" alt="">

                    </div>
                    <form id="add_residents" action="add.php" method="post" enctype="multipart/form-data" data-parsley-validate="">
                        <div class="change-pic">
                            <div class="upload-btn-wrap">
                                <p> UPLOAD </p>
                                <input class="file-input" name="my_img" type="file">
                                <input type="hidden" name="default" value="image/default.png">
                            </div>
                            <input type="button" class="pic-btn" id="myBtn" value="TAKE PHOTO">
                            <input type="hidden" id="abc" name="camera" value="">
                            <?php include('modal_webcam.php'); ?>
                        </div>
                </div>
                <div class="infos-container">

                    <div class="infos">

                        <div class="add-info">
                            <h5>First Name:</h5>
                            <input type="text" name="first_name" required="">
                        </div>

                        <div class="add-info">
                            <h5>Middle Name:</h5>
                            <input type="text" name="mid_name" required="">
                        </div>

                        <div class="add-info">
                            <h5>Last Name:</h5>
                            <input type="text" name="last_name" required="">
                        </div>

                        <div class="add-info">
                            <h5>Suffix:</h5>
                            <input type="text" name="suffix">
                            <input type="hidden" name="default" value="None">
                        </div>

                        <div class="add-info">
                            <h5>Sex:</h5>
                            <select name="sex" id="sex" required>
                                <option value="" selected disabled hidden>--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="add-info">
                            <h5>Date of Birth:</h5>
                            <input type="date" name="date_of_birth" required>
                        </div>

                        <div class="add-info">
                            <h5>House Number:</h5>
                            <input type="text" name="house_number" id="home-address" required>
                        </div>

                        <div class="add-info">
                            <h5>Street:</h5>
                            <input type="text" name="street" id="home-address" required>
                        </div>

                        <div class="add-info">
                            <h5>Purok:</h5>
                            <select name="purok" id="prk" required>
                                <option value="" selected disabled hidden>--</option>
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
                            <input type="text" name="occ" required>
                        </div>

                        <div class="add-info">
                            <h5>Citizenship:</h5>
                            <input type="text" name="citi" required>
                        </div>

                        <div class="add-info">
                            <h5>Health Status:</h5>
                            <input type="text" name="health" required>
                        </div>

                        <div class="add-info">
                            <h5>Civil Status:</h5>
                            <select name="civil_status" id="civ-stat" required>
                                <option value="" selected disabled hidden>--</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                        </div>
                    </div>

                    <div class="infos">

                        <div class="add-info">
                            <h5>Voter Status:</h5>
                            <select name="voter_status" id="voter-stat" required>
                                <option value="" selected disabled hidden>--</option>
                                <option value="Registered">Registered</option>
                                <option value="Unregistered">Unregistered</option>
                            </select>
                        </div>

                        <div class="add-info">
                            <h5>Phone Number:</h5>
                            <input type="text" name="phone_number" required>
                        </div>

                        <div class="add-info">
                            <h5>Tel. Number:</h5>
                            <input type="text" name="tel_number">
                        </div>

                        <div class="add-info">
                            <h5>Email Address:</h5>
                            <input type="text" name="email" required data-parsley-type="email" data-parsley-trigger="keyup">
                        </div>

                        <div class="add-info">
                            <button class="save-btn" name="btn_save" onClick="savepicture()">SAVE</button>
                        </div>
                    </div>
                </div>

                </form>

            </div>
            </div>
        </section>
        </div>
    </main>
    <script type="text/javascript">
        jQuery('#add_residents').parsley();
    </script>

    <script src="../js/script.js"></script>
</body>

</html>