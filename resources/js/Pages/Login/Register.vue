<script setup>

document.title = 'Register';


</script>



<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/register.css';

</style>

<template>
    <div class="outer-container">


    <div class="container">
        <h2>Pendaftaran</h2>
        <p>Mohon isi data berikut dengan benar</p>
        <form action="/register/new" method="post">

<!--            <input type="hidden" name="_token" :value="csrf">-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <label for="username"></label>
            <input type="text" placeholder="username" id="username" name="username" required >

            <label for="email"></label>
            <input type="email" placeholder="Alamat e-mail" id="email" name="email" required>

            <label for="password"></label>
            <input type="password" placeholder="Password" id="email" name="password" required>

            <label for="password"></label>
            <input type="password" placeholder="Ulangi Password" id="repassword" name="repassword" required>


            <input id="register"type="submit" value="Register">

            <input type="checkbox" id="setuju" name="setuju" value="setuju" required>
            <label for="setuju" id="setuju"> Saya menyetujui <a style="text-decoration:none" id="sk"
                                                                href="https://google.com">
                Syarat dan Ketentuan </a> dan <a style="text-decoration:none" id="privasi" href="https://google.com">
                Kebijakan Privasi </a> yang berlaku</label>
        </form>

        <hr>
        <p>Sudah punya akun? <a style="text-decoration:none" id="masuk" href="/login"> Masuk di sini </a></p>

    </div>
    </div>
</template>

<style scoped>

</style>
