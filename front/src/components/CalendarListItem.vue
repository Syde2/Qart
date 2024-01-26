<script setup>
const props = defineProps({
  repas: String
})
</script>


<template>
  <q-card  class="flex column">
    <q-card-section horizontal class="bg-grey-2" >
      <q-img src="https://picsum.photos/id/100/150"  height="100px" width="150px" />
      <div class="q-ma-lg flex flex-center column">
        <div class="text-subtitle2 text-dark">
          {{ props.repas }}
        </div>
        <div class="text-caption text-grey-6">
          {{ props.repas }}
        </div>
      </div>
      <q-space />
      <q-card-section class=" flex flex-center">
        <q-icon name="mail" size="md" color="dark" />
      </q-card-section>



    </q-card-section>
  </q-card>


</template>
