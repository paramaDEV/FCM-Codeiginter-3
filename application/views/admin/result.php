    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Result</h1>
        <a href="<?= base_url().'admin_controller/fcm'?>"><button class="btn btn-success mb-3 mr-2">Generate Data</button></a>
        <a href="<?= base_url().'admin_controller/clear'?>"><button onclick="return confirm('Apakah  anda yakin ingin mengosongkan tabel ?')"class="btn btn-danger mb-3">Clear</button></a>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Hasil Clustering</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Cluster 1</th>
                                            <th>Cluster 2</th>
                                            <th>Final Cluster</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1;
                                        foreach($result as $x):
                                        ?>
                                        <tr>
                                            <td><?=$no++?></td>
                                            <td><?=$x['nim']?></td>
                                            <td><?=$x['cluster1']?></td>
                                            <td><?=$x['cluster2']?></td>
                                            <td><?=$x['final_cluster']?></td>
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        </div>
        <h4 class="text-gray-800">Keterangan : </h4>
        <h6 class="text-gray-800">Cluster 1 = Daring</h6>
        <h6 class="text-gray-800 mb-3">Cluster 2 = Tatap Muka</h6>
    </div>
</div>