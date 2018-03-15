function sendForm() {

    //alert ($("input[name$='pseudo']").val());
    $.ajax({
        method: "POST",
        url: "https://local.dev/Dor/index.php/Welcome/add",
        data: {pseudo : $("input[name$='pseudo']").val(), comment : $("input[name$='comment']").val()},
    })
    .done(function(message){
        alert (message);
    });
}