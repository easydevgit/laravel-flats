<template>

  <header>
    <h2 class="app-heading">Apartments shop</h2>
  </header>
  <main>
    <form-component/>
  </main>
  <footer>Some copyright information</footer>

</template>

<script setup lang="ts">
import {ref} from "vue";
import FormComponent from "./components/FormComponent.vue";

const name = ref<string>('Home');
</script>

<style>
.app-heading {
  text-align: center;
}

footer {
  display: flex;
  justify-content: center;
  align-items: center;
}

main {
  padding: 15px
}

</style>
