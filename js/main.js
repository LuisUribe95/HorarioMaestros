jQuery(document).on('submit','#formlg',function(event) {
    event.preventDefault();
    jQuery.ajax({
        url:'../ind.php',
        type:'POST',
        dataType: 'json',
        data:$(this).serialize(),
        beforeSend:function()
        {
            $('.btn').val('validando....');
        }
    })
    .done(function(respuesta){
        console.log(respuesta);
        if(!respuesta.error)
        {
            if(respuesta.tipo == 'Administrador')
            {
                location.href = '../inde.php';
            }else if(respuesta.tipo = 'Prefecto'){
                location.href = '../pruebas.html';

            }

        }else{
            $('.error').slideDown('slow');
            setTimeout(function(){
                $('.error').slideUp('slow');
            },3000);
            $('.btn').val('Ingresar');
        }
    })
    .fail(function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("complete");
    });
});