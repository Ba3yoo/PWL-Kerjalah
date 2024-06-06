<script setup>

import Layout from "@/Shared/Layout.vue";

</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/normalize.css';
@import '/resources/css/main.css';

#app {
    font-family: 'Work Sans', sans-serif;
    text-align: center;
    margin-top: 50px;
}
</style>

<template>
    <body>
    <div class="top">
        <nav>
            <a href="index.html"><img class="logo" src="/public/logo.png" alt="logo" height="30px"></a>
            <ul id="unlist">
                <li><a class="lowongan" href="Cari_Lowongan.html">Cari Lowongan</a></li>
                <li><a href="Pelatihan.html">Pelatihan</a></li>
                <li><a href="artikel.html">Artikel</a></li>
                <li><a href="#aboutUs">Tentang Kami</a></li>
                <li><a href="HubungiKami.html">Tanya Jawab</a></li>
                <li class="login"><a href="login.html">Login</a></li>
                <li class="daftar"><a href="register.html">Daftar Sekarang</a></li>
            </ul>
            <button class="hamburger" onclick="expand()"><span class="material-symbols-outlined">menu</span></button>
        </nav>
    </div>

    <div class="homeBack" style="background-image: url('/public/homeImageDark.jpg')">
        <div>
            <h1>Kesempatan setara<br>untuk&nbsp;semua</h1>
            <p>Temukan peluang kerja yang mendukung inklusi di KerjaKita,
                situs web yang memberikan aksesibilitas bagi semua individu untuk meraih kesuksesan karier.</p>
        </div>

    </div>
    <!--<img src="img/homeImage.jpg" alt="Home Image" width="100%">-->

    <div class="sec s1">
        <img src="/public/gambarHome1.jpg" alt="Orang" height="300px">
        <div class="secText">
            <h1>Semua bisa bekerja!</h1>
            <p>KerjaKita menyediakan website inovatif dengan fitur ramah disabilitas. Temukan peluang karir yang sesuai dengan minat, keterampilan, dan kebutuhan Anda. Bersama-sama, wujudkan lingkungan kerja inklusif di mana setiap orang memiliki kesempatan yang setara. Bergabunglah dengan kami dan jadilah bagian dari perubahan yang luar biasa ini!</p>
            <button class="reg" onclick="redirectToPage()" style="cursor: pointer">Daftar Sekarang</button>
        </div>
    </div>

    <div class="sec s2">
        <img src="/public/gambarHome2.jpg" alt="Skill" height="300px">
        <div class="secText">
            <h1>Tingkatkan skill anda</h1>
            <p>Perbarui dan tingkatkan keterampilan Anda dengan menggunakan KerjaKita. Temukan berbagai kursus online interaktif dan materi pembelajaran yang tersedia. Latih kemampuan Anda secara praktis dan relevan dengan dunia kerja yang kompetitif. KerjaKita menyediakan peluang bagi Anda untuk mengasah keterampilan Anda melalui pengalaman langsung. Bergabunglah sekarang dan jadilah versi terbaik dari diri Anda dalam mencapai kesuksesan karir!</p>
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
            <p>KerjaKita berusaha menciptakan kesempatan kerja inklusif dan pelatihan kerja bagi semua individu, termasuk mereka dengan disabilitas. Dengan fitur-fitur yang ramah disabilitas, KerjaKita berusaha untuk membantu menciptakan peluang karir yang setara bagi semua orang.</p>
        </div>
        <div class="card">
            <h1>Tim Pengembang</h1>
            <p>KerjaKita dikembangkan oleh tim pengembang dari Universitas Brawijaya Fakultas Ilmu Komputer yang beranggotakan Halilintar Daiva, Muhammad Andra, Urdha Egha, dan Mohammad 'Alwan. Untuk melaporkan permasalahan terkait website,
                <a href="HubungiKami.html#support">hubungi tim pengembang</a></p>
        </div>
    </div>

    <div class="sec s4">
        <div class="secText">
            <h1>Daftarkan dirimu Sekarang!</h1>
            <p>Bergabung bersama perusahaan-perusahaan yang telah terdaftar di KerjaKita dan dapatkan berbagai macam pelatihan untuk meningkatkan skill anda!</p>
            <button class="reg" onclick="redirectToPage()" style="cursor: pointer">Daftar Sekarang</button>
        </div>
    </div>

    <div class="footer">
        <div class="footin">
            <div class="footlogo">
                <img src="/public/kerjakitaWhite.png" alt="logo" height="30px">
                <p>Follow us on</p>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook"></i>
            </div>

            <div class="cs contact">
                <h1>Layanan Contact Center</h1>
                <p>081234567890 <br>kerjakita.dev@gmail.com <br> <a href="HubungiKami.html#support">Customer Support</a></p>
                <p>Jam operasional: 08.00 - 17.00</p>
            </div>

            <div class="cs peserta">
                <h1>Akun</h1>
                <p><a href="login.html">Masuk</a><br><a href="register.html">Daftar</a><br> <a href="login.html">Profil</a></p>
            </div>

            <div class="cs pelatihan">
                <h1>Konten</h1>
                <p><a href="index.html">Beranda</a><br><a href="Cari_Lowongan.html">Cari Lowongan</a><br><a href="Pelatihan.html">Pelatihan</a><br> <a href="artikel.html">Artikel</a></p>
            </div>

            <div class="cs pertanyaan">
                <h1>Tanya</h1>
                <p><a href="HubungiKami.html">Tanya jawab</a><br><a href="index.html#aboutUs">Tentang kami</a></p>
            </div>
        </div>

        <div class="footest">
            <hr>
            <span>© KerjaKita 2023</span>
            <span style="float: right"><a href="#">Kebijakan</a></span>
        </div>

    </div>

    </body>



</template>

<style scoped>

</style>
