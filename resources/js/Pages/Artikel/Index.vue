<script setup>
import Navbar from "@/Shared/Navbar.vue";
import Footer from "@/Shared/Footer.vue";
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/artikel.css';
@import '/resources/css/normalize.css';

</style>

<template>
    <div class="bodyBack">
        <Navbar></Navbar>
    <div style="height: 150px;"></div>
    <div class="whiteBack"></div>
    <h1 class="title">Artikel</h1>
    <div class="cardSec">
        <div class="cardContainer">
            <div class="card big-card">
                <div class="imageCard" style="background-image: url('/artikel1.jpg')"></div>
                <h1>Google Indonesia Buka Lowongan Kerja, Ini Posisi dan Syaratnya</h1>
                <p>Google Indonesia membuka sejumlah lowongan pekerjaan. Terdapat 6 posisi yang dibuka pada lowongan Google Indonesia ini, yakni Account Executif, Agency Business Lead, Enggagement Manager Profesional Services, Consulting Account Lead dan Principal Architect.
                    Dilansir dari laman karir Google, Senin (22/5/2023), berikut posisi beserta persyaratannya:</p>
                <span>rakyatpembaruan</span>
                <a href="https://rakyatpembaruan.com/google-indonesia-buka-lowongan-kerja-ini-posisi-dan-syaratnya/">Baca Selengkapnya</a>
            </div>
            <div class="card small">
                <div class="imageSmall" style="background-image: url('https://cdn1-production-images-kly.akamaized.net/iKT05H0vapLKchJWFaDpH5XS8M8=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/4210840/original/059751700_1667293031-pexels-pixabay-416405_1_.jpg')"></div>
                <h1>LinkedIn Beri Bocoran 5 Pekerjaan yang Tak Perlu Gelar Sarjana</h1>
                <span>liputan6.com</span>
                <a href="https://www.liputan6.com/bisnis/read/5297694/linkedin-beri-bocoran-5-pekerjaan-yang-tak-perlu-gelar-sarjana">Baca Selengkapnya</a>
            </div>
            <div class="card small">
                <div class="imageSmall" style="background-image: url('https://tugujatim.id/wp-content/uploads/2023/05/d72cf4a7-20fa-4270-88a2-19d1fc6055ee-1.jpg')"></div>
                <h1>5 Tips Sederhana Work From Home, Kerja dari Rumah Anti Ribet dan Makin Produktif!</h1>
                <span>tugujatim.id</span>
                <a href="https://tugujatim.id/5-tips-sederhana-work-from-home-anti-ribet/">Baca Selengkapnya</a>
            </div>
            <div class="card small cardMore">
                <div class="imageSmall" style="background-image: url('https://cdn1-production-images-kly.akamaized.net/oUDG-lXybc6j7lXsN77nzccSBDU=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/4441316/original/037299000_1685016079-003802300_1443414311-Engine-plant-line.jpg')"></div>
                <h1>Buruan Lamar! Honda Prospect Motor Buka Lowongan Kerja Teranyar</h1>
                <span>otosia.com</span>
                <a href="https://www.otosia.com/berita/read/5297988/buruan-lamar-honda-prospect-motor-buka-lowongan-kerja-teranyar">Baca Selengkapnya</a>
            </div>
        </div>
    </div>

    <div class="cardSec" style="padding-top: 80px">
        <div class="cardContainer">
            <div class="card big-card">
                <h1 class="hot">Sedang Hangat</h1>
                <div class="imageCard" style="background-image: url('https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01ghe7t6pyehg2btxax984642s.jpg')"></div>
                <h1>Induk Facebook Kembali PHK Pekerja, 6.000 Orang Dipecat Pekan Ini</h1>
                <p>Meta Platforms, induk perusahaan yang menaungi Facebook dan Instagram akan melakukan pemutusan hubungan kerja (PHK) massal lagi. Sebanyak 6.000 pekerja akan dipecat pekan ini.
                    PHK yang akan dilakukan pekan ini merupakan tahap terakhir dari rangkaian pemangkasan pekerja di Meta sejak tahun lalu. Sebelumnya, pada Maret 2023, perusahaan juga PHK 4.000 pekerja. </p>
                <span>kumparan.com</span>
                <a href="https://kumparan.com/kumparanbisnis/induk-facebook-kembali-phk-pekerja-6-000-orang-dipecat-pekan-ini-20TF6gz9D0R/2">Baca Selengkapnya</a>
            </div>
            <div class="card small">
                <div class="imageSmall" style="background-image: url('https://cdn0-production-images-kly.akamaized.net/U7S0R5GCU9HBxxnBVK1XWWrVHI0=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2851612/original/094239900_1562917663-1.jpg')"></div>
                <h1>Ikutan Samsung dan Amazon, Apple Larang Karyawannya Pakai ChatGPT Saat Kerja</h1>
                <span>liputan6.com</span>
                <a href="https://www.liputan6.com/tekno/read/5293088/ikutan-samsung-dan-amazon-apple-larang-karyawannya-pakai-chatgpt-saat-kerja">Baca Selengkapnya</a>
            </div>
            <div class="card small">
                <div class="imageSmall" style="background-image: url('https://asset.kompas.com/crops/kOyz2CGgcB3S5JBI_7aWpoYXTWc=/51x0:1131x720/750x500/data/photo/2022/02/25/6218946d91084.jpg')"></div>
                <h1>Elon Musk: WFH Tidak Adil untuk Karyawan yang Wajib WFO</h1>
                <span>kompas.com</span>
                <a href="https://tekno.kompas.com/read/2023/05/19/11000047/elon-musk-wfh-tidak-adil-untuk-karyawan-yang-wajib-wfo?page=all">Baca Selengkapnya</a>
            </div>
            <div class="card small cardMore">
                <div class="imageSmall" style="background-image: url('https://img.antaranews.com/cache/730x487/2023/05/24/9BAA6177-EFD6-4000-878C-71865665C434.jpeg.webp')"></div>
                <h1>Pemprov Kalimantan Timur siap berikan jaminan sosial pekerja informal</h1>
                <span>antaranews.com</span>
                <a href="https://kaltim.antaranews.com/berita/184761/pemprov-kaltim-siap-berikan-jaminan-sosial-pekerja-informal">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
        <Footer></Footer>


        </div>
</template>

<style scoped>

</style>
