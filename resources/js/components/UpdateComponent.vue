<template>
  <form @submit.prevent="update">
    <div>
      <input v-model="form.item" class="form-control item">
      <input v-model="form.email" class="form-control email" type="email">
      <input v-model="form.datefrom" class="form-control datefrom" type="date">
      <input v-model="form.dateto" class="form-control dateto" type="date">
      <v-button>
        {{ $t('Update') }}
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
  created() {
    axios.get('/api/item/' + this.$route.params.id).then(function (res) {
        this.form.item = res.data.item
        this.form.email = res.data.email
        this.form.datefrom = res.data.process_from
        this.form.dateto = res.data.process_to
      }.bind(this))
  },
  methods: {
    update: function () {
      axios.post('/api/itemupdate', {
        id: this.$route.params.id,
        item: this.form.item,
        email: this.form.email,
        datefrom: this.form.datefrom,
        dateto: this.form.dateto,
      }).then(function (res) {
        this.$router.push({ name: 'items'});
      }.bind(this))
    },
  }
}
</script>
