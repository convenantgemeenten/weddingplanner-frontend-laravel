var BSNFirst='99997865', BSNSecond='99997866', Weddingdate='28/05/2019';

$( document ).ready(function() {

    $('#btnDigiD').click(function(){
        $('#1stpartner').show();
        $('#1stpartnerInfo').hide();
        setBSN(BSNFirst,1);
        checkBirthdate('birthdate1');
    });

    $('#cbSameAddress').change(function(){
        $('#2ndpartner').toggle();
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var date = new Date();date.setFullYear(date.getFullYear() - 16);
    $('#dp1').datepicker({format: 'dd-mm-yyyy', enddate:date, language:"nl"}).on('changeDate',function(e){checkBirthdate('birthdate2');});

});

//
function checkBirthdate(check){
    $.ajax({
       type:'POST',
       url:'/ReservationAjaxRequest',
       //url:'/weddingplanner-frontend-laravel/server.php/ReservationAjaxRequest',
       data:{FirstBSN:BSNFirst, SecondBSN:BSNSecond, WeddingDate:Weddingdate, Check:check},
       success:function(data){
            if(data.success){
                alert(data.success);
            }else{
                //alert(data.error);
                $('#modal_digid').modal();
            }
       }
    });
}

//ajaxRequestPostDigiD
function setBSN(bsn,nr){
    var BSN1=0;BSN2=0;
    if(nr==1){BSN1=bsn;}else{BSN2=bsn;}
    $.ajax({
       type:'POST',
       url:'/ReservationAjaxRequestDigiD',
       //url:'/weddingplanner-frontend-laravel/server.php/ReservationAjaxRequestDigiD',
       data:{FirstBSN:BSN1, SecondBSN:BSN2},
       success:function(data){
            if(data.success){
                //
            }
       }
    });
}