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
        <form action="proses/administrator/proses_tambah_boiler.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">




                <div class="form-group col-md-12 col-12">
                    <label for="inputEmail4">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" placeholder="Masukkan Tanggal" required>
                </div>

                <div class="col-12">
                    <label>
                        <bold> boiler</bold>
                    </label>
                </div>
                <!-- radio  -->
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">fsc</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="fsc"
                            id="Normal2" value="Normal"> <label class="form-check-label" for="Normal2">Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="fsc"
                            id="Tidak Normal2" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="fsc"
                            id="Standby2" value="Standby"> <label class="form-check-label" for="Standby2"> <label
                                class="form-check-label" for="Standby2">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="fsc"
                            id="Rusak2" value="Rusak"> <label class="form-check-label" for="Rusak2">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">bfdc</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="bfdc"
                            id="Normal3" value="Normal"> <label class="form-check-label" for="Normal3">Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="bfdc"
                            id="Tidak Normal3" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="bfdc"
                            id="Standby3" value="Standby"> <label class="form-check-label" for="Standby3"> <label
                                class="form-check-label" for="Standby3">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="bfdc"
                            id="Rusak3" value="Rusak"> <label class="form-check-label" for="Rusak3">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">mfs</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="mfs"
                            id="Normal4" value="Normal"> <label class="form-check-label" for="Normal4">Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="mfs"
                            id="Tidak Normal4" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="mfs"
                            id="Standby4" value="Standby"> <label class="form-check-label" for="Standby4"> <label
                                class="form-check-label" for="Standby4">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="mfs"
                            id="Rusak4" value="Rusak"> <label class="form-check-label" for="Rusak4">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">mfdc</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="mfdc"
                            id="Normal5" value="Normal"> <label class="form-check-label" for="Normal5">Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="mfdc"
                            id="Tidak Normal5" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="mfdc"
                            id="Standby5" value="Standby"> <label class="form-check-label" for="Standby5"> <label
                                class="form-check-label" for="Standby5">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="mfdc"
                            id="Rusak5" value="Rusak"> <label class="form-check-label" for="Rusak5">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">bfrc</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="bfrc"
                            id="Normal6" value="Normal"> <label class="form-check-label" for="Normal6">Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="bfrc"
                            id="Tidak Normal6" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="bfrc"
                            id="Standby6" value="Standby"> <label class="form-check-label" for="Standby6"> <label
                                class="form-check-label" for="Standby6">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="bfrc"
                            id="Rusak6" value="Rusak"> <label class="form-check-label" for="Rusak6">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">steam_b01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="steam_b01" id="Normal7" value="Normal"> <label class="form-check-label"
                            for="Normal7">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="steam_b01" id="Tidak Normal7" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="steam_b01" id="Standby7" value="Standby"> <label class="form-check-label"
                            for="Standby7"> <label class="form-check-label" for="Standby7">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="steam_b01" id="Rusak7" value="Rusak"> <label class="form-check-label"
                            for="Rusak7">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">dust_ca__l01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dust_ca__l01" id="Normal8" value="Normal"> <label class="form-check-label"
                            for="Normal8">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dust_ca__l01" id="Tidak Normal8" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dust_ca__l01" id="Standby8" value="Standby"> <label class="form-check-label"
                            for="Standby8"> <label class="form-check-label" for="Standby8">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dust_ca__l01" id="Rusak8" value="Rusak"> <label class="form-check-label"
                            for="Rusak8">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">dust_ca__l02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dust_ca__l02" id="Normal9" value="Normal"> <label class="form-check-label"
                            for="Normal9">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dust_ca__l02" id="Tidak Normal9" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dust_ca__l02" id="Standby9" value="Standby"> <label class="form-check-label"
                            for="Standby9"> <label class="form-check-label" for="Standby9">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dust_ca__l02" id="Rusak9" value="Rusak"> <label class="form-check-label"
                            for="Rusak9">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">ash_c_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_01" id="Normal10" value="Normal"> <label class="form-check-label"
                            for="Normal10">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_01" id="Tidak Normal10" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_01" id="Standby10" value="Standby"> <label class="form-check-label"
                            for="Standby10"> <label class="form-check-label" for="Standby10">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_01" id="Rusak10" value="Rusak"> <label class="form-check-label"
                            for="Rusak10">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">ash_c_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_02" id="Normal11" value="Normal"> <label class="form-check-label"
                            for="Normal11">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_02" id="Tidak Normal11" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_02" id="Standby11" value="Standby"> <label class="form-check-label"
                            for="Standby11"> <label class="form-check-label" for="Standby11">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_02" id="Rusak11" value="Rusak"> <label class="form-check-label"
                            for="Rusak11">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">ash_c_03</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_03" id="Normal12" value="Normal"> <label class="form-check-label"
                            for="Normal12">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_03" id="Tidak Normal12" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_03" id="Standby12" value="Standby"> <label class="form-check-label"
                            for="Standby12"> <label class="form-check-label" for="Standby12">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_03" id="Rusak12" value="Rusak"> <label class="form-check-label"
                            for="Rusak12">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">ash_c_04</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_04" id="Normal13" value="Normal"> <label class="form-check-label"
                            for="Normal13">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_04" id="Tidak Normal13" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_04" id="Standby13" value="Standby"> <label class="form-check-label"
                            for="Standby13"> <label class="form-check-label" for="Standby13">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ash_c_04" id="Rusak13" value="Rusak"> <label class="form-check-label"
                            for="Rusak13">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">id_fan01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="id_fan01" id="Normal14" value="Normal"> <label class="form-check-label"
                            for="Normal14">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="id_fan01" id="Tidak Normal14" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="id_fan01" id="Standby14" value="Standby"> <label class="form-check-label"
                            for="Standby14"> <label class="form-check-label" for="Standby14">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="id_fan01" id="Rusak14" value="Rusak"> <label class="form-check-label"
                            for="Rusak14">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">fd_fan01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fd_fan01" id="Normal15" value="Normal"> <label class="form-check-label"
                            for="Normal15">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fd_fan01" id="Tidak Normal15" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fd_fan01" id="Standby15" value="Standby"> <label class="form-check-label"
                            for="Standby15"> <label class="form-check-label" for="Standby15">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fd_fan01" id="Rusak15" value="Rusak"> <label class="form-check-label"
                            for="Rusak15">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">sa_fan01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sa_fan01" id="Normal16" value="Normal"> <label class="form-check-label"
                            for="Normal16">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sa_fan01" id="Tidak Normal16" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sa_fan01" id="Standby16" value="Standby"> <label class="form-check-label"
                            for="Standby16"> <label class="form-check-label" for="Standby16">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sa_fan01" id="Rusak16" value="Rusak"> <label class="form-check-label"
                            for="Rusak16">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">ff_fan01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ff_fan01" id="Normal17" value="Normal"> <label class="form-check-label"
                            for="Normal17">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ff_fan01" id="Tidak Normal17" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ff_fan01" id="Standby17" value="Standby"> <label class="form-check-label"
                            for="Standby17"> <label class="form-check-label" for="Standby17">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ff_fan01" id="Rusak17" value="Rusak"> <label class="form-check-label"
                            for="Rusak17">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">fac_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fac_01" id="Normal18" value="Normal"> <label class="form-check-label"
                            for="Normal18">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fac_01" id="Tidak Normal18" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fac_01" id="Standby18" value="Standby"> <label class="form-check-label"
                            for="Standby18"> <label class="form-check-label" for="Standby18">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fac_01" id="Rusak18" value="Rusak"> <label class="form-check-label"
                            for="Rusak18">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">fac_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fac_02" id="Normal19" value="Normal"> <label class="form-check-label"
                            for="Normal19">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fac_02" id="Tidak Normal19" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fac_02" id="Standby19" value="Standby"> <label class="form-check-label"
                            for="Standby19"> <label class="form-check-label" for="Standby19">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fac_02" id="Rusak19" value="Rusak"> <label class="form-check-label"
                            for="Rusak19">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">fac_03</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fac_03" id="Normal20" value="Normal"> <label class="form-check-label"
                            for="Normal20">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fac_03" id="Tidak Normal20" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fac_03" id="Standby20" value="Standby"> <label class="form-check-label"
                            for="Standby20"> <label class="form-check-label" for="Standby20">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fac_03" id="Rusak20" value="Rusak"> <label class="form-check-label"
                            for="Rusak20">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">compresor_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="compresor_01" id="Normal21" value="Normal"> <label class="form-check-label"
                            for="Normal21">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="compresor_01" id="Tidak Normal21" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="compresor_01" id="Standby21" value="Standby"> <label class="form-check-label"
                            for="Standby21"> <label class="form-check-label" for="Standby21">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="compresor_01" id="Rusak21" value="Rusak"> <label class="form-check-label"
                            for="Rusak21">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">boiler_fp01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="boiler_fp01" id="Normal22" value="Normal"> <label class="form-check-label"
                            for="Normal22">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="boiler_fp01" id="Tidak Normal22" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="boiler_fp01" id="Standby22" value="Standby"> <label class="form-check-label"
                            for="Standby22"> <label class="form-check-label" for="Standby22">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="boiler_fp01" id="Rusak22" value="Rusak"> <label class="form-check-label"
                            for="Rusak22">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">boiler_fp02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="boiler_fp02" id="Normal23" value="Normal"> <label class="form-check-label"
                            for="Normal23">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="boiler_fp02" id="Tidak Normal23" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="boiler_fp02" id="Standby23" value="Standby"> <label class="form-check-label"
                            for="Standby23"> <label class="form-check-label" for="Standby23">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="boiler_fp02" id="Rusak23" value="Rusak"> <label class="form-check-label"
                            for="Rusak23">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">thermal_dearator</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="thermal_dearator" id="Normal24" value="Normal"> <label class="form-check-label"
                            for="Normal24">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="thermal_dearator" id="Tidak Normal24" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="thermal_dearator" id="Standby24" value="Standby"> <label class="form-check-label"
                            for="Standby24"> <label class="form-check-label" for="Standby24">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="thermal_dearator" id="Rusak24" value="Rusak"> <label class="form-check-label"
                            for="Rusak24">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">daeratorpump_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="daeratorpump_01" id="Normal25" value="Normal"> <label class="form-check-label"
                            for="Normal25">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="daeratorpump_01" id="Tidak Normal25" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="daeratorpump_01" id="Standby25" value="Standby"> <label class="form-check-label"
                            for="Standby25"> <label class="form-check-label" for="Standby25">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="daeratorpump_01" id="Rusak25" value="Rusak"> <label class="form-check-label"
                            for="Rusak25">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">dearatorpump_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dearatorpump_02" id="Normal26" value="Normal"> <label class="form-check-label"
                            for="Normal26">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dearatorpump_02" id="Tidak Normal26" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dearatorpump_02" id="Standby26" value="Standby"> <label class="form-check-label"
                            for="Standby26"> <label class="form-check-label" for="Standby26">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dearatorpump_02" id="Rusak26" value="Rusak"> <label class="form-check-label"
                            for="Rusak26">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">cd_pump01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cd_pump01" id="Normal27" value="Normal"> <label class="form-check-label"
                            for="Normal27">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cd_pump01" id="Tidak Normal27" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cd_pump01" id="Standby27" value="Standby"> <label class="form-check-label"
                            for="Standby27"> <label class="form-check-label" for="Standby27">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cd_pump01" id="Rusak27" value="Rusak"> <label class="form-check-label"
                            for="Rusak27">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">cd_pump02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cd_pump02" id="Normal28" value="Normal"> <label class="form-check-label"
                            for="Normal28">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cd_pump02" id="Tidak Normal28" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cd_pump02" id="Standby28" value="Standby"> <label class="form-check-label"
                            for="Standby28"> <label class="form-check-label" for="Standby28">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cd_pump02" id="Rusak28" value="Rusak"> <label class="form-check-label"
                            for="Rusak28">Rusak</label> </div>
                </div>

                <!-- radio  -->
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