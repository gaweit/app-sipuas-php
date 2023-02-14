<?php
ini_set("display_errors",0);
include("../../includes/defines.php");
include("../../includes/fungsi.php");
session_start();

?>





<div class="card">
    <div class="card-header">
        <h4>Data Ubah</h4>
    </div>
    <div class="card-body">
        <form action="proses/administrator/proses_tambah_klarifikasi.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">




                <div class="form-group col-md-12 col-12">
                    <label for="inputEmail4">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" placeholder="Masukkan Tanggal" required>
                </div>

                <div class="col-12">
                    <label>
                        <bold> klarifikasi</bold>
                    </label>
                </div>
                <!-- radio  -->

                <div class="form-group col-12"><label class="d-block" for="inputEmail4">vibrating_screen01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen01" id="Normal2" value="Normal"> <label class="form-check-label"
                            for="Normal2">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen01" id="Tidak Normal2" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal2">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen01" id="Standby2" value="Standby"> <label class="form-check-label"
                            for="Standby2">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen01" id="Rusak2" value="Rusak"> <label class="form-check-label"
                            for="Rusak2">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">vibrating_screen02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen02" id="Normal3" value="Normal"> <label class="form-check-label"
                            for="Normal3">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen02" id="Tidak Normal3" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal3">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen02" id="Standby3" value="Standby"> <label class="form-check-label"
                            for="Standby3">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen02" id="Rusak3" value="Rusak"> <label class="form-check-label"
                            for="Rusak3">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">vibrating_screen03</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen03" id="Normal4" value="Normal"> <label class="form-check-label"
                            for="Normal4">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen03" id="Tidak Normal4" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal4">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen03" id="Standby4" value="Standby"> <label class="form-check-label"
                            for="Standby4">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen03" id="Rusak4" value="Rusak"> <label class="form-check-label"
                            for="Rusak4">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">vibrating_screen04</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen04" id="Normal5" value="Normal"> <label class="form-check-label"
                            for="Normal5">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen04" id="Tidak Normal5" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal5">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen04" id="Standby5" value="Standby"> <label class="form-check-label"
                            for="Standby5">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vibrating_screen04" id="Rusak5" value="Rusak"> <label class="form-check-label"
                            for="Rusak5">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">cop_ssc_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_01" id="Normal6" value="Normal"> <label class="form-check-label"
                            for="Normal6">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_01" id="Tidak Normal6" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal6">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_01" id="Standby6" value="Standby"> <label class="form-check-label"
                            for="Standby6">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_01" id="Rusak6" value="Rusak"> <label class="form-check-label"
                            for="Rusak6">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">cop_ssc_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_02" id="Normal7" value="Normal"> <label class="form-check-label"
                            for="Normal7">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_02" id="Tidak Normal7" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal7">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_02" id="Standby7" value="Standby"> <label class="form-check-label"
                            for="Standby7">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_02" id="Rusak7" value="Rusak"> <label class="form-check-label"
                            for="Rusak7">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">cop_ssc_03</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_03" id="Normal8" value="Normal"> <label class="form-check-label"
                            for="Normal8">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_03" id="Tidak Normal8" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal8">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_03" id="Standby8" value="Standby"> <label class="form-check-label"
                            for="Standby8">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_03" id="Rusak8" value="Rusak"> <label class="form-check-label"
                            for="Rusak8">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">cop_ssc_04</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_04" id="Normal9" value="Normal"> <label class="form-check-label"
                            for="Normal9">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_04" id="Tidak Normal9" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal9">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_04" id="Standby9" value="Standby"> <label class="form-check-label"
                            for="Standby9">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cop_ssc_04" id="Rusak9" value="Rusak"> <label class="form-check-label"
                            for="Rusak9">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">sand_cyclone_ssc01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sand_cyclone_ssc01" id="Normal10" value="Normal"> <label class="form-check-label"
                            for="Normal10">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sand_cyclone_ssc01" id="Tidak Normal10" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal10">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sand_cyclone_ssc01" id="Standby10" value="Standby"> <label class="form-check-label"
                            for="Standby10">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sand_cyclone_ssc01" id="Rusak10" value="Rusak"> <label class="form-check-label"
                            for="Rusak10">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">sand_cyclone_ssc02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sand_cyclone_ssc02" id="Normal11" value="Normal"> <label class="form-check-label"
                            for="Normal11">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sand_cyclone_ssc02" id="Tidak Normal11" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal11">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sand_cyclone_ssc02" id="Standby11" value="Standby"> <label class="form-check-label"
                            for="Standby11">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sand_cyclone_ssc02" id="Rusak11" value="Rusak"> <label class="form-check-label"
                            for="Rusak11">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">vacum_dryer_w__c_pump_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vacum_dryer_w__c_pump_01" id="Normal12" value="Normal"> <label
                            class="form-check-label" for="Normal12">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vacum_dryer_w__c_pump_01" id="Tidak Normal12" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal12">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vacum_dryer_w__c_pump_01" id="Standby12" value="Standby"> <label
                            class="form-check-label" for="Standby12">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="vacum_dryer_w__c_pump_01" id="Rusak12" value="Rusak"> <label class="form-check-label"
                            for="Rusak12">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">pop_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="pop_01" id="Normal13" value="Normal"> <label class="form-check-label"
                            for="Normal13">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="pop_01" id="Tidak Normal13" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal13">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="pop_01" id="Standby13" value="Standby"> <label class="form-check-label"
                            for="Standby13">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="pop_01" id="Rusak13" value="Rusak"> <label class="form-check-label"
                            for="Rusak13">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">pop_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="pop_02" id="Normal14" value="Normal"> <label class="form-check-label"
                            for="Normal14">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="pop_02" id="Tidak Normal14" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal14">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="pop_02" id="Standby14" value="Standby"> <label class="form-check-label"
                            for="Standby14">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="pop_02" id="Rusak14" value="Rusak"> <label class="form-check-label"
                            for="Rusak14">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">dotp_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dotp_01" id="Normal15" value="Normal"> <label class="form-check-label"
                            for="Normal15">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dotp_01" id="Tidak Normal15" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal15">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dotp_01" id="Standby15" value="Standby"> <label class="form-check-label"
                            for="Standby15">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dotp_01" id="Rusak15" value="Rusak"> <label class="form-check-label"
                            for="Rusak15">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">dotp_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dotp_02" id="Normal16" value="Normal"> <label class="form-check-label"
                            for="Normal16">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dotp_02" id="Tidak Normal16" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal16">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dotp_02" id="Standby16" value="Standby"> <label class="form-check-label"
                            for="Standby16">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dotp_02" id="Rusak16" value="Rusak"> <label class="form-check-label"
                            for="Rusak16">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">flow_meter</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="flow_meter" id="Normal17" value="Normal"> <label class="form-check-label"
                            for="Normal17">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="flow_meter" id="Tidak Normal17" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal17">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="flow_meter" id="Standby17" value="Standby"> <label class="form-check-label"
                            for="Standby17">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="flow_meter" id="Rusak17" value="Rusak"> <label class="form-check-label"
                            for="Rusak17">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">orp_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="orp_01" id="Normal18" value="Normal"> <label class="form-check-label"
                            for="Normal18">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="orp_01" id="Tidak Normal18" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal18">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="orp_01" id="Standby18" value="Standby"> <label class="form-check-label"
                            for="Standby18">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="orp_01" id="Rusak18" value="Rusak"> <label class="form-check-label"
                            for="Rusak18">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">orp_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="orp_02" id="Normal19" value="Normal"> <label class="form-check-label"
                            for="Normal19">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="orp_02" id="Tidak Normal19" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal19">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="orp_02" id="Standby19" value="Standby"> <label class="form-check-label"
                            for="Standby19">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="orp_02" id="Rusak19" value="Rusak"> <label class="form-check-label"
                            for="Rusak19">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">slugepump_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="slugepump_01" id="Normal20" value="Normal"> <label class="form-check-label"
                            for="Normal20">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="slugepump_01" id="Tidak Normal20" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal20">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="slugepump_01" id="Standby20" value="Standby"> <label class="form-check-label"
                            for="Standby20">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="slugepump_01" id="Rusak20" value="Rusak"> <label class="form-check-label"
                            for="Rusak20">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">slugedump_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="slugedump_02" id="Normal21" value="Normal"> <label class="form-check-label"
                            for="Normal21">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="slugedump_02" id="Tidak Normal21" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal21">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="slugedump_02" id="Standby21" value="Standby"> <label class="form-check-label"
                            for="Standby21">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="slugedump_02" id="Rusak21" value="Rusak"> <label class="form-check-label"
                            for="Rusak21">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">decanter_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="decanter_01" id="Normal22" value="Normal"> <label class="form-check-label"
                            for="Normal22">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="decanter_01" id="Tidak Normal22" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal22">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="decanter_01" id="Standby22" value="Standby"> <label class="form-check-label"
                            for="Standby22">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="decanter_01" id="Rusak22" value="Rusak"> <label class="form-check-label"
                            for="Rusak22">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">decanter_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="decanter_02" id="Normal23" value="Normal"> <label class="form-check-label"
                            for="Normal23">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="decanter_02" id="Tidak Normal23" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal23">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="decanter_02" id="Standby23" value="Standby"> <label class="form-check-label"
                            for="Standby23">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="decanter_02" id="Rusak23" value="Rusak"> <label class="form-check-label"
                            for="Rusak23">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">dcc</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="dcc"
                            id="Normal24" value="Normal"> <label class="form-check-label" for="Normal24">Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="dcc"
                            id="Tidak Normal24" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal24">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="dcc"
                            id="Standby24" value="Standby"> <label class="form-check-label"
                            for="Standby24">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="dcc"
                            id="Rusak24" value="Rusak"> <label class="form-check-label" for="Rusak24">Rusak</label>
                    </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">heavyphase_p01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="heavyphase_p01" id="Normal25" value="Normal"> <label class="form-check-label"
                            for="Normal25">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="heavyphase_p01" id="Tidak Normal25" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal25">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="heavyphase_p01" id="Standby25" value="Standby"> <label class="form-check-label"
                            for="Standby25">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="heavyphase_p01" id="Rusak25" value="Rusak"> <label class="form-check-label"
                            for="Rusak25">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">heavyphase_p02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="heavyphase_p02" id="Normal26" value="Normal"> <label class="form-check-label"
                            for="Normal26">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="heavyphase_p02" id="Tidak Normal26" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal26">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="heavyphase_p02" id="Standby26" value="Standby"> <label class="form-check-label"
                            for="Standby26">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="heavyphase_p02" id="Rusak26" value="Rusak"> <label class="form-check-label"
                            for="Rusak26">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">lighphase_p01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="lighphase_p01" id="Normal27" value="Normal"> <label class="form-check-label"
                            for="Normal27">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="lighphase_p01" id="Tidak Normal27" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal27">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="lighphase_p01" id="Standby27" value="Standby"> <label class="form-check-label"
                            for="Standby27">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="lighphase_p01" id="Rusak27" value="Rusak"> <label class="form-check-label"
                            for="Rusak27">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">lighphase_p02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="lighphase_p02" id="Normal28" value="Normal"> <label class="form-check-label"
                            for="Normal28">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="lighphase_p02" id="Tidak Normal28" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal28">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="lighphase_p02" id="Standby28" value="Standby"> <label class="form-check-label"
                            for="Standby28">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="lighphase_p02" id="Rusak28" value="Rusak"> <label class="form-check-label"
                            for="Rusak28">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">sluge_s01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_s01" id="Normal29" value="Normal"> <label class="form-check-label"
                            for="Normal29">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_s01" id="Tidak Normal29" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal29">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_s01" id="Standby29" value="Standby"> <label class="form-check-label"
                            for="Standby29">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_s01" id="Rusak29" value="Rusak"> <label class="form-check-label"
                            for="Rusak29">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">sluge_s02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_s02" id="Normal30" value="Normal"> <label class="form-check-label"
                            for="Normal30">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_s02" id="Tidak Normal30" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal30">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_s02" id="Standby30" value="Standby"> <label class="form-check-label"
                            for="Standby30">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_s02" id="Rusak30" value="Rusak"> <label class="form-check-label"
                            for="Rusak30">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">sluge_s03</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_s03" id="Normal31" value="Normal"> <label class="form-check-label"
                            for="Normal31">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_s03" id="Tidak Normal31" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal31">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_s03" id="Standby31" value="Standby"> <label class="form-check-label"
                            for="Standby31">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_s03" id="Rusak31" value="Rusak"> <label class="form-check-label"
                            for="Rusak31">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">rsp_01_tfp_2</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="rsp_01_tfp_2" id="Normal32" value="Normal"> <label class="form-check-label"
                            for="Normal32">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="rsp_01_tfp_2" id="Tidak Normal32" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal32">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="rsp_01_tfp_2" id="Standby32" value="Standby"> <label class="form-check-label"
                            for="Standby32">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="rsp_01_tfp_2" id="Rusak32" value="Rusak"> <label class="form-check-label"
                            for="Rusak32">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">rsp_02_tfp_2</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="rsp_02_tfp_2" id="Normal33" value="Normal"> <label class="form-check-label"
                            for="Normal33">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="rsp_02_tfp_2" id="Tidak Normal33" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal33">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="rsp_02_tfp_2" id="Standby33" value="Standby"> <label class="form-check-label"
                            for="Standby33">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="rsp_02_tfp_2" id="Rusak33" value="Rusak"> <label class="form-check-label"
                            for="Rusak33">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">sop_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sop_01" id="Normal34" value="Normal"> <label class="form-check-label"
                            for="Normal34">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sop_01" id="Tidak Normal34" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal34">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sop_01" id="Standby34" value="Standby"> <label class="form-check-label"
                            for="Standby34">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sop_01" id="Rusak34" value="Rusak"> <label class="form-check-label"
                            for="Rusak34">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">sop_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sop_02" id="Normal35" value="Normal"> <label class="form-check-label"
                            for="Normal35">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sop_02" id="Tidak Normal35" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal35">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sop_02" id="Standby35" value="Standby"> <label class="form-check-label"
                            for="Standby35">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sop_02" id="Rusak35" value="Rusak"> <label class="form-check-label"
                            for="Rusak35">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">hwp_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hwp_01" id="Normal36" value="Normal"> <label class="form-check-label"
                            for="Normal36">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hwp_01" id="Tidak Normal36" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal36">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hwp_01" id="Standby36" value="Standby"> <label class="form-check-label"
                            for="Standby36">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hwp_01" id="Rusak36" value="Rusak"> <label class="form-check-label"
                            for="Rusak36">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">hwp_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hwp_02" id="Normal37" value="Normal"> <label class="form-check-label"
                            for="Normal37">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hwp_02" id="Tidak Normal37" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal37">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hwp_02" id="Standby37" value="Standby"> <label class="form-check-label"
                            for="Standby37">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hwp_02" id="Rusak37" value="Rusak"> <label class="form-check-label"
                            for="Rusak37">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">compresor</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="compresor" id="Normal38" value="Normal"> <label class="form-check-label"
                            for="Normal38">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="compresor" id="Tidak Normal38" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal38">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="compresor" id="Standby38" value="Standby"> <label class="form-check-label"
                            for="Standby38">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="compresor" id="Rusak38" value="Rusak"> <label class="form-check-label"
                            for="Rusak38">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">fat_pit</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fat_pit" id="Normal39" value="Normal"> <label class="form-check-label"
                            for="Normal39">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fat_pit" id="Tidak Normal39" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal39">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fat_pit" id="Standby39" value="Standby"> <label class="form-check-label"
                            for="Standby39">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fat_pit" id="Rusak39" value="Rusak"> <label class="form-check-label"
                            for="Rusak39">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">oiltank_1</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="oiltank_1" id="Normal40" value="Normal"> <label class="form-check-label"
                            for="Normal40">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="oiltank_1" id="Tidak Normal40" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal40">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="oiltank_1" id="Standby40" value="Standby"> <label class="form-check-label"
                            for="Standby40">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="oiltank_1" id="Rusak40" value="Rusak"> <label class="form-check-label"
                            for="Rusak40">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">oiltank_2</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="oiltank_2" id="Normal41" value="Normal"> <label class="form-check-label"
                            for="Normal41">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="oiltank_2" id="Tidak Normal41" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal41">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="oiltank_2" id="Standby41" value="Standby"> <label class="form-check-label"
                            for="Standby41">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="oiltank_2" id="Rusak41" value="Rusak"> <label class="form-check-label"
                            for="Rusak41">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">buffertank_decanter</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="buffertank_decanter" id="Normal42" value="Normal"> <label class="form-check-label"
                            for="Normal42">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="buffertank_decanter" id="Tidak Normal42" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal42">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="buffertank_decanter" id="Standby42" value="Standby"> <label class="form-check-label"
                            for="Standby42">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="buffertank_decanter" id="Rusak42" value="Rusak"> <label class="form-check-label"
                            for="Rusak42">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">bt_ss</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="bt_ss"
                            id="Normal43" value="Normal"> <label class="form-check-label" for="Normal43">Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="bt_ss"
                            id="Tidak Normal43" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal43">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="bt_ss"
                            id="Standby43" value="Standby"> <label class="form-check-label"
                            for="Standby43">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="bt_ss"
                            id="Rusak43" value="Rusak"> <label class="form-check-label" for="Rusak43">Rusak</label>
                    </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">recovery_tank</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="recovery_tank" id="Normal44" value="Normal"> <label class="form-check-label"
                            for="Normal44">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="recovery_tank" id="Tidak Normal44" value="Tidak Normal"> <label
                            class="form-check-label" for="Tidak Normal44">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="recovery_tank" id="Standby44" value="Standby"> <label class="form-check-label"
                            for="Standby44">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="recovery_tank" id="Rusak44" value="Rusak"> <label class="form-check-label"
                            for="Rusak44">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">sluge_tank</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_tank" id="Normal45" value="Normal"> <label class="form-check-label"
                            for="Normal45">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_tank" id="Tidak Normal45" value="Tidak Normal"> <label class="form-check-label"
                            for="Tidak Normal45">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_tank" id="Standby45" value="Standby"> <label class="form-check-label"
                            for="Standby45">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="sluge_tank" id="Rusak45" value="Rusak"> <label class="form-check-label"
                            for="Rusak45">Rusak</label> </div>
                </div>

                <!-- radio  -->
                <div class="form-group col-12">
                    <label for="inputEmail4">Keterangan</label>
                    <textarea type="text" name="ket" class="form-control" placeholder="Masukkan Data"></textarea>
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