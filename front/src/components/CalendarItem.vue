<script setup>
import { ref } from 'vue'
const props = defineProps({
  plat : {
    type:Object
  }
})

const emit =defineEmits(['add'])


</script>

<template>
  <div class="q-pa-md">

    <div class="col-2 text-dark  ">
      <slot name="header" ></slot>
    </div>
    <q-slide-item v-if="props.plat" class="col-10 shadow-4" @right="e => onRight(e, each.id)"
      right-color="negative" style="border: 1px solid rgb(173, 170, 170); border-radius: 5px;">
      <template v-slot:right>
        <q-icon name="delete" />
        <span class="text-overline"> Supprimer </span>
      </template>
      <div>
        <div class="q-pa-lg background flex row  justify-between"
          :style="{ backgroundImage: 'url(' + encodeURI(props.plat.categorie.illustration) + ')' }">
          <q-chip class="bg-secondary text-primary text-capitalize"> {{props.plat.nom }} </q-chip>
          <q-chip class="self-end bg-accent text-white text-capitalize"> {{props.plat.categorie.nom }} </q-chip>
        </div>

      </div>
    </q-slide-item>
    <div v-else class="flex flex-center full-width">
      <q-btn fab  icon="add"  color="accent" @click="emit('add')"/>
    </div>

  </div>
</template>



<style scoped lang="scss">
.background {
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>


