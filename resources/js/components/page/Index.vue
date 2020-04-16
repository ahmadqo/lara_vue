<template>
    <div class="container-fluid">
        <div class="row conten-row">
            <div class="col-md-12" style="line-height: 40px;">
                <div class="header-nav">
                    <img
                        src="images/niagahoster-logo.png"
                        alt="logo"
                        style="width: 200px; height: 56px;"
                    />
                    <ul class="nav justify-content">
                        <li v-for="post in posts" :key="post" class="nav-item">
                            <a class="nav-link active" href="#">{{ post }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row conten-row row-second">
            <div class="col-md-6">
                <span class="title-bold">PHP Hosting </span>
                <br />
                <span class="title-section-2"
                    >Cepat, handal, penuh dengan module PHP yang Anda
                    butuhkan</span
                >
                <ul class="listFrist">
                    <li v-for="data in listFirst" :key="data">
                        {{ data }}
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img
                    src="assets/svg/illustration_banner_PHP_hosting-01.svg"
                    alt="banner"
                    style="width: 440px"
                />
            </div>
        </div>
        <div class="row conten-row2">
            <div class="col-md-12 section-3">
                <div class="image-section-3">
                    <img
                        src="assets/svg/icon_PHP_Hosting_ioncube.svg"
                        alt="aaa"
                    />
                </div>
                <!-- <div class="image-section-3">
                    <img
                        src="assets/svg/icon_PHP_Hosting_zendguard.svg"
                        alt="zendguard"
                    />
                </div>
                <div class="image-section-3">
                    <img
                        src="assets/svg/icon_PHP_Hosting_zendguard.svg"
                        alt="zendguard"
                    />
                </div> -->
            </div>
        </div>
        <div class="row conten-row2">
            <div class="col-md-12 section-4">
                <span class="title-4">Paket Hosting Singapura yang Tepat</span>
                <br />
                <span class="child-title-4"
                    >Diskon 40% + Domain dan SSL Gratis untuk Anda</span
                >
            </div>
        </div>

        <div class="row conten-row2">
            <div class="col-md-12 section-5">
                <span class="title-5"
                    >Powerfull dengan Limit PHP yang Lebih Besar</span
                >
            </div>
        </div>

        <app-fasility></app-fasility>
        <app-supportLaravel></app-supportLaravel>

        <div class="row conten-row2" style="margin-bottom: 48px">
            <div class="col-md-12 section-5" style="margin-bottom: 24px">
                <span class="title-5"
                    >Module Lengkap untuk Menjalankan Aplikasi PHP Anda</span
                >
                <br />
                <router-link
                    :to="{ name: '' }"
                    class="btn btn-outline-dark button_outline"
                    >Selengkapnya</router-link
                >
            </div>
        </div>
        <div class="row conten-row2">
            <div class="col-md-6">
                <div class="title-5" style="width: 70%; line-height: 35px;">
                    Linux Hosting yang Stabil dengan Teknologi LVE
                </div>
                <br />
                <div class="desc_tech">
                    SuperMicro <strong>Intel Xeon 24-Cores</strong> server
                    dengan RAM <b>128 GB</b> dan teknologi
                    <b>LVE CloudLinux</b> untuk stabilitas server Anda.
                    Dilengkapi dengan <b>SSD</b> untuk kecepatan
                    <b>MySQL</b> dan caching. Apache load balancer berbasis
                    LiteSpeed Technologies, CageFS security,
                    <b>Raid-10</b> protection dan auto backup untuk keamanan
                    website PHP Anda.
                </div>
                <router-link
                    :to="{ name: '' }"
                    class="btn btn-primary button_primary"
                    >Pilih Hosting Anda</router-link
                >
            </div>
            <div class="col-md-6">
                <img
                    src="assets/images/Image_support.png"
                    alt="banner"
                    style="width: 440px; padding-top: 55px;"
                />
            </div>
        </div>
        <div class="row conten-row2 footer_share">
            <div class="col-md-6" style="display: block; margin: auto;">
                Bagikan jika Anda menyukai halaman ini.
            </div>
            <div class="col-md-6"></div>
        </div>

        <div class="row conten-row2 footer_help">
            <div class="col-md-12" style="display: block; margin: auto;">
                Perlu <b>BANTUAN?</b> Hubungi Kami <b>0274-5305505</b>
            </div>
        </div>

        <div class="row conten-row2 footer_detail">
            <!-- <div class="col-md-12" style="display: block; margin: auto;">
                Perlu <b>BANTUAN?</b> Hubungi Kami <b>0274-5305505</b>
            </div> -->
        </div>
    </div>
</template>

<script>
import Fasility from "./Fasility.vue";
import SupportLaravel from "./SupportLaravel.vue";

const listFirst = [
    "Solusi PHP untuk performa query yang lebih cepat.",
    "Konsumsi memori yang lebih rendah.",
    "Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7",
    "Fitur enkripsi IonCube dan Zend Guard Loaders"
];
export default {
    data() {
        return {
            posts: [],
            listFirst: listFirst
        };
    },
    components: {
        "app-fasility": Fasility,
        "app-supportLaravel": SupportLaravel
    },
    created() {
        let uri = `http://localhost:8000/api/menuActive`;
        this.axios.get(uri).then(response => {
            this.posts = response.data.data;
        });
    }
};
</script>
