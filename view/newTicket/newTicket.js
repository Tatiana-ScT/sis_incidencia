$(document).ready(function() {
    $('#ticket_descrip').summernote({
        height: 200,
    });

    $.post("../../controller/oficina.php?op=combo",function(data,status){
        console.log(data);
    });
});