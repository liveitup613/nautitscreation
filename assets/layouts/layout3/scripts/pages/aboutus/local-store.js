var editedID = 0;

$('#btnAddNewModal').click(function() {
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#addNewForm').valid())
        return;

    $.ajax({
        url: base_url + 'api/value/add',
        type: 'post',
        data: {
            Value : $('#Value').val(),
            Type: 'Local Store'
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Add New Local Store');
        }        
    })
});

function editValue(ID) {
    editedID = ID;
    $.ajax({
        url: base_url + 'api/value/get',
        type: 'post',
        data: {
            ID: ID
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == false) {
                showErrorToastr('Get Local Store');
                return;
            }

            $('#ValueEdit').val(data.Value);
            $('#EditModal').modal('show');
        }
    })
    
    
}

$('#btnUpdate').click(function() {
    $.ajax({
        url: base_url + 'api/value/update',
        type: 'post',
        data: {
            ID: editedID,
            Value: $('#ValueEdit').val()
        },
        success: function(res) {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Update Local Store');
        }
    })
})



function deleteValue(ID) {
    editedID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDelete').click(function() {
    $.ajax({
        url : base_url + 'api/value/delete',
        type: 'post',
        data: {
            ID : editedID
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Local Store');
        }
    })
});