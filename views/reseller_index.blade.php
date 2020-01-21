<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Reseller Login</title>
    <style rel="stylesheet">
        * { font-size: 12px; }
        .category-row { background-color: #f5dc9b; padding: 5px 0px 5px 0px; }
        .date_head { margin: 16px 0px; }
        .update_status_success { margin: 6px 0px; }
        .update_status_failed { margin: 6px 0px; }
    </style>
    <script type="text/javascript">
        const remarks = {};
        let wait = false;
    </script>
</head>
<body>

<nav class="navbar navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="{{ route('reseller') }}">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
    <!--<ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>-->
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        </li>
    </ul>
</nav>
<div class="container">
    <p class="h5 float-left date_head">Date: <?=date('d/M/Y')?></p>
    <div class="alert alert-success float-right update_status_success" id="alert_success" style="display: none">Updated Successfully</div>
    <div class="alert alert-warning float-right update_status_failed" id="alert_failed" style="display: none">Error while Updating!!</div>
    <form action="javascript:void(0)" method="post" name="tasks">
        <div class="table-responsive">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>&nbsp;</th>
                    <th>Task</th>
                    <th>&nbsp;</th>
                    <th>Completed</th>
                    <th>Remarks</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach(\Milestone\Task\Model\PartnerTask::with(['Task','CategoryProgress'])->where('partner',\Illuminate\Support\Facades\Auth::id())->get()->groupBy('category') as $category_id => $Task)
                <tr class="category-row"><th class="p-2">{{ $Task[0]->CategoryProgress->name }}</th><td colspan="5">&nbsp;</td></tr>
                    @foreach($Task as $task)
                    <script>remarks[{{ $task->id }}] = '{{ $task->remarks }}'</script>
                    <tr class="task-row">
                        <td>&nbsp;</td>
                        <td>{{ $task->Task->name }}</td>
                        <td>{{ nl2br($task->Task->description) }}</td>
                        <td class="pl-5"><input type="checkbox" class="form-check-input" name="progress[{{ $task->id }}]" {{ $task->progress === 'Completed' ? 'checked' :'' }} value="1" onchange="SaveProgress({{ $task->id }},this.checked ? 'Completed' : 'New')"></td>
                        <td><input type="text" name="remarks[{{ $task->id }}]" value="{{ $task->remarks }}" class="form-control" onkeyup="$('[name=\'save[{{ $task->id }}]\']').prop('disabled',this.value === remarks[{{ $task->id }}])"></td>
                        <td><button name="save[{{ $task->id }}]" disabled class="form-control btn-outline-warning" onclick="SaveRemarks({{ $task->id }})">Save</button></td>
                    </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script defer>
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    function SaveRemarks(id){ post(id,'remarks',$('[name="remarks[' +id+ ']"]').val()); }
    function SaveProgress(id,data){ $('[name="progress[' +id+ ']"]').prop('readonly',true); post(id,'progress',data); }
    function post(id,action,data){
        if(wait) return setTimeout(post,1000,id,action,data);
        wait = true;
        $.post('{{ route('task_update') }}',{ id,action,data },(response) => {
            if(response === "0") $('#alert_failed').fadeIn(300,function(){ setTimeout(() => $('#alert_failed').fadeOut(300),2000) });
            else $('#alert_success').fadeIn(300,function(){ setTimeout(() => $('#alert_success').fadeOut(300),2000) });
            if(action === 'remarks') { remarks[id] = data; $('[name="save[' +id+ ']"]').prop('disabled',true); }
            else $('[name="progress[' +id+ ']"]').prop('readonly',false);
            wait = false;
        })
    }
</script>
</body>
