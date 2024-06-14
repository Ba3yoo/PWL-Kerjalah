<script setup>
document.title = 'Riwayat Pekerjaan';
</script>
<script>

export default {
    props: {
        biodata: Object,
        email: String
    },
    mounted() {
        console.log(this.biodata);
    }
}

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/riwayatPekerjaan.css';

</style>

<template>
    <div class="outer-container">

        <div class="container">

            <div>
                <img src="/pngwing.com (1).png" alt="profile" width="90px" onclick="redirectToPage()"
                     style="width: 25px; height: 25px; border-radius: 100px; margin-left: 430px; position: absolute; margin-top:-15px;  cursor:pointer;
              ">
            </div>


            <form action="/profil/store-pekerjaan" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="user_id" :value="biodata.user_id">

                <label for="nama-sekolah">Nama Perusahaan</label>
                <input type="text" id="nama-depan" name="nama_perusahaan" required>


                <label for="nama-sekolah">Jabatan / Posisi</label>
                <input type="text" id="nama-depan" name="jabatan"  required>



                <div class="form-row">
                    <label for="Periode" class="half-input" >Periode mulai</label>
                    <label for="Periode" class="half-input" >Periode selesai</label>
                </div>
                <div class="form-row">
                    <input type="date" id="Periode" name="tanggal_mulai" class="half-input" required>
                    <input type="date" id="nomor-hp" name="tanggal_selesai" class="half-input" required>
                </div>

                <label for="nama-sekolah">Lokasi</label>
                <input type="text" id="nama-depan" name="lokasi_pekerjaan"  required>
                <label for="Penjelasan">Penjelasan Singkat</label>
                <textarea id="deskripsi" name="deskripsi" style="width: 445px; height: 150px; border: 1px solid #589eb9;
                border-radius: 5px;"></textarea>






                <input id="login" type="submit" value="Tambahkan" onclick="redirectToPage()">
            </form>

        </div>
    </div>

</template>

<style scoped>

</style>
