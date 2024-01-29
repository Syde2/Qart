import { defineStore } from 'pinia';

export const usePlatJourStore = defineStore('platJour', {
  state: () => ({
    plats:[] ,
  }),
  getters: {
    doubleCount: (state) => state.counter * 2,
  },
  actions: {
    increment() {
      this.counter++;
    },
  },
});
