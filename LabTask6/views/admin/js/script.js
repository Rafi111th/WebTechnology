
$(document).ready(function() {
    loadData();
});

$(document).on('click', '.create-new-admin', function() {
    $(document).find('.styled-table').hide();
    $(document).find('.admin-edit-form').hide();
    $(document).find('.admin-form').show();
    $(document).find('.cancel-create-edit-admin').show();
    $(this).hide();
});

$(document).on('click', '.cancel-create-edit-admin', function() {
    $(document).find('.styled-table').show();
    $(document).find('.admin-form').hide();
    $(document).find('.admin-edit-form').hide();
    $(document).find('.create-new-admin').show();
    $(this).hide();
});

$(document).on('click', '.delete-admin', function() {
    if (!confirm("Do you want to delete ?")) {
        return false;
    }
    var id = $(this).data('id');
    $.ajax({
        url: "controllers/admin.php",
        type: "POST",
        dataType: 'json',
        data: {
            'delete': 'delete',
            'id': id,
        },
        success: function(data) {
            alert("Delete successful !");
        },
        error: function(error) {
            alert("Delete failed !");
        },
        
        complete: function() {
            loadData();
        }
    });
});

$(document).on('click', '.button-search-admin', function() {
    var search_string = $(".search-string").val();
    loadData(1, search_string);
});

function editAdmin(id) 
{
    $.ajax({
        url: "controllers/admin.php",
        type: "POST",
        dataType: 'json',
        data: {
            'edit': 'edit',
            'id': id,
        },
        success: function(data) {
            console.log(data);
            var content = '';
            content = '<form id="update-admin-form" action="controllers/admin.php" method="post">' +
                '<fieldset>' +
                    '<legend>Edit Admin:</legend>' +
                    '<div class="margin-bottom-1">' +
                        '<label for="name">Full Name</label>' +
                        '<input type="text" id="name" name="name" value="'+data.admin.full_name+'" placeholder="Admin Name">' +
                    '</div>' +
                    '<div class="margin-bottom-1">' +
                        '<label for="email">Email</label>' +
                        '<input type="email" id="email" name="email" value="'+data.admin.email+'" placeholder="Admin Email">' +
                    '</div>' +

                '<div class="margin-bottom-1">' +
                        '<label for="password">Password</label>' +
                        '<input type="password" id="password" name="password" placeholder="New Password">' +
                    '</div>' +
                    '<div class="margin-bottom-1">' +
                        '<label for="confirm_password">Confirm Password</label>' +
                        '<input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm New Password">' +
                    '</div>' +
                    
                    '<div class="">' +
                        '<input name="update_admin" type="hidden" value="1">'+
                        '<input name="admin_id" type="hidden" value="'+data.admin.admin_id+'">'+
                        '<button id="update-admin" name="update_admin" type="submit" class="margin-top-1 custom-button text-white background-green"> Save Change </button>' +
                    '</div>' +
                '</fieldset>' +
            '</form>';

            $(document).find('.styled-table').hide();
            $(document).find('.admin-form').hide();
            $(document).find('.create-new-admin').hide();
            $(document).find('.cancel-create-edit-admin').show();

            $(document).find(".admin-edit-form").show().empty();
            $(document).find(".admin-edit-form").append(content);
        },
        error: function(error) {
            console.log(error);
        },
        complete: function() {}
    });
}

$(document).on('click', "#save-admin", function(e) {
    e.preventDefault();
    var datas = $("#add-admin-form").serializeArray();
    var validated = false;
    
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,10})+$/;
    $.each(datas, function(i, field) {
        if (field.name != 'save_admin' && field.value == "") {
            alert(field.name + ' field is required !');
            validated = false;
            return false;
        } else {
            if(field.name == 'email' && !field.value.match(mailformat)) {
                alert('Invalid email !');
                validated = false;
                return false;
            }
            validated = true;
        }
    });

    if (validated == true) {
        $("#add-admin-form").submit();
    }
})

function loadData(page = null, search_string = null) {
    $("#tbody").html('');

    $.ajax({
        url: "controllers/admin.php",
        type: "POST",
        dataType: 'json',
        data: {
            'data': 'data',
            'page': page ? page : 1,
            'search_string' : search_string
        },
        success: function(data) {
            // console.log(data.admins);
            var content = '';
            $.each(data.admins, function(key, admin) {

                content += '<tr>' +
                        '<td>' + (++key) + '</td>' +
                        '<td>' + admin.full_name + '</td>' +
                        '<td>' + admin.username + '</td>' +
                        '<td>' + admin.email + '</td>' +
                        '<td>' + admin.created_date + '</td>' +
                        '<td>' +
                        '<a href="javascript:;" onclick="editAdmin('+admin.admin_id+')" class="btn btn-xs btn-info edit-admin" title="Edit">' +
                        '<i class="fa fa-edit"></i>' +
                        '</a>';
                    content += '&nbsp;&nbsp;<a href="javascript:;" data-id=' + admin.admin_id + ' class="btn btn-xs delete-admin" title="Delete">' +
                        '<i class="fa fa-trash" style="color:red;"></i>' +
                        '</a>' +
                        '</td>' +
                    '</tr>';
            });
            if (data.length < 1) {
                $("#tbody").append('<tr><td colspan="6" align="center"> No data found ! </td></tr>');
            }
            $("#tbody").append(content);
            var currentPage = parseInt(data.page);
            var paginationContent = '';
            paginationContent += '<a href="javascript:;" onclick="loadData(' + (currentPage - 1) + ')">&laquo;</a>';

            for (var i = 1; i <= data.total_page_count; i++) {
                if (i == currentPage) {
                    paginationContent += '<a href="javascript:;" onclick="loadData(' + i + ')" class="active"> ' + i + ' </a>';
                } else {
                    paginationContent += '<a href="javascript:;" onclick="loadData(' + i + ')"> ' + i + ' </a>';
                }
            }

            paginationContent += '<a href="javascript:;" onclick="loadData(' + (currentPage + 1) + ')">&raquo;</a>';
            $(".pagination").empty();
            $(".pagination").append(paginationContent);
        },
        error: function(error) {
            console.log(error);
        },
        complete: function() {}
    });
}