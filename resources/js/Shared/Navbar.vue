<script setup>
import {Link} from '@inertiajs/vue3'
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/normalize.css';
@import '/resources/css/main.css';

</style>

<template>
    <div class="top">
        <nav>
            <a href="index.html"><img class="logo" src="/logo.png" alt="logo" height="30px"></a>
            <ul id="unlist">
                <li><a class="lowongan" href="/search">Cari Lowongan</a></li>
                <li><a href="Pelatihan.html">Pelatihan</a></li>
                <li><a href="artikel.html">Artikel</a></li>
                <li><a href="#aboutUs">Tentang Kami</a></li>
                <li><a href="HubungiKami.html">Tanya Jawab</a></li>
                <li class="login"><a href="/login">Login</a></li>
                <li class="daftar"><a href="register.html">Daftar Sekarang</a></li>
            </ul>
            <button class="hamburger" onclick="expand()"><span class="material-symbols-outlined">menu</span></button>
        </nav>
    </div>
</template>

<style scoped>

</style>
