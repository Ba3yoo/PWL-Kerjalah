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

document.title = 'Home';

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
            <p>Temukan peluang kerja yang menarik di Kerjalah,
                situs web yang memberikan aksesibilitas bagi semua individu untuk meraih kesuksesan karier.</p>
        </div>

    </div>
    <!--<img src="img/homeImage.jpg" alt="Home Image" width="100%">-->

    <div class="sec s1">
        <img src="/gambarHome1.jpg" alt="Orang" height="300px">
        <div class="secText">
            <h1>Semua bisa bekerja!</h1>
            <p>Temukan peluang karir yang sesuai dengan minat dan keterampilan Anda. Bersama-sama, kita wujudkan lingkungan kerja di mana setiap orang memiliki kesempatan untuk berkembang. Bergabunglah dengan kami dan jadilah bagian dari perjalanan menuju kesuksesan!</p>
            <button class="reg" @click="regs" style="cursor: pointer">Daftar Sekarang</button>
        </div>
    </div>

    <div class="sec s2">
        <img src="/gambarHome2.jpg" alt="Skill" height="300px">
        <div class="secText">
            <h1>Temukan Pekerjaan Impian Anda</h1>
<p>Tingkatkan peluang karir Anda dengan menggunakan Kerjalah. Jelajahi berbagai lowongan pekerjaan yang tersedia dan temukan posisi yang sesuai dengan keahlian dan minat Anda. Dengan alat pencarian yang canggih dan tips bermanfaat, Kerjalah membantu Anda dalam proses pencarian pekerjaan yang efektif dan efisien. Dapatkan akses ke berbagai perusahaan terkemuka dan persiapkan diri Anda untuk wawancara dengan materi persiapan yang komprehensif. Bergabunglah sekarang dan temukan jalan menuju kesuksesan karir Anda!</p>
<a href="/search">TELUSURI</a>
        </div>
    </div>

    <div class="sec s3" id="aboutUs">
        <h1 style="color: #710000">Tentang Website Kami</h1>
        <div class="card">
            <h1>Latar Belakang</h1>
            <p>Dengan adanya keperluan untuk mencari kerja bagi semua orang, maka perlu adanya platform untuk mempermudah pekerjaan ini. Kebutuhan mengenai tenaga kerja yang berkualitas juga menandakan perlu platform untuk mengasah skill pencari kerja.</p>
        </div>
        <div class="card">
            <h1>Tujuan</h1>
            <p>Kerjalah berkomitmen untuk menyediakan kesempatan kerja dan pelatihan kerja bagi semua individu. Kami bertujuan membantu menciptakan peluang karir yang setara bagi semua orang melalui fitur-fitur yang ramah pengguna, memastikan setiap pencari kerja dapat menemukan pekerjaan yang sesuai dengan keterampilan dan minat mereka.</p>
        </div>
        <div class="card">
            <h1>Tim Pengembang</h1>
            <p>Kerjalah dikembangkan oleh tim pengembang dari Universitas Brawijaya Fakultas Ilmu Komputer yang beranggotakan Halilintar Daiva Dirgantara, Muhammad Andra Dzaki, Urdha Egha Kirana, Mohammad 'Alwan Fauzi, Bayusatya Mufti Muhammad. Untuk melaporkan permasalahan terkait website,
                <a href="/faq">hubungi tim pengembang</a></p>
        </div>
    </div>

    <div class="sec s4" v-if="!logged">
        <div class="secText">
            <h1>Daftarkan dirimu Sekarang!</h1>
            <p>Bergabung bersama perusahaan-perusahaan yang telah terdaftar di Kerjalah dan dapatkan berbagai macam lowongan menarik untuk kesempatan kerja anda!</p>
            <button class="reg" @click="regs" style="cursor: pointer">Daftar Sekarang</button>

        </div>
    </div>

    <Footer></Footer>

</body>
</template>

<style scoped>

</style>
