import axios from 'axios'
import * as types from '../mutation-types'

// state
export const state = {
  items: null,
}

// getters
export const getters = {
  items: state => state.items,
}

// mutations
export const mutations = {
  [types.FETCH_ITEMS_SUCCESS] (state, { items }) {
    state.items = items
  },

  [types.FETCH_ITEMS_FAILURE] (state) {
    
  },

  // [types.UPDATE_USER] (state, { user }) {
  //   state.user = user
  // }
}

// actions
export const actions = {

  async fetchItems ({ commit }) {
    try {
      const { data } = await axios.get('/api/items')

      commit(types.FETCH_ITEMS_SUCCESS, { items: data })
    } catch (e) {
      commit(types.FETCH_ITEMS_FAILURE)
    }
  },

  // async logout ({ commit }) {
  //   try {
  //     await axios.post('/api/logout')
  //   } catch (e) { }

  //   commit(types.LOGOUT)
  // },

  // async fetchOauthUrl (ctx, { provider }) {
  //   const { data } = await axios.post(`/api/oauth/${provider}`)

  //   return data.url
  // }
}
