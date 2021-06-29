<?php include "../db_conn.php"; ?>

<?php

// SQL FOR Gender Population Count//
$maleSqlChart =  mysqli_query($conn, "SELECT COUNT(id) as countM from residents where sex = 'Male'");
$male_count = mysqli_fetch_array($maleSqlChart);

$femaleSqlChart =  mysqli_query($conn, "SELECT COUNT(id) as countF from residents where sex = 'Female'");
$female_count = mysqli_fetch_array($femaleSqlChart);


// SQL FOR Voter Population Count//
$registeredVoters =  mysqli_query($conn,"SELECT COUNT(id) as registeredVotersCount from residents where voter_status = 'Registered' " );
$registered_votersCount = mysqli_fetch_array($registeredVoters);

$unregisteredVoters =  mysqli_query($conn,"SELECT COUNT(id) as unregisteredVotersCount from residents where voter_status = 'Unregistered' " );
$unregistered_votersCount = mysqli_fetch_array($unregisteredVoters);

?>