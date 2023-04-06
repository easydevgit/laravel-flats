<template>
  <div class="row">
    <span class="row__title">Name</span>
    <el-input v-model="flatInfo.name" class="row__input" type="string" maxlength="255" placeholder="Choose name"/>
  </div>
  <div class="row">
    <span class="row__title">Bedrooms</span>
    <el-input v-model="flatInfo.bedroom" class="row__input" type="number" min="0" max="1000"
              placeholder="number of bedrooms"/>
  </div>
  <div class="row">
    <span class="row__title">Bathrooms</span>
    <el-input v-model="flatInfo.bathroom" class="row__input" type="number" min="0" max="1000"
              placeholder="number of bathroom"/>
  </div>
  <div class="row">
    <span class="row__title">Garages</span>
    <el-input v-model="flatInfo.garage" class="row__input" type="number" min="0" max="1000"
              placeholder="number of garages"/>
  </div>
  <div class="row">
    <span class="row__title">Storeys</span>
    <el-input v-model="flatInfo.storey" class="row__input" type="number" min="0" max="1000"
              placeholder="number of storeys"/>
  </div>
  <div class="row">
    <span class="row__title">Minimum price</span>
    <el-input v-model="flatInfo.minPrice" class="row__input" type="number" min="0" max="99999999999999"
              placeholder="Minimum price"/>
  </div>
  <div class="row">
    <span class="row__title">Maximum price</span>
    <el-input v-model="flatInfo.maxPrice" class="row__input" type="number" min="0" max="99999999999999"
              placeholder="Maximum price"/>
  </div>
  <flats-table :flats-list="data || []" :loading="isLoading"/>
  <div v-if="isError">Some Error Happens</div>
</template>

<script setup lang="ts">
import {reactive, ref} from "vue";
import {useQuery} from "@tanstack/vue-query";
import {getFlats} from "../queries/getFlats";
import FlatsTable from "./FlatsTable.vue";
import {useDebounce} from "../composables/useDebounce";

const flatInfo = reactive({
  name: '',
  bedroom: '',
  bathroom: '',
  garage: '',
  storey: '',
  minPrice: '',
  maxPrice: '',
})
let shouldFetch = ref(true)
useDebounce(flatInfo, shouldFetch)


const {isLoading, isError, data} = useQuery({
  queryKey: ['flats', flatInfo],
  queryFn: () => getFlats(flatInfo),
  enabled: shouldFetch,
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
