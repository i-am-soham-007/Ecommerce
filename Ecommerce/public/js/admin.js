$(document).ready(function(){
    $("#current-password").keyup(function(){

        var cpass = $(this).val();
alert(cpass);
        $.ajax({
            url : 'admin/check-current-pwd',
            method:"POST",
            data :{'cpass' : cpass},
            success :function(response){
                if(response =="false")
                {
                    $("#check-current-password").html("<font color='red'>Current Password is incorrect </font>");
                }else{
                    $("#check-current-password").html("<font color='green'>Current Password is correct </font>");
                }
            },
            error:function(){
                alert("error");
            }
        })
    });
});