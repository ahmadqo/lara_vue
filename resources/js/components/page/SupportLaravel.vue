<template>
    <div class="row conten-row" style="margin-bottom: 48px">
        <div class="col-md-12 section-5" style="margin-bottom: 24px">
            <span class="title-5">Mendukung Penuh Framework Laravel</span>
        </div>
        <div class="col-md-6">
            <div class="desc_support" style="padding-right: 10px">
                Tak perlu menggunakan dedicated server ataupun VPS yang mahal.
                Layanan PHP hosting murah kami mendukung penuh framework favorit
                Anda
            </div>
            <ul class="listFrist">
                <li v-for="data in listSupport" :key="data">
                    {{ data }}
                </li>
            </ul>
            <div class="nb">
                Nb. Composer dan SSH hanya tersedia pada paket Personal dan
                Bisnis
            </div>
            <router-link
                :to="{ name: '' }"
                class="btn btn-primary button_primary"
                >Pilih Hosting Anda</router-link
            >
        </div>
        <div class="col-md-6">
            <img
                src="assets/svg/illustration_banner_support_laravel_hosting.svg"
                alt="banner"
                style="width: 440px; padding-top: 22px;"
            />
        </div>
    </div>
</template>
<script>
const listSupport = [
    "Install Laravel 1 klik dengan Softaculous Installer.",
    "Mendukung ekstensi PHP MCrypt, phar, mbstring, json, dan fileinfo.",
    "Tersedia Composer dan SSH untuk menginstal packages pilihan Anda."
];
export default {
    data() {
        return {
            listSupport: listSupport
        };
    }
};
</script>
