   
    //////////////////////////////////////////////////////////////////////////
    /////                                                              /////// 
    /////                  Web Developer : Junil toledo                ///////
    /////                                                             ///////
    /////////////////////////////////////////////////////////////////////////
    
    $(document).ready(function() {

              let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

               
               ///////////////////////////////////fetch data///////////////////////////////

               $.getJSON(api+'read_sales.php', function(json) {

                if ($.fn.DataTable.isDataTable('#table_sales')) {
                    $('#table_sales').DataTable().destroy();
                    $('#table_sales tbody').empty();
                }

              var arr = [];
                for (var i = 0; i < json.length; i++) {
                    var obj = {};
                     var btnEdit = '<button class=\'class="btn btn-primary btn-sm btn-rounded btn_edit"\' data-toggle=\'modal\' data-target=\'#edit-Sales\' data-edit=' + json[i].sales_id  + '>Edit</button>';
                   

                    obj['category_id'] = json[i].cat_name;
                    obj['sale_quantity'] = json[i].sale_quantity;
                    obj['total'] = json[i].total;
                    obj['recorded_by'] = json[i].recorded_by;
                    obj['date_created'] = json[i].date_created;

                    obj['actions'] = btnEdit;

                    arr.push(obj);
                }
                $(document).ready(function() {
                    $('#table_sales').DataTable({

                        'data': arr,
                        'columns': [{
                            "data": "category_id"
                        },{
                            "data": "sale_quantity"
                        },{
                            "data": "total"
                        },{
                            "data": "recorded_by"
                        },{
                            "data": "date_created"
                        },{
                            "data": "actions"
                        }]

                    });

                });

              });

              ///////////////////////////////////end fetch data///////////////////////////////

               ///////////////////////////////////add//////////////////////////////////////

                  $(document).delegate('#add_sales', 'click', function(event) {
                    event.preventDefault();
                    
                    var category_id = $('#category_id6').val();
                    var sale_quantity = $('#sale_quantity').val();
                    var total = $('#total').val();
                    var recorded_by = $('#edit_encodedby6').val();

                    if(category_id == "" ) {
                      $('#reqSls').html("<div class='alert alert-danger'Some field are required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "POST",
                      contentType: "application/json; charset=utf-8",
                      url: api+"create_sales.php",
                      data: JSON.stringify({'category_id': category_id, 'sale_quantity': sale_quantity, 'total': total, 'recorded_by': recorded_by}),
                      cache: false,
                      success: function(result) {
                        $('#mgs_Sls').html('<div class="alert alert-success">Sales added successfully</div>');
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

            //////////////////////////////////////get Categories add/////////////////////////////

            $.getJSON(api+'read_categories.php', function(json) {
                    $("#category_id6").html("");
                    $("#category_id6").append("<option value=''>&larr; Please select Categories &rarr;</option>");
                  for (var i = 0; i < json.length; i++) {
                        $("#category_id6").append("<option value=" + json[i].category_id + ">" + json[i].cat_name + "</option>");
                    }
   
                });
            //////////////////////////////////////end get Categories add/////////////////////////////
              
              //////////////////////////////////edit get Id ////////////////////////////////////////

             $(document).on("click", ".btn-rounded", function() {
                  var sales_id = $(this).data("edit");
                  getID(sales_id);//argument

                   function getID(sales_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_sales.php",
                          data: {
                              sales_id: sales_id
                          },
                          dataType: 'json',
                          success: function(response) {
                          $('#edit_salesid').val(response.sales_id);
                          $('#edit_categoryid6').val(response.category_id);
                          $('#edit_salequantity').val(response.sale_quantity);
                          $('#edit_total').val(response.total);
                          $('#edit_recordedby').val(response.recorded_by);
      
                       }
                    });
                   }

                });


              //////////////////////////////////////////end edit get Id/////////////////////////////

            //////////////////////////////////////get Categories edit/////////////////////////////

            $.getJSON(api+'read_categories.php', function(json) {
                     $(".category_id6").html("");
                     $(".category_id6").append("<option value=''>&larr; Please select Categories &rarr;</option>");
                  for (var i = 0; i < json.length; i++) {
                     $(".category_id6").append("<option value=" + json[i].category_id + ">" + json[i].cat_name + "</option>");
                    }
   
                });
            //////////////////////////////////////end get Categories edit/////////////////////////////

              ///////////////////////////////////////update process////////////////////////////////


                  $(document).delegate('#edit_sales', 'click', function(event) {
                    event.preventDefault();
                     
                     var category_id = $('#edit_categoryid6').val();
                     var sale_quantity = $('#edit_salequantity').val();
                     var total = $('#edit_total').val();
                     var recorded_by = $('#edit_recordedby').val();
                     var sales_id = $('#edit_salesid').val();
   
                    if(category_id == "") {
                      $('#reqSedit').html("<div class='alert alert-danger'>Category Name is required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "PUT",
                      contentType: "application/json; charset=utf-8",
                      url: api+"update_sales.php",
                      data: JSON.stringify({'sales_id' :sales_id, 'category_id': category_id, 'sale_quantity': sale_quantity, 'total': total, 'recorded_by': recorded_by}),
                      cache: false,
                      success: function(result) {
                        $('#mgs_Slesedit').html('<div class="alert alert-success">Sales Updated successfully</div>');
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

  

          });