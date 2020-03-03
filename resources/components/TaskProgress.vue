<template>
    <td>{{ progress === 'New' ? '&#10007;' : '&#10003;' }}</td>
</template>

<script>
    export default {
        name: "TaskProgress",
        props: ['progress']
    }
</script>