<template>
    <router-link :to="'/eui/reseller/'+rid" tag="li"><a>{{ name }}</a></router-link>
</template>

<script>
    export default {
        name: "SideBarItem",
        props: ['rid','name']
    }
</script>