@php $admin = \Illuminate\Support\Facades\Auth::user()->Groups->contains('name','task_administrators'); @endphp<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://vuejs.org/js/vue.js"></script>
    <!--<script src="https://unpkg.com/vue/dist/vue.js"></script>-->
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <script src="https://unpkg.com/vuex@3.1.2/dist/vuex.js"></script>
    <title>Task Management</title>
    <style type="text/css" rel="stylesheet">
        * { font-size: 12px; } a { text-decoration: none; color: #FFFFFF; } a:hover { text-decoration: none }
        img.img-thumbnail { width: 64px; max-height: 48px; margin-right: 3px;transition: all 0.3s; cursor: pointer; } img.img-thumbnail:hover { opacity: 0.7 }
        td,th { vertical-align: middle !important; } i { font-size: 11px; }
        .category-row { background-color: #f5dc9b; padding: 5px 0px 5px 0px; }
        .wrapper { display: flex; width: 100%; align-items: stretch; }
        #sidebar { min-width: 150px; max-width: 150px; height: 100vh; background: #c0d5d4; color: #fff; transition: all 0.3s; margin-right: 1px; }
        #sidebar.active { margin-left: -150px; }
        a[data-toggle="collapse"] { position: relative; }
        .dropdown-toggle::after { display: block; position: absolute; top: 50%; right: 20px; transform: translateY(-50%); }
        @media (max-width: 768px) {
            #sidebar { margin-left: -150px; }
            #sidebar.active { margin-left: 0; }
        }
        #sidebar .sidebar-header { padding: 20px; }
        #sidebar ul.components { padding: 4px 0; }
        #sidebar ul.components li { padding: 4px 10px; }
        li.active, li:hover { background-color: #484e54; }
        li.active a, li:hover a { color: #FFFFFF; }
        #sidebar ul p { color: #fff; padding: 10px; }
        #content { width: 100%; }
    </style>
    <style type="text/css" rel="stylesheet">
        .imgModal {display: none; /* Hidden by default */position: fixed; /* Stay in place */z-index: 1; /* Sit on top */padding-top: 100px; /* Location of the box */left: 0;top: 0;width: 100%; /* Full width */height: 100%; /* Full height */overflow: auto; /* Enable scroll if needed */background-color: rgb(0,0,0); /* Fallback color */background-color: rgba(0,0,0,0.9); /* Black w/ opacity */}
        .imgModal .modal-content {margin: auto;display: block;width: 80%;max-width: 700px;}
        #caption {margin: auto;display: block;width: 80%;max-width: 700px;text-align: center;color: #ccc;padding: 10px 0;height: 150px;}
        .imgModal .modal-content, .imgModal #caption {animation-name: zoom;animation-duration: 0.6s;}
        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }
        .imgModal .close {position: absolute;top: 45px;right: 35px;color: #f1f1f1;font-size: 40px;font-weight: bold;transition: 0.3s;}
        .imgModal .close:hover, .imgModal .close:focus {color: #bbb;text-decoration: none;cursor: pointer;}
        @media only screen and (max-width: 700px){
            .imgModal .modal-content {
                width: 100%;
            }
        }
    </style>
    <style media="print" rel="stylesheet" type="text/css">
        img, nav, #imgModal, td:nth-of-type(n+5), th:nth-of-type(n+5) { display: none; }
        #content { max-width: 290mm !important; width: 290mm !important; }
    </style>
</head>
<body>

<div class="wrapper" id="app">
    @if($admin)
        <nav id="sidebar" class="bg-dark">
            <ul class="components">
                <p class="h6">Resellers</p>
                <sidebar-item v-for="(name,id) in $store.state.resellers" :name="name" :rid="id"
                              :key="'reseller-'+id"></sidebar-item>
            </ul>
        </nav>
    @endif
    <div id="content">
        <nav class="navbar navbar-dark bg-dark sticky-top navbar-expand-lg">
            @if($admin)
                <button type="button" id="sidebarCollapse" class="btn btn-outline-secondary"><i class="fa fa-bars"></i>
                </button>@endif
            <a class="ml-4 navbar-brand"
               href="{{ route('eui') }}">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item mr-3"><a class="nav-link" href="javascript:print()">Print</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </nav>
        <div class="container">
            <div class="clearfix mt-4" v-if="h5">
                <p class="h5 float-left">@{{ resellerName }}</p>
                <p class="h5 float-right"><?=date('d/M/Y h:i A')?></p>
            </div>
            <router-view></router-view>
        </div>
    </div>
    <div id="imgModal" class="imgModal">
        <span class="close" onclick="$('#imgModal').modal('hide')">&times;</span>
        <img class="modal-content" id="img01" :src="$store.state.image">
    </div>
    @unless($admin)
            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-hidden="true"><form method="post" action="{{ route('progress') }}" enctype="multipart/form-data">@csrf
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalTitle">@{{ ptsk ? ptsk.task.name : ''}} (@{{ ptsk ? ptsk.category_progress.name : '' }})</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Completed</label>
                                <div class="col-sm-9 mt-2">
                                    <div class="form-check form-check-inline mr-5">
                                        <input class="form-check-input" id="p_yes" type="radio" name="progress" value="Completed" v-model="progress">
                                        <label class="form-check-label" for="p_yes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="p_no" type="radio" name="progress" value="New" v-model="progress">
                                        <label class="form-check-label" for="p_no">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="ptsk_remarks">Remarks</label>
                                <div class="col-sm-9 mt-2"><textarea class="form-control" id="ptsk_remarks" rows="3" name="remarks">@{{ ptsk ? ptsk.remarks : '' }}</textarea></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="ptsk_attachment1">Attachment1<br>@{{ ptsk && ptsk.__upload_file_details && ptsk.__upload_file_details['attachment1'] ? ptsk.__upload_file_details['attachment1'].name_client : '' }}</label>
                                <div class="col-sm-9 mt-2"><input type="file" name="attachment1" class="form-control-file" id="ptsk_attachment1"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="ptsk_attachment2">Attachment2<br>@{{ ptsk && ptsk.__upload_file_details && ptsk.__upload_file_details['attachment2'] ? ptsk.__upload_file_details['attachment2'].name_client : '' }}</label>
                                <div class="col-sm-9 mt-2"><input type="file" name="attachment2" class="form-control-file" id="ptsk_attachment2"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="ptsk_attachment3">Attachment3<br>@{{ ptsk && ptsk.__upload_file_details && ptsk.__upload_file_details['attachment3'] ? ptsk.__upload_file_details['attachment3'].name_client : '' }}</label>
                                <div class="col-sm-9 mt-2"><input type="file" name="attachment3" class="form-control-file" id="ptsk_attachment3"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                            <input type="submit" class="btn btn-primary" name="action" value="UPDATE">
                            <input type="hidden" name="id" :value="ptsk ? ptsk.id : 0">
                        </div>
                    </div>
                </div>
                </form></div>
        @endunless
</div>


<script defer>
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    $(function(){ $('#sidebarCollapse').on('click', function () { $('#sidebar').toggleClass('active'); }); });

    const store = new Vuex.Store({
        state: {
            tasks: [],
            resellers: {},
            image: null,
            ptsk: null,
        },
        getters: {
            luTime({ tasks }){ return tasks.sort((n,c) => new Date(c.updated_at).getTime() - new Date(n.updated_at).getTime())[0].updated_at }
        }
    });


    Vue.component('sidebar-item', {
        name: 'sidebar-item',
        template: '<router-link :to="\'/eui/reseller/\'+rid" tag="li"><a>@{{ name }}</a></router-link>',
        props: ['rid','name'],
    });
    Vue.component('task-thead',{
        name:'task-thead',
        template: `<thead><tr><th>&nbsp;</th><th>Task</th><th>Status</th><th>Remarks</th><th>Attachments</th>@if(!$admin)<th>&nbsp;</th>@endif</tr></thead>`,
    });
    Vue.component('task-tbody',{
        name:'task-tbody',
        template: `<tbody><template  v-for="(tasks,category) in grouped"><tr class="category-row"><th class="p-2">@{{ tasks[0].category_progress.name }}</th><td colspan="{{ $admin ? 4 : 5 }}">&nbsp;</td></tr><tr v-for="ptsk in tasks" :key="'category-'+category+'-task-'+ptsk.task.id"><td><i>@{{ ptsk.updated_at | date }}</i></td><td>@{{ ptsk.task.name }}<br><i>@{{ ptsk.task.description }}</i></td><task-progress :progress="ptsk.progress"></task-progress><td>@{{ ptsk.remarks }}</td><task-attachment :attachments="ptsk.__upload_file_details"></task-attachment>@if(!$admin)<task-action :ptsk="ptsk"/>@endif</tr></template></tbody>`,
        props: ['tasks'],
        computed: {
            grouped(){ let grouped = {}; this.tasks.forEach(task => { if(!grouped[task.category]) grouped[task.category] = []; grouped[task.category].push(task); }); return grouped; }
        }
    });
    Vue.component('task-progress',{
        name: 'task-progress',
        template: `<td>@{{ progress === 'New' ? '&#10007;' : '&#10003;' }}</td>`,
        props: ['progress']
    });
    Vue.component('task-attachment',{
        name: 'task-attachment',
        template: `<td><img v-for="attachment in attachments" :src="attachment.url" v-if="attachment" :key="'attachment-'+attachment.id" class="img-thumbnail rounded-pill" @click='viewImage(attachment)'></td>`,
        props: ['attachments'],
        methods: {
            viewImage({ url }){ this.$store.state.image = url; $('#imgModal').modal({ show:true,backdrop:"",keyboard:true }); }
        }
    });
    @unless($admin)
    Vue.component('task-action',{
        name: 'task-action',
        template: `<td><a href="javascript:void(0)" @click="update" class="btn btn-outline-success">UPDATE</a></td>`,
        props: ['ptsk'],
        methods: {
            update(){ this.$store.state.ptsk = this.ptsk; $('#updateModal').modal({ show:true,backdrop:"",keyboard:true }); }
        }
    });
    @endunless
    Vue.filter('date', function (value) {
        if (!value) return '';
        let date = new Date(value), time  = date.toTimeString().split(":",2).join(":");
        let dParts = date.toDateString().split(" "), dStr = [].join(" ");
        return [dParts[0]+',', dParts[2],dParts[1],dParts[3].substr(2),time].join(" ");
    });

    const indexRouteComponent = {
        name: 'Index',
        @unless($admin)
        data(){ return { links:['Compliance'] } },
        @endunless
        methods: { manageTasks(r){ let vm = this; vm.$store.state.tasks = r; if(Array.isArray(r)) r.map(({ partner:{ id,name } }) => vm.$set(vm.$store.state.resellers,id,name)) } },
        created(){ $.post('eui/tasks',this.manageTasks); }@if($admin),
        template: '<h1 style="color: #E7E7E7; text-align: center" class="my-5">Select reseller from side bar!</h1>'@else,
        template: `<div><div class="my-5 mx-auto" style="width: 650px;"><img alt="ABM" src="https://lh3.googleusercontent.com/v3Az8T_ZqWUqoMFIdEIn5pbfTFGbpI6C8voje62FOO9i41Bdqdxz_YXlsclxDJryPieTBotWT8ptq0uLpd-00dkrCj-M7h6MR272CkKpLFUm1Ps7Ix_NT7oCiymYuiXh7IGoDCC6=w320-h240-no" class="img-fluid"><img alt="MCI" src="https://lh3.googleusercontent.com/ftA_iVdTLLTjS7TtI3xNIh5jvj0lS3pcvPno2AolInGJHB1_KYoBPgpurDBUPDzeup4rSRU7tQMuhQSvKN-huq8mOfTHgoWzTIRTcNRwur5NRnsfsDNhvbFesZlUREfw4wgfLt-q=w320-h240-no" class="img-fluid"></div><hr /><div class="text-center mb-5"><router-link v-for="link in links" :to="{ name:link }" class="btn btn-info mx-1">@{{ link }}</router-link></div></div>`
        @endif
    };

    const ComplianceRouteComponent = {
        name: 'Compliance',
        template: `<div v-if="$store.state.tasks" class="table-responsive"><table class="table table-sm"><task-thead></task-thead><task-tbody :tasks="$store.state.tasks"></task-tbody></table></div><h1 v-else style="color: #E7E7E7; text-align: center" class="my-5">Loading Tasks, Please wait!</h1>`,
        methods: { manageTasks(r){ let vm = this; vm.$store.state.tasks = r; if(Array.isArray(r)) r.map(({ partner:{ id,name } }) => vm.$set(vm.$store.state.resellers,id,name)) } },
        created(){ if(!this.$store.state.tasks || !this.$store.state.tasks.length) $.post('/eui/tasks',this.manageTasks); },
    };

    const resellerTaskRouteComponent = {
        name: 'ResellerTask',
        template: `<div class="table-responsive"><table class="table table-sm"><task-thead></task-thead><task-tbody :tasks="tasks"></task-tbody></table></div>`,
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
                    //else for(let xKey in ptsk) this.$set(this.$store.state.tasks[iIdx],xKey,ptsk[xKey]);
                })
            }
        },
        beforeRouteUpdate(to,from,next){
            $.post('/eui/updates',{ time:this.time },this.addUpdates);
            next();
        }
    };
    const routes = [
        { path: '/eui', component: indexRouteComponent, name:'index' },
        { path: '/eui/Compliance', component: ComplianceRouteComponent, name:'Compliance' },
        { path: '/eui/reseller/:id', component: resellerTaskRouteComponent, name:'task' },
    ];
    const router = new VueRouter({ routes,mode:'history',linkActiveClass:'active' });
    const VueApp = new Vue({
        router, store,
        el: '#app',
        computed: {
            reseller(){ return {{ $admin ? 'this.$route.params.id' : \Illuminate\Support\Facades\Auth::id() }}; },
            resellerName(){ return this.reseller ? this.$store.state.resellers[this.reseller] : '' },
            ptsk(){ return this.$store.state.ptsk },
            h5(){ return this.$route.name !== 'index' },
            progress: {
                get(){ return (this.ptsk && this.ptsk.progress === 'Completed') ? 'Completed' : 'New'; },
                set(v){ return; }
            }
        }
    });
</script>
</body>
