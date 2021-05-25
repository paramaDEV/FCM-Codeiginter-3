<div class="container-fluid mb-3">
    <h1 class="h3 mb-4 text-gray-800">Kuisioner</h1>
    <?=$this->session->flashdata('message')?>
    <form action="<?=base_url().'user_controller/send_kuisioner'?>" method="POST">
        <div class="form-group">
            <label for="x1" class="text-gray-800">Apakah perkuliahan daring berpengaruh terhadap proses belajar Anda?</label>
            <select class="form-control" id="x1" name="x1" aria-describedby="emailHelp">
                <option value="1" class="text-gray-800">Tidak Berpengaruh</option>
                <option value="2" class="text-gray-800">Berpengaruh</option>  
                <option value="3" class="text-gray-800">Sangat Berpengaruh</option>    
            </select>
        </div>
        <div class="form-group">
            <label for="x2" class="text-gray-800">Apakah perkuliahan daring mengurangi pemahaman anda terhadap materi yang diajarkan?</label>
            <select class="form-control" id="x2" name="x2" aria-describedby="emailHelp">
                <option value="1" class="text-gray-800">Tidak</option>
                <option value="2" class="text-gray-800">Iya</option>
            </select>
        </div>
        <div class="form-group">
            <label for="x3" class="text-gray-800">Apakah Anda memiliki fasilitas yang cukup dalam melakukan perkuliahan daring? (Contoh : PC yang mumpuni dan jaringan internet)</label>
            <select class="form-control" id="x3" name="x3" aria-describedby="emailHelp">
                <option value="1" class="text-gray-800">Tidak</option>
                <option value="2" class="text-gray-800">Iya</option>
            </select>
        </div>
        <div class="form-group">
            <label for="x4" class="text-gray-800">Apakah Anda merasa puas dengan bantuan penunjang yang diberikan oleh kampus untuk melakasanakan perkuliahan daring? (Contoh : Kuota Internet)</label>
            <select class="form-control" id="x4" name="x4" aria-describedby="emailHelp">
                <option value="1" class="text-gray-800">Tidak Puas</option>
                <option value="2" class="text-gray-800">Cukup Puas</option>
                <option value="3" class="text-gray-800">Sangat Puas</option>
            </select>
        </div>
        <div class="form-group">
            <label for="x5" class="text-gray-800">Apakah perkuliahan daring lebih efektif dari perkuliahan tatap muka?</label>
            <select class="form-control" id="x5" name="x5" aria-describedby="emailHelp">
                <option value="1" class="text-gray-800">Tidak</option>
                <option value="2" class="text-gray-800">Biasa Saja</option>
                <option value="3" class="text-gray-800">Efektif</option>
            </select>
        </div>
        <div class="form-group">
            <label for="x6" class="text-gray-800">Apakah Anda setuju jika masa perkuliahan daring diperpanjang?</label>
            <select class="form-control" id="x6" name="x6" aria-describedby="emailHelp">
                <option value="1" class="text-gray-800">Tidak Setuju</option>
                <option value="2" class="text-gray-800">Setuju</option>
                <option value="3" class="text-gray-800">Sangat Setuju</option>
            </select>
        </div>
        <?php if($submission==null){?>
        <button type="submit" class="btn btn-danger">Submit</button>
        <?php }else{?>
        <button type="submit" class="btn btn-danger" disabled>Submit</button>
        <?php }?>
    </form>
    </div>
</div>
</div>