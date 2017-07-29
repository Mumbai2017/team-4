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
