   
    //////////////////////////////////////////////////////////////////////////
    /////                                                              /////// 
    /////                  Web Developer : Junil toledo                ///////
    /////                                                             ///////
    /////////////////////////////////////////////////////////////////////////

    $(document).ready(function() {

              let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

                  ///////////////////////////////////add//////////////////////////////////////

                  $(document).delegate('#add_product', 'click', function(event) {
                    event.preventDefault();
                    //alert('click');
                    
                    var item_code = $('#item_code').val();
                    var full_name = $('#full_name').val();
                    var varient = $('#varient').val();
                    var unit_value = $('#unit_value').val();
                    var units_id = $('#units_id').val();
                    var category_id = $('#category_id').val();
                    var net_price = $('#net_price').val();
                    var production_cost = $('#production_cost').val();
                    var markup_percent = $('#markup_percent').val();
                    var markup_price = $('#markup_price').val();
                    var discount = $('#discount').val();
                    var discount_price = $('#discount_price').val();
                    var sales_price = $('#sales_price').val();
                    var reorder_level = $('#reorder_level').val();
                    var stock_quantity = $('#stock_quantity').val();
                    var expired_date = $('#expired_date').val();
                    var encoded_by = $('#encoded_by').val();
                    
                    if(item_code == "" || full_name == "" || varient == "" || unit_value == "" || production_cost == "") {
                      $('#reqProd').html("<div class='alert alert-danger'>Some fields are required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "POST",
                      contentType: "application/json; charset=utf-8",
                      url: api+"create_product.php",
                      data: JSON.stringify({
                                             'item_code': item_code,
                                             'full_name': full_name,
                                             'varient': varient,
                                             'unit_value': unit_value,
                                             'units_id': units_id,
                                             'category_id': category_id,
                                             'net_price': net_price,
                                             'production_cost': production_cost,
                                             'markup_percent': markup_percent,
                                             'markup_price': markup_price,
                                             'discount': discount,
                                             'discount_price': discount_price,
                                             'sales_price': sales_price,
                                             'reorder_level': reorder_level,
                                             'stock_quantity': stock_quantity,
                                             'expired_date': expired_date,
                                             'encoded_by': encoded_by
                                 
                                          }),
                      cache: false,
                      success: function(result) {
                        $('#mgs_prod').html('<div class="alert alert-success">Product added successfully</div>');
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



              //////////////////////////////////////get Units add/////////////////////////////

            $.getJSON(api+'read_units.php', function(json) {
                    $("#units_id").html("");
                    $("#units_id").append("<option value=''>&larr; Please select Units &rarr;</option>");
                  for (var i = 0; i < json.length; i++) {
                        $("#units_id").append("<option value=" + json[i].units_id + ">" + json[i].name + "</option>");
                    }
   
                });
            //////////////////////////////////////end get Units add/////////////////////////////

          //////////////////////////////////////get Categories add/////////////////////////////

            $.getJSON(api+'read_categories.php', function(json) {
                    $("#category_id").html("");
                    $("#category_id").append("<option value=''>&larr; Please select Categories &rarr;</option>");
                  for (var i = 0; i < json.length; i++) {
                        $("#category_id").append("<option value=" + json[i].category_id + ">" + json[i].cat_name + "</option>");
                    }
   
                });
            //////////////////////////////////////end get Categories add/////////////////////////////
               
               ///////////////////////////////////fetch data///////////////////////////////

               $.getJSON(api+'read_product.php', function(json) {

                 if ($.fn.DataTable.isDataTable('#table_product')) {
                    $('#table_product').DataTable().destroy();
                    $('#table_product tbody').empty();
                }

              var arr = [];
                for (var i = 0; i < json.length; i++) {
                    var obj = {};
                    var btnEdit =   '<button class=\'class="btn btn-primary btn-sm btn-rounded btn_edit"\' data-toggle=\'modal\' data-target=\'#edit-Product\' data-edit=' + json[i].product_id  + '>Edit</button>';
                    var btnDelete = '<button class=\'class="btn btn-primary btn-sm btn-rounded btn-delete btn-del"\' data-toggle=\'modal\' data-target=\'#delete-Product\' data-del=' + json[i].product_id  + '>Delete</button>';


                    obj['item_code'] = json[i].item_code;
                    obj['full_name'] = json[i].full_name;
                    obj['varient'] = json[i].varient;
                    obj['unit_value'] = json[i].unit_value;
                    obj['name'] = json[i].name;
                    obj['cat_name'] = json[i].cat_name;
                    obj['net_price'] = json[i].net_price;
                    obj['production_cost'] = json[i].production_cost;
                    obj['markup_percent'] = json[i].markup_percent;
                    obj['markup_price'] = json[i].markup_price;
                    obj['discount'] = json[i].discount;
                    obj['discount_price'] = json[i].discount_price;
                    obj['sales_price'] = json[i].sales_price;
                    obj['reorder_level'] = json[i].reorder_level;
                    obj['stock_quantity'] = json[i].stock_quantity;
                    obj['expired_date'] = json[i].expired_date;
                    obj['encoded_by'] = json[i].encoded_by;
                    obj['date_created'] = json[i].date_created;

                    obj['actions'] = btnEdit + " " + btnDelete;

                    arr.push(obj);
                }
                $(document).ready(function() {
                    $('#table_product').DataTable({

                        'data': arr,
                        'columns': [{
                            "data": "item_code"
                        },{
                            "data": "full_name"
                        },{
                            "data": "varient"
                        },{
                            "data": "unit_value"
                        },{
                            "data": "name"
                        },{
                            "data": "cat_name"
                        },{
                            "data": "net_price"
                        },{
                            "data": "production_cost"
                        },{
                            "data": "markup_percent"
                        },{
                            "data": "markup_price"
                        },{
                            "data": "discount"
                        },{
                            "data": "discount_price"
                        },{
                            "data": "sales_price"
                        },{
                            "data": "reorder_level"
                        },{
                            "data": "stock_quantity"
                        },{
                            "data": "expired_date"
                        },{
                            "data": "encoded_by"
                        },{
                            "data": "date_created"
                        },{
                            "data": "actions"
                        }]

                    });

                });

              });

              ///////////////////////////////////end fetch data///////////////////////////////


            //////////////////////////////////////inventory count///////////////////////////
            $.getJSON(api+'read_productInventory.php', function(json2) {
              console.log(json2);
                 var tr=[];
                  for (var c = 0; c < json2.length; c++) {

                    if(json2[c].expired_date >= '2022-10-27'){
                       var dates =  "<span class='badge badge-danger' style='border-radius: 5px'>Expired</span>";
                      }else{
                       var dates = json2[c].expired_date;
                     }
                    tr.push('<tr>');
                    tr.push('<td>' + json2[c].item_code  + '</td>');
                    tr.push('<td>' + json2[c].name  + '</td>');
                    tr.push('<td>' + dates + '</td>');
                    tr.push('<td>' + json2[c].uname  + '</td>');
                    tr.push('</tr>');
                  }
                  $('#table_productexpired').append($(tr.join('')));
              });
            //////////////////////////////////////end inventory count///////////////////////////

          //////////////////////////////////////inventory Low Stock///////////////////////////
            $.getJSON(api+'read_productInventory.php', function(json2) {
              console.log(json2);
                 var tr=[];
                  for (var c = 0; c < json2.length; c++) {

                    if(json2[c].stock_quantity <= 10){
                       var stocks =  "<span class='badge badge-danger' style='border-radius: 5px'>Low Stock Item</span>";
                      }else{
                       var stocks = json2[c].stock_quantity;
                     }
                    tr.push('<tr>');
                    tr.push('<td>' + json2[c].item_code  + '</td>');
                    tr.push('<td>' + json2[c].name  + '</td>');
                    tr.push('<td>' + stocks + '</td>');
                    tr.push('<td>' + json2[c].uname  + '</td>');
                    tr.push('</tr>');
                  }
                  $('#table_productlowstock').append($(tr.join('')));
              });
            //////////////////////////////////////end inventory Low Stock///////////////////////////
              
              //////////////////////////////////edit get Id ////////////////////////////////////////

             $(document).on("click", ".btn-rounded", function() {
                  var product_id = $(this).data("edit");
                  getID(product_id);//argument

                   function getID(product_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_product.php",
                          data: {
                              product_id: product_id 
                          },
                          dataType: 'json',
                          success: function(response) {
                          $('#edit_productid').val(response.product_id);
                          $('#edit_itemcode').val(response.item_code);
                          $('#edit_fullname').val(response.full_name);
                          $('#edit_varient').val(response.varient);
                          $('#edit_unitvalue').val(response.unit_value);
                          $('#edit_unitsid4').val(response.units_id);
                          $('#edit_categoryid').val(response.category_id);
                          $('#edit_netprice').val(response.net_price);
                          $('#edit_productioncost').val(response.production_cost);
                          $('#edit_markuppercent').val(response.markup_percent);
                          $('#edit_markupprice').val(response.markup_price);
                          $('#edit_discount').val(response.discount);
                          $('#edit_discountprice').val(response.discount_price);
                          $('#edit_salesprice').val(response.sales_price);
                          $('#edit_reorderlevel').val(response.reorder_level);
                          $('#edit_stockquantity').val(response.stock_quantity);
                          $('#edit_expireddate4').val(response.expired_date);
                          $('#edit_encodedby4').val(response.encoded_by);
      
                       }
                    });
                   }

                });


              //////////////////////////////////////////end edit get Id/////////////////////////////

                     //////////////////////////////////////get Units edit/////////////////////////////

            $.getJSON(api+'read_units.php', function(json) {
                    $(".units_id").html("");
                    $(".units_id").append("<option value=''>&larr; Please select Units &rarr;</option>");
                  for (var i = 0; i < json.length; i++) {
                        $(".units_id").append("<option value=" + json[i].units_id + ">" + json[i].name + "</option>");
                    }
   
                });
            //////////////////////////////////////end get Units edit/////////////////////////////

          //////////////////////////////////////get Categories edit/////////////////////////////

            $.getJSON(api+'read_categories.php', function(json) {
                    $(".category_id").html("");
                    $(".category_id").append("<option value=''>&larr; Please select Categories &rarr;</option>");
                  for (var i = 0; i < json.length; i++) {
                        $(".category_id").append("<option value=" + json[i].category_id + ">" + json[i].cat_name + "</option>");
                    }
   
                });
            //////////////////////////////////////end get Categories edit/////////////////////////////


              ///////////////////////////////////////update process////////////////////////////////


                  $(document).delegate('#edit_product', 'click', function(event) {
                    event.preventDefault();

                     var product_id = $('#edit_productid').val();
                     var item_code = $('#edit_itemcode').val();
                     var full_name = $('#edit_fullname').val();
                     var varient = $('#edit_varient').val();
                     var unit_value = $('#edit_unitvalue').val();
                     var units_id = $('#edit_unitsid4').val();
                     var category_id = $('#edit_categoryid').val();
                     var net_price = $('#edit_netprice').val();
                     var production_cost = $('#edit_productioncost').val();
                     var markup_percent = $('#edit_markuppercent').val();
                     var markup_price = $('#edit_markupprice').val();
                     var discount = $('#edit_discount').val();
                     var discount_price = $('#edit_discountprice').val();
                     var sales_price = $('#edit_salesprice').val();
                     var reorder_level = $('#edit_reorderlevel').val();
                     var stock_quantity = $('#edit_stockquantity').val();
                     var expired_date = $('#edit_expireddate4').val();
                     var encoded_by = $('#edit_encodedby4').val();

                    if(item_code == "") {
                      $('#reqPdit').html("<div class='alert alert-danger'>Item Code is required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "PUT",
                      contentType: "application/json; charset=utf-8",
                      url: api+"update_product.php",
                               data: JSON.stringify({
                                             'product_id': product_id,
                                             'item_code': item_code,
                                             'full_name': full_name,
                                             'varient': varient,
                                             'unit_value': unit_value,
                                             'units_id': units_id,
                                             'category_id': category_id,
                                             'net_price': net_price,
                                             'production_cost': production_cost,
                                             'markup_percent': markup_percent,
                                             'markup_price': markup_price,
                                             'discount': discount,
                                             'discount_price': discount_price,
                                             'sales_price': sales_price,
                                             'reorder_level': reorder_level,
                                             'stock_quantity': stock_quantity,
                                             'expired_date': expired_date,
                                             'encoded_by': encoded_by
                                 
                                          }),
                      cache: false,
                      success: function(result) {
                        $('#mgs_Pedit').html('<div class="alert alert-success">Product Updated successfully</div>');
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
                  var product_id = $(this).data("del");
                  getdelID(product_id);//argument

                   function getdelID(product_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_product.php",
                          data: {
                              product_id: product_id
                          },
                          dataType: 'json',
                          success: function(response2) {
                          $('#del_productid').val(response2.product_id);
                          $('#del_itemcode').val(response2.item_code);
      
                       }
                    });
                   }

                });

              //////////////////////////////////////////end edit get Id delete///////////////////////////////

             ////////////////////////////////// delete process////////////////////////////////////////

               $(document).delegate('#del_product', 'click', function(event) {
                    event.preventDefault();

                     var product_id = $('#del_productid').val();

                    $.ajax({
                      type: "DELETE",
                      contentType: "application/json; charset=utf-8",
                      url: api+"delete_product.php?product_id="+product_id,
                      cache: false,
                      success: function(result) {
                        $('#mgs_Pdel').html('<div class="alert alert-success">Product Deleted successfully</div>');
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