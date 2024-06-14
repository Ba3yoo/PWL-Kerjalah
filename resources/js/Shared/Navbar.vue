<script setup>
import {Link} from '@inertiajs/vue3'

import {ref, onMounted} from "vue"
const logged = ref(false)

if (getSessionEmail() !== "") {
    logged.value = true;
}
function expand(){
    if(document.getElementById("unlist").style.display == "none" || document.getElementById("unlist").style.display == "") {
        document.getElementById("unlist").style.display = "block";
    } else {
        document.getElementById("unlist").style.display = "none";
    }
}
function redirectToPage() {
    window.location.href = "profil.html";
}

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/normalize.css';
@import '/resources/css/main.css';
@import '/resources/css/homeIn.css';

</style>

<template>
    <div class="top">
        <nav>
            <a href="/"><img class="logo" src="/logo.png" alt="logo" height="30px"></a>
            <ul id="unlist">
                <li><a class="lowongan" href="/search">Cari Lowongan</a></li>
                <li><a href="/artikel">Artikel</a></li>
                <li><a href="../#aboutUs">Tentang Kami</a></li>
                <li><a href="/faq">Tanya Jawab</a></li>
                <li class="login" v-if="!logged"><a href="/login">Login</a></li>
                <li class="daftar" v-if="!logged"><a href="/register">Daftar Sekarang</a></li>
                <li class="login" v-if="logged"><a href="/logout">Logout</a></li>
                <li class="profilImage" v-if="logged"><a href="/profil"><img src="/profile.png" alt="profile" width="35px" style="margin-top: -10px"></a></li>
                <li class="profil" v-if="logged"><a href="profil.html">Profil</a></li>
                
            </ul>
            
            <button class="hamburger" @click="expand"><span class="material-symbols-outlined">menu</span></button>
        </nav>

    </div>
</template>

<style scoped>

</style>
