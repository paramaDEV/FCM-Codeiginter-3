    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Data User</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Angkatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1;
                                        foreach($user as $x):
                                        ?>
                                        <tr>
                                            <td><?=$no++?></td>
                                            <td><?=$x['nama']?></td>
                                            <td><?=$x['nim']?></td>
                                            <td><?=$x['jenis_kelamin']?></td>
                                            <td><?=$x['angkatan']?></td>
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        </div>
    </div>
</div>