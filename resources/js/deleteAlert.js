$(document).ready(function(){
    $('.deleteAlert').click(function(e){
        e.preventDefault();
        const endPoint = $(this).attr('href');
        const lang = document.documentElement.lang.substr(0, 2);
        var title;
        var confirm;
        var confirmMessage;
        var cancel;
        if(lang=='ar'){
          title="هل أنت متأكد من الحذف؟"
          confirm='متأكد'
          confirmMessage='تم الحذف'
          cancel='لا'
        }
        else{
          title="Are You Sure You want to Delete This"
          confirm='confirm'
          confirmMessage='Delete is confirmed'
          cancel='cancel'
        }
        swal({

            title:
                  title
                  ,
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: confirm,
            cancelButtonText:cancel
          }).then((result) => {
            if (result.value) {
              window.location.href = endPoint;
              swal(
                confirmMessage,
              )
            }
          })
    });
});
