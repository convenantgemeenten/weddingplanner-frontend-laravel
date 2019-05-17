$( document ).ready(function() {

    $('#btnDigiD').click(function(){
        $('#1stpartner').show();
        $('#1stpartnerInfo').hide();
        //$('#modal_digid').modal();
    });
    $('#btnDigiD2').click(function(){
        $('#1stpartner2').show();
        $('#1stpartnerInfo2').hide();
        //$('#modal_digid').modal();
    });

        //radBloedverw
        $( "input[name='radBloedverw']" ).click(function(){
            if($( "input[name='radBloedverw']:checked" ).val()=="Ja"){
                $("#tempError").html("U kunt niet trouwen als u bloedverwanten van elkaar bent");
            }else{
                $("#tempError").html("");
            }
            doRequest();
        });
        //radCuratele
        $( "input[name='radCuratele']" ).click(function(){
            if($( "input[name='radCuratele']:checked" ).val()=="Ja"){
                $("#tempError").html("U kunt niet trouwen als een van u onder curatele staat");
            }else{
                $("#tempError").html("");
            }
            doRequest();
        });
        //radEerderGetrouwd
        $( "input[name='radEerderGetrouwd']" ).click(function(){
            if($( "input[name='radEerderGetrouwd']:checked" ).val()=="Ja"){
                $("#tempError").html("U kunt uw melding niet online doorgeven als u al eerder getrouwd bent");
            }else{
                $("#tempError").html("");
            }
            doRequest();
        });

        $.ajaxSetup({

            headers: {
        
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        
            }
        
        });
});

function doRequest(){
    var radBloedverw = $("input[name=radBloedverw]:checked").val();
    var radCuratele = $("input[name=radCuratele]:checked").val();
    var radEerderGetrouwd = $("input[name=radEerderGetrouwd]:checked").val();
    $.ajax({
       type:'POST',
       //url:'/ajaxRequest',
       url:'/weddingplanner-frontend-laravel/server.php/NotifyAjaxRequest',
       data:{Bloedverw:radBloedverw, Curatele:radCuratele, EerderGetrouwd:radEerderGetrouwd},
       success:function(data){
          //alert(data.success);
          $("#tempError").html(data.success);
       }
    });
}
