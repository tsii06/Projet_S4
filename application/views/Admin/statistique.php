<?php $this->load->view('Admin/header'); ?>

<body class="bg-gradient-primary">

    <div class="container">
        <div>
    <canvas id="myChart"></canvas>
</div>
</div>
<script src="<?php echo base_url('assets/js/chart.js'); ?>"></script>
<script>
    const labels = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
    ];
    const data = {
        labels: labels,
        datasets: [{
            label: 'My first dataset',
            backgroundColor: [
                'rgba(255,99,132,0.2)',
                'rgba(54,162,235,0.2)',
                'rgba(255,206,86,0.2)',
                'rgba(75,192,192,0.2)',
                'rgba(153,102,255,0.2)',
                'rgba(255,159,64,0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54,162,235,1)',
                'rgba(255,206,86,1)',
                'rgba(75,192,192,1)',
                'rgba(153,102,255,1)',
                'rgba(255,159,64,1)'
            ],
            borderWidth: 1,
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    };
    const config = {
        type: 'bar',
        data: data,
        options: {}
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
    <!-- Core plugin JavaScript-->

    <!-- Custom scripts for all pages-->
    
