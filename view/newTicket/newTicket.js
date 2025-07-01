function init(){
    $("#ticket_form").on("submit",function(e){
        guardaryeditar(e);
    })
}

$(document).ready(function() {
    $('#ticket_descrip').summernote({
        height: 200,
    });

    $.post("../../controller/oficina.php?op=combo",function(data,status){
        $('#ofi_id').html(data); 
    });
});

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#ticket_form")[0]);
    $.ajax({
        url:"../../controller/ticket.php?op=insert",
        type:"POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){

            $('#tick_titulo').val(''); 
            $('#ticket_descrip').summernote('reset'); 
            swal.fire({
                title: 'Correcto',
                text: "Registrado Correctamente",
                icon: "success"});

        } 
    })
}

init();