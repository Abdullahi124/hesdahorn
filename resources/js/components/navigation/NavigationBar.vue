<template>
<nav class="flex items-center bg-gray-100 shadow-lg p-1 flex-wrap">
    <a href="/" class="p-2 mr-4 inline-flex items-center">
      <img src="/images/logo.jpeg" class="img-fluid h-14 w-14" alt="hesdahorn logo">
    </a>
    <button
      class=" inline-flex p- rounded lg:hidden ml-auto outline-none nav-toggler"
      data-target="#navigation"
      @click="toggleNavigation"
    >
      <i class="material-icons">
          <!-- burger menu  -->
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path></svg>
      </i>
    </button>
    <div
      class="top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto"
      id="navigation"
    >
    <mobile-nav v-if="showMobile" class="lg:hidden"></mobile-nav>
    <default-nav class="hidden lg:block"></default-nav>
    </div>
  </nav>
</template>

<script>
import DefaultNav from './DefaultNav.vue';
import MobileNav from './MobileNav.vue';
export default {
  components: { MobileNav, DefaultNav },
    name: 'NavigationBar',

    data() {
        return {
            showMobile: false,
        }
    },

    methods: {
        toggleNavigation() {
            this.showMobile = !this.showMobile
        }
    }

}
</script>

<style>

</style>
