
    $(document).ready(function() {

              let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

                  ///////////////////////////////////add//////////////////////////////////////

                  $(document).delegate('#add_company', 'click', function(event) {
                    event.preventDefault();
                    
                    var company_name = $('#company_name').val();
                    
                    if(company_name == "") {
                      $('#req').html("<div class='alert alert-danger'>Company Name is required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "POST",
                      contentType: "application/json; charset=utf-8",
                      url: api+"create_company.php",
                      data: JSON.stringify({'company_name': company_name}),
                      cache: false,
                      success: function(result) {
                        $('#mgs_comp').html('<div class="alert alert-success">Company added successfully</div>');
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

               $.getJSON(api+'read_company.php', function(json) {

                if ($.fn.DataTable.isDataTable('#table_company')) {
                    $('#table_company').DataTable().destroy();
                    $('#table_company tbody').empty();
                }

              var arr = [];
                for (var i = 0; i < json.length; i++) {
                    var obj = {};
                    var btnEdit =   '<button class=\'class="btn btn-primary btn-sm btn-rounded btn_edit"\' data-toggle=\'modal\' data-target=\'#edit-Company\' data-edit=' + json[i].company_id  + '>Edit</button>';
                    var btnDelete = '<button class=\'class="btn btn-primary btn-sm btn-rounded btn-delete btn-del"\' data-toggle=\'modal\' data-target=\'#delete-Company\' data-del=' + json[i].company_id  + '>Delete</button>';


                    obj['company_name'] = json[i].company_name;
                    obj['date_created'] = json[i].date_created;
                    obj['actions'] = btnEdit + " " + btnDelete;

                    arr.push(obj);
                }
                $(document).ready(function() {
                    $('#table_company').DataTable({

                        'data': arr,
                        'columns': [{
                            "data": "company_name"
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
                  var company_id = $(this).data("edit");
                  getID(company_id);//argument

                   function getID(company_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_company.php",
                          data: {
                              company_id: company_id
                          },
                          dataType: 'json',
                          success: function(response) {
                          $('#edit_companyid').val(response.company_id);
                          $('#edit_companyname').val(response.company_name);
      
                       }
                    });
                   }

                });


              //////////////////////////////////////////end edit get Id/////////////////////////////

              ///////////////////////////////////////update process////////////////////////////////


                  $(document).delegate('#edit_company', 'click', function(event) {
                    event.preventDefault();
                    
                     var company_name = $('#edit_companyname').val();
                     var company_id = $('#edit_companyid').val();
   
                    if(company_name == "") {
                      $('#req').html("<div class='alert alert-danger'>Company Name is required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "PUT",
                      contentType: "application/json; charset=utf-8",
                      url: api+"update_company.php",
                      data: JSON.stringify({'company_id': company_id, 'company_name': company_name}),
                      cache: false,
                      success: function(result) {
                        $('#mgs_compedit').html('<div class="alert alert-success">Company Updated successfully</div>');
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
                  var company_id = $(this).data("del");
                  getdelID(company_id);//argument

                   function getdelID(company_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_company.php",
                          data: {
                              company_id: company_id
                          },
                          dataType: 'json',
                          success: function(response2) {
                          $('#del_companyid').val(response2.company_id);
                          $('#del_companyname').val(response2.company_name);
      
                       }
                    });
                   }

                });

              //////////////////////////////////////////end edit get Id delete///////////////////////////////

             ////////////////////////////////// delete process////////////////////////////////////////

               $(document).delegate('#del_company', 'click', function(event) {
                    event.preventDefault();

                     var company_id = $('#del_companyid').val();

                    $.ajax({
                      type: "DELETE",
                      contentType: "application/json; charset=utf-8",
                      url: api+"delete_company.php?company_id="+company_id,
                      cache: false,
                      success: function(result) {
                        $('#mgs_compdel').html('<div class="alert alert-success">Company Deleted successfully</div>');
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