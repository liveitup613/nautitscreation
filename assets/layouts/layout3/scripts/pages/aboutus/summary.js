$('#btnUpdate').click(function() {
    $.ajax({
        url : base_url + 'api/aboutus/udpateJourney',
        type : 'post',
        data : {            
            Journey : $('#Journey').val(),
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == true)
                showSuccessToastr('Update Our Journey');
            else 
                showErrorToastr('Update Our Journey');
        },
        error : function(err) {
            showErrorToastr('Update Our Journey');
        }
    })
});