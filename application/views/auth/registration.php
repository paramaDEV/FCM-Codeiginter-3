
<body class="">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Silahkan isi form dengan lengkap dan benar</h1>
                                </div>
                                <form class="user" method="POST" action="<?=base_url().'auth/user_registration_page'?>">
                                <?=$this->session->flashdata('message')?>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="nama" name="nama" aria-describedby="emailHelp"
                                            placeholder="Nama Lengkap"><?=form_error('nama',"<span class='text-danger'>","</span>")?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="nim" name="nim" aria-describedby="emailHelp"
                                            placeholder="Nomer Induk Mahasiswa"><?=form_error('nim',"<span class='text-danger'>","</span>")?>
                                    </div>
                                    <div class="form-group">
                                        <select name="angkatan" style="width: 100%;height:50px;border-radius:50px;padding-left : 15px; border:1px solid #cfcfcf;color:#6b6b6b">
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                        </select><?=form_error('angkatan',"<span class='text-danger'>","</span>")?>
                                    </div>
                                    <div class="form-group">
                                        <select name="kelamin" style="width: 100%;height:50px;border-radius:50px;padding-left : 15px; border:1px solid #cfcfcf;color:#6b6b6b">
                                            <option value="Laki-laki" >Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select><?=form_error('kelamin',"<span class='text-danger'>","</span>")?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name="password" placeholder="Password">
                                            <?=form_error('password',"<span class='text-danger'>","</span>")?>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-user btn-block ">Register</button>
                                   
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href=<?=base_url()."auth/"?>>Back to Login</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>