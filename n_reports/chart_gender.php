<script>
var ctx = document.getElementById("genderChart");
var mygenderChart = new Chart(ctx, {
    type: 'pie',
    data: {

        labels: ["Male", "Female"],

        datasets: [{
            label: "# of residents",
            data: [<?php  echo $male_count['countM']; ?>, <?php echo $female_count['countF']; ?>],

            backgroundColor: [
                'rgb(246, 66, 66)',
                'rgba(54, 162, 235)'
            ],

            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)'

            ],

            borderColor: "transparent"
        }]
    },
    options: {

responsive: false,
maintainAspectRatio: false,


legend: {
    position: 'bottom',

    display: true
}

},
});

</script>