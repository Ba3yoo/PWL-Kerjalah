<script setup>
import { defineProps } from 'vue';

const props = defineProps({
  
  lowongan:{
    type:Object,
    required:true
  },
});


const navigateToDetail = () => {
  // Mendapatkan ID lowongan dari props dan menavigasi ke URL baru
  const detailUrl = `/detail/${String(props.lowongan.id_lowongan)}`;
  window.location.href = detailUrl;
};
function formatCurrency(value) {
      if (!value) return '0';
      return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/normalize.css';
@import '/resources/css/main.css';
@import '/resources/css/Cari_LowonganIn.css';

</style>
<template>
    <div class="box" style="position: relative">
        <img v-bind:src=lowongan.logo alt="logo">
        <h3>{{ lowongan.jabatan }}</h3>
        <p>Rp. {{ formatCurrency(lowongan.gaji) }}</p>
        <p> {{ lowongan.domisili }}</p>
        <p> {{ lowongan.nama_perusahaan }}</p>

        <div style="text-align: right; margin-top: 30px;">
          <div class="lowongan a"><a href="#"@click="navigateToDetail" style="text-decoration: none">Selengkapnya</a></div>         

           <br>
        </div>
    </div>
</template>