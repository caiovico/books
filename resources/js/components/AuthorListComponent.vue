<template>
      <table class="table table-striped">
         <input type="text" v-model="filter"></input>
         <thead>
            <tr>
               <th>Nome</th>
               <th>Opções</th>
            </tr>
         </thead> 
         <tbody>
            <tr v-for="author in filterAuthors">
               <td>{{author.name}}</td>
               <td>
                  <div>
                     <button v-on:click="edit(author.id)" class="btn btn-secondary btn-lg active">Editar</button>
                     <button v-on:click="destroy(author.id)" class="btn btn-secondary btn-lg active">Apagar</button>
                  </div>
               </td>
            </tr>   
         </tbody>
      </table>
</template>
<script>
export default {
   name: 'AuthorListComponent',
   props: ['listAuthors', 'defaultUrl'],
   data () {
      return{
         filter: "",
         url: this.defaultUrl,
         authors: JSON.parse(this.listAuthors),
      }
   },
   computed: {
      filterAuthors: function(){
         var self = this
         return _.orderBy(self.authors.filter(function(aut){
            var searchRegex = new RegExp(self.filter,'i')
            return (searchRegex.test(aut.name))
         }))
      }
   },   
   methods: {
      edit: function(id){
         return window.location.href = this.url+'/'+id+'/editar'
      },
      destroy: function(id){
         axios.delete(this.url+'/'+id)
         authors.delete()
      },
   }
}    
</script>