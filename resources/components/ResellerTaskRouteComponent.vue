<template>
    <div class="table-responsive"><table class="table table-sm"><TaskTHead></TaskTHead><TaskTBody :tasks="tasks"></TaskTBody></table></div>
</template>

<script>
    import TaskTHead from "./TaskTHead";
    import TaskTBody from "./TaskTBody";

    export default {
        name: "ResellerTaskRouteComponent",
        components: { TaskTHead,TaskTBody },
        computed: {
            rid(){ return this.$route.params.id },
            tasks(){ return this.$store.state.tasks.filter(({ partner }) => this.rid == partner.id) },
            time(){ return this.$store.getters.luTime }
        },
        methods: {
            addUpdates(r){
                if(!r || !r.length) return;
                let tasks = this.$store.state.tasks;
                r.forEach(ptsk => {
                    let iIdx = tasks.findIndex(({ id }) => ptsk.id == id);
                    if(iIdx === -1) this.$store.state.tasks.push(ptsk);
                    else this.$set(this.$store.state.tasks,iIdx,ptsk);
                })
            }
        },
        beforeRouteUpdate(to,from,next){
            $.post('/eui/updates',{ time:this.time },this.addUpdates);
            next();
        }
    }
</script>