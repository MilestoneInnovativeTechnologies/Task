<template>
    <div v-if="$store.state.tasks" class="table-responsive"><table class="table table-sm"><TaskTHead></TaskTHead><TaskTBody :tasks="$store.state.tasks"></TaskTBody></table></div><h1 v-else style="color: #E7E7E7; text-align: center" class="my-5">Loading Tasks, Please wait!</h1>
</template>

<script>
    import TaskTHead from "./TaskTHead";
    import TaskTBody from "./TaskTBody";

    export default {
        name: "ComplianceRouteComponent",
        components: { TaskTHead,TaskTBody },
        // methods: { manageTasks(r){ let vm = this; vm.$store.state.tasks = r; if(Array.isArray(r)) r.map(({ partner:{ id,name } }) => vm.$set(vm.$store.state.resellers,id,name)) } },
        // created(){ if(!this.$store.state.tasks || !this.$store.state.tasks.length) $.post('/eui/tasks',this.manageTasks); },
    }
</script>