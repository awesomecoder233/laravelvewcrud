<template>
  <div>
    <bootstrap-4-datatable
      :columns="columns"
      :data="rows"
      :filter="filter"
      :per-page="perPage"
    />
    <bootstrap-4-datatable-pager
      v-model="page"
      type="abbreviated"
    />
  </div>
  
</template>

<script>
import axios from 'axios'

export default {
  data () {
    return {
      columns: [
        {
          label: 'id',
          field: 'id'
        },
        {
          label: 'name',
          field: 'name'
        },
        {
          label: 'email',
          field: 'email'
        }
      ],
      rows: [],
      page: 1,
      filter: '',
      perPage: 12
    }
  },
  created: function () {
    this.showUsers()
  },
  methods: {
    showUsers: function () {
      axios.get('/api/users').then(function (res) {
        this.rows = res.data
        console.log(res)
      }.bind(this))
    }
  }
}
</script>
