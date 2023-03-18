<template>
    <div class="card_star">
        <div class="photo_nom">
            <div class="photo">
                <img :src="'storage/placeholder-user.jpg'">
            </div>
            <div class="nom">
                {{ nom }}
            </div>
        </div>
        <div class="text">
            {{ description }}
        </div>
    </div>
</template>
<script>
export default {
    setup: () => ({
        nom: "nom de test",
        description: "description de test lorem ipsum"
    })
}
</script>
