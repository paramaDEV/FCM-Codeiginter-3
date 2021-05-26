<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Admin's Page</h1>
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah  user</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($user)?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah yang sudah mengisi survey</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($kuisioner)?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height:300px;">
        <canvas id="myChart" height="100px"></canvas>
    </div>
</div>
</div>
<script src="<?=base_url().'node_modules/chart.js/dist/chart.js'?>"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Daring', 'Tatap Muka'],
        datasets: [{
            label: 'Hasil Survey Mahasiswa ',
            data: ["<?=count($cluster1)?>", "<?=count($cluster2)?>"],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
            ],
        },]
    },
    options: {
        indexAxis :'y',
        scales: {
            y: {
                beginAtZero: true
            }
        },
        
    }
});
</script>