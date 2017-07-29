/**
 * Created by Sumeet on 29-07-2017.
 */
function changed() {
    var sub = [];
    $('.subject:checked').each(function () {
       sub.push($(this).val());
    });

    var my_sub = JSON.stringify(sub);

    $.ajax({
       type : "POST",
       url : 'php_action/getPlanOnSubject.php',
       data : {sub : my_sub},
       contentType : "application/json",
       success : function (r) {

       }
    });
}