<template>
    <td><a href="javascript:void(0)" @click="update" class="btn btn-outline-success">UPDATE</a></td>
</template>

<script>
    export default {
        name: "TaskAction",
        props: ['ptsk'],
        methods: {
            update(){ this.$store.state.ptsk = this.ptsk; $('#updateModal').modal({ show:true,backdrop:"",keyboard:true }); }
        }
    }
</script>