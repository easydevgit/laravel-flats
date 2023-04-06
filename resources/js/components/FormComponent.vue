<template>
  <el-input v-model="flatName" placeholder="Choose name"/>
  <el-input v-model="flatBedroom" placeholder="number of bedrooms"/>
  <el-input v-model="flatBathroom" placeholder="number of bathrooms"/>
  <el-input v-model="flatGarage" placeholder="number of garages"/>
  <el-input v-model="flatMinPrice" placeholder="Minimum price"/>
  <el-input v-model="flatMaxPrice" placeholder="Maximum price"/>
</template>

<script setup lang="ts">
import {ref} from "vue";

const flatName = ref('');
const flatBedroom = ref(0);
const flatBathroom = ref(0);
const flatGarage = ref(0);
const flatMinPrice = ref(0);
const flatMaxPrice = ref(0);


</script>
