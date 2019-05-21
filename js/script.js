console.log("script fue cargado")

$(".btn").click(function(e){
    var a = alert("click on " + $(this).attr('class'));
})