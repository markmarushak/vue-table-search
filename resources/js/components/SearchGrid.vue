<template>
    <div id="demo">
      <form id="search">
        Search <input name="query" v-model="searchQuery">
      </form>
      <demo-grid
        :heroes="gridData"
        :columns="gridColumns"
        :filter-key="searchQuery">
      </demo-grid>
    </div>
</template>

<script>

    import grid from './partials/SearchGrid.vue';
    import axios from 'axios';
    export default {
        mounted() {

            axios.get('/table').then(response => (this.gridData = response.data) );
            console.log('ajax send.');
        },
        data: function(){
            return {
                searchQuery: '',
                gridColumns: ['Name', 'Bedrooms','Bathrooms','Storeys','Garages'],
                gridData: []
            }
          },
          components: {
            'demo-grid': grid
          }
    }
</script>
