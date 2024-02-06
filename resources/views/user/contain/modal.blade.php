<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">User</h5>
            </div>
            <div class="modal-body">
                @include('user.contain.form_fields')
                <button id="close" type="button" class="btn btn-secondary" data-dismiss="modal" style="display: inline; float: right">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#close').click(function (){
        $('.modal').hide();
    });
</script>
