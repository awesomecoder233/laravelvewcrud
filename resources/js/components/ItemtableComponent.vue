<template>
  <div>
    <vue-good-table
    :columns="columns"
    :rows="rows" >
    <template slot="table-row" slot-scope="props">
      <span v-if="props.column.field == 'action'">
        <button @click="editRow(props.row.id)">Update</button>
        <button @click="deleteRow(props.row.id)">Delete</button>
      </span>
    </template>
    
  </vue-good-table>
    <button v-on:click="addItem" class="btn-default">Add</button>
  </div>
</template>

<script>
import axios from 'axios'
import { mapState } from 'vuex'


export default {
  data () {
    return {
      columns: [
        {
          label: 'id',
          field: 'id'
        },
        {
          label: 'item',
          field: 'item'
        },
        {
          label: 'email',
          field: 'email'
        },
        {
          label: 'date_from',
          field: 'process_from'
        },
        {
          label: 'date_to',
          field: 'process_to'
        },
        {
          label: 'Action',
          field: 'action'
        },
      ],
      rows: [],
      page: 1,
      filter: '',
      perPage: 12,
    };
  },
  created: function () {
    this.showItems()
  },
  methods: {
    showItems: async function () {
      axios.get('/api/items').then(function (res) {
        this.rows = res.data
        console.log(res)
      }.bind(this))
    },
    addItem: function (){
      this.$router.push('/add');
    },
    editRow(id) {
      this.$router.push({ name: 'update', params: { id } });
    },
    deleteRow(id) {
      axios.post('/api/itemdelete', {
        id: id,
      }).then(function (res) {
        console.log(res)
        this.$router.go()
      }.bind(this))
    }
  }
}
</script>
