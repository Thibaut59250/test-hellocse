<template>
    <div class="liste_stars_edit">
        <tempalte v-for="star in stars_decode"  >
            <button type="button" :class="star_actuelle == star.id ? 'btn btn-light' : 'btn btn-secondary'" @click="star_actuelle = star.id">{{ star.nom }}</button>
        </tempalte>
        <button type="button" :class="star_actuelle == -1 ? 'btn btn-light' : 'btn btn-secondary'" @click="star_actuelle = -1; stars_decode.push(star_defaut)">+</button>
    </div>

    <div v-for="star in stars_decode" class="card_star_edit" v-show="star_actuelle == star.id">
        <form>
            <div class="photo_nom">
                <div class="row photo">
                    <img class="col-md-12" :src="'storage/'+star.url_photo">
                    <!--<label class="col-md-4" for="photo">Changer la photo</label>
                    <input class="col-md-8" id="photo" type="file">-->
                </div>
                <div class="row nom">
                    <label class="col-md-4" for="nom">Nom :</label>
                    <input class="col-md-8" id="nom" type="text" v-model="star.nom">
                </div>
            </div>
            <div class="row text">
                <label class="col-md-4" for="description">Description :</label>
                <textarea class="col-md-8" id="description" v-model="star.description" cols="80" rows="5"></textarea>
            </div>
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-success" v-on:click="enregistrer(star)">Enregistrer</button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger" @click="supprimer(star)">Supprimer</button>
                </div>
            </div>

        </form>
    </div>

</template>
<script>
export default {

    props: [
        'stars','modifier','supprimer'
    ],
    data: function () {

        return {
            stars_decode: [],
            star_actuelle: 0,
            star_defaut: {
                id: -1,
                nom: 'NOM',
                description: 'DESCRIPTION',
                url_photo: 'placeholder-user.jpg'
            }
        }
    },
    mounted() {

        this.stars_decode = JSON.parse(this.stars);

        // Au chargement, on affiche la première star par défaut
        this.star_actuelle = this.stars_decode[0].id;
    },
    methods: {

        enregistrer: function(star){

            $.ajax({
                type: "POST",
                url: this.modifier,
                data: star,
            });
        },

        supprimer: function(star){

            $.ajax({
                type: "POST",
                url: this.supprimer,
                data: star,
            });

            this.stars_decode.splice(this.stars_decode.indexOf(star), 1);
            this.star_actuelle = this.stars_decode[0].id;
        },
    },
}
</script>
