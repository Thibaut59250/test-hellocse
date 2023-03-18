<template>
    <div class="liste_stars">
        <tempalte v-for="star in stars_decode"  >
            <button type="button" :class="star_actuelle == star.id ? 'btn btn-light' : 'btn btn-secondary'" @click="star_actuelle = star.id">{{ star.nom }}</button>
        </tempalte>
    </div>

    <div v-for="star in stars_decode" class="card_star" v-show="star_actuelle == star.id">
        <div class="photo_nom">
            <div class="photo">
                <img :src="'storage/'+star.url_photo">
            </div>
            <div class="nom">
                {{ star.nom }}
            </div>
        </div>
        <div class="text">
            {{ star.nom }}
        </div>
    </div>
</template>
<script>
export default {
    props: [
        'stars'
    ],
    data: function () {
        return {
            stars_decode: [],
            star_actuelle: 0,
        }
    },
    mounted() {
        this.stars_decode = JSON.parse(this.stars);

        // Au chargement, on affiche la première star par défaut
        this.star_actuelle = this.stars_decode[0].id;
    }
}
</script>
