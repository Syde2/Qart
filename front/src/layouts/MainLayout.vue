<script setup>

</script>

<template>
  <q-layout view="hHh lpR fFf">
    <q-header  class="bg-transparent">
      <q-toolbar>
        <q-toolbar-title>
          <q-btn class="text-h5"  flat  no-caps to="/">
            Qart
          </q-btn>
        </q-toolbar-title>
        <q-tabs dense inline-label>
          <q-route-tab to="/plats" label="Plats" icon="menu_book" />
          <q-route-tab to="/page2" label="Page Two" />
          <q-route-tab to="/page3" label="Page Three" />
      </q-tabs>
      <q-space />
      </q-toolbar>

    </q-header>


    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

