@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')

    <div class="side-app">

        <!-- page-header -->
        <div class="page-header">
            <h1 class="page-title">Register User</h1>
            <div class="ml-auto">
                <div class="input-group">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <span>
                            <i class="fe fe-plus"><strong> Create</strong></i>
                        </span>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Register User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Nama:</label>
                                                    <input type="text" class="form-control" id="recipient-name" placeholder="jhone" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                                    <input type="text" class="form-control" id="recipient-name" placeholder="jhone@example.com"  required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Jenis
                                                        Kelamin:</label>
                                                    <input type="text" class="form-control" id="recipient-name" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Alamat:</label>
                                                    <input type="text" class="form-control" id="recipient-name" placeholder="jl.mawar" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>User Role</label>
                                                <select class="custom-select" id="inputGroupSelect01" name="user_role">
                                                    <option selected>Pilih Option</option>
                                                    <option value="panitia">Panitia</option>
                                                    <option value="tu">TU - Tata Usaha</option>
                                                    <option value="kepalasekolah">Kelapa Sekolah</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">No Telp:</label>
                                                    <input type="text" class="form-control" id="recipient-name" placeholder="0812xxxxxxx" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Tempat Lahir:</label>
                                                    <input type="text" class="form-control" id="recipient-name" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Tanggal
                                                        Lahir:</label>
                                                    <input type="date" class="form-control" id="recipient-name" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Password:</label>
                                                    <input type="text" class="form-control" id="recipient-name" required>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    &nbsp;
                    &nbsp;
                    <a href="#" class="btn btn-danger btn-icon" data-toggle="tooltip" title=""
                        data-placement="bottom" data-original-title="Support">
                        <span>
                            <i class="fe fe-download"> Download</i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End page-header -->

        <!-- Row -->
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title">Data Table</h3>
                        </div>
                        <div class="card-options">
                            <a href="" class="mr-4 text-default" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="true">
                                <span class="fe fe-more-horizontal fs-20"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="#"><i class="fe fe-eye mr-2"></i>View</a></li>
                                <li><a href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a></li>
                                <li><a href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a></li>
                                <li><a href="#"><i class="fe fe-download-cloud mr-2"></i>Download</a></li>
                                <li><a href="#"><i class="fe fe-settings mr-2"></i>More</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">First name</th>
                                        <th class="wd-15p">Last name</th>
                                        <th class="wd-20p">Position</th>
                                        <th class="wd-15p">Start date</th>
                                        <th class="wd-10p">Salary</th>
                                        <th class="wd-25p">E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bella</td>
                                        <td>Chloe</td>
                                        <td>System Developer</td>
                                        <td>2018/03/12</td>
                                        <td>$654,765</td>
                                        <td>b.Chloe@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Donna</td>
                                        <td>Bond</td>
                                        <td>Account Manager</td>
                                        <td>2012/02/21</td>
                                        <td>$543,654</td>
                                        <td>d.bond@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Harry</td>
                                        <td>Carr</td>
                                        <td>Technical Manager</td>
                                        <td>20011/02/87</td>
                                        <td>$86,000</td>
                                        <td>h.carr@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Lucas</td>
                                        <td>Dyer</td>
                                        <td>Javascript Developer</td>
                                        <td>2014/08/23</td>
                                        <td>$456,123</td>
                                        <td>l.dyer@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Karen</td>
                                        <td>Hill</td>
                                        <td>Sales Manager</td>
                                        <td>2010/7/14</td>
                                        <td>$432,230</td>
                                        <td>k.hill@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Dominic</td>
                                        <td>Hudson</td>
                                        <td>Sales Assistant</td>
                                        <td>2015/10/16</td>
                                        <td>$654,300</td>
                                        <td>d.hudson@datatables.net</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row End-->
    </div>

    <!-- Right-sidebar-->
    <div class="sidebar sidebar-right sidebar-animate">
        <div class="tab-menu-heading siderbar-tabs border-0">
            <div class="tabs-menu ">
                <!-- Tabs -->
                <ul class="nav panel-tabs">
                    <li class=""><a href="#tab1" class="active" data-toggle="tab">Chat</a></li>
                    <li><a href="#tab2" data-toggle="tab">Activity</a></li>
                    <li><a href="#tab3" data-toggle="tab">Todo</a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
            <div class="tab-content border-top">
                <div class="tab-pane active" id="tab1">
                    <div class="chat">
                        <div class="contacts_card">
                            <div class="input-group p-3">
                                <input type="text" placeholder="Search..." class="form-control search">
                                <div class="input-group-prepend">
                                    <span class="input-group-text search_btn  "><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                            <ul class="contacts mb-0">
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="../../assets/images/users/male/3.jpg"
                                                class="rounded-circle user_img" alt="img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <h6 class="mt-1 mb-0 ">Maryam Naz</h6>
                                            <small class="text-muted">Maryam is online</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>01-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="../../assets/images/users/female/1.jpg"
                                                class="rounded-circle user_img" alt="img">

                                        </div>
                                        <div class="user_info">
                                            <h6 class="mt-1 mb-0 ">Sahar Darya</h6>
                                            <small class="text-muted">Sahar left 7 mins ago</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>01-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="../../assets/images/users/female/9.jpg"
                                                class="rounded-circle user_img" alt="img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <h6 class="mt-1 mb-0 ">Maryam Naz</h6>
                                            <small class="text-muted">Maryam is online</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>01-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="../../assets/images/users/female/10.jpg"
                                                class="rounded-circle user_img" alt="img">

                                        </div>
                                        <div class="user_info">
                                            <h6 class="mt-1 mb-0 ">Yolduz Rafi</h6>
                                            <small class="text-muted">Yolduz is online</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>02-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="../../assets/images/users/male/5.jpg"
                                                class="rounded-circle user_img" alt="img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <h6 class="mt-1 mb-0 ">Nargis Hawa</h6>
                                            <small class="text-muted">Nargis left 30 mins ago</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>02-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="../../assets/images/users/male/7.jpg"
                                                class="rounded-circle user_img" alt="img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <h6 class="mt-1 mb-0 ">Khadija Mehr</h6>
                                            <small class="text-muted">Khadija left 50 mins ago</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>03-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="../../assets/images/users/female/8.jpg"
                                                class="rounded-circle user_img" alt="img">

                                        </div>
                                        <div class="user_info">
                                            <h6 class="mt-1 mb-0 ">Khadija Mehr</h6>
                                            <small class="text-muted">Khadija left 50 mins ago</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>03-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
