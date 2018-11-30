<template>
      <table class="table table-striped">
      
         <thead>
            <tr>
               <th>Nome</th>
               <th>Opções</th>
            </tr>
         </thead> 
         <tbody>
            <tr v-for="author in authors">
               <td>{{author.name}}</td>
               <td>
                  <div>
                     <form method="GET" :action="url">
                        <input type="hidden" v-model="author.id" name="id">
                        <input type="submit" value="Editar"class="btn btn-secondary btn-lg active">
                     </form>
                     <form method="DELETE" :action="url">
                        <slot name="delForm">
                           <!-- Space for CSRF token income from Laravel -->
                        </slot>
                        <input type="hidden" v-model="author.id" name="id">
                        <input type="submit" value= "Apagar" class="btn btn-secondary btn-lg active" >
                     </form>
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
           url: this.defaultUrl,
           authors: JSON.parse(this.listAuthors),
        }
    },
    methods: {
       edit: function(id){
          url = this.url
          return window.location.href = url+'/'+id+'/edit'
       },
    }
}    
</script>