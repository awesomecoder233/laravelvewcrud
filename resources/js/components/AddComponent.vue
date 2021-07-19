<template>
  <form @submit.prevent="add">
    <div>
      <input v-model="form.item" placeholder="input item" class="form-control item">
      <input v-model="form.email" class="form-control email" placeholder="input email" type="email">
      <input v-model="form.datefrom" class="form-control datefrom" type="date">
      <input v-model="form.dateto" class="form-control dateto" type="date">
      <v-button>
        {{ $t('add') }}
      </v-button>
    </div>
  </form>  
</template>
<script>
import axios from 'axios'
import Form from 'vform'

export default {
  data: () => ({
    form: new Form({
      item: '',
      email: '',
      datefrom: '',
      dateto: ''
    }),
  }),
  methods: {
    add: function () {
      axios.post('/api/items', {
        item: this.form.item,
        email: this.form.email,
        datefrom: this.form.datefrom,
        dateto: this.form.dateto
      }).then(function (res) {
        this.$router.push({ name: 'items'});
      }.bind(this))
    },
  }
}
</script>
