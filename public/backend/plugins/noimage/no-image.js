
$(document).ready(function() {
    $('#noImage').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showNoImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});


