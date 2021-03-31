<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Camera</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                                <li class="breadcrumb-item active">Data product</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Data product</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="index.php?ctrl=product&action=add" method="Post" class="form-tour">
                            <div>
                                <input type="hidden" name="id" <?php 
                                    if(isset($checkProduct)) echo 'value="'.$checkProduct['id'].'"'; 
                                    ?>>
                                <input type="hidden" name="luotxem" <?php 
                                    if(isset($checkProduct)) echo 'value="'.$checkProduct['luotxem'].'"'; 
                                    ?>>
                                <input type="hidden" name="luotthich" <?php 
                                    if(isset($checkProduct)) echo 'value="'.$checkProduct['luotthich'].'"'; 
                                    ?>>
                                <label for="">ảnh</label>
                                <input style="margin-right:30px" type="file" name="anhsp">
                                <br> <br>
                                <label for="">ten sp</label>
                                <input style="margin-right:30px" type="text" name="tensp" id=""
                                    <?php if(isset($checkProduct)) echo 'value="'.$checkProduct['name'].'"'; ?>>
                                <br> <br> <label for="">gia bán</label>
                                <input style="margin-right:30px" type="number" name="giaban" id=""
                                    <?php if(isset($checkProduct)) echo 'value="'.$checkProduct['giaban'].'"'; ?>>
                                <br> <br> <label for="">gia thực</label>
                                <input style="margin-right:30px" type="number" name="giathuc" id=""
                                    <?php if(isset($checkProduct)) echo 'value="'.$checkProduct['giathuc'].'"'; ?>>
                                <br> <br> <label for="">sl nhap</label>
                                <input style="margin-right:30px" type="number" name="sl_ton" id=""
                                    <?php if(isset($checkProduct)) echo 'value="'.$checkProduct['sl_ton'].'"'; ?>>
                                <br> <br>
                                <label for="">danh muc</label>
                                <select name="numberdanhmuc" id=""
                                    <?php if(isset($checkProduct)) echo 'value="'.$checkProduct['catalog'].'"'; ?>>
                                    <option value="0">lựa chọn danh muc</option>
                                    <?php
                                        foreach($showMenu as $y){
                                        echo'
                                            <option value="'.$y['id'].'">'.$y['namecata'].'</option>
                                        ';}
                                    ?>
                                </select> <br> <br>
                                <label for="">thuonghieu</label>
                                <select name="brand" id=""
                                    <?php if(isset($checkProduct)) echo 'value="'.$checkProduct['brand'].'"'; ?>>
                                    <option value="0">lựa chọn thuong hieu</option>
                                    <?php
                                        foreach($showBrand as $s){
                                        echo'
                                            <option value="'.$s['id'].'">'.$s['name'].'</option>
                                        ';}
                                    ?>
                                </select> <br><br>
                            </div>
                            <label for="">chi tiet</label>
                            <textarea class="text_editor" id="my_editor2" name="chitiecsp" placeholder="nhap chi tiet"
                                <?php if(isset($checkProduct)) echo 'value="'.$checkProduct['mota'].'"'; ?>></textarea>
                            <br><br>
                            <label for="">mô tả</label>
                            <textarea class="text_editor" id="my_editor" name="motasp" placeholder="nhập mô tả"
                                <?php if(isset($checkProduct)) echo 'value="'.$checkProduct['thongtinthem'].'"'; ?>></textarea>
                            <br><br>
                            <input type="submit" class="nut-ok nutluu" value="xac nhan">

                        </form>

                        <!-- <form action="">
                            <h4 class="header-title">form</h4>
                            <input type="hidden" name="">
                            <lable for="id"><b>Name: </b>
                            </lable>
                            <input id="id" type="text">
                        </form> -->

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title">Danh sach</h4>
                        <!-- <p class="sub-header">
                            DataTables has most features enabled by default, so all you need to do to use it with your
                            own tables is to call the construction function: <code>$().DataTable();</code>.
                        </p> -->

                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>giá bán</th>
                                    <th>giá thực</th>
                                    <th>mô tả</th>
                                    <th>Chi tiec them</th>
                                    <th>img</th>
                                    <th>danhmuc</th>
                                    <th>thuong hieu</th>
                                    <th>luotxem</th>
                                    <th>luotthich</th>
                                    <th>time up</th>

                                    <th>action</th>

                                </tr>
                            </thead>


                            <tbody>
                                <?php
                            foreach($showProduct as $f){
                                echo'
                                <tr>
                                    <td>'.$f['id'].'</td>
                                    <td>'.$f['name'].'</td>
                                    <td>'.$f['giaban'].'</td>
                                    <td>'.$f['giathuc'].'</td>
                                    <td>'.$f['mota'].'</td>
                                    <td>'.$f['thongtinthem'].'</td>
                                    <td>
                                    <img src="img/product/'.$f['img'].'" width="50px">
                                    </td>
                                    <td>'.$f['catalog'].'</td>
                                    <td>'.$f['brand'].'</td>
                                    <td>'.$f['luotxem'].'</td>
                                    <td>'.$f['luotthich'].'</td>
                                    <td>'.$f['thoigianup'].'</td>
                                    <td>
                                        <a href="index.php?ctrl=product&action=del&idxoa='.$f['id'].'">xoa</a>
                                        <a href="index.php?ctrl=product&action=edit&idsua='.$f['id'].'">sua</a>
                                    </td>
                                </tr>
                                ';
                            }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end row -->


        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end content -->