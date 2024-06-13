<script>
export default {
    props: {
        lowongan: {
            type: Object,
            required: true
        },
        user_id: {
            type: String,
            required: true
        }
    }
}
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0");

@import "/resources/css/biodata.css";
</style>

<template>
<div class="outer-container">
    <div class="container">
        <label for="lamaran-form" style="margin-top: 10px; font-size: 30px">Form Lamaran</label>
        <p>{{ lowongan.nama_perusahaan }} / {{ lowongan.jabatan }}</p>

        <form action="../apply/store-application" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="user_id" value="user_id">
            <input type="hidden" name="id_lowongan" value=lowongan.id_lowongan>

            <label for="isi-surat">Surat Lamaran</label>
            <textarea id="teks_lamaran" name="teks_lamaran" rows="20" cols="60"></textarea>

            <label for="link-cv">Link CV</label>
            <input type="url" id="cv_link" name="cv_link" />

            <input id="send_lamar" type="submit" value="Simpan" onclick="redirectToPage()"/>
        </form>
    </div>
</div>
</template>

<style scoped></style>
