$('.edit').click(function (){
    let id = $(this).attr('id-data'),
        username = $('#'+id+'_username').html(),
        email = $('#'+id+'_email').html();
    $('#username').val(username);
    $('#email').val(email);
    $('.modal').show();
    $('#submit_add').off();
    $('#submit_add').click(function (){
        let username = $('#username').val(),
            email = $('#email').val(),
            password = $('#password').val();
        $.ajax({
            url: '/api/user/'+id,
            method: 'PATCH',
            data: { username: username, email: email, password: password },
            async: false,
            success(data) {
                data = data.data;
                $('#'+data.id+'_username').html(data.username);
                $('#'+data.id+'_email').html(data.email);
                $('.modal').hide();
            }
        });
    });
});
