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
        <form action="proses/administrator/proses_tambah_nut_kernel.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">




                <div class="form-group col-md-12 col-12">
                    <label for="inputEmail4">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" placeholder="Masukkan Tanggal" required>
                </div>

                <div class="col-12">
                    <label>
                        <bold> nut_kernel</bold>
                    </label>
                </div>
                <!-- radio  -->
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">hcbc</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="hcbc"
                            id="Normal2" value="Normal"> <label class="form-check-label" for="Normal2">Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="hcbc"
                            id="Tidak Normal2" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="hcbc"
                            id="Standby2" value="Standby"> <label class="form-check-label" for="Standby2"> <label
                                class="form-check-label" for="Standby2">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="hcbc"
                            id="Rusak2" value="Rusak"> <label class="form-check-label" for="Rusak2">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">fcf_a__l_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fcf_a__l_01" id="Normal3" value="Normal"> <label class="form-check-label"
                            for="Normal3">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fcf_a__l_01" id="Tidak Normal3" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fcf_a__l_01" id="Standby3" value="Standby"> <label class="form-check-label"
                            for="Standby3"> <label class="form-check-label" for="Standby3">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fcf_a__l_01" id="Rusak3" value="Rusak"> <label class="form-check-label"
                            for="Rusak3">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">fcf_a__l_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fcf_a__l_02" id="Normal4" value="Normal"> <label class="form-check-label"
                            for="Normal4">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fcf_a__l_02" id="Tidak Normal4" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fcf_a__l_02" id="Standby4" value="Standby"> <label class="form-check-label"
                            for="Standby4"> <label class="form-check-label" for="Standby4">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="fcf_a__l_02" id="Rusak4" value="Rusak"> <label class="form-check-label"
                            for="Rusak4">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">npd_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="npd_01" id="Normal5" value="Normal"> <label class="form-check-label"
                            for="Normal5">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="npd_01" id="Tidak Normal5" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="npd_01" id="Standby5" value="Standby"> <label class="form-check-label" for="Standby5">
                            <label class="form-check-label" for="Standby5">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="npd_01" id="Rusak5" value="Rusak"> <label class="form-check-label"
                            for="Rusak5">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">npd_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="npd_02" id="Normal6" value="Normal"> <label class="form-check-label"
                            for="Normal6">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="npd_02" id="Tidak Normal6" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="npd_02" id="Standby6" value="Standby"> <label class="form-check-label" for="Standby6">
                            <label class="form-check-label" for="Standby6">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="npd_02" id="Rusak6" value="Rusak"> <label class="form-check-label"
                            for="Rusak6">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">inclened_wnc_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="inclened_wnc_01" id="Normal7" value="Normal"> <label class="form-check-label"
                            for="Normal7">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="inclened_wnc_01" id="Tidak Normal7" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="inclened_wnc_01" id="Standby7" value="Standby"> <label class="form-check-label"
                            for="Standby7"> <label class="form-check-label" for="Standby7">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="inclened_wnc_01" id="Rusak7" value="Rusak"> <label class="form-check-label"
                            for="Rusak7">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">inclened_wnc_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="inclened_wnc_02" id="Normal8" value="Normal"> <label class="form-check-label"
                            for="Normal8">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="inclened_wnc_02" id="Tidak Normal8" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="inclened_wnc_02" id="Standby8" value="Standby"> <label class="form-check-label"
                            for="Standby8"> <label class="form-check-label" for="Standby8">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="inclened_wnc_02" id="Rusak8" value="Rusak"> <label class="form-check-label"
                            for="Rusak8">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">wet_ne_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wet_ne_01" id="Normal9" value="Normal"> <label class="form-check-label"
                            for="Normal9">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wet_ne_01" id="Tidak Normal9" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wet_ne_01" id="Standby9" value="Standby"> <label class="form-check-label"
                            for="Standby9"> <label class="form-check-label" for="Standby9">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wet_ne_01" id="Rusak9" value="Rusak"> <label class="form-check-label"
                            for="Rusak9">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">wet_ne_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wet_ne_02" id="Normal10" value="Normal"> <label class="form-check-label"
                            for="Normal10">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wet_ne_02" id="Tidak Normal10" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wet_ne_02" id="Standby10" value="Standby"> <label class="form-check-label"
                            for="Standby10"> <label class="form-check-label" for="Standby10">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wet_ne_02" id="Rusak10" value="Rusak"> <label class="form-check-label"
                            for="Rusak10">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">nut_df_a__l01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="nut_df_a__l01" id="Normal11" value="Normal"> <label class="form-check-label"
                            for="Normal11">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="nut_df_a__l01" id="Tidak Normal11" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="nut_df_a__l01" id="Standby11" value="Standby"> <label class="form-check-label"
                            for="Standby11"> <label class="form-check-label" for="Standby11">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="nut_df_a__l01" id="Rusak11" value="Rusak"> <label class="form-check-label"
                            for="Rusak11">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">primari_wf_a__l01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="primari_wf_a__l01" id="Normal12" value="Normal"> <label class="form-check-label"
                            for="Normal12">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="primari_wf_a__l01" id="Tidak Normal12" value="Tidak Normal">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="primari_wf_a__l01" id="Standby12" value="Standby"> <label class="form-check-label"
                            for="Standby12"> <label class="form-check-label" for="Standby12">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="primari_wf_a__l01" id="Rusak12" value="Rusak"> <label class="form-check-label"
                            for="Rusak12">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">primari_wf_a__l02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="primari_wf_a__l02" id="Normal13" value="Normal"> <label class="form-check-label"
                            for="Normal13">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="primari_wf_a__l02" id="Tidak Normal13" value="Tidak Normal">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="primari_wf_a__l02" id="Standby13" value="Standby"> <label class="form-check-label"
                            for="Standby13"> <label class="form-check-label" for="Standby13">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="primari_wf_a__l02" id="Rusak13" value="Rusak"> <label class="form-check-label"
                            for="Rusak13">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">scondary_wf_a__l01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="scondary_wf_a__l01" id="Normal14" value="Normal"> <label class="form-check-label"
                            for="Normal14">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="scondary_wf_a__l01" id="Tidak Normal14" value="Tidak Normal">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="scondary_wf_a__l01" id="Standby14" value="Standby"> <label class="form-check-label"
                            for="Standby14"> <label class="form-check-label" for="Standby14">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="scondary_wf_a__l01" id="Rusak14" value="Rusak"> <label class="form-check-label"
                            for="Rusak14">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">scondary_wf_a__l02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="scondary_wf_a__l02" id="Normal15" value="Normal"> <label class="form-check-label"
                            for="Normal15">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="scondary_wf_a__l02" id="Tidak Normal15" value="Tidak Normal">Tidak Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="scondary_wf_a__l02" id="Standby15" value="Standby"> <label class="form-check-label"
                            for="Standby15"> <label class="form-check-label" for="Standby15">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="scondary_wf_a__l02" id="Rusak15" value="Rusak"> <label class="form-check-label"
                            for="Rusak15">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">nut_hopper</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="nut_hopper" id="Normal16" value="Normal"> <label class="form-check-label"
                            for="Normal16">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="nut_hopper" id="Tidak Normal16" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="nut_hopper" id="Standby16" value="Standby"> <label class="form-check-label"
                            for="Standby16"> <label class="form-check-label" for="Standby16">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="nut_hopper" id="Rusak16" value="Rusak"> <label class="form-check-label"
                            for="Rusak16">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">rm_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_01"
                            id="Normal17" value="Normal"> <label class="form-check-label" for="Normal17">Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_01"
                            id="Tidak Normal17" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_01"
                            id="Standby17" value="Standby"> <label class="form-check-label" for="Standby17"> <label
                                class="form-check-label" for="Standby17">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_01"
                            id="Rusak17" value="Rusak"> <label class="form-check-label" for="Rusak17">Rusak</label>
                    </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">rm_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_02"
                            id="Normal18" value="Normal"> <label class="form-check-label" for="Normal18">Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_02"
                            id="Tidak Normal18" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_02"
                            id="Standby18" value="Standby"> <label class="form-check-label" for="Standby18"> <label
                                class="form-check-label" for="Standby18">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_02"
                            id="Rusak18" value="Rusak"> <label class="form-check-label" for="Rusak18">Rusak</label>
                    </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">rm_03</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_03"
                            id="Normal19" value="Normal"> <label class="form-check-label" for="Normal19">Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_03"
                            id="Tidak Normal19" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_03"
                            id="Standby19" value="Standby"> <label class="form-check-label" for="Standby19"> <label
                                class="form-check-label" for="Standby19">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_03"
                            id="Rusak19" value="Rusak"> <label class="form-check-label" for="Rusak19">Rusak</label>
                    </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">rm_04</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_04"
                            id="Normal20" value="Normal"> <label class="form-check-label" for="Normal20">Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_04"
                            id="Tidak Normal20" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_04"
                            id="Standby20" value="Standby"> <label class="form-check-label" for="Standby20"> <label
                                class="form-check-label" for="Standby20">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="rm_04"
                            id="Rusak20" value="Rusak"> <label class="form-check-label" for="Rusak20">Rusak</label>
                    </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">cmc_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cmc_01" id="Normal21" value="Normal"> <label class="form-check-label"
                            for="Normal21">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cmc_01" id="Tidak Normal21" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cmc_01" id="Standby21" value="Standby"> <label class="form-check-label"
                            for="Standby21"> <label class="form-check-label" for="Standby21">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cmc_01" id="Rusak21" value="Rusak"> <label class="form-check-label"
                            for="Rusak21">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">cmc_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cmc_02" id="Normal22" value="Normal"> <label class="form-check-label"
                            for="Normal22">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cmc_02" id="Tidak Normal22" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cmc_02" id="Standby22" value="Standby"> <label class="form-check-label"
                            for="Standby22"> <label class="form-check-label" for="Standby22">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="cmc_02" id="Rusak22" value="Rusak"> <label class="form-check-label"
                            for="Rusak22">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">cms</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="cms"
                            id="Normal23" value="Normal"> <label class="form-check-label" for="Normal23">Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="cms"
                            id="Tidak Normal23" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="cms"
                            id="Standby23" value="Standby"> <label class="form-check-label" for="Standby23"> <label
                                class="form-check-label" for="Standby23">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="cms"
                            id="Rusak23" value="Rusak"> <label class="form-check-label" for="Rusak23">Rusak</label>
                    </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">hp01_line1</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp01_line1" id="Normal24" value="Normal"> <label class="form-check-label"
                            for="Normal24">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp01_line1" id="Tidak Normal24" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp01_line1" id="Standby24" value="Standby"> <label class="form-check-label"
                            for="Standby24"> <label class="form-check-label" for="Standby24">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp01_line1" id="Rusak24" value="Rusak"> <label class="form-check-label"
                            for="Rusak24">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">hp02_line1</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp02_line1" id="Normal25" value="Normal"> <label class="form-check-label"
                            for="Normal25">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp02_line1" id="Tidak Normal25" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp02_line1" id="Standby25" value="Standby"> <label class="form-check-label"
                            for="Standby25"> <label class="form-check-label" for="Standby25">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp02_line1" id="Rusak25" value="Rusak"> <label class="form-check-label"
                            for="Rusak25">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">hp03_line1</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp03_line1" id="Normal26" value="Normal"> <label class="form-check-label"
                            for="Normal26">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp03_line1" id="Tidak Normal26" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp03_line1" id="Standby26" value="Standby"> <label class="form-check-label"
                            for="Standby26"> <label class="form-check-label" for="Standby26">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp03_line1" id="Rusak26" value="Rusak"> <label class="form-check-label"
                            for="Rusak26">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">hp01_line2</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp01_line2" id="Normal27" value="Normal"> <label class="form-check-label"
                            for="Normal27">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp01_line2" id="Tidak Normal27" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp01_line2" id="Standby27" value="Standby"> <label class="form-check-label"
                            for="Standby27"> <label class="form-check-label" for="Standby27">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp01_line2" id="Rusak27" value="Rusak"> <label class="form-check-label"
                            for="Rusak27">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">hp02_line2</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp02_line2" id="Normal28" value="Normal"> <label class="form-check-label"
                            for="Normal28">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp02_line2" id="Tidak Normal28" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp02_line2" id="Standby28" value="Standby"> <label class="form-check-label"
                            for="Standby28"> <label class="form-check-label" for="Standby28">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp02_line2" id="Rusak28" value="Rusak"> <label class="form-check-label"
                            for="Rusak28">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">hp03_line2</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp03_line2" id="Normal29" value="Normal"> <label class="form-check-label"
                            for="Normal29">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp03_line2" id="Tidak Normal29" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp03_line2" id="Standby29" value="Standby"> <label class="form-check-label"
                            for="Standby29"> <label class="form-check-label" for="Standby29">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="hp03_line2" id="Rusak29" value="Rusak"> <label class="form-check-label"
                            for="Rusak29">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">wetshell_c</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wetshell_c" id="Normal30" value="Normal"> <label class="form-check-label"
                            for="Normal30">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wetshell_c" id="Tidak Normal30" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wetshell_c" id="Standby30" value="Standby"> <label class="form-check-label"
                            for="Standby30"> <label class="form-check-label" for="Standby30">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wetshell_c" id="Rusak30" value="Rusak"> <label class="form-check-label"
                            for="Rusak30">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">wetshell_tf</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wetshell_tf" id="Normal31" value="Normal"> <label class="form-check-label"
                            for="Normal31">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wetshell_tf" id="Tidak Normal31" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wetshell_tf" id="Standby31" value="Standby"> <label class="form-check-label"
                            for="Standby31"> <label class="form-check-label" for="Standby31">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wetshell_tf" id="Rusak31" value="Rusak"> <label class="form-check-label"
                            for="Rusak31">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">wkc_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wkc_01" id="Normal32" value="Normal"> <label class="form-check-label"
                            for="Normal32">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wkc_01" id="Tidak Normal32" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wkc_01" id="Standby32" value="Standby"> <label class="form-check-label"
                            for="Standby32"> <label class="form-check-label" for="Standby32">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wkc_01" id="Rusak32" value="Rusak"> <label class="form-check-label"
                            for="Rusak32">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">wkc_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wkc_02" id="Normal33" value="Normal"> <label class="form-check-label"
                            for="Normal33">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wkc_02" id="Tidak Normal33" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wkc_02" id="Standby33" value="Standby"> <label class="form-check-label"
                            for="Standby33"> <label class="form-check-label" for="Standby33">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wkc_02" id="Rusak33" value="Rusak"> <label class="form-check-label"
                            for="Rusak33">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">wkc_03</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wkc_03" id="Normal34" value="Normal"> <label class="form-check-label"
                            for="Normal34">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wkc_03" id="Tidak Normal34" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wkc_03" id="Standby34" value="Standby"> <label class="form-check-label"
                            for="Standby34"> <label class="form-check-label" for="Standby34">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wkc_03" id="Rusak34" value="Rusak"> <label class="form-check-label"
                            for="Rusak34">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">wke_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wke_01" id="Normal35" value="Normal"> <label class="form-check-label"
                            for="Normal35">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wke_01" id="Tidak Normal35" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wke_01" id="Standby35" value="Standby"> <label class="form-check-label"
                            for="Standby35"> <label class="form-check-label" for="Standby35">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wke_01" id="Rusak35" value="Rusak"> <label class="form-check-label"
                            for="Rusak35">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">wke_02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wke_02" id="Normal36" value="Normal"> <label class="form-check-label"
                            for="Normal36">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wke_02" id="Tidak Normal36" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wke_02" id="Standby36" value="Standby"> <label class="form-check-label"
                            for="Standby36"> <label class="form-check-label" for="Standby36">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="wke_02" id="Rusak36" value="Rusak"> <label class="form-check-label"
                            for="Rusak36">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">wkdc</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="wkdc"
                            id="Normal37" value="Normal"> <label class="form-check-label" for="Normal37">Normal</label>
                    </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="wkdc"
                            id="Tidak Normal37" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="wkdc"
                            id="Standby37" value="Standby"> <label class="form-check-label" for="Standby37"> <label
                                class="form-check-label" for="Standby37">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="wkdc"
                            id="Rusak37" value="Rusak"> <label class="form-check-label" for="Rusak37">Rusak</label>
                    </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">kds_hf01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kds_hf01" id="Normal38" value="Normal"> <label class="form-check-label"
                            for="Normal38">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kds_hf01" id="Tidak Normal38" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kds_hf01" id="Standby38" value="Standby"> <label class="form-check-label"
                            for="Standby38"> <label class="form-check-label" for="Standby38">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kds_hf01" id="Rusak38" value="Rusak"> <label class="form-check-label"
                            for="Rusak38">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">kds_hf02</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kds_hf02" id="Normal39" value="Normal"> <label class="form-check-label"
                            for="Normal39">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kds_hf02" id="Tidak Normal39" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kds_hf02" id="Standby39" value="Standby"> <label class="form-check-label"
                            for="Standby39"> <label class="form-check-label" for="Standby39">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kds_hf02" id="Rusak39" value="Rusak"> <label class="form-check-label"
                            for="Rusak39">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">kds_hf03</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kds_hf03" id="Normal40" value="Normal"> <label class="form-check-label"
                            for="Normal40">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kds_hf03" id="Tidak Normal40" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kds_hf03" id="Standby40" value="Standby"> <label class="form-check-label"
                            for="Standby40"> <label class="form-check-label" for="Standby40">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kds_hf03" id="Rusak40" value="Rusak"> <label class="form-check-label"
                            for="Rusak40">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">bottom_kc</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="bottom_kc" id="Normal41" value="Normal"> <label class="form-check-label"
                            for="Normal41">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="bottom_kc" id="Tidak Normal41" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="bottom_kc" id="Standby41" value="Standby"> <label class="form-check-label"
                            for="Standby41"> <label class="form-check-label" for="Standby41">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="bottom_kc" id="Rusak41" value="Rusak"> <label class="form-check-label"
                            for="Rusak41">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">dry_ktf</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dry_ktf" id="Normal42" value="Normal"> <label class="form-check-label"
                            for="Normal42">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dry_ktf" id="Tidak Normal42" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dry_ktf" id="Standby42" value="Standby"> <label class="form-check-label"
                            for="Standby42"> <label class="form-check-label" for="Standby42">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="dry_ktf" id="Rusak42" value="Rusak"> <label class="form-check-label"
                            for="Rusak42">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">kbs_01</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kbs_01" id="Normal43" value="Normal"> <label class="form-check-label"
                            for="Normal43">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kbs_01" id="Tidak Normal43" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kbs_01" id="Standby43" value="Standby"> <label class="form-check-label"
                            for="Standby43"> <label class="form-check-label" for="Standby43">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kbs_01" id="Rusak43" value="Rusak"> <label class="form-check-label"
                            for="Rusak43">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">ltds_al1</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ltds_al1" id="Normal44" value="Normal"> <label class="form-check-label"
                            for="Normal44">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ltds_al1" id="Tidak Normal44" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ltds_al1" id="Standby44" value="Standby"> <label class="form-check-label"
                            for="Standby44"> <label class="form-check-label" for="Standby44">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ltds_al1" id="Rusak44" value="Rusak"> <label class="form-check-label"
                            for="Rusak44">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">ltds_al2</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ltds_al2" id="Normal45" value="Normal"> <label class="form-check-label"
                            for="Normal45">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ltds_al2" id="Tidak Normal45" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ltds_al2" id="Standby45" value="Standby"> <label class="form-check-label"
                            for="Standby45"> <label class="form-check-label" for="Standby45">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="ltds_al2" id="Rusak45" value="Rusak"> <label class="form-check-label"
                            for="Rusak45">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">kernel_silo1</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kernel_silo1" id="Normal46" value="Normal"> <label class="form-check-label"
                            for="Normal46">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kernel_silo1" id="Tidak Normal46" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kernel_silo1" id="Standby46" value="Standby"> <label class="form-check-label"
                            for="Standby46"> <label class="form-check-label" for="Standby46">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kernel_silo1" id="Rusak46" value="Rusak"> <label class="form-check-label"
                            for="Rusak46">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">kernel_silo2</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kernel_silo2" id="Normal47" value="Normal"> <label class="form-check-label"
                            for="Normal47">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kernel_silo2" id="Tidak Normal47" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kernel_silo2" id="Standby47" value="Standby"> <label class="form-check-label"
                            for="Standby47"> <label class="form-check-label" for="Standby47">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kernel_silo2" id="Rusak47" value="Rusak"> <label class="form-check-label"
                            for="Rusak47">Rusak</label> </div>
                </div>
                <div class="form-group col-12"><label class="d-block" for="inputEmail4">kernel_silo3</label>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kernel_silo3" id="Normal48" value="Normal"> <label class="form-check-label"
                            for="Normal48">Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kernel_silo3" id="Tidak Normal48" value="Tidak Normal">Tidak Normal</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kernel_silo3" id="Standby48" value="Standby"> <label class="form-check-label"
                            for="Standby48"> <label class="form-check-label" for="Standby48">Standby</label> </div>
                    <div class="form-check form-check-inline"> <input class="form-check-input" type="radio"
                            name="kernel_silo3" id="Rusak48" value="Rusak"> <label class="form-check-label"
                            for="Rusak48">Rusak</label> </div>
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