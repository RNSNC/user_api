$('.delete').click(function (){
    let id = $(this).attr('id-data');
    $.ajax({
        url: '/api/user/'+id,
        method: 'DELETE',
        data: { user: id },
        success(data) {
            $('#'+id+'_tr').remove();
        }
    });
});
