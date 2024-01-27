<script setup>
const repas = "test Nom Repas"
const categorie = "Test"
</script>

<template>
  <div class="flex row items-center">

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
        <div class="q-pa-md background-dinner flex column items-baseline">
          <p class=" text-h6 text-capitalize"> {{ repas }} </p>
          <q-chip class="self-end"> {{ categorie }} </q-chip>
        </div>

      </div>
    </q-slide-item>

  </div>
</template>

<style>
.background-lunch {
  background-image: url('/background_3.jpg');
  background-position: center;
  background-repeat: no-repeat;
}

.background-dinner {
  background-image: url('/background_4.jpg');
  background-position-y: 75%;
  background-repeat: no-repeat;
}

</style>
