<script setup>
import {ref} from 'vue'
const repas = "test Nom Repas"
const categorie = "Test"

const props = defineProps({
  plat : Object
})

const illustration =ref( props.plat?.categorie?.illustration)
// const illustration = '/background_3.jpg'

</script>

<template>
    {{ props.plat }}

  <div class="flex row items-center q-pa-md">

    <div class="col-2 text-dark vertical-top">
      <q-icon name='sym_o_nights_stay' />
      <p class="text-h6 ">Soir </p>
    </div>

    <q-slide-item class="col-10 shadow-4"  @right="e => onRight(e, each.id)" right-color="negative"
      style="border: 1px solid rgb(173, 170, 170); border-radius: 5px;">
      <template v-slot:right>
        <q-icon name="delete" />
        <span class="text-overline"> Supprimer </span>
      </template>
      <div>
        <div class="q-pa-md background flex column items-baseline" :style="{ backgroundImage : 'url(' + encodeURI(illustration) + ')' }">
          <p class=" text-h6 text-capitalize"> {{ props?.plat?.nom }} </p>
          <q-chip class="self-end"> {{ props.plat?.categorie?.nom }} </q-chip>
        </div>

      </div>
    </q-slide-item>

  </div>
</template>



<style scoped lang="scss">

.background {


  background-position-y: 75%;
  background-repeat: no-repeat;
}


</style>


