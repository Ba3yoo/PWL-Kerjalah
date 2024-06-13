<script>

// // export default {
// //     props: {
// //         biodata: Object,
// //         email: String
// //     },
// //     mounted() {
// //         console.log(this.biodata);
// //     }
// }

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/biodata.css';

</style>

<template>
    <div class="outer-container">



    <div class="container">
        <div>
            <!-- <img src="/pngwing.com (1).png" alt="profile" width="90px" onclick="redirectToPage()"
                 style="width: 25px; height: 25px; border-radius: 100px; margin-left: 430px; position: absolute; margin-top:-15px;  cursor:pointer;
              "> -->
        </div>


        <form action="/profil/riwayat-pendidikan/new" method="post">
            <!-- <input type="hidden" name="user_id" :value="biodata.user_id"> -->
            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
            <label  for="nama-lengkap" style="margin-top: 10px;">Placeholder</label>
            <!-- <select id="jenis-kelamin" name="jenjang_pendidikan" style="height: 40px; width: 215px;">
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select> -->

            <label for="nama-sekolah">PLACE2</label>
            <input type="text" id="nama_instansi" name="nama_instansi"  >



            <label for="Periode">PLACE3</label>
            <input type="date" id="tanggal_lulus" name="tanggal_lulus" required>

            <input id="login" type="submit" value="Simpan">
        </form>

    </div>


    </div>
</template>

<style scoped>

</style>
