<script setup>
import Navbar from "@/Shared/Navbar.vue";
import Footer from "@/Shared/Footer.vue";
import { onMounted } from 'vue';

onMounted(() => {
  const script = document.createElement('script');
  script.src = "https://kit.fontawesome.com/2875035409.js";
  script.crossOrigin = "anonymous";
  document.head.appendChild(script);
});

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');
@import '/resources/css/normalize.css';
@import '/resources/css/infoKerja.css';
@import url('https://fonts.googleapis.com');
@import url('https://fonts.gstatic.com');

</style>

<template>
<body>
    <Navbar></Navbar>

    <div class="homeBack" style="background-image: url('/noka.jpg')">
        <div>
          <img v-bind:src=lowongan.logo alt="logo">
            <p>{{lowongan.nama_perusahaan}}</p>
            <h1>{{lowongan.jabatan}}</h1>
        </div>
    </div>

    <div class="infoSec">
        <div class="leftCard">
            <div class="infoCard">
                <h1>Deskripsi Pekerjaan</h1>
                <p>
                    {{lowongan.deskripsi}}
                </p>
               
            </div>
        </div>
        <div class="rightCard">
            <div class="apply" style="cursor: pointer">Kirim Lamaran</div>
            <div class="jobInfo">
                <i class="fa-solid fa-dollar-sign"></i>
                {{ formatCurrency(lowongan.gaji) }}<br>
                <i class="fa-regular fa-building"></i>
                {{lowongan.industri}}<br>
                <i class="fa-regular fa-clock"></i>
                {{lowongan.jam_kerja}} jam <br>
                <i class="fa-regular fa-user"></i>
                {{lowongan.pengalaman_kerja}} <br>
            </div>
            <div class="infoPerusahaan">
                <h3>Tentang Perusahaan</h3>
                <p>{{lowongan.deskripsi_perusahaan}}</p>
            </div>
        </div>
    </div>


    <Footer></Footer>
</body>
</template>

<script>
export default {
  props: {
    lowongan: {
      type: Object,
      required: true
    }
  },
  methods: {
    formatCurrency(value) {
      if (!value) return '0';
      return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    },
  },

};
</script>