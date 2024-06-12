   
    //////////////////////////////////////////////////////////////////////////
    /////                                                              /////// 
    /////                  Web Developer : Junil toledo                ///////
    /////                                                             ///////
    /////////////////////////////////////////////////////////////////////////

    $(document).ready(function() {

              let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

                  ///////////////////////////////////add//////////////////////////////////////

                  $(document).delegate('#add_categories', 'click', function(event) {
                    event.preventDefault();
                    
                    var cat_name = $('#cat_name').val();
                    var cat_description = $('#cat_description').val();
                    var cat_encodedby = $('#cat_encodedby').val();
                    
                    if(cat_name == "" || cat_description == "" || cat_encodedby == "") {
                      $('#reqC').html("<div class='alert alert-danger'>All fields are required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "POST",
                      contentType: "application/json; charset=utf-8",
                      url: api+"create_categories.php",
                      data: JSON.stringify({'cat_name': cat_name, 'cat_description': cat_description, 'cat_encodedby': cat_encodedby}),
                      cache: false,
                      success: function(result) {
                        $('#mgs_cat').html('<div class="alert alert-success">Category added successfully</div>');
                          setTimeout(function () {  
                               location.reload(true);
                             }, 1000);
                              
                      },
                      error: function(err) {
                        alert(err);
                      }
                    });
                  });
          

                ////////////////////////////////////end add/////////////////////////////////
               
               ///////////////////////////////////fetch data///////////////////////////////

               $.getJSON(api+'read_categories.php', function(json) {

                 if ($.fn.DataTable.isDataTable('#table_categories')) {
                    $('#table_categories').DataTable().destroy();
                    $('#table_categories tbody').empty();
                }

              var arr = [];
                for (var i = 0; i < json.length; i++) {
                    var obj = {};
                    var btnEdit =   '<button class=\'class="btn btn-primary btn-sm btn-rounded btn_edit"\' data-toggle=\'modal\' data-target=\'#edit-category\' data-edit=' + json[i].category_id  + '>Edit</button>';
                    var btnDelete = '<button class=\'class="btn btn-primary btn-sm btn-rounded btn-delete btn-del"\' data-toggle=\'modal\' data-target=\'#delete-category\' data-del=' + json[i].category_id  + '>Delete</button>';


                    obj['cat_name'] = json[i].cat_name;
                    obj['cat_description'] = json[i].cat_description;
                    obj['cat_encodedby'] = json[i].cat_encodedby;
                    obj['date_created'] = json[i].date_created;
                    obj['actions'] = btnEdit + " " + btnDelete;

                    arr.push(obj);
                }
                $(document).ready(function() {
                    $('#table_categories').DataTable({

                        'data': arr,
                        'columns': [{
                            "data": "cat_name"
                        },{
                            "data": "cat_description"
                        },{
                            "data": "cat_encodedby"
                        }, {
                            "data": "date_created"
                        },{
                            "data": "actions"
                        }]

                    });

                });

              });

              ///////////////////////////////////end fetch data///////////////////////////////
              
              //////////////////////////////////edit get Id ////////////////////////////////////////

             $(document).on("click", ".btn-rounded", function() {
                  var category_id = $(this).data("edit");
                  getID(category_id);//argument

                   function getID(category_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_categories.php",
                          data: {
                              category_id: category_id
                          },
                          dataType: 'json',
                          success: function(response) {
                          $('#edit_categoryid').val(response.category_id);
                          $('#edit_catname').val(response.cat_name);
                          $('#edit_catdescription').val(response.cat_description);
                          $('#edit_catencodedby').val(response.cat_encodedby);
      
                       }
                    });
                   }

                });


              //////////////////////////////////////////end edit get Id/////////////////////////////

              ///////////////////////////////////////update process////////////////////////////////


                  $(document).delegate('#edit_categories', 'click', function(event) {
                    event.preventDefault();
                    

                     var cat_name = $('#edit_catname').val();
                     var cat_description = $('#edit_catdescription').val();
                     var cat_encodedby = $('#edit_catencodedby').val();
                     var category_id = $('#edit_categoryid').val();

                    if(description == "") {
                      $('#reqCat').html("<div class='alert alert-danger'>Category name is required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "PUT",
                      contentType: "application/json; charset=utf-8",
                      url: api+"update_categories.php",
                      data: JSON.stringify({'category_id': category_id, 'cat_name': cat_name, 'cat_description': cat_description, 'cat_encodedby': cat_encodedby}),
                      cache: false,
                      success: function(result) {
                        $('#mgs_Cedit').html('<div class="alert alert-success">Category Updated successfully</div>');
                          setTimeout(function () {  
                               location.reload(true);
                             }, 1000);
                              
                      },
                      error: function(err) {
                        alert(err);
                      }
                    });
                  });
              

              ///////////////////////////////////////update process////////////////////////////////

            //////////////////////////////////edit get Id delete ////////////////////////////////////////

             $(document).on("click", ".btn-delete", function() {
                  var category_id = $(this).data("del");
                  getdelID(category_id);//argument

                   function getdelID(category_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_categories.php",
                          data: {
                              category_id: category_id
                          },
                          dataType: 'json',
                          success: function(response2) {
                          $('#del_categoryid').val(response2.category_id);
                          $('#del_cname').val(response2.cat_name);
      
                       }
                    });
                   }

                });

              //////////////////////////////////////////end edit get Id delete///////////////////////////////

             ////////////////////////////////// delete process////////////////////////////////////////

               $(document).delegate('#delete_categories', 'click', function(event) {
                    event.preventDefault();

                     var category_id = $('#del_categoryid').val();

                    $.ajax({
                      type: "DELETE",
                      contentType: "application/json; charset=utf-8",
                      url: api+"delete_categories.php?category_id="+category_id,
                      cache: false,
                      success: function(result) {
                        $('#mgs_Cdel').html('<div class="alert alert-success">Category Deleted successfully</div>');
                          setTimeout(function () {  
                               location.reload(true);
                             }, 1000);
                              
                      },
                      error: function(err) {
                        alert(err);
                      }
                    });
                  });
              
             
              //////////////////////////////////////////end delete process///////////////////////////////

          });