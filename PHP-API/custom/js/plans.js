function viewDoc(id) {
    if(id){
        $.ajax({
           url : 'php_action/fetchDocuments.php',
           type : 'POST',
           data : {id : id},
           dataType : 'json',
           success : function (response) {
               $('#images').append(
                '<img src="'+ response.documents+'"/>'   
               );
           }     
        });
    }
}

function updateStatus(id) {
    console.log(id);
    $.ajax({
        url : "php_action/updateStatus.php",
        type : "POST",
        data : {id : id},
        dataType : 'json',
        success : function (r) {

        },
        error : function (r) {
            console.log(r);
        }
    });

}