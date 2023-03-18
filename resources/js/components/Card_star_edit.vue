<template>
    <div class="liste_stars">
        <tempalte v-for="star in stars_decode"  >
            <button type="button" :class="star_actuelle == star.id ? 'btn btn-light' : 'btn btn-secondary'" @click="star_actuelle = star.id">{{ star.nom }}</button>
        </tempalte>
    </div>

    <div v-for="star in stars_decode" class="card_star_edit" v-show="star_actuelle == star.id">
        <form>
            <div class="photo_nom">
                <div class="photo">
                    <img :src="'storage/'+star.url_photo">
                    <label for="photo">Changer la photo</label>
                    <input  id="photo" type="file">
                </div>
                <div class="nom">
                    <label for="nom">Nom :</label>
                    <input id="nom" type="text" v-model="star.nom">
                </div>
            </div>
            <div class="text">
                <label for="description">Description :</label><br>
                <textarea id="description" v-model="star.description" cols="80" rows="5"></textarea>
            </div>
        </form>
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
