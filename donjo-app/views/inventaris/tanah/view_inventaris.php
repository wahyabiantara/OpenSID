<style>
    #footer {
		color: #f83535;
        text-shadow: 1px 1px 0.5px #444;
        padding: 8px;
        text-align: center;
        position: relative;
        bottom: 0px;
        width: 100%;
        background: #eaa852;
        height: 34px;
        z-index:999;
}
</style>
<div class="panel">
    <div class="panel-body">
        <section class="content">

            <div class='box box-default'>
                <div class='box-header with-border'>
                    <h4 class='box-title'>View -
                        <small>Data Inventaris Tanah Desa</small>
                    </h4>
                    <hr>
                </div>

                <div class='box-body'>
                    <div class="form">

                        <form class="form-horizontal" id="form_tanah" name="form_tanah" method="post" action="">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required" style="text-align:left;" for="nama_barang">Nama Barang</label>
                                    <div class="col-sm-9">
                                        <input maxlength="50" value="<?php echo $main->nama_barang; ?>" class="form-control" name="nama_barang" id="nama_barang" type="text" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" style="text-align:left;" for="kode_barang">Kode Barang</label>
                                    <div class="col-sm-9">
                                        <input maxlength="50" value="<?php echo $main->kode_barang; ?>" class="form-control" name="kode_barang" id="kode_barang" type="text" disabled/>
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" style="text-align:left;" for="nomor_register">Nomor Register</label>
                                    <div class="col-sm-9">
                                        <input maxlength="50" value="<?php echo $main->register; ?>" class="form-control" name="nomor_register" id="nomor_register" type="text" disabled/>
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" style="text-align:left;" for="luas_tanah">Luas Tanah</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input type="number" value="<?php echo $main->luas; ?>" class="form-control" id="luas_tanah" name="luas_tanah" type="text" disabled/>
                                            <span class="input-group-addon" id="koefisien_dasar_bangunan-addon">M<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" style="text-align:left;" for="tahun">Tahun Pengadaan </label>
                                    <div class="col-sm-9">
                                        <select name="tahun" id="tahun" class="form-control" disabled>
                                            <option value="<?php echo $main->tahun_pengadaan; ?>"><?php echo $main->tahun_pengadaan; ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" style="text-align:left;" for="alamat">Letak / Alamat </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="alamat" id="alamat" disabled><?php echo $main->letak; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required" style="text-align:left;" for="hak_tanah">Hak Tanah </label>
                                    <div class="col-sm-4">
                                        <select name="hak_tanah" id="hak_tanah" class="form-control" disabled>
                                            <option value="<?php echo $main->hak; ?>"><?php echo $main->hak; ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required" style="text-align:left;" for="tanggal_sertifikat">Tanggal Sertifikat</label>
                                    <div class="col-sm-9">
                                        <input maxlength="50" value="<?php echo date('d M Y',strtotime($main->tanggal_sertifikat)); ?>" class="form-control" name="tanggal_sertifikat" id="tanggal_sertifikat" type="text" disabled/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required" style="text-align:left;" for="nomor_sertifikat">Nomor Sertifikat </label>
                                    <div class="col-sm-9">
                                        <input maxlength="50" value="<?php echo $main->no_sertifikat; ?>" class="form-control" name="nomor_sertifikat" id="nomor_sertifikat" type="text" disabled/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required" style="text-align:left;" for="penggunaan">Penggunaan </label>
                                    <div class="col-sm-9">
                                        <select name="penggunaan" id="penggunaan" class="form-control" disabled>
                                            <option value="<?php echo $main->penggunaan; ?>"><?php echo $main->penggunaan; ?></option>
                                            <option value="Industri">Industri</option>
                                            <option value="Jalan">Jalan</option>
                                            <option value="Komersial">Komersial</option>
                                            <option value="Permukiman">Permukiman</option>
                                            <option value="Tanah Publik">Tanah Publik</option>   
                                            <option value="Tanah Kosong">Tanah Kosong</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required" style="text-align:left;" for="asal_usul">Asal Usul </label>
                                    <div class="col-sm-9">
                                        <select name="asal_usul" id="asal_usul" class="form-control" disabled>
                                        <option value="<?php echo $main->asal; ?>"><?php echo $main->asal; ?></option>
                                            <option value="Bantuan Kabupaten">Bantuan Kabupaten</option>
                                            <option value="Bantuan Pemerintah">Bantuan Pemerintah</option>
                                            <option value="Bantuan Provinsi">Bantuan Provinsi</option>
                                            <option value="Pembelian Sendiri">Pembelian Sendiri</option>
                                            <option value="Sumbangan">Sumbangan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" style="text-align:left;" for="harga">Harga</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon " id="koefisien_dasar_bangunan-addon">Rp</span>
                                            <input type="number" value="<?php echo $main->harga; ?>" class="form-control" id="harga" name="harga" type="text" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" style="text-align:left;" for="keterangan">Keterangan</label>
                                    <div class="col-sm-9">
                                        <textarea rows="5" class="form-control" name="keterangan" id="keterangan" disabled><?php echo $main->keterangan; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="pull-right" >
                                <a href="<?php echo site_url() ?>inventaris_tanah" class="btn btn-default"
                                           id="btn_batal" name="yt1" type="button"/>Kembali</a>
                            </div>
                        </form>
                    </div><!-- form -->
                </div>
            </div>
        </section>
    </div>
</div>

<script>

</script>