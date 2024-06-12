<!-- add company -->
<div class="modal fade" id="add-company">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Company</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">

                    <div id="mgs_comp"></div>
                    <div  id="req"></div>
            
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Company Name</label>
                            <input type="text" class="form-control" id="company_name" placeholder="Company Name...">
                        </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_company">Save</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button> 
                    </div>
                    
                </form>
              </div>
            </div>
       </div>
     </div>
<!-- end add company -->



<!-- edit company -->
<div class="modal fade" id="edit-Company">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Company</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div id="mgs_compedit"></div>
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Company Name</label>
                            <input type="text" class="form-control" id="edit_companyname" placeholder="Company Name...">
                        </div>
                        </div>
                        <input type="hidden" id="edit_companyid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_company">Update</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button> 
                    </div>
                    
                </form>
              </div>
            </div>
       </div>
     </div>
<!-- end edit company -->

<!-- Delete company -->
<div class="modal fade" id="delete-Company">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Company</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div id="mgs_compdel"></div>
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Company Name</label>
                            <input type="text" class="form-control" id="del_companyname" placeholder="Company Name...">
                        </div>
                        </div>
                        <input type="hidden" id="del_companyid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="del_company">Yes</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">No</button> 
                    </div>
                    
                </form>
              </div>
            </div>
       </div>
     </div>
<!-- end Delete company -->

<div class="modal fade" id="add-Product">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqProd"></div>
                        <div id="mgs_prod"></div>
                        <div class="row">
                        <div class="form-group col-md-4">
                            <label for="Item Code">Item Code</label>
                            <input type="text" class="form-control" id="item_code" placeholder="Item Code">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="full_name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Variant">Variant</label>
                            <input type="text" class="form-control" id="varient" placeholder="Variant">
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Unit Value">Unit Value</label>
                            <input type="text" class="form-control" id="unit_value" placeholder="Unit Value">
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Unit Name">Unit Name</label>
                            <select class="form-control" id="units_id">
                            </select>
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Category">Category</label>
                            <select class="form-control" id="category_id"> 
                            </select>
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Net Price">Net Price</label>
                            <input class="form-control"type="text" name="currency-field" id="net_price" >
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Production Cost">Production Cost</label>
                            <input class="form-control"type="text" name="currency-field" id="production_cost" >
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Markup %">Markup %</label>
                            <input type="text" class="form-control" id="markup_percent" placeholder="%">
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Markup Price">Markup Price</label>
                            <input class="form-control"type="text" name="currency-field" id="markup_price" >
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Discount">Discount</label>
                            <input type="number" class="form-control" id="discount" placeholder="%">
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Discount Price">Discount Price</label>
                            <input class="form-control"type="text" name="currency-field" id="discount_price" >
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Sales Price">Sales Price</label>
                            <input class="form-control"type="text" name="currency-field" id="sales_price" >
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Reorder Level">Reorder Level</label>
                            <input type="text" class="form-control" id="reorder_level" placeholder="Reorder Level">
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Stock Quantity">Stock Quantity</label>
                            <input type="text" class="form-control" id="stock_quantity" placeholder="Stock Quantity">
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Expiry Date">Expiry Date</label>
                            <input type="date" class="form-control" id="expired_date" placeholder="Expiry Date">
                        </div>
                         <div class="form-group col-md-4">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="encoded_by" placeholder="Encoded By">
                        </div>
                        </div>

                        </div>
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_product">Save</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button> 
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-Product -->

 <!-- /.edit product -->
<div class="modal fade" id="edit-Product">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqPdit"></div>
                        <div id="mgs_Pedit"></div>
                        <div class="row">
                        <div class="form-group col-md-4">
                            <label for="Item Code">Item Code</label>
                            <input type="text" class="form-control" id="edit_itemcode" placeholder="Item Code">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="edit_fullname" placeholder="Name">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Variant">Variant</label>
                            <input type="text" class="form-control" id="edit_varient" placeholder="Variant">
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Unit Value">Unit Value</label>
                            <input type="text" class="form-control" id="edit_unitvalue" placeholder="Unit Value">
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Unit Name">Unit Name</label>
                            <select class="form-control units_id" id="edit_unitsid4">
                            </select>
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Category">Category</label>
                            <select class="form-control category_id" id="edit_categoryid"> 
                            </select>
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Net Price">Net Price</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_netprice" >
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Production Cost">Production Cost</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_productioncost" >
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Markup %">Markup %</label>
                            <input type="text" class="form-control" id="edit_markuppercent" placeholder="%">
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Markup Price">Markup Price</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_markupprice" >
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Discount">Discount</label>
                            <input type="number" class="form-control" id="edit_discount" placeholder="%">
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Discount Price">Discount Price</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_discountprice" >
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Sales Price">Sales Price</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_salesprice" >
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Reorder Level">Reorder Level</label>
                            <input type="text" class="form-control" id="edit_reorderlevel" placeholder="Reorder Level">
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Stock Quantity">Stock Quantity</label>
                            <input type="text" class="form-control" id="edit_stockquantity" placeholder="Stock Quantity">
                        </div>
                            <div class="form-group col-md-4">
                            <label for="Expiry Date">Expiry Date</label>
                            <input type="date" class="form-control" id="edit_expireddate4" placeholder="Expiry Date">
                        </div>
                         <div class="form-group col-md-4">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="edit_encodedby4" placeholder="Encoded By">
                        </div>
                        </div>

                        </div>
                        <input type="hidden" id="edit_productid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_product">Update</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button> 
                    </div>

                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
 <!-- /.end edit product -->

 <!-- Delete company -->
<div class="modal fade" id="delete-Product">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div id="mgs_Pdel"></div>
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Item Code</label>
                            <input type="text" class="form-control" id="del_itemcode" placeholder="Company Name...">
                        </div>
                        </div>
                        <input type="hidden" id="del_productid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="del_product">Yes</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">No</button> 
                    </div>
                    
                </form>
              </div>
            </div>
       </div>
     </div>
<!-- end Delete company -->

<!--add units-->
<div class="modal fade" id="add-Unit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Unit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">

                     <div id="mgs_unts"></div>
                     <div id="reqU"></div>

                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Description">Description</label>
                            <textarea type="text" class="form-control" id="description" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="encoded_by" placeholder="Encoded By">
                        </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_units">Save</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button> 
                    </div>
                </form>
              </div>
        </div>
    </div>
</div>
<!--end add units-->

<!--edit units-->
<div class="modal fade" id="edit-unit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Unit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">

                     <div id="mgs_uedit"></div>
                     <div id="reqU1"></div>

                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="edit_name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Description">Description</label>
                            <textarea type="text" class="form-control" id="edit_description" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="edit_encodedby" placeholder="Encoded By">
                        </div>
                        </div>
                        <input type="hidden" id="edit_unitsid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_units">Update</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button> 
                    </div>
                </form>
              </div>
        </div>
    </div>
</div>
<!--end edit units-->

<!--delete units-->
<div class="modal fade" id="delete-unit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Unit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">

                     <div id="mgs_Udel"></div>
                     <div id="reqU1"></div>

                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="del_name" placeholder="Name">
                        </div>
                        </div>
                        <input type="hidden" id="del_unitsid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="del_units">Yes</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">No</button> 
                    </div>
                </form>
              </div>
        </div>
    </div>
</div>
<!--end delete units-->

<!-- add categories -->
<div class="modal fade" id="add-Category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqC"></div>
                        <div id="mgs_cat"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="cat_name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Description">Description</label>
                            <textarea type="text" class="form-control" id="cat_description" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="cat_encodedby" placeholder="Encoded By">
                        </div>
                        </div>

                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_categories">Save</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button> 
                    </div>
                </form>
              </div>
            </div>
          </div>
    <!-- /.modal-dialog -->
    </div>

    <!-- end add categories -->

    <!-- edit categories -->
<div class="modal fade" id="edit-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqCat"></div>
                        <div id="mgs_Cedit"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="edit_catname" placeholder="Name">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Description">Description</label>
                            <textarea type="text" class="form-control" id="edit_catdescription" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="edit_catencodedby" placeholder="Encoded By">
                        </div>
                        </div>
                        <input type="hidden" id="edit_categoryid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_categories">Update</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button> 
                    </div>
                </form>
              </div>
            </div>
          </div>
    <!-- /.modal-dialog -->
    </div>

    <!-- end edit categories -->


    <!-- delete categories -->
<div class="modal fade" id="delete-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqCat"></div>
                        <div id="mgs_Cdel"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="del_cname" placeholder="Name">
                        </div>

                        </div>
                        <input type="hidden" id="del_categoryid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="delete_categories">Yes</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">No</button> 
                    </div>
                </form>
              </div>
            </div>
          </div>
    <!-- /.modal-dialog -->
    </div>

    <!-- end delete categories -->


<!-- /.modal edit-Category -->
<!-- /. Add item raw material -->
<div class="modal fade" id="add-ItemRawMaterial">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Item Raw Material</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqIrM"></div>
                        <div id="mgs_irm"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Product Name">Product Name</label>
                            <select class="form-control" id="productset_id1">
                            </select>
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Material Name">Material Name</label>
                            <input type="text" class="form-control" id="material_name" placeholder="Material Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Amount">Amount</label>
                            <input class="form-control" type="text" name="currency-field" id="amount" placeholder="P 0.00">
                        </div>
                          <div class="form-group col-md-12">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="encoded_by1" placeholder="Encoded By">
                        </div>
                        </div>
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_itemrawmaterial">Save</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end Add item raw material -->
<!-- /. edit item raw material -->
<div class="modal fade" id="edit-ItemRawMaterial">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Item Raw Material</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="req_irm"></div>
                        <div id="msg_irmEdit"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Product Name">Product Name</label>
                            <select class="form-control productset_idGet" id="edit_productsetid">
                            </select>
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Material Name">Material Name</label>
                            <input type="text" class="form-control" id="edit_materialname" placeholder="Material Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Amount">Amount</label>
                            <input class="form-control" type="text" name="currency-field" id="edit_amount" placeholder="P 0.00">
                        </div>
                          <div class="form-group col-md-12">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="edit_encodedby3" placeholder="Encoded By">
                        </div>
                        </div>
                        <input type="hidden" id="edit_itermrawmaterialid" name="">
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_itemrawmaterial">Update</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end edit item raw material -->

<!-- /. delete item raw material -->
<div class="modal fade" id="delete-ItemRawMaterial">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Item Raw Material</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="mgs_Imrdel"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Product Name">Material Name</label>
                              <input type="text" class="form-control" id="del_materialname" name="">
                        </div>

                        </div>
                        <input type="hidden" id="del_itermrawmaterialid" name="">
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="delete_itemrawmaterial">Yes</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">No</button>
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end delete item raw material -->
<!-- /.add invoice -->
<div class="modal fade" id="add-Invoice">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Invoice</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqIV"></div>
                        <div id="mgs_Inv"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Total Amount">Order ID</label>
                            <input class="form-control"type="text" name="currency-field" id="order_id" placeholder="">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Discount Price">Encoded By</label>
                            <input class="form-control"type="text" name="currency-field" id="encoded_By" placeholder="">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Tendered">TOtal Amount</label>
                            <input class="form-control"type="text" name="currency-field" id="total_amount" placeholder="P 0.00">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Change">Discount Price</label>
                            <input class="form-control"type="text" name="currency-field" id="discount_price5" placeholder="%">
                        </div>
                       <div class="form-group col-md-12">
                            <label for="Change">Tendered</label>
                            <input class="form-control"type="text" name="currency-field" id="tendered" placeholder="P 0.00">
                        </div>
                      <div class="form-group col-md-12">
                            <label for="Change">Change</label>
                            <input class="form-control"type="text" name="currency-field" id="change" placeholder="P 0.00">
                        </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_invoice">Save</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button>

                    </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end add invoice -->
<!-- /.edit invoice -->
<div class="modal fade" id="edit-Invoice">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Invoice</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reIns"></div>
                        <div id="mgs_inedit"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Total Amount">Order ID</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_orderid" placeholder="">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Discount Price">Encoded By</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_encodedBy" placeholder="">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Tendered">TOtal Amount</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_totalamount" placeholder="P 0.00">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Change">Discount Price</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_discountprice5" placeholder="%">
                        </div>
                       <div class="form-group col-md-12">
                            <label for="Change">Tendered</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_tendered" placeholder="P 0.00">
                        </div>
                      <div class="form-group col-md-12">
                            <label for="Change">Change</label>
                            <input class="form-control"type="text" name="currency-field" id="edit_change" placeholder="P 0.00">
                        </div>
                        </div>
                        <input type="hidden" id="edit_invoiceid" name="">
                        <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_invoice">Update</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button>

                    </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end edit invoice -->
<!-- /. delete innvoice -->
<div class="modal fade" id="delete-Invoice">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Invoice</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="mgs_Invdel"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Product Name">Order ID</label>
                              <input type="text" class="form-control" id="del_orderid" name="">
                        </div>

                        </div>
                        <input type="hidden" id="del_invoiceid" name="">
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="delete_invoice">Yes</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">No</button>
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end delete innvoice -->

<!-- /.add sales -->
<div class="modal fade" id="add-Sales">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Sales</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqSls"></div>
                        <div id="mgs_Sls"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Item">Item</label>
                             <select class="form-control" id="category_id6">
                            </select>
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Sale Quantity">Sale Quantity</label>
                            <input type="number" class="form-control" id="sale_quantity" placeholder="Sale Quantity">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Total">Total</label>
                            <input class="form-control"type="text" id="total" placeholder="P 0.00">
                        </div>                      
                        <div class="form-group col-md-12">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="edit_encodedby6" placeholder="Encoded By">
                        </div>
                        </div>
                        <input type="hidden" id="edit_itermrawmaterialid" name="">
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_sales">Save</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end add sales -->

<!-- /.edit sales -->
<div class="modal fade" id="edit-Sales">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Sales</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqSedit"></div>
                        <div id="mgs_Slesedit"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Item">Item</label>
                             <select class="form-control category_id6" id="edit_categoryid6">
                            </select>
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Sale Quantity">Sale Quantity</label>
                            <input type="number" class="form-control" id="edit_salequantity" placeholder="Sale Quantity">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Total">Total</label>
                            <input class="form-control"type="text" id="edit_total" placeholder="P 0.00">
                        </div>                      
                        <div class="form-group col-md-12">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="edit_recordedby" placeholder="Encoded By">
                        </div>
                        </div>
                        <input type="hidden" id="edit_salesid" name="">
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_sales">Update</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end edit sales -->

<div class="modal fade" id="add-Users">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Full Name">Full Name</label>
                            <input type="text" class="form-control" id="Full Name" placeholder="First Name      -       Middle Name         -       Last Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" id="Username" placeholder="Username">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Password">Password</label>
                            <input type="text" class="form-control" id="Password" placeholder="Password">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="User Type">User Type</label>
                            <select class="form-control">
                                <option>Category 1</option>    
                                <option>Category 2</option>    
                            </select>
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Contact Number">Contact Number</label>
                            <input type="text" class="form-control" id="Contact Number" placeholder="Contact Number">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="Address" placeholder="Address">
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-rounded">Save</button>
                        <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancel</button> 
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-Users -->
<div class="modal fade" id="edit-Users">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Full Name">Full Name</label>
                            <input type="text" class="form-control" id="Full Name" placeholder="First Name      -       Middle Name         -       Last Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" id="Username" placeholder="Username">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Password">Password</label>
                            <input type="text" class="form-control" id="Password" placeholder="Password">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="User Type">User Type</label>
                            <select class="form-control">
                                <option>Category 1</option>    
                                <option>Category 2</option>    
                            </select>
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Contact Number">Contact Number</label>
                            <input type="text" class="form-control" id="Contact Number" placeholder="Contact Number">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="Address" placeholder="Address">
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-rounded">Save</button>
                        <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancel</button> 
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit-Users -->
<!-- /add product set -->
<div class="modal fade" id="add-ProductSet">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product Set</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="mgs_pset"></div>
                        <div id="reqPc"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Set Code">Set Code</label>
                            <input type="text" class="form-control" id="set_code" placeholder="Set Code">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Set Name">Set Name</label>
                            <input type="text" class="form-control" id="set_name" placeholder="Set Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Total Amount">Total Amount</label>
                            <input class="form-control"type="text" id="total_amount" placeholder="P 0.00">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Set on Hand">Set on Hand</label>
                            <input type="text" class="form-control" id="set_onhand" placeholder="Set on Hand">
                        </div>
                       <div class="form-group col-md-12">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="encoded_by2" placeholder="Encoded By">
                        </div>
                        </div>
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="add_productset">Save</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /end add product set -->

<!-- /edit product set -->
<div class="modal fade" id="edit-productSet">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Product Set</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="reqPsEdit"></div>
                        <div id="mgs_Psedit"></div>
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Set Code">Set Code</label>
                            <input type="text" class="form-control" id="edit_setcode" placeholder="Set Code">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Set Name">Set Name</label>
                            <input type="text" class="form-control" id="edit_setname" placeholder="Set Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Total Amount">Total Amount</label>
                            <input class="form-control"type="text" id="edit_totalamount" placeholder="P 0.00">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Set on Hand">Set on Hand</label>
                            <input type="text" class="form-control" id="edit_setonhand" placeholder="Set on Hand">
                        </div>
                       <div class="form-group col-md-12">
                            <label for="Name">Encoded By</label>
                            <input type="text" class="form-control" id="edit_encodedby2" placeholder="Encoded By">
                        </div>
                        </div>
                        <input type="hidden" id="edit_productsetid" name="">
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="edit_productset">Update</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.card-body -->
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /end edit product set -->
<!-- /edit product set -->
<div class="modal fade" id="delete-productSet">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Product Set</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div id="mgs_Psdel"></div>
                        <div class="row">

                            <div class="form-group col-md-12">
                            <label for="Set Name">Set Name</label>
                            <input type="text" class="form-control" id="del_setname" placeholder="Set Name">
                        </div>

                        </div>
                        <input type="hidden" id="del_productsetid" name="">
                       <button type="button" class="btn btn-primary btn-rounded" style="float: right;" id="delete_productset">Yes</button>
                        <button type="button" class="btn btn-danger btn-rounded" style="float: right;margin-right: 1%" data-dismiss="modal">No</button>
                    </div>
                    <!-- /.card-body -->
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /end edit product set -->
<!-- /.modal edit-ProductSet -->
<div class="modal fade" id="add-CompanySetup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Company Setup</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Company Name">Company Name</label>
                            <input type="text" class="form-control" id="Company Name" placeholder="Company Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="Address" placeholder="Address">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Contact No.">Contact No.</label>
                            <input type="text" class="form-control" id="Contact No." placeholder="Contact No.">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="TIN No.">TIN No.</label>
                            <input type="text" class="form-control" id="TIN No." placeholder="TIN No.">
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-rounded">Save</button>
                        <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancel</button> 
                    </div>
                    <!-- /.card-body -->
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal add-CompanySetup -->
<div class="modal fade" id="edit-CompanySetup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Company Setup</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Company Name">Company Name</label>
                            <input type="text" class="form-control" id="Company Name" placeholder="Company Name">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="Address" placeholder="Address">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="Contact No.">Contact No.</label>
                            <input type="text" class="form-control" id="Contact No." placeholder="Contact No.">
                        </div>
                            <div class="form-group col-md-12">
                            <label for="TIN No.">TIN No.</label>
                            <input type="text" class="form-control" id="TIN No." placeholder="TIN No.">
                        </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-rounded" >Save</button>
                        <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancel</button> 
                    </div>
                    <!-- /.card-body -->
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit-CompanySetup -->
<div class="modal fade" id="set-days">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Set Predictive Days</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Days">Days</label>
                            <input type="number" class="form-control" id="Days" placeholder="Days">
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-rounded">Save</button>
                        <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancel</button> 
                    </div>
                    <!-- /.card-body -->
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal set-days -->