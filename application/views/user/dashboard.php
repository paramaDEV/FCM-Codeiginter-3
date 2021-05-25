<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <center><img class="mt-4 mx-auto" src="<?=base_url().'Assets/img/undraw_Data_trends_re_2cdy.svg'?>" alt="Image" height="350"></center>
    <center><h5 class="text-gray-800">Selamat datang di halaman User.<br>Aplikasi ini berguna untuk clustering minat Mahasiswa terhadap
    perkuliahan daring atau tatap muka.</h5></center>
    <?php if($submission==null){?>
    <center><a href="<?= base_url().'user_controller/kuisioner'?>"><button class="btn btn-danger mx-auto">Isi Kuisioner</button></center>
    <?php }?>
</div>
</div>
