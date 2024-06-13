<script setup>


import Navbar from "@/Shared/Navbar.vue";
import Footer from "@/Shared/Footer.vue";


</script>

<script>

export default {
    props: {
        biodata: Object,
        email: String,
        riwayatPekerjaan: Array,
        riwayatPendidikan: Array,
    },
    mounted() {
        console.log(this.biodata);
    }
}



</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/profil.css';

</style>

<template>
    <body>

    <Navbar></Navbar>

    <div style="padding-top: 15%; " class="accordion-container">
        <div class="accordion-wrapper">
            <div class="accordion">
                <a href="/profil/biodata"><img style="width: 20px; height: 20px; float:right"
                                            src="/pen_square_icon_159935.png" alt="logo">
                </a>
                Biodata
            </div>
            <div class="accordion-content">
                <div style="margin-bottom: 0px;text-align: center;">
                    <div style="width: auto; height: auto;
          background-color: gray;
          padding: 20px;
          background-color: #eee;
          border-radius: 5px;
          border: solid 5px;
          border-color: #710000;
          margin: 10px;">

                        <div>
                            <img style="width: 90px; height: 90px;" src="/profile.png" alt="logo" height="30px">
                        </div>
                        <div style="">
                            <b> {{ biodata.nama_lengkap }} </b>
                            <br>
                            {{ email }} | {{ biodata.no_hp }}
                            <br>
                            <br>
                            {{ biodata.alamat }}
                            <br>
                            {{ biodata.jenis_kelamin }}
                            <br>
                            {{ biodata.tanggal_lahir }}


                        </div>


                    </div>


                </div>
            </div>


            <div class="accordion">
                <a href="/profil/riwayat-pekerjaan"><img style="width: 20px; height: 20px; float:right; rotate: 45deg"
                                                         src="/pngwing.com (1).png" alt="logo">
                </a>
                Riwayat Pekerjaan
            </div>
            <div class="accordion-content">
                <div style="margin-bottom: 10px;">
                    <div style="float:left;margin-top: 10px; margin-bottom: 10px;">
                        <div style="margin-bottom: 10px;" v-for="pekerjaan in riwayatPekerjaan" :key="pekerjaan.id_riwayat_pekerjaan">
                            {{pekerjaan.tanggal_mulai}} - {{pekerjaan.tanggal_selesai}}
                            <br>
                            <b>{{pekerjaan.jabatan}}</b>
                            <br>
                            {{pekerjaan.nama_perusahaan}}
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="accordion-wrapper2">
            <div class="accordion">
                <a href="/profil/riwayat-pendidikan"><img style="width: 20px; height: 20px; float:right; rotate: 45deg"
                                                      src="/pngwing.com (1).png" alt="logo">
                </a>
                Riwayat Pendidikan
            </div>
            <div class="accordion-content">
                <div style="margin-bottom: 10px;">
                    <div style="float:left;margin-top: 10px; margin-bottom: 10px;">
                        <div style="margin-bottom: 10px;"  v-for="pendidikan in riwayatPendidikan" :key="pendidikan.id_riwayat_pendidikan">
                            {{pendidikan.jenjang_pendidikan}}
                            <br>
                            <b>{{pendidikan.nama_instansi}}</b>
                            <br>
                            Lulus pada {{pendidikan.tanggal_lulus}}
                        </div>

                    </div>
                </div>


            </div>

            <div class="accordion">
                <a href="LamaranDikirim.html"><img style="width: 20px; height: 20px; float:right"
                                                   src="/pen_square_icon_159935.png" alt="logo">
                </a>
                Lamaran Dikirim
            </div>
            <div class="accordion-content">
                <div style="margin-bottom: 0px;">
                    <div style="width: auto; height: autopx;
          background-color: #eee;
          border-radius: 5px;
          border: solid 5px;
          border-color: #710000;

          padding: 20px;
          margin: 10px;">
                        <img style="width: 90px; height: 90px; "
                             src="https://images.glints.com/unsafe/160x0/glints-dashboard.s3.amazonaws.com/company-logo/4752b504910e5f6716089fe22640abd0.png"
                             alt="logo"
                             height="30px">

                        <!-- <div >
                          <img style="width: 90px; height: 90px;" src="https://images.glints.com/unsafe/160x0/glints-dashboard.s3.amazonaws.com/company-logo/4752b504910e5f6716089fe22640abd0.png" alt="logo" height="30px">
                        </div> -->
                        <div style="margin-left: 100px; margin-top: -80px;margin-bottom:20px">
                            <b>Accout Manager</b>
                            <br>
                            NOKA - NOU Creative Group.

                            <br>
                            27 Mei 2023


                        </div>


                    </div>


                </div>


            </div>

            <div class="accordion">
                <a href="CV.html"><img style="width: 20px; height: 20px; float:right" src="/pen_square_icon_159935.png"
                                       alt="logo">
                </a>
                Curriculum Vitae
            </div>
            <div class="accordion-content">

                <div class="box">
                    <div style="margin-top: 5px;">Resume</div>
                </div>
                <div class="box2">
                    <div style="margin-top: 5px;">Kirim CV</div>
                </div>

            </div>

        </div>
    </div>

    <Footer></Footer>
    </body>
</template>

<style scoped>

</style>
