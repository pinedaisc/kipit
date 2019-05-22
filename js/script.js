console.log("script fue cargado")

$(".btn").click(function(e){
    var a = alert("click on " + $(this).attr('class'));
    send()
})

$(".nota").focusout(function(){
    console.log($(this).find(".text").val());
    $(this).find(".text").css("border","none")
    $(this).find(".titulo").css("border","none")
    send()
})

$(".nota").click(function(){
    $(this).find(".text").css("border","1px solid gray")
    $(this).find(".titulo").css("border","1px solid gray")
    send()
})



function send(){
    console.log("funcion send alcanzada!!!!")
}

function edit(){}
function remove(){}