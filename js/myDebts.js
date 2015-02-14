
function archiveDebt(userGet, userPay, date){
$.ajax({
        url: '/oweme/archiveDebt.php',
        type: 'POST',
        data: 'userGet='+userGet+'&userPay='+userPay+'&date='+date,
        success: function(result){
            document.getElementById(result).style.display = "none";
        }

     });         
}