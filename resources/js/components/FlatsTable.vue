<template>
  <h2>Search Result</h2>
  <el-table :data="flatsList" stripe style="width: 100%" v-loading="loading">
    <el-table-column prop="name" label="Name"/>
    <el-table-column prop="bedroom" label="Bedroom"/>
    <el-table-column prop="bathroom" label="Bathrooms"/>
    <el-table-column prop="storey" label="Storeys"/>
    <el-table-column prop="garage" label="Garages"/>
    <el-table-column prop="price" label="maxPrice"/>
  </el-table>
</template>

<script setup lang="ts">
import {FlatsList} from "../types";

defineProps<{
  flatsList: FlatsList[],
  loading: boolean
}>();

</script>
