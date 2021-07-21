var editedServiceID = 0;


$('#btnAddNewModal').click(function() {
    $('#resource').val('');
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#newPortfolioForm').valid()) {
        return;
    }
    
    showSpinner('#addModalContent');

    $.ajax({
		url: base_url + "api/resource/add",
		method: "POST",
		data: new FormData(document.getElementById('newPortfolioForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
		success: function (res) {
            hideSpinner('#addModalContent');
			if (res.success == true) {
                showSuccessToastr('Add New Portfolio');
				document.location.reload();
            }
            else {
                showErrorToastr('Add New Portfolio');
            }
        },
        error: function (err) {
            hideSpinner('#addModalContent');
            showErrorToastr('Add New Portfolio');
        }
	});
});

function deleteService(ID) {
    editedServiceID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDelete').click(function() {
    $.ajax({
        url : base_url + 'api/resource/delete',
        method : 'post',
        data: {
            ID : editedServiceID
        },
        success: function() {
            showSuccessToastr('Delete Portfolio');
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Portfolio');
        }
    })
})

function editService(ID) {    
    $('#ID_Edit').val(ID);

    showSpinner('body');

    $.ajax({
        url: base_url + 'api/resource/get',
        type: 'post', 
        data: {
            ID : ID
        },
        success: function(res) {
            hideSpinner('body');
            var data = JSON.parse(res);
            data = data.data;
            if (data.success == false) {
                showErrorToastr('Get Detail');
                return;
            }
            
            $('#Title_Edit').val(data.Title);
            $('#imgPortfolio').attr('src', base_url + 'assets/images/ingredients/' + data.Attach);
            $('#editModal').modal('show');

        }
    });    
}

$('.portfolio-camera').click(function() {    
    $('#Portfolio_Edit').click();
});

$('#Portfolio_Edit').change(function () {
    readURL(this, $('#imgPortfolio'));
});

function readURL(input, avatar) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$(avatar)
				.attr('src', e.target.result);
		};

		reader.readAsDataURL(input.files[0]);
	}
}

$('#btnUpdate').click(function() {
    showSpinner('#editModalContent');
    $.ajax({
        url: base_url + 'api/resource/update',
        method: "POST",
		data: new FormData(document.getElementById('updateServiceForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
        success: function(res){
            hideSpinner('#editModalContent');
            if (res.success == true)               
                document.location.reload();
            else   
                showErrorToastr(res.message);
        },
        error: function(err) {
            hideSpinner('#editModalContent');
            showErrorToastr('Update Portfolio');
        }
    })
})

function showSpinner(target) {
    App.blockUI({
        target: target,
        animate: true
    });
}

function hideSpinner(target) {
    App.unblockUI(target);
}

