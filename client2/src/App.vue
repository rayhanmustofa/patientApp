<script>
import { RouterView } from "vue-router"
import navbar from "./components/navbar.vue";


export default {
  components: {
    RouterView,
    navbar
  },
  created() {
    console.log('created')
  }
}
</script>


<template>
  <navbar />
  <RouterView />
</template>

<style scoped>
</style>
