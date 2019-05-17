$( document ).ready(function() {

    $('#btnDigiD').click(function(){
        $('#1stpartner').show();
        $('#1stpartnerInfo').hide();
        $('#modal_digid').modal();
    });

    $('#cbSameAddress').change(function(){
        //2ndpartner
        $('#2ndpartner').toggle();
    });

});