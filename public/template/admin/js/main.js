$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id, url) {
    if (confirm('Bạn có muốn xóa không ?')) {
        $.ajax({
            type: 'DELETE',
            datatype: 'JSON',
            data: { id },
            url: url,
            success: function (result) {
                if (result.error === false) {
                    location.reload();
                    alert(result.message);
                } else {
                    alert('Xóa lỗi vui lòng thử lại sau')
                }
            }
            ,
            error: function () {
                alert('Có lỗi xảy ra, vui lòng thử lại sau');
            }
        })
    }
}


// Upload file


