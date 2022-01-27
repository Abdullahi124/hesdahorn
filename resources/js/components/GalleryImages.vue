<template>
    <v-row>
        <v-col
        v-for="(image, i ) in images"
        :key="i"
        class="d-flex child-flex"
        cols="6"
        sm="4"
        >
        <v-img
            :src="image.link"
            aspect-ratio="1"
            class="grey lighten-2"
        >
        </v-img>
        </v-col>
    </v-row>
</template>

<script>
export default {
    props: ['images'],

    data() {
        return {

        }
    }
}
</script>

<style>

</style>