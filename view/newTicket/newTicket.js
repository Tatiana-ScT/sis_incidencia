$(document).ready(function() {
    $('#ticket_descrip').summernote({
        height: 200,
    });

    $_post("../../controller/oficina.php?op=combo",function(data,status){
        console.log(data);
    });
});