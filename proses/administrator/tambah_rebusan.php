<?php
ini_set("display_errors",0);
include("../../includes/defines.php");
include("../../includes/fungsi.php");
session_start();

?>





<div class="card">
    <div class="card-header">
        <h4>Data Tambah</h4>
    </div>
    <div class="card-body">
        <form action="proses/administrator/proses_tambah_rebusan.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">




                <div class="form-group col-md-12 col-12">
                    <label for="inputEmail4">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" placeholder="Masukkan Tanggal" required>
                </div>

                <div class="col-12">
                    <label>
                        <bold> Rebusan</bold>
                    </label>
                </div>
                <!-- radio  -->
                <div class="form-group col-12">
                    <label class="d-block" for="inputEmail4">Fruit Transfer Carriage 01</label>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_tc01" id="Normal" value="Normal">
                        <label class="form-check-label" for="Normal">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_tc01" id="Tidak Normal"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_tc01" id="Standby" value="Standby">
                        <label class="form-check-label" for="Standby">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_tc01" id="Rusak" value="Rusak">
                        <label class="form-check-label" for="Rusak">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Fruit Transfer Carriage 02</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_tc02" id="Normal2" value="Normal">
                        <label class="form-check-label" for="Normal2">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_tc02" id="Tidak Normal2"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal2">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_tc02" id="Standby2" value="Standby">
                        <label class="form-check-label" for="Standby2">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_tc02" id="Rusak2" value="Rusak">
                        <label class="form-check-label" for="Rusak2">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Sterilizer 01</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sterilizer01" id="Normal3" value="Normal">
                        <label class="form-check-label" for="Normal3">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sterilizer01" id="Tidak Normal3"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal3">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sterilizer01" id="Standby3" value="Standby">
                        <label class="form-check-label" for="Standby3">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sterilizer01" id="Rusak3" value="Rusak">
                        <label class="form-check-label" for="Rusak3">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Sterilizer 02</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sterilizer02" id="Normal4" value="Normal">
                        <label class="form-check-label" for="Normal4">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sterilizer02" id="Tidak Normal4"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal4">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sterilizer02" id="Standby4" value="Standby">
                        <label class="form-check-label" for="Standby4">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sterilizer02" id="Rusak4" value="Rusak">
                        <label class="form-check-label" for="Rusak4">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Sterilizer 03</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sterilizer03" id="Normal5" value="Normal">
                        <label class="form-check-label" for="Normal5">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sterilizer03" id="Tidak Normal5"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sterilizer03" id="Standby6" value="Standby">
                        <label class="form-check-label" for="Standby6">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sterilizer03" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Drawbridge 01</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="drawbrige01" id="Normal6" value="Normal">
                        <label class="form-check-label" for="Normal6">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="drawbrige01" id="Tidak Normal6"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal6">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="drawbrige01" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="drawbrige01" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Drawbridge 02</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="drawbrige02" id="Normal7" value="Normal">
                        <label class="form-check-label" for="Normal7">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="drawbrige02" id="Tidak Normal7"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal7">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="drawbrige02" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="drawbrige02" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Drawbridge 03</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="drawbrige03" id="Normal8" value="Normal">
                        <label class="form-check-label" for="Normal8">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="drawbrige03" id="Tidak Normal8"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal8">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="drawbrige03" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="drawbrige03" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Power Pack 1</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="power_pack1" id="Normal9" value="Normal">
                        <label class="form-check-label" for="Normal9">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="power_pack1" id="Tidak Normal9"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal9">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="power_pack1" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="power_pack1" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Power Pack 2</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="power_pack2" id="Norma20" value="Normal">
                        <label class="form-check-label" for="Norma20">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="power_pack2" id="Tidak Norma20"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma20">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="power_pack2" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="power_pack2" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Power Pack 3</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="power_pack3" id="Norma21" value="Normal">
                        <label class="form-check-label" for="Norma21">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="power_pack3" id="Tidak Norma21"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma21">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="power_pack3" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="power_pack3" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Hydroulik Under Tow 01</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut01" id="Norma22" value="Normal">
                        <label class="form-check-label" for="Norma22">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut01" id="Tidak Norma22"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma22">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut01" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut01" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Hydroulik Under Tow 02</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut02" id="Norma23" value="Normal">
                        <label class="form-check-label" for="Norma23">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut02" id="Tidak Norma23"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma23">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut02" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut02" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Hydroulik Under Tow 03</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut03" id="Norma24" value="Normal">
                        <label class="form-check-label" for="Norma24">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut03" id="Tidak Norma24"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma24">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut03" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut03" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Hydroulik Under Tow 04</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut04" id="Norma25" value="Normal">
                        <label class="form-check-label" for="Norma25">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut04" id="Tidak Norma25"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma25">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut04" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut04" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Hydroulik Under Tow 05</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut05" id="Norma26" value="Normal">
                        <label class="form-check-label" for="Norma26">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut05" id="Tidak Norma26"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma26">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut05" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut05" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>
                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Hydroulik Under Tow 06</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut06" id="Norma27" value="Normal">
                        <label class="form-check-label" for="Norma27">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut06" id="Tidak Norma27"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma27">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut06" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut06" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>
                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Hydroulik Under Tow 07</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut07" id="Norma28" value="Normal">
                        <label class="form-check-label" for="Norma28">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut07" id="Tidak Norma28"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma28">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut07" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hut07" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>
                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Blowdown Chambers</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="blowdown_chambers" id="Norma29"
                            value="Normal">
                        <label class="form-check-label" for="Norma29">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="blowdown_chambers" id="Tidak Norma29"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma29">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="blowdown_chambers" id="Standby5"
                            value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="blowdown_chambers" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>
                <!-- radio  -->
                <div class="form-group col-12">
                    <label for="inputEmail4">Keterangan</label>
                    <textarea type="text" name="ket_reb" class="form-control" placeholder="Masukkan Data"></textarea>
                </div>

            </div>



            <div class="card-footer">
                <!-- <input type="hidden" name="id_reb" value="<?php echo $id_reb; ?>" /> -->
                <button type="submit" value="Simpan" name="simpan" class="btn btn-primary fa fa-dot-circle-o">
                    Simpan</button>
                <button type="submit" class="btn btn-danger " data-dismiss="modal">Kembali</button>
            </div>

        </form>
    </div>