<template>
  <div class="row">
    <span class="row__title">Name</span>
    <el-input v-model="flatInfo.name" class="row__input" type="string" placeholder="Choose name"/>
  </div>
  <div class="row">
    <span class="row__title">Bedrooms</span>
    <el-input v-model="flatInfo.bedroom" class="row__input" type="number" min="0" placeholder="number of bedrooms"/>
  </div>
  <div class="row">
    <span class="row__title">Bathrooms</span>
    <el-input v-model="flatInfo.bathroom" class="row__input" type="number" min="0" placeholder="number of bathroom"/>
  </div>
  <div class="row">
    <span class="row__title">Garages</span>
    <el-input v-model="flatInfo.garage" class="row__input" type="number" min="0" placeholder="number of garages"/>
  </div>
  <div class="row">
    <span class="row__title">Storeys</span>
    <el-input v-model="flatInfo.storey" class="row__input" type="number" min="0" placeholder="number of storeys"/>
  </div>
  <div class="row">
    <span class="row__title">Minimum price</span>
    <el-input v-model="flatInfo.minPrice" class="row__input" type="number" min="0" placeholder="Minimum price"/>
  </div>
  <div class="row">
    <span class="row__title">Maximum price</span>
    <el-input v-model="flatInfo.maxPrice" class="row__input" type="number" min="0" placeholder="Maximum price"/>
  </div>
  <flats-table :flats-list="data" :loading="isLoading"/>
  <div v-if="isError">Some Error Happens</div>
</template>

<script setup lang="ts">
import {reactive} from "vue";
import {useQuery} from "@tanstack/vue-query";
import {getFlats} from "../queries/getFlats";
import FlatsTable from "./FlatsTable.vue";
import {useThrottleFn} from '@vueuse/core'

const flatInfo = reactive({
  name: '',
  bedroom: '',
  bathroom: '',
  garage: '',
  storey: '',
  minPrice: '',
  maxPrice: '',
})


const {isLoading, isError, data} = useQuery({
  queryKey: ['flats', flatInfo],
  queryFn: useThrottleFn(() => getFlats(flatInfo), 1000),
})
</script>

<style>
.row {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 20px;
}

.row__title {
  flex-basis: 400px;
  margin-right: 10px;
}

.row__input {
  flex-basis: 200%;
}

</style>
