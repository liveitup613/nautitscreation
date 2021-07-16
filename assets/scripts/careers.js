function showDetail(ID) {
    $.ajax({
        url: base_url + 'api/job/get',
        type: 'post',
        data: {
            ID: ID
        },
        success: function(res) {
            var data = JSON.parse(res);

            if (data.success == true) {
                $('#job-title').html(data.Title);
                $('#job-content').html(data.Content);
                $('#job-modal').modal('show');
            }
        }
    })
    
}