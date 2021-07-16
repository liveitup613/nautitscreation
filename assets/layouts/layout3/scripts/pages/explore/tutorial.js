var editedServiceID = 0;

$('#btnAddNewModal').click(function() {
    $('#resource').val('');
    $('#AddNewModal').modal('show');
});

$('#Youtube').click(function() {
    $('#VideoElement').hide();
    $('#YoutubeElement').show();
    $('#resource').prop('required', false);
    $('#YoutubeID').prop('required', true);
});

$('#FromPC').click(function() {
    $('#VideoElement').show();
    $('#YoutubeElement').hide();
    $('#resource').prop('required', true);
    $('#YoutubeID').prop('required', false);
});

$('#btnAddNew').click(function() {
    if (!$('#newPortfolioForm').valid()) {
        return;
    }

    var youtubeID = $('#YoutubeID').val();
    if (youtubeID.length != 11 && $('#Youtube').prop('checked'))
    {
        showErrorToastr('Youtube ID is not valid');
        return;
    }

    $.ajax({
		url: base_url + "api/tutorial/add",
		method: "POST",
		data: new FormData(document.getElementById('newPortfolioForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
		success: function (res) {
			if (res.success == true) {
                showSuccessToastr('Add New Tutorial');
				document.location.reload();
            }
            else {
                showErrorToastr('Add New Tutorial');
            }
        },
        error: function (err) {
            showErrorToastr('Add New Tutorial');
        }
	});
});

function deleteService(ID) {
    editedServiceID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDelete').click(function() {
    $.ajax({
        url : base_url + 'api/tutorial/delete',
        method : 'post',
        data: {
            ID : editedServiceID
        },
        success: function() {
            showSuccessToastr('Delete Tutorial');
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Tutorial');
        }
    })
});
