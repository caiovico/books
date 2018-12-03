<template>
    <form :action="outAction" method="POST">
        <slot>
            <!-- Space for csrf token  and method (PUT) from Laravel -->
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
            outAction: this.action+"/"+this.authorId,
            outName: this.authorName,
        }
    },
    name: 'AuthorFormComponent',
    props:
        ['authorName', 'authorId', 'action'],
}    
</script>