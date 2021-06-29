<script>
var dash2ctx = document.getElementById("VotersChart");
var dash_myVotersChart = new Chart(dash2ctx, {
    type: 'pie',
    data: {

        labels: ["Registered", "Unregistered"],

        datasets: [{
            label: "",
            data: [

                <?php echo $registered_votersCount['registeredVotersCount']; ?>,
                <?php echo $unregistered_votersCount['unregisteredVotersCount']; ?>,


            ],

            backgroundColor: [
                'rgb(246, 66, 66)',
                'rgba(54, 162, 235)'
            ],

            borderColor: [
                'rgba(54, 162, 235)',
                'rgba(54, 162, 235)'

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