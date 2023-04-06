<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Example Component</div>

          <div class="card-body">
            I'm an Home component. {{name}}
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
  import {ref} from "vue";

  const name = ref<string>('Home');
</script>
