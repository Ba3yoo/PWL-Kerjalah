<script setup>
import Navbar from "@/Shared/Navbar.vue";
import Footer from "@/Shared/Footer.vue";
var accordions = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < accordions.length; i++) {
    accordions[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.nextElementSibling;

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/hubungikami.css';

@import '/resources/css/normalize.css';
</style>

<template>
<div class="bodyBack"></div>
<div class="whiteBack"></div>

<Navbar></Navbar>

<h1 style="color:white; margin-top: -400px;  padding-left: 0%; text-align: center; margin-bottom: 200px; font-size: 40pt;  ">
    Butuh bantuan?</h1>
<h1 style="color:#710000;    position :relative;    z-index: 0;  padding-left: 10%;  ">Pertanyaan Populer</h1>

<div class="accordion-container">
    <div class="accordion-wrapper">
        <div class="accordion">
            <b> Apa itu Kerjalah?</b>
        </div>
        <div class="accordion-content">
            <p>Kerjalah adalah sebuah platform pencarian kerja yang didedikasikan untuk membantu individu, baik yang
                memiliki disabilitas maupun yang tidak, dalam mencari pekerjaan. Website ini juga menawarkan fitur pelatihan
                untuk meningkatkan keterampilan pengguna.</p>
        </div>

        <div class="accordion">
            <b> Bagaimana cara menggunakan website pencari pekerjaan ini?</b>
        </div>
        <div class="accordion-content">
            <p>Untuk menggunakan website pencari pekerjaan kami, Anda perlu membuat akun pengguna. Setelah itu, Anda dapat
                mencari pekerjaan berdasarkan kata kunci, lokasi, kategori pekerjaan, atau perusahaan tertentu. Setelah
                menemukan pekerjaan yang diminati, Anda dapat melamar dengan mengirimkan resume dan mengisi formulir aplikasi
                online.</p>
        </div>

        <div class="accordion">
            <b> Apakah penggunaan website pencari pekerjaan ini gratis?</b>
        </div>
        <div class="accordion-content">
            <p>Banyak website pencari kerja menawarkan fitur dasar secara gratis, seperti mencari pekerjaan dan melamar.
                Namun, beberapa juga menawarkan langganan berbayar dengan manfaat tambahan, seperti akses ke pekerjaan premium
                atau alat pencarian yang lebih canggih. Untuk website ini kamu bisa bebas mencari dan melamar ke berbagai
                pekerjaan yang tersedia dengan gratis. Akan tetapi untuk fitur pelatihan akan ada biaya tambahan yang
                dikenakan pada pengguna.</p>
        </div>

    </div>

    <div class="accordion-wrapper2">
        <div class="accordion">
            <b> Bisakah saya mengunggah resume ke website pencari kerja?</b>
        </div>
        <div class="accordion-content">
            <p>Ya, sebagian besar website pencari kerja memungkinkan pengguna mengunggah resume mereka. Ini memudahkan
                perekrut melihat profil Anda dan mempertimbangkan Anda untuk pekerjaan yang relevan. Pastikan resume Anda
                terbaru dan mencakup informasi yang relevan tentang pengalaman kerja, pendidikan, dan keterampilan. Anda bisa
                mengunggah resume ketika telah melakukan login pada website ini.</p>
        </div>

        <div class="accordion">
            <b> Bagaimana cara membuat akun pengguna di website pencari pekerjaan ini? </b>
        </div>
        <div class="accordion-content">
            <p>Untuk membuat akun pengguna, caranya cukup mudah. Anda dapat mengklik tombol "Daftar" atau "Buat Akun" yang
                biasanya terletak di halaman utama. Kemudian, Anda akan diminta untuk mengisi formulir pendaftaran dengan
                informasi pribadi seperti nama, alamat email, dan kata sandi. Setelah mengisi formulir, klik tombol "Daftar"
                atau "Buat Akun" untuk menyelesaikan proses pendaftaran.</p>
        </div>

        <div class="accordion">
            <b>Apakah ada biaya yang harus dibayarkan untuk mengikuti pelatihan?</b>
        </div>
        <div class="accordion-content">
            <p>Biaya pelatihan dapat bervariasi tergantung pada jenis pelatihan dan penyedia layanan yang bekerja sama
                dengan website ini. Beberapa pelatihan mungkin gratis, sementara yang lain mungkin memerlukan biaya tertentu.
                Pastikan untuk melihat detail dan informasi harga terkait dengan setiap pelatihan sebelum memutuskan untuk
                mendaftar.</p>
        </div>

    </div>
</div>

<h1 style="position :relative; margin: top 10%;text-align: left;   padding-left: 10%;" id="support">Hubungi kami</h1>

<div class="container">

    <div>
        <p>
            Terima kasih telah menggunakan layanan kami. Kami sangat menghargai umpan balik Anda dan kami siap membantu
            Anda dengan pertanyaan atau permintaan yang Anda miliki.
            Jika Anda memiliki pertanyaan tentang penggunaan platform kami, bantuan dalam mengelola akun, atau permintaan
            informasi tambahan tentang lowongan kerja, jangan ragu untuk menghubungi tim dukungan kami. Kami akan dengan
            senang hati menjawab pertanyaan Anda dan memberikan bantuan yang Anda butuhkan.
        </p>
        <div>
            <h2>Atau hubungi kami melalui</h2>
            <p>081234567890<br>kerjalah.dev@gmail.com</p>
            <p>Jam operasional: 08.00 - 17.00</p>
        </div>
    </div>

    <div>
        <form>
            <div>
                <label for="nama">Nama</label>
                <input type="text" placeholder="Nama" id="nama" name="nama" required>
            </div>

            <div>
                <label for="email">Alamat E-mail</label>
                <input type="email" placeholder="Alamat E-mail" id="email" name="email" required>
            </div>

            <div>
                <label for="subjek">Subjek permasalahan</label>
                <input type="text" placeholder="Subjek permasalahan" id="subjek" name="subjek" required>
            </div>

            <div>
                <label for="deskripsi">Deskripsi permasalahan</label>
                <textarea id="deskripsi" placeholder="Deskripsi permasalahan" name="deskripsi" required></textarea>
            </div>

            <button type="submit">Kirim</button>
        </form>
    </div>
</div>

<Footer></Footer>
</template>

<script>

</script>
