<template>
   <div>
      <label for="searchInput">Filtrar: </label>
      <input name="searchInput" type="text" v-model="filter"></input>
      <table class="table table-striped">
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
                     <button v-on:click="destroy(author.id, author.name)" data-toggle="modal"  data-target="#deleteFormModal" class="btn btn-primary btn-lg active">Apagar</button>
                  </div>
               </td>
            </tr>   
         </tbody>
      </table>


            <!-- Modal -->
      <div class="modal fade" id="deleteFormModal" tabindex="-1" role="dialog" aria-labelledby="deleteFormModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
               <h5 class="modal-title" id="deleteFormModalLabel">Apagar Autor {{idToDestroy}}</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
               </div>
               <form method="POST" :action="urlDeleteForm">
                  <div class="modal-body">
                     <slot>
                     <!-- CSRF Field which comes from blade -->
                     </slot>
                     <input type="hidden" name="id" v-model="idToDestroy">
                     <span>Deseja apagar o(a) autor(a) {{nameToDestroy}}?</span>  
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <input type="submit" class="btn btn-primary" value="Sim">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>   
</template>
<script>
export default {
   name: 'AuthorListComponent',
   props: ['listAuthors', 'defaultUrl'],
   data () {
      return{
         urlDeleteForm: "",
         idToDestroy: -1,
         nameToDestroy: "",
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
      destroy: function(id, name){
         this.urlDeleteForm = this.url+'/'+id;
         this.nameToDestroy = name;
         this.idToDestroy = id;
      },
   }
}    
</script>