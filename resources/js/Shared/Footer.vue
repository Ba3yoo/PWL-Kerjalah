<script setup>
import {ref, onMounted} from "vue";

const logged = ref(false)

if (getSessionEmail() !== "") {
    logged.value = true;
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/normalize.css';
@import '/resources/css/main.css';

</style>

<template>
    <div class="footer">
        <div class="footin">
            <div class="footlogo">
                <img src="/kerjakitaWhite.png" alt="logo" height="30px">
                <p>Follow us on</p>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook"></i>
            </div>

            <div class="cs contact">
                <h1>Layanan Contact Center</h1>
                <p>081234567890 <br>developer@kerjalah.com </p>
                <p>Jam operasional: 08.00 - 17.00</p>
            </div>

            <div class="cs peserta">
                <h1>Akun</h1>
                <p><a href="/login">Masuk</a><br><a href="/register">Daftar</a><br> <a  v-if="!logged"  href="/login">Profil</a><a  v-if="logged"  href="/profil">Profil</a></p>
            </div>

            <div class="cs pelatihan">
                <h1>Konten</h1>
                <p><a href="index.html">Beranda</a><br><a href="/search">Cari Lowongan</a><br><a href="/artikel">Artikel</a></p>
            </div>

            <div class="cs pertanyaan">
                <h1>Tanya</h1>
                <p><a href="/faq">Tanya jawab</a><br><a href="../#aboutUs">Tentang kami</a></p>
            </div>
        </div>

        <div class="footest">
            <hr>
            <span>© Kerjalah 2024</span>
            <span style="float: right"><a href="#">Kebijakan</a></span>
        </div>

    </div>
</template>

<style scoped>

</style>
