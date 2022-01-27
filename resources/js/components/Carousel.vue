<template>
<v-carousel
    cycle
    height="600"
    hide-delimiter-background
    show-arrows-on-hover
  >
    <v-carousel-item
      v-for="(slide, i) in slides"
      :key="i"
      :src="slide.src" 
    >
    </v-carousel-item>
  </v-carousel>
</template>

<script>
export default {
    data () {
        return {
        slides: [
            {
                title: 'First',
                src: '/images/boat.jpg'
            },
            {
                title: 'Second',
                src: '/images/flood.jpg'
            },
            {
                title: 'Third',
                src: '/images/fire.jpg'
            },
            {
                title: 'Fourth',
                src: '/images/kids.jpg'
            },
        ],
        }
    },
}
</script>

<style>

</style>