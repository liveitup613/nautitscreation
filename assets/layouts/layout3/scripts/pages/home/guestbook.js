var editedID = 0;

$('#btnAddNewModal').click(function() {
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#addNewForm').valid())
        return;

    $.ajax({
        url: base_url + 'api/guestbook/add',
        type: 'post',
        data: {
            Client: $('#Client').val(),
            Feedback : $('#Feedback').val(),            
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Add New Guetbook');
        }        
    })
});

function editValue(ID) {
    editedID = ID;
    $.ajax({
        url: base_url + 'api/guestbook/get',
        type: 'post',
        data: {
            ID: ID
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == false) {
                showErrorToastr('Get GuestBook');
                return;
            }

            $('#ClientEdit').val(data.Client);
            $('#FeedbackEdit').val(data.Feedback);
            $('#EditModal').modal('show');
        }
    })
    
    
}

$('#btnUpdate').click(function() {
    $.ajax({
        url: base_url + 'api/guestbook/update',
        type: 'post',
        data: {
            ID: editedID,
            Client: $('#ClientEdit').val(),
            Feedback: $('#FeedbackEdit').val()
        },
        success: function(res) {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Update GuestBook');
        }
    })
})



function deleteValue(ID) {
    editedID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDelete').click(function() {
    $.ajax({
        url : base_url + 'api/guestbook/delete',
        type: 'post',
        data: {
            ID : editedID
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete GuestBook');
        }
    })
});