<template>
    <td><img v-for="attachment in attachments" :src="attachment.url" v-if="attachment" :key="'attachment-'+attachment.id" class="img-thumbnail rounded-pill" @click='viewImage(attachment)'></td>
</template>

<script>
    export default {
        name: "TaskAttachment",
        props: ['attachments'],
        methods: {
            viewImage({ url }){ this.$store.state.image = url; $('#imgModal').modal({ show:true,backdrop:"",keyboard:true }); }
        }

    }
</script>