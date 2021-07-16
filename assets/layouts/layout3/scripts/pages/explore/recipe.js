var editedID = 0;

var ComponentsEditors = function () {
    
    var handleWysihtml5 = function () {
        if (!jQuery().wysihtml5) {
            return;
        }

        if ($('.wysihtml5').size() > 0) {
            $('.wysihtml5').wysihtml5({
                "stylesheets": ["../assets/global/plugins/bootstrap-wysihtml5/wysiwyg-color.css"]
            });
        }
    }

    var handleSummernote = function () {
        $('#sumnoteIngredients').summernote({height: 300});
        $('#sumnoteProcess').summernote({height: 300});
        $('#sumnoteIngredientsEdit').summernote({height: 300});
        $('#sumnoteProcessEdit').summernote({height: 300});
        //API:
        //var sHTML = $('#summernote_1').code(); // get code
        //$('#summernote_1').destroy(); // destroy
    }

    return {
        //main function to initiate the module
        init: function () {
            handleWysihtml5();
            handleSummernote();
        }
    };

}();

jQuery(document).ready(function() {    
   ComponentsEditors.init(); 
});

function deleteRecipe(ID) {
    editedID = ID;
    $('#deleteModal').modal('show');
}

$('#btnDeleteModalYes').click(function() {
    $.ajax({
        url: base_url + 'api/recipe/delete',
        type: 'post',
        data: {
            ID : editedID
        },
        success: function() {
            document.location.reload();
        },
        error: function(err) {
            showErrorToastr('Delete Recipe');
        }
    })
});

$('#btnAddNewModal').click(function() {
    $('#AddNewModal').modal('show');
});

$('#btnAddNew').click(function() {
    if (!$('#newRecipeForm').valid()) {
        return;
    }

    showSpinner('#newRecipeContent');

    $('#inputIngredients').val($('#sumnoteIngredients').code());
    $('#inputProcess').val($('#sumnoteProcess').code());

    $.ajax({
        url: base_url + 'api/recipe/add',
        type: 'post',
        data: new FormData(document.getElementById('newRecipeForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
		success: function (res) {
            hideSpinner('#newRecipeContent');
			if (res.success == true) {
                document.location.reload();
            }
            else {
                showErrorToastr('Add New Recipe');
            }
        },
        error: function (err) {
            hideSpinner('#newRecipeContent');
            showErrorToastr('Add New Recipe');
        }
    })
});

function editRecipeContent(ID) {
    console.log(ID);
    editedID = ID;

    $.ajax({
        url: base_url + 'api/recipe/get',
        type: 'post',
        data: {
            ID : ID
        },
        success: function(res) {
            var result = JSON.parse(res);

            if (result.success == false) {
                showErrorToastr('Get Recipe Data');
                return;
            }

            var recipe = result.recipe;
            $('#inputTitleEdit').val(recipe.Title);
            $('#sumnoteIngredientsEdit').code(recipe.Ingredients);
            $('#sumnoteProcessEdit').code(recipe.Process);

            $('#editModal').modal('show');
        }
    });
}

$('#btnUpdate').click(function() {
    if (!$('#updateRecipeForm').valid()) {
        return;
    }

    showSpinner('#editContentModalContent');

    $.ajax({
        url: base_url + 'api/recipe/update',
        type: 'post',
        data: {
            ID: editedID,
            Title: $('#inputTitleEdit').val(),
            Ingredients: $('#sumnoteIngredientsEdit').code(),
            Process: $('#sumnoteProcessEdit').code()
        },
        success: function(res) {
            hideSpinner('#editContentModalContent');

            var result = JSON.parse(res);
            if (result.success == false) {
                showErrorToastr('Update Recipe Content');
                $('#editModal').modal('hide');
                return;
            }

            document.location.reload();
        },
        error: function (err) {
            hideSpinner('#editContentModalContent');
            showErrorToastr('Update Recipe Content');
        }
    })
});

function editRecipeImages(ID) {
    showSpinner('body');
    editedID = ID;

    $.ajax({
        url: base_url + 'api/recipe/images',
        type: 'post',
        data: {
            ID: ID
        },
        success: function(res) {
            var result = JSON.parse(res);

            if (result.success == false) {
                showErrorToastr('Get Images');
                return;
            }

            var images = result.images;
            var imageContent = getImagesHTML(images);

            $('#imageContent').html(imageContent);

            hideSpinner('body');

            $('#editImagesModal').modal('show');

            console.log('Finish');
        }
    })
}

function getImagesHTML(images) {
    imagesContent = '';
    images.forEach(image => {
        imagesContent += 
        '<div class="col-md-4 col-sm-6 col-xs-12">' +  
            '<div class="portlet light profile-portlet">' + 
                '<div class="profile-pic shadow-green">' + 
                    '<img src="' + base_url + 'assets/images/recipes/' + image.Attach + '" class="img-responsive" alt="">' + 
                '</div>' + 
                '<div class="profile-buttons">' + 
                    '<button type="button" class="btn btn-circle red btn-sm" onclick="deleteRecipeImage(' + image.ID + ')"><i class="fa fa-trash-o"></i>&nbsp;Remove</button>' + 
                '</div>' + 
            '</div>' + 
        '</div>';                
    });

    return imagesContent;
}

$('#btnInsertImages').click(function() {
    $('#inputResource').click();
});

$('#inputResource').change(function() {
    showSpinner('#editImageModalContent');

    $('#inputRecipeID').val(editedID);

    $.ajax({
        url: base_url + 'api/recipe/addImages',
        type: 'post',
        data: new FormData(document.getElementById('updateImagesForm')),
		contentType: false,
		cache: false,
		processData: false,
		dataType: "json",
		success: function (res) {
            hideSpinner('#editImageModalContent');
			if (res.success == true) {
                showSuccessToastr('Add New Images');
				var imageContent = getImagesHTML(res.images);

                $('#imageContent').html(imageContent);
            }
            else {
                showErrorToastr('Add New Images');
            }
        },
        error: function (err) {
            hideSpinner('#editImageModalContent');
            showErrorToastr('Add New Images');
        }
    })
});

function deleteRecipeImage(ID) {
    showSpinner('#editImageModalContent');

    console.log(ID);

    $.ajax({
        url: base_url + 'api/recipe/image/delete',
        type: 'post',
        data: {
            RecipeID: editedID, 
            ID: ID
        },
        success: function(res) {
            var result =  JSON.parse(res);
            if (result.success == false) {
                hideSpinner('#editImageModalContent');
                showErrorToastr('Delete Recipe Image');
                return;
            }

            showSuccessToastr('Delete Recipe Image');
            var imageContent = getImagesHTML(result.images);

            $('#imageContent').html(imageContent);
            hideSpinner('#editImageModalContent');
        },
        error: function (err) {
            hideSpinner('#editImageModalContent');
            showErrorToastr('Add New Images');
        }
    })
}

function showSpinner(target) {
    App.blockUI({
        target: target,
        animate: true
    });
}

function hideSpinner(target) {
    App.unblockUI(target);
}



