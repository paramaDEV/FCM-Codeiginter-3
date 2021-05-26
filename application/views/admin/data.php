    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Data Survey</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Datae</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>X1</th>
                                            <th>X2</th>
                                            <th>X3</th>
                                            <th>X4</th>
                                            <th>X5</th>
                                            <th>X6</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1;
                                        foreach($kuisioner as $x):
                                        ?>
                                        <tr>
                                            <td><?=$no++?></td>
                                            <td><?=$x['nim']?></td>
                                            <td><?=$x['x1']?></td>
                                            <td><?=$x['x2']?></td>
                                            <td><?=$x['x3']?></td>
                                            <td><?=$x['x4']?></td>
                                            <td><?=$x['x5']?></td>
                                            <td><?=$x['x6']?></td>
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        </div>
        <h4 class="text-gray-800">Keterangan : </h4>
        <h6 class="text-gray-800">X1 = Apakah perkuliahan daring berpengaruh terhadap proses belajar Anda? (Tidak berpengaruh/Berpengaruh/Sangat Berpengaruh)</h6>
        <h6 class="text-gray-800">X2 = Apakah perkuliahan daring berpengaruh terhadap pemahaman materi ? (Tidak/Iya)</h6>
        <h6 class="text-gray-800">X3 = Apakah Anda memiliki fasilitas yang cukup untuk perkuliahan daring ? (Tidak/Iya)</h6>
        <h6 class="text-gray-800">X4 = Apakah Anda merasa puas dengan dengan bantuan penunjang yang diberikan oleh Kampus ? (Tidak/Iya)</h6>
        <h6 class="text-gray-800">X5 = Apakah perkuliahan daring lebih efektif dari perkuliahan tatap muka? (Tidak/Biasa Saja/Efekktif</h6>
        <h6 class="text-gray-800 mb-3">X6 = Apakah Anda setuju jika perkuliahan daring diperpanjang? (Tidak/Setuju/Sangat Setuju)</h6>
    </div>
</div>