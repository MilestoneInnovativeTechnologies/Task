@php $admin = \Illuminate\Support\Facades\Auth::user()->Groups->contains('name','task_administrators'); @endphp<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="/tasks/css/app.css">
    <link rel="stylesheet" href="/tasks/css/main.css">
    <title>Tasks</title>
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
                <side-bar-item v-for="(name,id) in $store.state.resellers" :name="name" :rid="id"
                              :key="'reseller-'+id"></side-bar-item>
            </ul>
        </nav>
    @endif
    <div id="content">
        <nav class="navbar navbar-dark bg-dark sticky-top navbar-expand-lg">
            @if($admin)<button type="button" id="sidebarCollapse" class="btn btn-outline-secondary"><i class="fa fa-bars"></i></button>@endif
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
                            <div class="form-group row" v-for="ath in [1,2,3]">
                                <label class="col-sm-3 col-form-label" :for="'ptsk_attachment'+ath">Attachment @{{ ath }}</label>
                                <div class="col-sm-9 mt-2">
                                    <template v-if="ptsk && ptsk.__upload_file_details && ptsk.__upload_file_details['attachment'+ath]">
                                        <input type="checkbox" :name="'attachment'+ath" :value="ptsk['attachment'+ath]" class="form-check-input ml-0" :id="'file_attachment' + ath" checked>
                                        <label class="form-check-label ml-4" :title="'Uncheck to remove Attachment ' + ath" :for="'file_attachment' + ath">@{{ ptsk.__upload_file_details['attachment'+ath].name_client }}</label>
                                    </template>
                                    <input v-else type="file" :name="'attachment'+ath" class="form-control-file" :id="'ptsk_attachment'+ath">
                                </div>
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
<script type="text/javascript">const ADMIN = {{ $admin ? \Illuminate\Support\Facades\Auth::id() : 'false' }}; NAME = "{{ \Illuminate\Support\Facades\Auth::user()->name }}"; </script>
<script type="text/javascript" src="/tasks/js/app.js" defer></script>
</body>
