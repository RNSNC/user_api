$('#add_new').click(function (){
    $('#username').val('');
    $('#email').val('')
    $('#password').val('');
    $('.modal').show();
    $('#submit_add').off();
    $('#submit_add').click(function (){
        let username = $('#username').val(),
            email = $('#email').val(),
            password = $('#password').val();
        $.post({
            url: '/api/user',
            data: { username: username, email: email, password: password },
            async: false,
            success(data){
                data = data.data;
                $('tbody').append('' +
                    '<tr id="'+data.id+'_tr">' +
                    '<th scope="row">'+data.id +'</th>' +
                    '<td class="username" id="_username">'+data.username+'</td>' +
                    '<td class="email" id="_email">'+data.email+'</td>' +
                    '<td>' +
                    '<span class="btn btn-sm btn-warning edit" id-data="'+data.id+'">Edit</span>' +
                    '<span class="btn btn-sm btn-danger delete" id-data="'+data.id+'">Delete</span>' +
                    '</td>' +
                    '</tr>');
                $('.modal').hide();
            }
        });
    });
});
