<script setup>

</script>
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/login.css';

</style>
<template>
    <div class="outer-container">


    <div class="container">
        <h1>Masuk Akun</h1>
        <p id="txt2">Buat kamu yang sudah terdaftar, silakan masuk ke akunmu.</p>

        <form>
            <label for="username"></label>
            <input type="email" placeholder="Alamat E-mail" id="username" name="username" required>

            <label for="password"></label>
            <input type="password" placeholder="Password" id="password" name="password" required>

            <input id="login" type="submit" value="Login"  class="login-btn" onclick="redirectToPage()">


        </form>

        <a style="text-decoration:none" id="lupa" href="https://google.com"> Lupa password? </a>
        <input type="checkbox" id="ingat" name="ingat" value="ingat">
        <label for="ingat" id="ingat"> Ingat saya</label>
        <hr>

        <p>Belum punya akun? <a style="text-decoration:none" id="daftar" href="register.html"> Daftarkan dirimu
        </a></p>

    </div>
    </div>

</template>

<style scoped>

</style>
