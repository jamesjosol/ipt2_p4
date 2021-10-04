<div class="modal fade" id="logsModal" tabindex="-1" role="dialog" aria-labelledby="logsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="logsModalLabel"><i class="fas fa-file-alt"></i> Logs</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            
            <table id="logsdatatable" class="table table-bordered table-striped table-sm display"  style="width:100%">
                <thead class="theadstyle">
                    <th>Time</th>
                    <th>UserID</th>
                    <th>User</th>
                    <th>Log Entry</th>
                    
                </thead>
                <tbody>
                    @foreach($logs as $l)
            
                    <tr class="data-row">
                        <td>{{$l->created_at}}</td>
                        <td>{{$l->user->id}}</td>
                        <td>{{$l->user->name}}</td>
                        <td>{{$l->log_entry}}</td>
                        
                    </tr>
            
                    @endforeach
                </tbody>
            </table>  
        </div>
    </div>
</div>