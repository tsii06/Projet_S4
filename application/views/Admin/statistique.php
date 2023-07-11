<?php $this->load->view('Admin/header'); ?>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Total Compte</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $prixTotal; ?> ARIARY</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Depot En attente</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $depotTotal; ?> Ariary</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <div>
            <div class="row">
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="text-primary font-weight-bold m-0">Rapport Client Prix</h6>
                            <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button"></button>
                            <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">                            
                            </div>
                                    </div>
                         </div>
                                <div class="card-body">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
              
                    </div>
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="text-primary font-weight-bold m-0">Revenue Sources</h6>
                        <div class="dropdown no-arrow">
                            <button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button">
                                <i class="fas fa-ellipsis-v text-gray-400"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="chart"></canvas>
                    </div>
                </div>
            </div>
        </div>

<?php 
    $l=array();
    $l[0]=$tranche1;
    $l[1]=$tranche2;
    $l[2]=$tranche3;
    $l[3]=$tranche4;
    $l[4]=$tranche5;
    $l[5]=$tranche6;

    ?>
 

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Données du graphique
            const data = {
                labels: ['Gold', 'Simple'],
                datasets: [{
                    label: '',
                    backgroundColor: ['#4e73df', '#1cc88a'],
                    borderColor: ['#ffffff', '#ffffff'],
                    data: <?php echo json_encode($l) ?>
                }]
            };

            // Options du graphique
            const options = {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                title: {}
            };

            // Configuration du graphique
            const config = {
                type: 'doughnut',
                data: data,
                options: options
            };

            // Création du graphique
            const myChart = new Chart(document.getElementById('chart'), config);
        });
    </script>



<script src="<?php echo base_url('assets/js/chart.js'); ?>"></script>

<script>
const labels = ['10000', '20000', '30000', '40000', '50000'];

const data = {
    labels: labels,
    datasets: [{
        label: 'Rapport Prix Client',
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
        data: <?php echo json_encode($l) ?>,
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

