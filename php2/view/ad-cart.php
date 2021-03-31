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
                        <form action="">
                            <h4 class="header-title">form</h4>
                            <input type="hidden" name="">
                            <lable for="id"><b>Name: </b>
                            </lable>
                            <input id="id" type="text">
                        </form>

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
                                    <th>ten sp</th>
                                    <th>gia</th>
                                    <th>Khach hang</th>
                                    <th>soluong</th>
                                    <th>tongtien</th>
                                    <th>thoigian</th>
                                    <th>trangthai</th>
                                    <th>action</th>


                                </tr>
                            </thead>


                            <tbody>
                                <?php
                            foreach($showCart as $r){
                                echo'
                                <tr>
                                    <td>'.$r['id'].'</td>
                                    <td>'.$r['name'].'</td>
                                    <td>'.$r['giaban'].'</td>
                                    <td>'.$r['username'].'</td>
                                    <td>'.$r['soluong'].'</td>
                                    <td>'.$r['giaban']*$r['soluong'].'</td>
                                    <td>'.$r['time'].'</td>
                                                  <td>'.$r['trangthai'].'</td>
                                    <td>
                                        <a href="index.php?ctrl=cart&&action=edit&idsua='.$r['id'].'">sua</a>
                                        <a href="index.php?ctrl=cart&action=del&idxoa='.$r['id'].'">xoa</a>

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