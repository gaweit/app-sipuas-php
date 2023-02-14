<?php
ini_set("display_errors",0);
include("../../includes/defines.php");
include("../../includes/fungsi.php");
session_start();

?>





<div class="card">
    <div class="card-header">
        <h4>Data ubah</h4>
    </div>
    <div class="card-body">
        <form action="proses/administrator/proses_tambah_press.php" method="POST" enctype="multipart/form-data">
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
                    <label class="d-block" for="inputEmail4">bottom_cross_conveyor</label>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bottom_cross_conveyor" id="Normal"
                            value="Normal">
                        <label class="form-check-label" for="Normal">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bottom_cross_conveyor" id="Tidak Normal"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bottom_cross_conveyor" id="Standby"
                            value="Standby">
                        <label class="form-check-label" for="Standby">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bottom_cross_conveyor" id="Rusak"
                            value="Rusak">
                        <label class="form-check-label" for="Rusak">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">fruit_evalator01</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_evalator01" id="Normal2"
                            value="Normal">
                        <label class="form-check-label" for="Normal2">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_evalator01" id="Tidak Normal2"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal2">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_evalator01" id="Standby2"
                            value="Standby">
                        <label class="form-check-label" for="Standby2">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_evalator01" id="Rusak2" value="Rusak">
                        <label class="form-check-label" for="Rusak2">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">fruit_evalator02</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_evalator02" id="Normal3"
                            value="Normal">
                        <label class="form-check-label" for="Normal3">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_evalator02" id="Tidak Normal3"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal3">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_evalator02" id="Standby3"
                            value="Standby">
                        <label class="form-check-label" for="Standby3">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_evalator02" id="Rusak3" value="Rusak">
                        <label class="form-check-label" for="Rusak3">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">fruit_evalator03</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_evalator03" id="Normal4"
                            value="Normal">
                        <label class="form-check-label" for="Normal4">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_evalator03" id="Tidak Normal4"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal4">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_evalator03" id="Standby4"
                            value="Standby">
                        <label class="form-check-label" for="Standby4">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fruit_evalator03" id="Rusak4" value="Rusak">
                        <label class="form-check-label" for="Rusak4">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">top_fdc</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="top_fdc" id="Normal5" value="Normal">
                        <label class="form-check-label" for="Normal5">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="top_fdc" id="Tidak Normal5"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="top_fdc" id="Standby6" value="Standby">
                        <label class="form-check-label" for="Standby6">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="top_fdc" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">digester01</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester01" id="Normal6" value="Normal">
                        <label class="form-check-label" for="Normal6">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester01" id="Tidak Normal6"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal6">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester01" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester01" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">digester02</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester02" id="Normal7" value="Normal">
                        <label class="form-check-label" for="Normal7">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester02" id="Tidak Normal7"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal7">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester02" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester02" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">digester03</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester03" id="Normal8" value="Normal">
                        <label class="form-check-label" for="Normal8">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester03" id="Tidak Normal8"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal8">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester03" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester03" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">digester04</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester04" id="Normal9" value="Normal">
                        <label class="form-check-label" for="Normal9">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester04" id="Tidak Normal9"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Normal9">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester04" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester04" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">digester05</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester05" id="Norma20" value="Normal">
                        <label class="form-check-label" for="Norma20">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester05" id="Tidak Norma20"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma20">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester05" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="digester05" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">press01</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press01" id="Norma21" value="Normal">
                        <label class="form-check-label" for="Norma21">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press01" id="Tidak Norma21"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma21">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press01" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press01" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">press02</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press02" id="Norma22" value="Normal">
                        <label class="form-check-label" for="Norma22">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press02" id="Tidak Norma22"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma22">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press02" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press02" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">press03</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press03" id="Norma23" value="Normal">
                        <label class="form-check-label" for="Norma23">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press03" id="Tidak Norma23"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma23">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press03" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press03" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">Hydroulik Under Tow 03</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press04" id="Norma24" value="Normal">
                        <label class="form-check-label" for="Norma24">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press04" id="Tidak Norma24"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma24">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press04" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press04" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">press05</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press05" id="Norma25" value="Normal">
                        <label class="form-check-label" for="Norma25">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press05" id="Tidak Norma25"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma25">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press05" id="Standby5" value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="press05" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>

                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">sand_trap_tank</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sand_trap_tank" id="Norma26" value="Normal">
                        <label class="form-check-label" for="Norma26">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sand_trap_tank" id="Tidak Norma26"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma26">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sand_trap_tank" id="Standby5"
                            value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sand_trap_tank" id="Rusak5" value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>
                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">screen_waste_conveyor01</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="screen_waste_conveyor01" id="Norma27"
                            value="Normal">
                        <label class="form-check-label" for="Norma27">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="screen_waste_conveyor01" id="Tidak Norma27"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma27">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="screen_waste_conveyor01" id="Standby5"
                            value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="screen_waste_conveyor01" id="Rusak5"
                            value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>
                <div class="form-group col-12">

                    <label class="d-block" for="inputEmail4">screen_waste_conveyor02</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="screen_waste_conveyor02" id="Norma28"
                            value="Normal">
                        <label class="form-check-label" for="Norma28">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="screen_waste_conveyor02" id="Tidak Norma28"
                            value="Tidak Normal">
                        <label class="form-check-label" for="Tidak Norma28">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="screen_waste_conveyor02" id="Standby5"
                            value="Standby">
                        <label class="form-check-label" for="Standby5">Standby</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="screen_waste_conveyor02" id="Rusak5"
                            value="Rusak">
                        <label class="form-check-label" for="Rusak5">Rusak</label>
                    </div>
                </div>
                <!-- radio  -->
                <div class="form-group col-12">
                    <label for="inputEmail4">Keterangan</label>
                    <textarea type="text" name="keterangan" class="form-control" placeholder="Masukkan Data"></textarea>
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