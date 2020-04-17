<template>
    <div class="row conten-row2" style="margin-bottom:40px">
        <div class="col-md-12 section-4" style="margin-bottom: 60px;">
            <span class="title-4">Paket Hosting Singapura yang Tepat</span>
            <br />
            <span class="child-title-4"
                >Diskon 40% + Domain dan SSL Gratis untuk Anda</span
            >
        </div>
        <div
            v-for="data in paket"
            :key="data.packetFor"
            class="col-md-3 card-paket"
        >
            <span class="title_card">{{ data.packetFor }}</span>
            <div class="price">
                <strike style="font-size: 12px;font-weight: 700;">
                    {{ data.oldPrice }}</strike
                >
                <span style="font-size: 24px;font-weight: bold;">
                    {{ data.newPrice }}</span
                >
            </div>
            <div class="total_user">
                <span>{{ data.totalUser }}</span> Pengguna Terdaftar
            </div>
            <div
                v-for="desc in data.description"
                :key="desc"
                class="desc_paket"
            >
                <span>{{ desc }}</span>
            </div>
            <span class="desc_card">{{ data.desc }}</span>
            <div style="margin-top: 28px;">
                <router-link
                    v-if="data.packetFor === 'Personal'"
                    :to="{ name: '' }"
                    class="btn btn-primary button_primary"
                    >Pilih Sekarang</router-link
                >
                <router-link
                    v-else
                    :to="{ name: '' }"
                    class="btn btn-outline-dark button_outline"
                    >Pilih Sekarang</router-link
                >
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            paket: []
        };
    },
    created() {
        let uri = `http://localhost:8000/api/getPrice`;
        this.axios.get(uri).then(response => {
            this.paket = response.data.data;
        });
    }
};
</script>
