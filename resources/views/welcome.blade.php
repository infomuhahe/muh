<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="fa fa-money fa-fw"></i> Insert Product
            </h3>
        </div>
        <div class="panel-body">
            <form method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-md-3 control-label"> Product Title </label>
                      <div class="col-md-6">
                        <input name="product_title" type="text" class="form-control" required>
                     </div>
                </div>
                <div class="form-group">
                      <label class="col-md-3 control-label"> Product Category </label>
                        <div class="col-md-6">
                          <select name="product_cat" class="form-control">
                            <option> Select a Category Product </option>
                          </select>
                        </div>
                </div>
                <div class="form-group">
                     <label class="col-md-3 control-label"> Category </label>
                      <div class="col-md-6">
                          <select name="cat" class="form-control">
                            <option> Select a Category </option>
                          </select>
                      </div>
                </div>
                <div class="form-group">
                     <label class="col-md-3 control-label"> Product Image 1 </label>
                      <div class="col-md-6">
                        <input name="product_img1" type="file" class="form-control" required>
                      </div>
                </div>
                <div class="form-group">
                     <label class="col-md-3 control-label"> Product Image 2 </label>
                      <div class="col-md-6">
                        <input name="product_img2" type="file" class="form-control">
                      </div>
                </div>
                <div class="form-group">
                     <label class="col-md-3 control-label"> Product Image 3 </label>
                      <div class="col-md-6">
                        <input name="product_img3" type="file" class="form-control form-height-custom">
                      </div>
                </div>
                <div class="form-group">
                     <label class="col-md-3 control-label"> Product Price </label>
                      <div class="col-md-6">
                        <input name="product_price" type="text" class="form-control" required>
                      </div>
                </div>
                <div class="form-group">
                     <label class="col-md-3 control-label"> Product Keywords </label>
                      <div class="col-md-6">
                        <input name="product_keywords" type="text" class="form-control" required>
                      </div>
                </div>
                <div class="form-group">
                     <label class="col-md-3 control-label"> Product Desc </label>
                      <div class="col-md-6">
                        <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>
                      </div>
                </div>
                <div class="form-group">
                     <label class="col-md-3 control-label"></label>
                      <div class="col-md-6">
                        <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
                      </div>
                </div>
            </form>
        </div>
    </div>
</div>
