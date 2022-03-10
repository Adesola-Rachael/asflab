// create new main_cat
$(document).on('click', '#add_main_book_cat',function(e){
    e.preventDefault();
    
    $('#AddMainCatModal').modal('show');
});

$(document).on('click', '.AddMainCatAuthor',function(){
  var main_cat=$("#main_cat").serialize();
  console.log(main_cat);
  console.log("clicked");

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url:"/main_cat",
    type:"POST",
    data:main_cat,
    success:function(response){
      // console.log(response);
      $('#AddMainCatModal').modal('hide');
      if(response.status==200){
        $('#main_cat_success_message').html(
        '<div class="alert alert-success alert-dismissible">'+
        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
        '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
        '</h5></div>'
        );
        // window.location="book_book";
      }else{
        console.log(response.message);
        var message=JSON.stringify(response.message)
        $('#main_cat_success_message').html(
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

  // update main_cat
  // edit main_cat////////////////////////////////////////////
$(document).on('click', '.edit_main_book_cat', function(e){
  e.preventDefault();
  var main_cat_id=$(this).val();
  console.log(main_cat_id);
    $('#EditMainCatModal').modal('show');
    $.ajax({
    type: "GET",
    url:"/getMainCatById/"+main_cat_id,
      dataType:"json",
    success:function(response){
      //  console.log(response);
      // alert("edit_main_cat").val(response.data.main_cat);
      $('#edit_title').val(response.data.title);
      $('#edit_desc').val(response.data.description);
      // $('#edit_main_cat').val('bio');
      // $('#edit_content').val(response.data.content);
      $('#edit_main_cat_id').val(main_cat_id);
      
    }  
  });


    // End of edit main_cat from database/////////////////////
    //update main_cat and store into  database////////////////////////////
  $(document).on('click', '.update_main_cat', function(e){
    e.preventDefault();
    var main_cat_id=$('#edit_main_cat_id').val();
      // console.log("this data 111" +main_cat_id+ "mydata");
      var main_cat=$("#edit_main_cat").serialize();
      // console.log(main_cat+"then the no :"+main_cat_id)
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "PUT",
      url:"/update_main_cat/"+main_cat_id,
      data:main_cat,
      dataType:"json",
      success:function(response){
        $('#Editmain_catModal').modal('hide');
          if(response.status==200){
          $('#main_cat_success_message').html(
          '<div class="alert alert-success alert-dismissible">'+
            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
            '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
          '</h5></div>'
          );
          
          // window.location="main_cat_main_cat";
          }else{
          console.log(response.message);
          $('#main_cat_success_message').html(
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
    // delete main_cat
$(document).on('click', '.delete_main_book_cat', function(e){
    e.preventDefault();
      var delete_main_cat_id=$(this).val();
      $('#delete_main_cat_id').val(delete_main_cat_id);
       console.log(delete_main_cat_id);
    $('#deleteMainCatModal').modal('show');
  $(document).on('click', '.delete_main_cat_btn', function(e){
      e.preventDefault();
      var delete_main_cat_id=$('#delete_main_cat_id').val();
      // var message="Post Deleted Successfully";
          console.log(delete_main_cat_id);
          $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "GET",
      url:"/delete-main_cat/"+delete_main_cat_id,
    
      dataType:"json",
      success:function(response){
        $('#deletemain_catModal').modal('hide');
        if(response.status==200){
          $('#main_cat_success_message').html(
          '<div class="alert alert-success alert-dismissible">'+
            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
            '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
          '</h5></div>'
          );
          
          // window.location="dept_main_cat";

        }else{
          console.log(response.message);
          $('#main_cat_success_message').html(
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

