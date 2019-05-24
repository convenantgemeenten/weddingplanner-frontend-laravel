$( document ).ready(function() {

    $('#btnDigiD').click(function(){
        $('#1stpartner').show();
        $('#1stpartnerInfo').hide();
        //$('#modal_digid').modal();
        doRequestBirthdate();
    });
    $('#btnDigiD2').click(function(){
        $('#1stpartner2').show();
        $('#1stpartnerInfo2').hide();
        //$('#modal_digid').modal();
        doRequestBirthdate();
    });

        //radBloedverw
        $( "input[name='radBloedverw']" ).click(function(){
            if($( "input[name='radBloedverw']:checked" ).val()=="Ja"){
                $("#tempError").html("U kunt niet trouwen als u bloedverwanten van elkaar bent");
            }else{
                $("#tempError").html("");
            }
            doRequest('Bloedverw');
        });
        //radCuratele
        $( "input[name='radCuratele']" ).click(function(){
            if($( "input[name='radCuratele']:checked" ).val()=="Ja"){
                $("#tempError").html("U kunt niet trouwen als een van u onder curatele staat");
            }else{
                $("#tempError").html("");
            }
            doRequest('Curatele');
        });
        //radEerderGetrouwd
        $( "input[name='radEerderGetrouwd']" ).click(function(){
            if($( "input[name='radEerderGetrouwd']:checked" ).val()=="Ja"){
                $("#tempError").html("U kunt uw melding niet online doorgeven als u al eerder getrouwd bent");
            }else{
                $("#tempError").html("");
            }
            doRequest('EerderGetrouwd');
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
});

function doRequest(reqType){
    var radBloedverw = $("input[name=radBloedverw]:checked").val();
    var radCuratele = $("input[name=radCuratele]:checked").val();
    var radEerderGetrouwd = $("input[name=radEerderGetrouwd]:checked").val();
    $.ajax({
       type:'POST',
       url:'/NotifyAjaxRequest',
       //url:'/weddingplanner-frontend-laravel/server.php/NotifyAjaxRequest',
       data:{Bloedverw:radBloedverw, Curatele:radCuratele, EerderGetrouwd:radEerderGetrouwd, request:reqType},
       success:function(data){
          //alert(data.success);
          $("#tempError").html(data.success);
       }
    });
}
function doRequestBirthdate(){
    var BSNFirst='99997865', BSNSecond='99997866', Weddingdate='2019-05-28';
    $.ajax({
       type:'POST',
       url:'/ReservationAjaxRequest',
       //url:'/weddingplanner-frontend-laravel/server.php/ReservationAjaxRequest',
       data:{FirstBSN:BSNFirst, SecondBSN:BSNSecond, WeddingDate:Weddingdate},
       success:function(data){
            if(data.success){
                alert(data.success);
                //$("#tempError").html(data.success);
            }else{
                alert(data.error);
            }
       }
    });
}
