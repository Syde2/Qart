<script setup>
import { ref } from 'vue'
import { usePlatJourStore } from 'src/stores/platJour';
import { storeToRefs } from 'pinia';

const { plats } = storeToRefs(usePlatJourStore())


</script>

<template>
  <div class="flex row items-center q-pa-md">

    <div class="col-2 text-dark vertical-top">
      <q-icon name='sym_o_nights_stay' />
      <p class="text-h6 ">Soir </p>
    </div>



    <q-slide-item v-if="plats.length > 0" class="col-10 shadow-4" @right="e => onRight(e, each.id)"
      right-color="negative" style="border: 1px solid rgb(173, 170, 170); border-radius: 5px;">
      <template v-slot:right>
        <q-icon name="delete" />
        <span class="text-overline"> Supprimer </span>
      </template>
      <div>
        <div class="q-pa-lg background flex row  justify-between"
          :style="{ backgroundImage: 'url(' + encodeURI(plats[1].categorie.illustration) + ')' }">
          <q-chip class="bg-secondary text-primary text-capitalize"> {{ plats[1].nom }} </q-chip>
          <q-chip class="self-end bg-accent text-white text-capitalize"> {{ plats[1].categorie.nom }} </q-chip>
        </div>

      </div>
    </q-slide-item>

  </div>
</template>



<style scoped lang="scss">
.background {
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>


