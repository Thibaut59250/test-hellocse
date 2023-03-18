<template>
    <div class="liste_et_card">
        <div class="liste_stars">
            <template v-for="star in stars_decode"  >
                <button type="button" :class="star_actuelle == star.id ? 'btn btn-light' : 'btn btn-secondary'" @click="star_actuelle = star.id">{{ star.nom }}</button>
            </template>
        </div>

        <div class="les_stars">
            <div v-for="star in stars_decode" class="card_star" v-show="star_actuelle == star.id">
                <div class="photo_nom">
                    <div class="photo">
                        <img :src="'storage/'+star.url_photo">
                    </div>
                    <div class="nom">
                        <h2>{{ star.nom }}</h2>
                    </div>
                </div>
                <div class="text">
                    <p>{{ star.description }}</p>
                </div>
            </div>
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
