<template>
  <div class="row">
    <div class="col-lg-6 m-auto">
      <card :title="$t('Add job detail')">
        <form @submit.prevent="add">
          <div class="col-md-12">
            <div class="form-group row">
              <input v-model="form.job" placeholder="input the job" class="form-control item" required>
              <select class="form-control item">
                <option v-for="company in companies" :value="company.id" :key="company.id">
                  {{ company.name }}
                </option>
              </select>
              <input v-model="form.description" placeholder="input the job description" class="form-control item" required>
              <input v-model="form.location" placeholder="input the location" class="form-control item" required>
              <input v-model="form.datefrom" class="form-control datefrom" type="date">
            </div>
            <v-button>
              {{ $t('add') }}
            </v-button>
          </div>
        </form>
      </card>
    </div>
  </div>  
</template>
<script>
import axios from 'axios'
import Form from 'vform'

export default {
  /*data: () => ({
    form: new Form({
      item: '',
      email: '',
      datefrom: '',
      dateto: ''
    }),
  companies: []
  }),*/
  data() {
    return {
      form: new Form({
        job: '',
        email: '',
        datefrom: '',
        dateto: ''
      }),
      companies: []
    }
  },
  created() {
    this.company();
  },
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
    company: function () {
      const that = this;
        console.log(this.company1);
      axios.get ('/api/company').then(function(res){
         that.companies = res.data
      })
    }
  }
}
</script>
