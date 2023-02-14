<?php
ini_set("display_errors",0);
include("../../includes/defines.php");
include("../../includes/fungsi.php");
session_start();

?>





<div class="card">
    <div class="card-header">
        <h4>Data Ubah Bantingan</h4>
    </div>
    <div class="card-body">
        <form action="proses/administrator/proses_tambah_ban.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-12 col-12">
                    <label for="inputEmail4">Tanggal</label>
                    <input type="date" name="tgl_ban" class="form-control" placeholder="Masukkan Tanggal" required>
                </div>

                <div class="col-12">
                    <label>
                        <bold>Bantingan</bold>
                    </label>
                </div>
                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Tipper_Cap_5Ton</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tippler_cap_5ton" id="Normal" value="Normal">
                        <label class="form-check-label" for="Normal">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tippler_cap_5ton" id="Tidak Normal"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tippler_cap_5ton" id="Standby"
                            value="Standby">
                        <label class="form-check-label" for="Standby">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipper_cap_5ton" id="Rusak" value="Rusak">
                        <label class="form-check-label" for="Rusak">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">sfb_conveyor01</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sfb_conveyor01" id="Normal2" value="Normal">
                        <label class="form-check-label" for="Normal2">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sfb_conveyor01" id="Tidak Normal2"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal2">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sfb_conveyor01" id="Standby2"
                            value="Standby">
                        <label class="form-check-label" for="Standby2">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sfb_conveyor01" id="Rusak2" value="Rusak">
                        <label class="form-check-label" for="Rusak2">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">sfb_conveyor02</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sfb_conveyor02" id="Normal3" value="Normal">
                        <label class="form-check-label" for="Normal3">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sfb_conveyor02" id="Tidak Normal3"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal3">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sfb_conveyor02" id="Standby3"
                            value="Standby">
                        <label class="form-check-label" for="Standby3">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sfb_conveyor02" id="Rusak3" value="Rusak">
                        <label class="form-check-label" for="Rusak3">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">threser01</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="threser01" id="Normal4" value="Normal">
                        <label class="form-check-label" for="Normal4">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="threser01" id="Tidak Normal4"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal4">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="threser01" id="Standby4" value="Standby">
                        <label class="form-check-label" for="Standby4">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="threser01" id="Rusak4" value="Rusak">
                        <label class="form-check-label" for="Rusak4">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">threser02</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="threser02" id="Normal5" value="Normal">
                        <label class="form-check-label" for="Normal5">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="threser02" id="Tidak Normal5"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="threser02" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="threser02" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">threser03</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="threser03" id="Normal6" value="Normal">
                        <label class="form-check-label" for="Normal6">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="threser03" id="Tidak Normal6"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal6">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="threser03" id="Standby6" value="Standby">
                        <label class="form-check-label" for="Standby6">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="threser03" id="Rusak6" value="Rusak">
                        <label class="form-check-label" for="Rusak6">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">discharge_conveyor01</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="discharge_conveyor01" id="Normal7"
                            value="Normal">
                        <label class="form-check-label" for="Normal7">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="discharge_conveyor01" id="Tidak Normal7"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal7">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="discharge_conveyor01" id="Standby7"
                            value="Standby">
                        <label class="form-check-label" for="Standby7">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="discharge_conveyor01" id="Rusak7"
                            value="Rusak">
                        <label class="form-check-label" for="Rusak7">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">discharge_conveyor02</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="discharge_conveyor02" id="Normal8"
                            value="Normal">
                        <label class="form-check-label" for="Normal8">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="discharge_conveyor02" id="Tidak Normal8"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal8">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="discharge_conveyor02" id="Standby8"
                            value="Standby">
                        <label class="form-check-label" for="Standby8">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="discharge_conveyor02" id="Rusak8"
                            value="Rusak">
                        <label class="form-check-label" for="Rusak8">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">discharge_conveyor03</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="discharge_conveyor03" id="Normal9"
                            value="Normal">
                        <label class="form-check-label" for="Normal9">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="discharge_conveyor03" id="Tidak Normal9"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal9">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="discharge_conveyor03" id="Standby9"
                            value="Standby">
                        <label class="form-check-label" for="Standby9">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="discharge_conveyor03" id="Rusak9"
                            value="Rusak">
                        <label class="form-check-label" for="Rusak9">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">eb_conveyor</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="eb_conveyor" id="Normal10" value="Normal">
                        <label class="form-check-label" for="Normal10">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="eb_conveyor" id="Tidak Normal10"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal10">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="eb_conveyor" id="Standby10" value="Standby">
                        <label class="form-check-label" for="Standby10">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="eb_conveyor" id="Rusak10" value="Rusak">
                        <label class="form-check-label" for="Rusak10">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <div class="form-group col-12">
                        <label for="inputEmail4">Keterangan</label>
                        <textarea type="text" name="ket" class="form-control" placeholder="Masukkan Data"></textarea>
                    </div>

                </div>



                <div class="card-footer">
                    <button type="submit" value="simpan" name="simpan" class="btn btn-primary fa fa-dot-circle-o">
                        Simpan</button>
                    <button type="submit" class="btn btn-danger " data-dismiss="modal">Kembali</button>
                </div>

        </form>
    </div>