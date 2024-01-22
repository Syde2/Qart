import { defineStore } from 'pinia';

export const useMealStore = defineStore('plat', {
  state: () => ({
    plat: {
    },
    categorie :{
     nom : '....'
    }
  }),
  getters: {
    payload: (state) => {
      state.plat.categorie = state.categorie
      return state.plat
    },


  },
  actions: {

  },
});
