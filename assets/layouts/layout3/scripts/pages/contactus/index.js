$('#btnUpdateContact').click(function() {
    $.ajax({
        url : base_url + 'api/contactus/updateSummary',
        type : 'post',
        data : {
            Location : $('#Location').val(),
            Phone : $('#Phone').val(),            
            Email : $('#Email').val(),
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == true)
                showSuccessToastr('Update Contact Us');
            else 
                showErrorToastr('Update Contact Us');
        },
        error : function(err) {
            showErrorToastr('Update Contact Us');
        }
    })
});

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
            Type: 'Hour'
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Add New Hour');
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
                showErrorToastr('Get Hour');
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
            showErrorToastr('Update Hour');
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
            showErrorToastr('Delete Hour');
        }
    })
});