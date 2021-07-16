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
            Name : $('#Name').val(),
            Value : $('#Value').val(),
            Type: 'FAQ'
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Add New FAQ');
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
                showErrorToastr('Get FAQ');
                return;
            }

            $('#NameEdit').val(data.Name);
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
            Value: $('#ValueEdit').val(),
            Name: $('#NameEdit').val()
        },
        success: function(res) {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Update FAQ');
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
            showErrorToastr('Delete FAQ');
        }
    })
});