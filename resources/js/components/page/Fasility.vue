<template>
    <div class="row conten-row2">
        <div class="col-md-12" style="text-align:center; margin-bottom: 24px">
            <span class="title-5">Semua Paket Hosting Sudah Termasuk</span>
        </div>
        <div
            v-for="data in fasilitas"
            :key="data.src"
            class="col-md-4 card-image"
        >
            <img v-bind:src="data.src" v-bind:alt="data.alt" />
            <span class="title_card">{{ data.title }}</span>
            <br />
            <span class="desc_card">{{ data.desc }}</span>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            fasilitas: []
        };
    },
    created() {
        let uri = `http://localhost:8000/api/fasilitasPaket`;
        this.axios.get(uri).then(response => {
            this.fasilitas = response.data.data;
        });
    }
};
</script>
