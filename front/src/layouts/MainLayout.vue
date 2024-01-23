<script setup>
</script>

<template>
  <q-layout view="lHh Lpr lFf">
    <q-header  class="bg-grey-9">
      <q-toolbar>


        <q-toolbar-title>Qart
        </q-toolbar-title>

        <div>Quasar v{{ $q.version }}</div>
      </q-toolbar>
    </q-header>


    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

