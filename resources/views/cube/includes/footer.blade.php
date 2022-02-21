<!-- </div>
 <div class="clearfix"></div> -->
        <!-- Footer -->
        <!-- <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2021 TMGR Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Mex Tech</a>
                    </div>
                </div>
            </div>
        </footer>
       .site-footer -->
    <!-- </div> -->
    
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
var baseUrl="https://st.tmgrplatform.com/api";
</script>
<script type="text/javascript">
   
    
  //  output all posts////////////////////////
// $(document).ready(function(){
  
//         fetch_data();
  //       var i=0;
  // var j=1;
        // function fetch_data(){
        //     $.ajax({
        //       type:"GET",
        //       url:baseUrl+"/posts",
        //       datatype:"json",
        //       success:function(response){
              
        //         $.each(response.data,function(key,item){
        //           var date = new Date(item.created_at); 
        //           var get_created_at=date.getDate()+'-' +(date.getMonth()+1)+ '-'+date.getFullYear();

        //           var date = new Date(item.updated_at); 
        //           var get_updated_at=date.getDate()+'-' +(date.getMonth()+1)+ '-'+date.getFullYear();

        //           $('tbody').append( 
        //         '<tr>'+
        //           '<th scope="row">'+(key+1)+'</th>'+
        //           '<td>'+item.title+'</td>'+
        //           '<td>'+item.content+'</td>'+
        //           '<td>'+get_created_at+'</td>'+
        //           '<td>'+get_updated_at+'</td>'+
        //           '<td><button type="button" value="'+item.id+'" class="edit_post btn btn-primary">Edit</button></td>'+
        //           '<td><button type="button" value="'+item.id+'" class="delete_post btn btn-danger">Delete</button></td>'+
        //         '</tr>'
// ///////////////////////////////////////////////////////////////////////////////

             
          
        //           );
        //         });
        //       }
        // });
        // }
        // End of coutput all post///////////////////////////////////////////////////////////

       // create new post///////////////////////////////////////////////////////////
  // $(document).on('click', '.AddPost',function(e){
    // $('#form').on('submit',function(e){
    // e.preventDefault();
    // var message="Post Created Successfully";
    // var url= baseUrl+"/post";
    // alert(url);
    // var data={
    //   'title':$('#title').val(), 
    //   'content':$('#content').val(), 
    // }
    // console.log(data);
    // $.ajaxSetup({
    //   headers: {
    //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //   }
    // });
    // $.ajax({
    //   type: "POST",
    //   url:baseUrl+"/post",
    //   data:data,
    //   dataType:"json",
    //   success:function(response){
        // console.log(response.errors)
        // alert (JSON.stringify(response.errors))
  //       var res=JSON.stringify(response.errors)
          
  //       if(response.status==400){
          
  //           $('#success_message').addClass('alert alert-danger');
  //           $('#success_message').text(res); 
  //       }
  //       else{
  //         $('#success_message').addClass('alert alert-success');  
  //         $('#success_message').text(response.message);
  //           $('#AddPostModal').hide();
         
  //         window.location.reload();
          
  //       }
          
  //     }
        
  //   });
  // });
 
  //       // End of create new post////////////////////////////

   // edit post////////////////////////////////////////////
//    $(document).on('click', '.edit_post', function(e){
//     e.preventDefault();
//       var post_id=$(this).val();
//       console.log(baseUrl);
//     $('#editPostModal').modal('show');
//       $.ajax({
//       type: "GET",
//       url:baseUrl+"/post/"+post_id,
//       // data:$('#update').serialize(),
//       dataType:"json",
//       success:function(response){
//         // console.log(response);
//         // alert("data saved");
//         $('#edit_title').val(response.data.title);
//         $('#edit_content').val(response.data.content);
//         $('#edit_post_id').val(post_id);
       
//       }  
//     });
//   });
// // End of edit post from database/////////////////////

// //update post into  database////////////////////////////
// $(document).on('click', '.update_post', function(e){
//     e.preventDefault();
//     var post_id=$('#edit_post_id').val();
//     // console.log(post_id);
//     // var message="Post Updated Successfully";
//     var data= {
//       'title' : $('#edit_title').val(),
//       'content' :$('#edit_content').val(),
//     }
//     $.ajaxSetup({
//       headers: {
//           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//       }
//     });
//     $.ajax({
//       type: "PUT",
//       url:baseUrl+"/post/"+post_id,
//       data:data,
//       dataType:"json",
//       success:function(response){
//         var res=JSON.stringify(response.errors)
             
//             if(response.status==400){
              
//                 $('#success_message').addClass('alert alert-danger');
//                 $('#success_message').text(res); 
//                 $('#editPostModal').modal('hide');
//             } 
//             // elseif(response.status==404){
//             //   $('#success_message').addClass('alert alert-success');  
//             //   $('#success_message').text(response.message); 
//             // }

//             else{
//               $('#success_message').addClass('alert alert-success');  
//               $('#success_message').text(response.message); 
//               $('#editPostModal').modal('hide');
//               window.location.reload();
//               // // window.reload();
//             }
            
            
//         // $('#success_message').addClass('alert alert-success');
//         // $('#success_message').text(response.message);

//         // $('#editPostModal').modal('hide');
//         // fetch_data();
//       }
       
      
//     });
    
    
//   });

//   // End of updated post into database/////////////////////
// //Delete post database////////////////////////////
// $(document).on('click', '.delete_post', function(e){
//     e.preventDefault();
//       var delete_post_id=$(this).val();
//       $('#delete_post_id').val(delete_post_id);
//       // console.log(delete_post_id);
//     $('#deletePostModal').modal('show');
//     $(document).on('click', '.delete_post_btn', function(e){
//       e.preventDefault();
//       var delete_post_id=$('#delete_post_id').val();
//       // var message="Post Deleted Successfully";
//           console.log(delete_post_id);
//           $.ajaxSetup({
//       headers: {
//           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//       }
//     });
//       $.ajax({
//       type: "DELETE",
//       url:baseUrl+"/post/"+delete_post_id,
     
//       dataType:"json",
//       success:function(response){
//         // fetch_data();
//         $('#success_message').addClass('alert alert-success');
//         $('#success_message').text(response.message);
//         $('#deletePostModal').modal('hide');
//         window.location.reload();
         
//         // alert("data sved");
        
//       }
       
//     });
//     });
     
//   });
// End of delete post from database/////////////////////
        
      // });
  
 
  

   
 //script to submit form 

  // edit post////////////////////////////////////////////
  // $(document).on('click', '.edit_post', function(e){
  //   e.preventDefault();
  //     var post_id=$(this).val();
  //     console.log(baseUrl);
  //   $('#editPostModal').modal('show');
  //     $.ajax({
  //     type: "GET",
  //     url:baseUrl+"/post/"+post_id,
  //     // data:$('#update').serialize(),
  //     dataType:"json",
  //     success:function(response){
  //       // console.log(response);
  //       // alert("data saved");
  //       $('#edit_title').val(response.data.title);
  //       $('#edit_content').val(response.data.content);
  //       $('#edit_post_id').val(post_id);
  //     }
  //   });
  // });
// End of edit post from database/////////////////////

  //update post into  database////////////////////////////
  // $(document).on('click', '.update_post', function(e){
  //   e.preventDefault();
  //   var post_id=$('#edit_post_id').val();
  //   // console.log(post_id);
  //   var message="Post Updated Successfully";
  //   var data= {
  //     'title' : $('#edit_title').val(),
  //     'content' :$('#edit_content').val(),
  //   }
  //   $.ajaxSetup({
  //     headers: {
  //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //     }
  //   });
  //   $.ajax({
  //     type: "PUT",
  //     url:baseUrl+"/post/"+post_id,
  //     data:data,
  //     dataType:"json",
  //     success:function(response){
  //       $('#success_message').addClass('alert alert-success');
  //       $('#success_message').text(response.message);
  //       $('#editPostModal').modal('hide');
  //     },
  //     error: function(error){
  //           // console.log(error)
  //           alert("Data not Updatedd");
  //         }
      
  //   });
  //   fetch_data();
  // });

  // End of updated post into database/////////////////////


// //Delete post database////////////////////////////
// $(document).on('click', '.delete_post', function(e){
//     e.preventDefault();
//       var delete_post_id=$(this).val();
//       $('#delete_post_id').val(delete_post_id);
//       // console.log(delete_post_id);
//     $('#deletePostModal').modal('show');
//     $(document).on('click', '.delete_post_btn', function(e){
//       e.preventDefault();
//       var delete_post_id=$('#delete_post_id').val();
//       var message="Post Deleted Successfully";
//           console.log(delete_post_id);
//           $.ajaxSetup({
//       headers: {
//           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//       }
//     });
//       $.ajax({
//       type: "DELETE",
//       url:baseUrl+"/post/"+delete_post_id,
     
//       dataType:"json",
//       success:function(response){
//         $('#success_message').addClass('alert alert-success');
//         $('#success_message').text(response.message);
//         $('#deletePostModal').modal('hide');
//         // alert("data sved");
        
//       }
       
//     });
//     });
     
//   });
// // End of delete post from database/////////////////////
  -->
   
 
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->