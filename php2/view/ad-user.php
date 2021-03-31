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
                        <form action="index.php?ctrl=user&action=add" method="Post" class="form-tour">
                            <div>
                                <input type="hidden" name="id" <?php 
                                    if(isset($checkUser)) echo 'value="'.$checkUser['id'].'"'; 
                                    ?>>
                                <label for="">ten user</label>
                                <input style="margin-right:30px" type="text" name="tenuser" id=""
                                    <?php if(isset($checkUser)) echo 'value="'.$checkUser['username'].'"'; ?>>
                                <br> <br> <label for="">Pass</label>
                                <input style="margin-right:30px" type="text" name="pass" id=""
                                    <?php if(isset($checkUser)) echo 'value="'.$checkUser['password'].'"'; ?>>
                                <br> <br> <label for="">email</label>
                                <input style="margin-right:30px" type="mail" name="email" id=""
                                    <?php if(isset($checkUser)) echo 'value="'.$checkUser['email'].'"'; ?>>
                                <br> <br> <label for="">phone</label>
                                <input style="margin-right:30px" type="number" name="phone" id=""
                                    <?php if(isset($checkUser)) echo 'value="'.$checkUser['phone'].'"'; ?>><br>
                                <br> <label for="">dia chi</label>
                                <input style="margin-right:30px" type="text" name="diachi" id=""
                                    <?php if(isset($checkUser)) echo 'value="'.$checkUser['diachi'].'"'; ?>>
                                <br><br>
                                <label for="">role</label>
                                <input style="margin-right:30px" type="number" name="role" id=""
                                    <?php if(isset($checkUser)) echo 'value="'.$checkUser['role'].'"'; ?>>
                                <br> <br>
                                <label for="">danh muc</label>

                            </div>

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
                                    <th>pass</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>diachi</th>
                                    <th>role</th>


                                    <th>action</th>

                                </tr>
                            </thead>


                            <tbody>
                                <?php
                            foreach($showUser as $f){
                                echo'
                                <tr>
                                    <td>'.$f['id'].'</td>
                                    <td>'.$f['username'].'</td>
                                    <td>'.$f['password'].'</td>
                                    <td>'.$f['email'].'</td>
                                    <td>'.$f['phone'].'</td>
                                    <td>'.$f['diachi'].'</td>
                                 
                                    <td>'.$f['role'].'</td>
                                   
                                    <td>
                                        <a href="index.php?ctrl=user&action=del&idxoa='.$f['id'].'">xoa</a>
                                        <a href="index.php?ctrl=user&action=edit&idsua='.$f['id'].'">sua</a>
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