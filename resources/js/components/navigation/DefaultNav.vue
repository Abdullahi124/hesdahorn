<template>
    <div
    class="flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start  "
    >
    <a
    v-for="(link, i) in links" :key="i"
        :href="link.link"
        class="lg:inline-flex lg:w-auto w-full px-3 py-2 mx-1 rounded text-black items-center justify-center hover:bg-green-600 hover:text-white"
    >
        <span>{{link.name}}</span>
    </a>
    <a
        href="/gallery"
        class="lg:inline-flex lg:w-auto w-full px-3 py-2  mx-1  rounded text-white items-center bg-green-600 justify-center"
    >
        <span>Gallery</span>
    </a>
    <a
        href="https://www.facebook.com/watch/www.hesdahorn.org/"
        class="lg:inline-flex lg:w-auto w-full px-3 py-2  mx-1  rounded text-black items-center justify-center"
        target="_blank"
    >
        <img src="https://img.icons8.com/material-outlined/24/000000/facebook-circled--v1.png"/>
    </a>
    <a
        href="https://twitter.com/HesdaHorn"
        class="lg:inline-flex lg:w-auto w-full px-3 py-2  mx-1  rounded text-black items-center justify-center"
        target="_blank"
    >
        <img src="https://img.icons8.com/ios-glyphs/24/000000/twitter-circled--v1.png"/>
    </a>
    <a
        href="https://www.youtube.com/channel/UC2S0W2tdsMUDJjJEzCOc3Bw"
        class="lg:inline-flex lg:w-auto w-full px-3 py-2  mx-1  rounded text-black items-center justify-center"
        target="_blank"
    >
        <img src="https://img.icons8.com/material-sharp/24/000000/youtube-play.png"/>
    </a>
    </div>
</template>

<script>
import links from './links.json'
export default {
    data() {
        return {
            links: links
        }
    }

}
</script>

<style>

</style>