console.log("script fue cargado")

$(".btn").click(function(e){
    var a = alert("click on " + $(this).attr('class'));
    send()
})

$(".cuerpo").focusout(function(){
    console.log($(this).find(".text").val());
    $(this).css("border","none")
    send()
})

$(".nota").click(function(){
    $(this).find(".cuerpo").fadeIn("slow").css("border","1px solid gray")
    send()
})



function send(){
    console.log("funcion send alcanzada!!!!")
}

function edit(){}
function remove(){}