<template>
    <div class="columns is-mobile">
        <app-header class="column is-2-desktop is-one-third-tablet header"></app-header>
        <router-view></router-view>
    </div>
</template>

<script>
import AppHeader from "./shared/Header.vue";

export default {
  name: "app",
  components: {
    AppHeader
  }
};
</script>

<style scoped>
</style>
