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
		url: base_url + "api/video/add",
		method: "POST",
		data: new FormData(document.getElementById('newPortfolioForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
		success: function (res) {
			if (res.success == true) {
                showSuccessToastr('Add New Video');
				document.location.reload();
            }
            else {
                showErrorToastr('Add New Video');
            }
        },
        error: function (err) {
            showErrorToastr('Add New Video');
        }
	});
});

function deleteService(ID) {
    editedServiceID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDelete').click(function() {
    $.ajax({
        url : base_url + 'api/video/delete',
        method : 'post',
        data: {
            ID : editedServiceID
        },
        success: function() {
            showSuccessToastr('Delete Video');
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Video');
        }
    })
})

function editService(ID) {    
    $('#ID_Edit').val(ID);

    $.ajax({
        url: base_url + 'api/resource/get',
        type: 'post', 
        data: {
            ID : ID
        },
        success: function(res) {
            var data = JSON.parse(res);
            data = data.data;
            if (data.success == false) {
                showErrorToastr('Get Detail');
                return;
            }

            $('#imgPortfolio').attr('src', base_url + 'assets/images/photos/' + data.Attach);
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
    $.ajax({
        url: base_url + 'api/resource/update',
        method: "POST",
		data: new FormData(document.getElementById('updateServiceForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
        success: function(res){
            if (res.success == true)               
                document.location.reload();
            else   
                showErrorToastr(res.message);
        },
        error: function(err) {
            showErrorToastr('Update Photo');
        }
    })
})