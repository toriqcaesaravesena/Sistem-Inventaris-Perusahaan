   
    //////////////////////////////////////////////////////////////////////////
    /////                                                              /////// 
    /////                  Web Developer : Junil toledo                ///////
    /////                                                             ///////
    /////////////////////////////////////////////////////////////////////////

    $(document).ready(function() {

              let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

                  ///////////////////////////////////add//////////////////////////////////////

                  $(document).delegate('#add_units', 'click', function(event) {
                    event.preventDefault();
                    
                    var name = $('#name').val();
                    var description = $('#description').val();
                    var encoded_by = $('#encoded_by').val();
                    
                    if(name == "" || description == "" || encoded_by == "") {
                      $('#reqU').html("<div class='alert alert-danger'>All fields are required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "POST",
                      contentType: "application/json; charset=utf-8",
                      url: api+"create_units.php",
                      data: JSON.stringify({'name': name, 'description': description, 'encoded_by': encoded_by}),
                      cache: false,
                      success: function(result) {
                        $('#mgs_unts').html('<div class="alert alert-success">Unit added successfully</div>');
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

               $.getJSON(api+'read_units.php', function(json) {

                 if ($.fn.DataTable.isDataTable('#table_units')) {
                    $('#table_units').DataTable().destroy();
                    $('#table_units tbody').empty();
                }

              var arr = [];
                for (var i = 0; i < json.length; i++) {
                    var obj = {};
                    var btnEdit =   '<button class=\'class="btn btn-primary btn-sm btn-rounded btn_edit"\' data-toggle=\'modal\' data-target=\'#edit-unit\' data-edit=' + json[i].units_id  + '>Edit</button>';
                    var btnDelete = '<button class=\'class="btn btn-primary btn-sm btn-rounded btn-delete btn-del"\' data-toggle=\'modal\' data-target=\'#delete-unit\' data-del=' + json[i].units_id  + '>Delete</button>';


                    obj['name'] = json[i].name;
                    obj['description'] = json[i].description;
                    obj['encoded_by'] = json[i].encoded_by;
                    obj['date_created'] = json[i].date_created;
                    obj['actions'] = btnEdit + " " + btnDelete;

                    arr.push(obj);
                }
                $(document).ready(function() {
                    $('#table_units').DataTable({

                        'data': arr,
                        'columns': [{
                            "data": "name"
                        },{
                            "data": "description"
                        },{
                            "data": "encoded_by"
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
                  var units_id = $(this).data("edit");
                  getID(units_id);//argument

                   function getID(units_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_units.php",
                          data: {
                              units_id: units_id
                          },
                          dataType: 'json',
                          success: function(response) {
                          $('#edit_unitsid').val(response.units_id);
                          $('#edit_name').val(response.name);
                          $('#edit_description').val(response.description);
                          $('#edit_encodedby').val(response.encoded_by);
      
                       }
                    });
                   }

                });


              //////////////////////////////////////////end edit get Id/////////////////////////////

              ///////////////////////////////////////update process////////////////////////////////


                  $(document).delegate('#edit_units', 'click', function(event) {
                    event.preventDefault();
                    
                     var name = $('#edit_name').val();
                     var description = $('#edit_description').val();
                     var encoded_by = $('#edit_encodedby').val();
                     var units_id = $('#edit_unitsid').val();
   
                    if(company_name == "") {
                      $('#reqU1').html("<div class='alert alert-danger'>Company Name is required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "PUT",
                      contentType: "application/json; charset=utf-8",
                      url: api+"update_units.php",
                      data: JSON.stringify({'units_id': units_id, 'name': name, 'description': description, 'encoded_by': encoded_by}),
                      cache: false,
                      success: function(result) {
                        $('#mgs_uedit').html('<div class="alert alert-success">Unit Updated successfully</div>');
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
                  var units_id = $(this).data("del");
                  getdelID(units_id);//argument

                   function getdelID(units_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_units.php",
                          data: {
                              units_id: units_id
                          },
                          dataType: 'json',
                          success: function(response2) {
                          $('#del_unitsid').val(response2.units_id);
                          $('#del_name').val(response2.name);
      
                       }
                    });
                   }

                });

              //////////////////////////////////////////end edit get Id delete///////////////////////////////

             ////////////////////////////////// delete process////////////////////////////////////////

               $(document).delegate('#del_units', 'click', function(event) {
                    event.preventDefault();

                     var units_id = $('#del_unitsid').val();

                    $.ajax({
                      type: "DELETE",
                      contentType: "application/json; charset=utf-8",
                      url: api+"delete_units.php?units_id="+units_id,
                      cache: false,
                      success: function(result) {
                        $('#mgs_Udel').html('<div class="alert alert-success">Unit Deleted successfully</div>');
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