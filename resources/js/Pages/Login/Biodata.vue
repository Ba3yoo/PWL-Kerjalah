


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');

@import '/resources/css/biodata.css';

</style>

<template>
    <div class="outer-container">
        <div class="container">
            <div>
                <img src="/pngwing.com (1).png" alt="profile" width="90px" onclick="redirectToPage()"
                     style="width: 25px; height: 25px; border-radius: 100px; margin-left: 430px; position: absolute; margin-top:-15px;  cursor:pointer;
              ">
            </div>

            <img src="/profile.png" alt="profile" width="90px" style="margin-top: -10px;display: block;
              margin-left: auto;
              margin-right: auto;
              ">
            <form action="/biodata/new" method="post">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <input type="hidden" name="user_id" :value="user_id">
<!--                <input type="text" id="user_id" name="user_id" placeholder="user id">-->

                <label for="nama-lengkap">Nama Lengkap:</label>
                <div class="form-row">
                    <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Depan" required>
                </div>

                <label for="E-mail">Kontak:</label>
                <div class="form-row">
                    <input type="email" id="E-mail" name="email" class="half-input" placeholder="E-mail" :value="email" readonly>
                    <input type="tel" id="no-_hp" name="no_hp" class="half-input" placeholder="Nomor Handphone" required>
                </div>
                <div>
                    <label for="tanggal-lahir">Tanggal Lahir:</label>
                    <div class="form-row">
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="half-input" required>
                    </div>
                </div>

                <div style="margin-left: 52%; margin-top: -74px;">
                    <label for="jenis-kelamin">Jenis Kelamin:</label>
                    <div class="form-row">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="full-input" required style="height: 35px">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
<!--                        <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="full-input"-->
<!--                               placeholder="Jenis Kelamin" required>-->
                    </div>
                </div>
                <label for="Domisili">Alamat:</label>
                <div class="form-row">
                    <input type="text" id="nama-depan" name="alamat" class="alamat" placeholder="Provinsi" required>
                </div>


                <input id="login" type="submit" value="Simpan">
            </form>

        </div>
    </div>
</template>

<script>

export default {
    props: {
        email: String,
        user_id: String
    },
}
document.title = 'Biodata';

</script>

<style scoped>

</style>
