<template>
    <thead><tr><th>&nbsp;</th><th>Task</th><th>Status</th><th>Remarks</th><th>Attachments</th><th v-if="!$store.state.admin">&nbsp;</th></tr></thead>
</template>

<script>
    export default {
        name: "TaskTHead"
    }
</script>