<script setup>
const repas = "test Nom Repas"
const categorie = "Test"
</script>

<template>
  <div class="flex row items-center q-pa-md">

    <div class="col-2 text-dark vertical-top">
      <q-icon name='wb_twilight' />
      <p class="text-h6 ">Midi</p>
    </div>

    <q-slide-item class="col-10 shadow-4"  @right="e => onRight(e, each.id)" right-color="negative"
      style="border: 1px solid rgb(173, 170, 170); border-radius: 5px;">
      <template v-slot:right>
        <q-icon name="delete" />
        <span class="text-overline"> Supprimer </span>
      </template>
      <div>
        <div class="q-pa-sm background-lunch text-dark flex column ">
          <p class=" text-h6 text-capitalize"> {{ repas }} </p>
          <q-chip class="self-end"> {{ categorie }} </q-chip>
        </div>

      </div>
    </q-slide-item>

  </div>
</template>


