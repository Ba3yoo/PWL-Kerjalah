<script setup>
import Navbar from "@/Shared/Navbar.vue";
import Footer from "@/Shared/Footer.vue";
import { onMounted } from 'vue';

onMounted(() => {
  const script = document.createElement('script');
  script.src = "https://kit.fontawesome.com/2875035409.js";
  script.crossOrigin = "anonymous";
  document.head.appendChild(script);
});

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');
@import '/resources/css/normalize.css';
@import '/resources/css/infoKerja.css';
@import url('https://fonts.googleapis.com');
@import url('https://fonts.gstatic.com');

</style>

<template>
<body>
    <Navbar></Navbar>

    <div class="homeBack" style="background-image: url('/noka.jpg')">
        <div>
          <img v-bind:src=lowongan.logo alt="logo">
            <p>NOKA - NOU Creative Group</p>
            <h1>{{lowongan.jabatan}}</h1>
        </div>
    </div>

    <div class="infoSec">
        <div class="leftCard">
            <div class="infoCard">
                <h1>Deskripsi Pekerjaan</h1>
                <p>
                    <ol>
                        <li>Menjadi Person in Charge untuk Project Kreatif, Branding, Penambahan Aset Brand</li>
                        <li>Menjaga timeline, menjadi penghubung antar stakeholder; Brand (kita) dengan pihak luar (Agency, Talent)</li>
                        <li>Berputar pada kegiatan branding, creative marketing, campaign!</li>
                    </ol> <br>
                    (Available untuk Intern position, candidate to part time / full time)
                </p>
                <h3>Opsi kerja jarak jauh</h3>
                <p>Thanks to technology, we no longer have to be physically present at the office to be productive. Joining our company allows you to work anywhere without place-constraint.</p>
                <h3>Pertumbuhan karir</h3>
                <p>Ever feel stuck with your career? We don't hire you simply because we needed to fill an empty slot. Together, we will help you shape and grow your career so you can progress further and rediscover your true sense of purpose at work.</p>
                <h3>Makanan & minuman gratis</h3>
                <p>Avoid wasting time and energy to buy food at the restaurant or hawker center by yourself. We'll provide the best food for you and your team. Make better use of your valuable time to rest, bond, and do other things that matter to you.</p>
                <h3>Pengembangan profesional</h3>
                <p>Every employee is an invaluable asset to any team; that's why we want to help you grow. Level up your skills and expertise through our professional co-development programs with notable organizations. We will cover the cost.</p>
                <h3>Skills</h3>
                <ol>
                    <li>Proactive And Fast Learner</li>
                    <li>Strong Communication And Interpersonal</li>
                    <li>Content Marketing</li>
                </ol>
            </div>
        </div>
        <div class="rightCard">
            <div class="apply" style="cursor: pointer">Kirim Lamaran</div>
            <div class="jobInfo">
                <i class="fa-solid fa-dollar-sign"></i>
                IDR1.500.000 - 2.000.000/Bulan <br>
                <i class="fa-regular fa-building"></i>
                Business Development & Sales <br>
                <i class="fa-regular fa-clock"></i>
                Part-Time <br>
                <i class="fa-regular fa-user"></i>
                Pengalaman kurang dari 1 tahun <br>
                <i class="fa-solid fa-wheelchair"></i>
                Tuna daksa
            </div>
            <div class="infoPerusahaan">
                <h3>Tentang Perusahaan</h3>
                <p>Head company of multiple brands, with their unique digital presence: <br>
                    <ol>
                        <li> PETANI DAUN (Home Care)</li>
                        <li>NOKA (Fragrance)</li>
                        <li>NOU COMMUNITY (Courses)</li>
                        <li>Unnanounced (Fragrance)</li>
                        <li>Under Development (Skincare)</li>
                    </ol>
                    Milestones:
                    <ul>
                        <li>70.000+ Physical Product Sold</li>
                        <li>15+ Team Members, Full of Gen Zs</li>
                        <li>2 - 3 years old company</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>


    <Footer></Footer>
</body>
</template>

<script>
export default {
  props: {
    lowongan: {
      type: Object,
      required: true
    }
  }
};
</script>