<template>
  <el-form
      ref="formRef"
      :model="flatInfo"
      label-width="100px"

  >
    <el-form-item
        label="Name"
        prop="name"
        :rules="[
        { min: 3, max: 255, message: 'Length should be 3 to 255', trigger: 'change' }
      ]"
    >
      <el-input v-model="flatInfo.name" class="row__input" type="string" maxlength="255" placeholder="Choose name"/>
    </el-form-item>

    <el-form-item
        label="Bedrooms"
        prop="bedroom"
        :rules="[
        { max: 2, message: 'To big value', trigger: 'change' }
      ]"
    >
      <el-input v-model="flatInfo.bedroom" class="row__input" type="number" placeholder="Number of bedrooms"/>
    </el-form-item>

    <el-form-item
        label="Bathrooms"
        prop="bathroom"
        :rules="[
        { max: 2, message: 'To big value', trigger: 'change' }
      ]"
    >
      <el-input v-model="flatInfo.bathroom" class="row__input" type="number" placeholder="Number of bathroom"/>
    </el-form-item>

    <el-form-item
        label="Garages"
        prop="garage"
        :rules="[
        { max: 2, message: 'To big value', trigger: 'change' }
      ]"
    >
      <el-input v-model="flatInfo.garage" class="row__input" type="number" min="0"
                placeholder="number of garages"/>
    </el-form-item>

    <el-form-item
        label="Storeys"
        prop="storey"
        :rules="[
        { max: 2, message: 'To big value', trigger: 'change' }
      ]"
    >
      <el-input v-model="flatInfo.storey" class="row__input" type="number" min="0"
                placeholder="number of storeys"/>
    </el-form-item>

    <el-form-item
        label="Min price"
        prop="minPrice"
        :rules="[
        { max: 20, message: 'To big value', trigger: 'change' }
      ]">

      <el-input v-model="flatInfo.minPrice" class="row__input" type="number" min="0" max="99999999999999"
                placeholder="Min price"/>
    </el-form-item>

    <el-form-item
        label="Max price"
        prop="maxPrice"
        :rules="[
        { max: 20, message: 'To big value', trigger: 'change' }
      ]">
      <el-input v-model="flatInfo.maxPrice" class="row__input" type="number" min="0" max="99999999999999"
                placeholder="Max price"/>
    </el-form-item>
    <el-form-item>
      <el-button type="primary" @click="submitForm(formRef)">Submit</el-button>
      <el-button @click="resetForm(formRef)">Reset</el-button>
    </el-form-item>
  </el-form>
  <flats-table :flats-list="data || []" :loading="isLoading"/>
</template>

<script setup lang="ts">
import {reactive, ref} from "vue";
import FlatsTable from "./FlatsTable.vue";
import type {FormInstance} from 'element-plus'
import {getFlats} from "../queries/getFlats";

const flatInfo = reactive({
  name: '',
  bedroom: '',
  bathroom: '',
  garage: '',
  storey: '',
  minPrice: '',
  maxPrice: '',
})

const formRef = ref<FormInstance>()
const isLoading = ref(false)
const data = ref([])


const submitForm = (formEl: FormInstance | undefined) => {
  if (!formEl) return
  formEl.validate(async (valid) => {
    if (valid) {
      isLoading.value = true
      try {
        data.value = await getFlats(flatInfo)
      } catch (e) {
        console.log(e)
      } finally {
        isLoading.value = false
      }
    } else {
      data.value = []
      return false
    }
  })
}

const resetForm = (formEl: FormInstance | undefined) => {
  if (!formEl) return
  formEl.resetFields()
}
</script>
