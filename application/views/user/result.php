<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Result</h1>
    <?php if($result==null){?>
        <center><img class="mt-4 mx-auto" src="<?=base_url().'Assets/img/undraw_Data_re_80ws.svg'?>" alt="Image" height="350"></center>
        <center><h5 class="text-gray-800 mt-3">Belum ada hasil untuk ditampilkan. Silahkan cek kembali nanti.</h5></center>
    <?php }?>
    <div>
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