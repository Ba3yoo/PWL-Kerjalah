<script setup>
import Navbar from "@/Shared/Navbar.vue";
import Footer from "@/Shared/Footer.vue";

import {ref, onMounted} from "vue"
const logged = ref(false)

if (getSessionEmail() !== "") {
    logged.value = true;
}

function regs() {
    window.location.href = "/register";
}

document.title = 'Home'

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/normalize.css';
@import '/resources/css/main.css';
</style>

<template>
<body>

    <Navbar></Navbar>

    <div class="homeBack" style="background-image: url('/homeImageDark.jpg')">
        <div>
            <h1>Kesempatan setara<br>untuk&nbsp;semua</h1>
            <p>Temukan peluang kerja yang mendukung inklusi di Kerjalah,
                situs web yang memberikan aksesibilitas bagi semua individu untuk meraih kesuksesan karier.</p>
        </div>

    </div>
    <!--<img src="img/homeImage.jpg" alt="Home Image" width="100%">-->

    <div class="sec s1">
        <img src="/gambarHome1.jpg" alt="Orang" height="300px">
        <div class="secText">
            <h1>Semua bisa bekerja!</h1>
            <p>Kerjalah menyediakan website inovatif dengan fitur ramah disabilitas. Temukan peluang karir yang sesuai dengan minat, keterampilan, dan kebutuhan Anda. Bersama-sama, wujudkan lingkungan kerja inklusif di mana setiap orang memiliki kesempatan yang setara. Bergabunglah dengan kami dan jadilah bagian dari perubahan yang luar biasa ini!</p>
            <button class="reg" onclick="redirectToPage()" style="cursor: pointer">Daftar Sekarang</button>
        </div>
    </div>

    <div class="sec s2">
        <img src="/gambarHome2.jpg" alt="Skill" height="300px">
        <div class="secText">
            <h1>Tingkatkan skill anda</h1>
            <p>Perbarui dan tingkatkan keterampilan Anda dengan menggunakan Kerjalah. Temukan berbagai kursus online interaktif dan materi pembelajaran yang tersedia. Latih kemampuan Anda secara praktis dan relevan dengan dunia kerja yang kompetitif. Kerjalah menyediakan peluang bagi Anda untuk mengasah keterampilan Anda melalui pengalaman langsung. Bergabunglah sekarang dan jadilah versi terbaik dari diri Anda dalam mencapai kesuksesan karir!</p>
            <a href="Pelatihan.html">TELUSURI</a>
        </div>
    </div>

    <div class="sec s3" id="aboutUs">
        <h1 style="color: #710000">Tentang Website Kami</h1>
        <div class="card">
            <h1>Latar Belakang</h1>
            <p>Dengan adanya keperluan untuk mencari kerja bagi semua orang, termasuk mereka yang disabilitas, maka perlu adanya platform untuk mempermudah pekerjaan ini. Kebutuhan mengenai tenaga kerja yang berkualitas juga menandakan perlu platform untuk mengasah skill pencari kerja.</p>
        </div>
        <div class="card">
            <h1>Tujuan</h1>
            <p>Kerjalah berusaha menciptakan kesempatan kerja inklusif dan pelatihan kerja bagi semua individu, termasuk mereka dengan disabilitas. Dengan fitur-fitur yang ramah disabilitas, Kerjalah berusaha untuk membantu menciptakan peluang karir yang setara bagi semua orang.</p>
        </div>
        <div class="card">
            <h1>Tim Pengembang</h1>
            <p>Kerjalah dikembangkan oleh tim pengembang dari Universitas Brawijaya Fakultas Ilmu Komputer yang beranggotakan Halilintar Daiva, Muhammad Andra, Urdha Egha, Mohammad 'Alwan, Bayusatya Mufti. Untuk melaporkan permasalahan terkait website,
                <a href="HubungiKami.html#support">hubungi tim pengembang</a></p>
        </div>
    </div>

    <div class="sec s4" v-if="!logged">
        <div class="secText">
            <h1>Daftarkan dirimu Sekarang!</h1>
            <p>Bergabung bersama perusahaan-perusahaan yang telah terdaftar di Kerjalah dan dapatkan berbagai macam pelatihan untuk meningkatkan skill anda!</p>
            <button class="reg" @click="regs" style="cursor: pointer">Daftar Sekarang</button>

        </div>
    </div>

    <Footer></Footer>

</body>
</template>

<style scoped>

</style>
