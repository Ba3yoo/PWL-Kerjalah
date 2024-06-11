


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/login.css';

</style>
<template>
    <div class="outer-container">


    <div class="container">
        <h1>Login</h1>
        <p id="txt2">Buat kamu yang sudah terdaftar, silakan masuk ke akunmu.</p>

        <form action="/login/auth" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <label for="email"></label>
            <input type="email" placeholder="Alamat E-mail" id="email" name="email" required :value="email">

            <label for="password"></label>
            <input type="password" placeholder="Password" id="password" name="password" required>
            <p class="incorrect" v-if="email" style="color: red">Password salah</p>
            <p class="incorrect" v-if="emailNotFound" style="color: red">Email tidak ditemukan</p>

            <input id="login" type="submit" value="Login"  class="login-btn">

        </form>

        <a style="text-decoration:none" id="lupa" href="https://google.com"> Lupa password? </a>
        <input type="checkbox" id="ingat" name="ingat" value="ingat">
        <label for="ingat" id="ingat"> Ingat saya</label>
        <hr>

        <p>Belum punya akun? <a style="text-decoration:none" id="daftar" href="/register"> Daftarkan dirimu
        </a></p>

    </div>
    </div>

</template>



<script>

export default {
    props: {
        email: String,
        emailNotFound: Boolean,
    },
}

// export default{
//     props:['passed_data']
// }

// import {ref, onMounted} from "vue"
// const wrongPassword = ref(false)

// const props = defineProps(['passed_data'])


</script>

<style scoped>

</style>
