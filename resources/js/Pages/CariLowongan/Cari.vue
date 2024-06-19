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

    <div class="divCari" >
        <h1 class="h1Cari" >Temukan jalur karir anda!</h1>
        <form class="formCari" @submit.prevent="searchJobs" >
            <input class="inputCari" v-model="searchInput" type="text" placeholder="Cari pekerjaan..." >
            <button class="buttonCari" type="submit" >
                Cari
            </button>
        </form>
    </div>
    <div class="border" style=""></div>

    <main style="position: relative">
        <div style="text-align: center;">
            <h2 style="color: #710000;">LOWONGAN</h2>
            <hr color="red">
        </div>
        <br>

        <div class="container">
            <div v-for="lowongan in lowongan" :key="lowongan.id_lowongan">
                <CardLowongan 
                    :lowongan="lowongan"
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