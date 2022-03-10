// create new Author
  $(document).on('click', '#addauthor',function(e){
      e.preventDefault();
      
      $('#AddAuthorModal').modal('show');
  });

  $(document).on('click', '.AddNewAuthor',function(){
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

    // update Author
    // edit author////////////////////////////////////////////
  $(document).on('click', '.edit_author', function(e){
    e.preventDefault();
    var author_id=$(this).val();
    console.log(author_id);
      $('#EditAuthorModal').modal('show');
      $.ajax({
      type: "GET",
      url:"/getauthorById/"+author_id,
        dataType:"json",
      success:function(response){
        //  console.log(response);
        // alert("edit_author").val(response.data.author);
        $('#edit_name').val(response.data.name);
        $('#edit_about').val(response.data.about);
        // $('#edit_author').val('bio');
        // $('#edit_content').val(response.data.content);
        $('#edit_author_id').val(author_id);
        
      }  
    });


      // End of edit author from database/////////////////////
      //update author and store into  database////////////////////////////
    $(document).on('click', '.update_author', function(e){
      e.preventDefault();
      var author_id=$('#edit_author_id').val();
        // console.log("this data 111" +author_id+ "mydata");
        var author=$("#edit_author").serialize();
        // console.log(author+"then the no :"+author_id)
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: "PUT",
        url:"/updateAuthor/"+author_id,
        data:author,
        dataType:"json",
        success:function(response){
          $('#EditAuthorModal').modal('hide');
            if(response.status==200){
            $('#Author_success_message').html(
            '<div class="alert alert-success alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
            '</h5></div>'
            );
            
            // window.location="author_author";
            }else{
            console.log(response.message);
            $('#Author_success_message').html(
            '<div class="alert alert-danger alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
            '</div>'
            );

          }
        }
      });
    });
    
  });
      // delete author
  $(document).on('click', '.delete_author', function(e){
      e.preventDefault();
        var delete_author_id=$(this).val();
        $('#delete_author_id').val(delete_author_id);
        // console.log(delete_dept_id);
      $('#deleteAuthorModal').modal('show');
    $(document).on('click', '.delete_author_btn', function(e){
        e.preventDefault();
        var delete_author_id=$('#delete_author_id').val();
        // var message="Post Deleted Successfully";
            console.log(delete_author_id);
            $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: "GET",
        url:"/delete-author/"+delete_author_id,
      
        dataType:"json",
        success:function(response){
          $('#deleteAuthorModal').modal('hide');
          if(response.status==200){
            $('#Author_success_message').html(
            '<div class="alert alert-success alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
            '</h5></div>'
            );
            
            // window.location="dept_author";

          }else{
            console.log(response.message);
            $('#Author_success_message').html(
            '<div class="alert alert-danger alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
            '</div>'
            );

          }
        }
      });
    });
  });

