<script setup>
import { ref } from 'vue';
import Navbar from "@/Shared/Navbar.vue";
import Footer from "@/Shared/Footer.vue";
import CardLowongan from "./CardLowongan.vue";

const searchInput = ref('');

const searchJobs = () => {
    if (searchInput.value) {
        const url = new URL(window.location.href);
        url.pathname = `/search/${encodeURIComponent(searchInput.value)}`;
        window.location.href = url.href;
    }
};

document.title = 'Search';

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/normalize.css';
@import '/resources/css/main.css';
@import '/resources/css/Cari_LowonganIn.css';
</style>

<template>
<body>
    <Navbar></Navbar>

    <div style="height: 400px; background-image: url('/homeImageRed.png'); background-size: cover">
        <h1 style="position: absolute; top: 150px; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 40pt; text-align: center">Temukan jalur karir anda!</h1>

        <form @submit.prevent="searchJobs" style="position: absolute; top: 270px; left: 50%; transform: translate(-50%, -50%); text-align: center;">
            <input v-model="searchInput" type="text" placeholder="Cari pekerjaan..." style="padding: 10px; font-size: 16pt; width: 400px;">
            <button type="submit" style="padding: 10px 20px; margin: 10px; font-size: 16pt; cursor: pointer;">
                Cari
            </button>
        </form>
    </div>
    <div style="background-color: white; position: absolute; height: 100px; width: 99%; top: 400px; border-radius: 30px"></div>

    <main style="position: relative">
        <div style="text-align: center;">
            <h2 style="color: #710000;">LOWONGAN</h2>
            <hr color="red">
        </div>
        <br>

        <div class="container">
            <div v-for="lowongan in lowongan" :key="lowongan.id_lowongan">
                <CardLowongan 
                    :id_lowongan="lowongan.id_lowongan"
                    :jabatan="lowongan.jabatan"
                    :id_perusahaan="lowongan.id_perusahaan"
                    :domisili="lowongan.domisili"
                    :gaji="lowongan.gaji"
                    :nama_perusahaan="lowongan.nama_perusahaan"
                    :logo="lowongan.logo"
                />
            </div>
        </div>
    </main>
    <Footer></Footer>
</body>
</template>

<script>
export default {
  props: {
    lowongan: {
      type: Array,
      required: true
    }
  }
};
</script>