<template>
    <form :action="outAction+'/'+authorId" :method="outMethod">
        <slot>
            <!-- Space for csrf token from Laravel -->
        </slot>
        
        
        <input type="hidden" name="id" :value="outName">
        <input type="text" name="name" v-model="outName">
        <input type="submit" value="Enviar">
    </form>
</template>
<script>
export default {
    data () {
        return{
            outAction: this.action,
            outMethod: this.method,
            outName: this.authorName,
        }
    },
    name: 'AuthorFormComponent',
    props:
        ['authorName', 'authorId', 'action', 'method'],
}    
</script>