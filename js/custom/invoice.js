   
    //////////////////////////////////////////////////////////////////////////
    /////                                                              /////// 
    /////                  Web Developer : Junil toledo                ///////
    /////                                                             ///////
    /////////////////////////////////////////////////////////////////////////
    
    $(document).ready(function() {

              let api = "http://localhost/Inverntory-System-Web/pages/config/api/";

                  ///////////////////////////////////add//////////////////////////////////////

                  $(document).delegate('#add_invoice', 'click', function(event) {
                    event.preventDefault();
                    
                    var order_id = $('#order_id').val();
                    var encoded_By = $('#encoded_By').val();
                    var total_amount = $('#total_amount').val();
                    var discount_price = $('#discount_price5').val();
                    var tendered = $('#tendered').val();
                    var change = $('#change').val();
                    
                    if(total_amount == "" ) {
                      $('#reqIV').html("<div class='alert alert-danger'Some field are required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "POST",
                      contentType: "application/json; charset=utf-8",
                      url: api+"create_invoice.php",
                      data: JSON.stringify({'order_id': order_id, 'encoded_By': encoded_By, 'total_amount': total_amount, 'discount_price': discount_price, 'tendered': tendered, 'change': change }),
                      cache: false,
                      success: function(result) {
                        $('#mgs_Inv').html('<div class="alert alert-success">Invoice added successfully</div>');
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

               $.getJSON(api+'read_invoice.php', function(json) {

                if ($.fn.DataTable.isDataTable('#table_invoice')) {
                    $('#table_invoice').DataTable().destroy();
                    $('#table_invoice tbody').empty();
                }

              var arr = [];
                for (var i = 0; i < json.length; i++) {
                    var obj = {};
                    var btnEdit =   '<button class=\'class="btn btn-primary btn-sm btn-rounded btn_edit"\' data-toggle=\'modal\' data-target=\'#edit-Invoice\' data-edit=' + json[i].invoice_id  + '>Edit</button>';
                    var btnDelete = '<button class=\'class="btn btn-primary btn-sm btn-rounded btn-delete btn-del"\' data-toggle=\'modal\' data-target=\'#delete-Invoice\' data-del=' + json[i].invoice_id  + '>Delete</button>';


                    obj['order_id'] = json[i].order_id;
                    obj['encoded_By'] = json[i].encoded_By;
                    obj['total_amount'] = json[i].total_amount;
                    obj['discount_price'] = json[i].discount_price;
                    obj['tendered'] = json[i].tendered;
                    obj['change'] = json[i].change;
                    obj['date_created'] = json[i].date_created;

                    obj['actions'] = btnEdit + " " + btnDelete;

                    arr.push(obj);
                }
                $(document).ready(function() {
                    $('#table_invoice').DataTable({

                        'data': arr,
                        'columns': [{
                            "data": "order_id"
                        },{
                            "data": "encoded_By"
                        },{
                            "data": "total_amount"
                        },{
                            "data": "discount_price"
                        },{
                            "data": "tendered"
                        },{
                            "data": "change"
                        },{
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
                  var invoice_id = $(this).data("edit");
                  getID(invoice_id);//argument

                   function getID(invoice_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_invoice.php",
                          data: {
                              invoice_id: invoice_id
                          },
                          dataType: 'json',
                          success: function(response) {
                          $('#edit_invoiceid').val(response.invoice_id);
                          $('#edit_orderid').val(response.order_id);
                          $('#edit_encodedBy').val(response.encoded_By);
                          $('#edit_totalamount').val(response.total_amount);
                          $('#edit_discountprice5').val(response.discount_price);
                          $('#edit_tendered').val(response.tendered);
                          $('#edit_change').val(response.change);
    
                       }
                    });
                   }

                });


              //////////////////////////////////////////end edit get Id/////////////////////////////

              ///////////////////////////////////////update process////////////////////////////////


                  $(document).delegate('#edit_invoice', 'click', function(event) {
                    event.preventDefault();

                         var order_id = $('#edit_orderid').val();
                         var encoded_By = $('#edit_encodedBy').val();
                         var total_amount = $('#edit_totalamount').val();
                         var discount_price = $('#edit_discountprice5').val();
                         var tendered = $('#edit_tendered').val();
                         var change = $('#edit_change').val();
                         var invoice_id = $('#edit_invoiceid').val();
   
                    if(order_id == "") {
                      $('#reIns').html("<div class='alert alert-danger'>Company Name is required</div>");
                      return;
                    }
                    
                    $.ajax({
                      type: "PUT",
                      contentType: "application/json; charset=utf-8",
                      url: api+"update_invoice.php",
                      data: JSON.stringify({
                                           'invoice_id': invoice_id,
                                            'order_id': order_id,
                                            'encoded_By': encoded_By, 
                                            'total_amount': total_amount,
                                            'discount_price': discount_price,
                                            'tendered': tendered,
                                            'change': change
                                          }),
                      cache: false,
                      success: function(result) {
                        $('#mgs_inedit').html('<div class="alert alert-success">Invoice Updated successfully</div>');
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
                  var invoice_id = $(this).data("del");
                  getdelID(invoice_id);//argument

                   function getdelID(invoice_id) {
                      $.ajax({
                          type: 'GET',
                          url: api+"getid_invoice.php",
                          data: {
                              invoice_id: invoice_id
                          },
                          dataType: 'json',
                          success: function(response2) {
                          $('#del_invoiceid').val(response2.invoice_id);
                          $('#del_orderid').val(response2.order_id);
      
                       }
                    });
                   }

                });

              //////////////////////////////////////////end edit get Id delete///////////////////////////////

             ////////////////////////////////// delete process////////////////////////////////////////

               $(document).delegate('#delete_invoice', 'click', function(event) {
                    event.preventDefault();

                     var invoice_id = $('#del_invoiceid').val();

                    $.ajax({
                      type: "DELETE",
                      contentType: "application/json; charset=utf-8",
                      url: api+"delete_invoice.php?invoice_id="+invoice_id,
                      cache: false,
                      success: function(result) {
                        $('#mgs_Invdel').html('<div class="alert alert-success">Invoice Deleted successfully</div>');
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