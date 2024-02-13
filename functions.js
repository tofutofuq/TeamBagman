$(document).on('click','#rsub',function(e){
    e.preventDefault();
    var info = $('#register').serializeArray();

    data = {}

    for(var i = 0; i < info.length; i++){
        data[info[i].name] = info[i].value

    }

    $.post("insert.php",data,function(response){
        var reply = JSON.parse(response);
        if(reply.status){
            $("#rresponse").text(reply.message);
            $("#rresponse").addClass("succ");
        }else{
            $("#rresponse").text(reply.message)
        }

    });


})
$(document).on('click','#rsub2',function(e){
    e.preventDefault();
    var info = $('#register').serializeArray();

    data = {}

    for(var i = 0; i < info.length; i++){
        data[info[i].name] = info[i].value

    }

    $.post("insert2.php",data,function(response){
        var reply = JSON.parse(response);
        if(reply.status){
            $("#rresponse").text(reply.message);
            $("#rresponse").addClass("succ");
        }else{
            $("#rresponse").text(reply.message)
        }

    });


})
$(document).on('click','#rsub3',function(e){
    e.preventDefault();
    var info = $('#register').serializeArray();

    data = {}

    for(var i = 0; i < info.length; i++){
        data[info[i].name] = info[i].value

    }

    $.post("insert3.php",data,function(response){
        var reply = JSON.parse(response);
        if(reply.status){
            $("#rresponse").text(reply.message);
            $("#rresponse").addClass("succ");
        }else{
            $("#rresponse").text(reply.message)
        }

    });


})

$(document).on('click','#lsub',function(e){
    e.preventDefault();
    var data = $(this).val();

    $.post("select.php",{"data": data},function(response){
        var reply = JSON.parse(response);
        if(reply.status){
            $("#name").text(reply.message);
            window.location.href = "submit.php";
        }else{
            $("#name").text(reply.message)
        }

    });


})
$(document).on('click','#lsub2',function(e){
    e.preventDefault();
    var data = $(this).val();

    $.post("select.php",{"data": data},function(response){
        var reply = JSON.parse(response);
        if(reply.status){
            $("#name").text(reply.message);
            window.location.href = "submit2.php";
        }else{
            $("#name").text(reply.message)
        }

    });


})
$(document).on('click','#lsub3',function(e){
    e.preventDefault();
    var data = $(this).val();

    $.post("select.php",{"data": data},function(response){
        var reply = JSON.parse(response);
        if(reply.status){
            $("#name").text(reply.message);
            window.location.href = "submit3.php";
        }else{
            $("#name").text(reply.message)
        }

    });


})
