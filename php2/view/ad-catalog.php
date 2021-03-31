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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Uplon</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Data Tables</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Data Tables</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form action="index.php?ctrl=catalog&action=add" method="post" class="form-tour">
                <div>
                    <input type="hidden" name="id" <?php if(isset($id)) echo 'value="'.$id.'"'; ?>>
                    <label for="">ten danh muc:</label>
                    <input type=" text" name="tendanhmuc" id="tendanhmuc" <?php
                     if(isset($editcata)) echo 'value="'.$editcata['namecata'].'"';
                        //  echo $id;
                         ?>>
                </div>

                <div>
                    <input type="submit" class="" name="btn-access-cata" value="xac nhận">
                </div>
            </form>
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title">Default Example</h4>
                        <!-- <p class="sub-header">
                            DataTables has most features enabled by default, so all you need to do to use it with
                            your
                            own tables is to call the construction function: <code>$().DataTable();</code>.
                        </p> -->

                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>action</th>
                                </tr>


                            </thead>


                            <tbody>
                                <?php
                                    foreach($showMenu as $g)
                                    echo'
                                        <tr>
                                            <td>'.$g['id'].'</td>
                                            <td>'.$g['namecata'].'</td>
                                            <td>
                                                <a href="index.php?ctrl=catalog&action=edit&idsua='.$g['id'].'" class="sua"><i class="fa fa-edit"></i></a>
                                                <a href="index.php?ctrl=catalog&action=del&idxoa='.$g['id'].'" class="xoa"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        ';
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