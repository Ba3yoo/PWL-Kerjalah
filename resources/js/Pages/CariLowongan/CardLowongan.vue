<script setup>
import { defineProps } from 'vue';

const props = defineProps({
  id_lowongan:{
    type: String,
    required: true
  },
  jabatan: {
    type: String,
    required: true
  },
  id_perusahaan: {
    type: String,
    required: true
  },
  domisili: {
    type: String,
    required: true
  },
  gaji: {
    type: Number,
    required: true
  },
  logo:{
    type: String,
    required:true
  },
  nama_perusahaan:{
    type: String,
    required:true
  },
  logo:{
    type: String,
    required:true
  }
  
});


const navigateToDetail = () => {
  // Mendapatkan ID lowongan dari props dan menavigasi ke URL baru
  const detailUrl = `/detail/${props.id_lowongan}`;
  window.location.href = detailUrl;
};
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
        <img v-bind:src=props.logo alt="logo">
        <h3>{{ props.jabatan }}</h3>
        <p>Rp. {{ props.gaji }}</p>
        <p> {{ props.domisili }}</p>
        <p> {{ props.nama_perusahaan }}</p>

        <div style="text-align: right; margin-top: 30px;">
          <!-- <div class="lowongan a"><a :href="'detail/' + props.id_lowongan" style="text-decoration: none">Selengkapnya</a></div>          -->
          <div class="lowongan a"><a href="#"@click="navigateToDetail" style="text-decoration: none">Selengkapnya</a></div>         

           <br>
        </div>
    </div>
</template>