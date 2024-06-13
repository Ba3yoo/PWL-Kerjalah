<script>

export default {
  props: {
    lowongan: {
      type: Object,
      required: true
    }
  }
}

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/biodata.css';

</style>

<template>
    <div class="outer-container">



    <div class="container">
        <label  for="lamaran-form" style="margin-top: 10px; font-size: 30px;">Form Lamaran</label>
        <p>{{lowongan.nama_perusahaan}} / {{lowongan.jabatan}}</p>
            

        <form action="/profil/riwayat-pendidikan/new" method="post">

            <label for="isi-surat">Surat Lamaran</label>
            <textarea id="surat_lamaran" name="surat_lamaran" rows="20" cols="60"></textarea>
            
            <label for="link-cv">Link CV</label>
            <input type="text" id="cv_link" name="cv_link"  >

            <input id="send_lamar" type="submit" value="Simpan">
        </form>

    </div>


    </div>
</template>

<style scoped>

</style>
