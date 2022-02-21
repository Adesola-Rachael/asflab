// create new Author
$(document).on('click', '#addauthor',function(e){
    e.preventDefault();
    
    $('#AddAuthorModal').modal('show');
  });

    $(document).on('click', '.AddNewAuthor',function(){
      //   var bookform={
      //     'book':$('.book').val(),
          
      //   }
      var author=$("#author").serialize();
      console.log(author);
      console.log("clicked");
      
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          url:"/author",
          type:"POST",
          data:author,
        //   dataType:"json",
          
          success:function(response){
          // console.log(response);
          $('#AddAuthorModal').modal('hide');
          if(response.status==200){
              $('#Author_success_message').html(
              '<div class="alert alert-success alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
              '</h5></div>'
              );
              // window.location="book_book";
          }else{
              console.log(response.message);
              var message=JSON.stringify(response.message)
              $('#Author_success_message').html(
              '<div class="alert alert-danger alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
              '</div>'
              );

          }
          $('#AddbookModal').modal('hide');
          }
        });
    });
