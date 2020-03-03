<template>
    <tbody><template  v-for="(tasks,category) in grouped"><tr class="category-row"><th class="p-2">{{ tasks[0].category_progress.name }}</th><td :colspan="$store.state.admin ? 4 : 5">&nbsp;</td></tr><tr v-for="ptsk in tasks" :key="'category-'+category+'-task-'+ptsk.task.id"><td><i>{{ ptsk.updated_at | date }}</i></td><td>{{ ptsk.task.name }}<br><i>{{ ptsk.task.description }}</i></td><TaskProgress :progress="ptsk.progress"></TaskProgress><td>{{ ptsk.remarks }}</td><TaskAttachment :attachments="ptsk.__upload_file_details"></TaskAttachment><TaskAction v-if="!$store.state.admin" :ptsk="ptsk" /></tr></template></tbody>
</template>

<script>
    import TaskProgress from "./TaskProgress";
    import TaskAttachment from "./TaskAttachment";
    import TaskAction from "./TaskAction";

    export default {
        name: "TaskTBody",
        components: { TaskProgress,TaskAttachment,TaskAction },
        props: ['tasks'],
        computed: {
            grouped(){ let grouped = {}; this.tasks.forEach(task => { if(!grouped[task.category]) grouped[task.category] = []; grouped[task.category].push(task); }); return grouped; }
        }
    }
</script>