<aside class="app-sidebar toggle-sidebar">
    <style>
        .side-menu__item{
            background-image: linear-gradient(to right, rgb(255, 217, 114) , #fda008);
            border-radius: 10px;
        }
        li{
            padding: 2px;
        }
    </style>
    <ul class="side-menu toggle-menu">
        <li>
            <h3>Main</h3>
        </li>
        {{-- <li class="slide">
            <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"  href="index.html"><span>Analytics Dashboard</span></a></li>
                <li><a class="slide-item" href="index2.html"><span>E-Commerce Dashboard</span></a></li>
                <li><a class="slide-item" href="index3.html"><span>Sales Dashboard</span></a></li>
                <li><a class="slide-item" href="index4.html"><span>IT Dashboard</span></a></li>
                <li><a class="slide-item" href="index5.html"><span>Logistics Dashboard</span></a></li>
            </ul>
        </li> --}}

        <li>
            <a class="side-menu__item" href="{{ route('dashboard') }}"><i class="side-menu__icon fe fe-codepen"></i><span
                    class="side-menu__label">Dashboard</span></a>
        </li>
        <li>
            <h3>Student</h3>
        </li>
        <li>
            @if (Auth::user()->user_role === 'siswa')
                <a class="side-menu__item" href="{{ route('form-pendaftaran') }}"><i
                        class="side-menu__icon fa fas fa fa-registered"></i><span
                        class="side-menu__label">Pendaftaran</span></a>
            @else
                <a class="side-menu__item" href="{{ route('jumlah-pendaftaran') }}"><i
                        class="side-menu__icon fa fas fa fa-registered"></i><span class="side-menu__label">Jumlah
                        Pendaftaran</span></a>
            @endif
        </li>

        @if (Auth::user()->user_role === 'siswa')
            <li>
                <a class="side-menu__item" href="{{ route('form-status-pendaftaran') }}"><i
                        class="side-menu__icon fa fas fa fa-circle-o"></i><span class="side-menu__label">Status
                        Pendaftaran</span></a>
            </li>
            <li>
                <h3>
                    Note</h3>
            </li>
            <li>
                <a class="side-menu__item" href="{{ route('invoice-siswa') }}"><i
                        class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Invoice</span></a>
            </li>
        @endif
        @if (Auth::user()->user_role !== 'siswa')
            @if (Auth::user()->user_role !== 'kepalasekolah')
                <li>
                    <a class="side-menu__item" href="{{ route('status') }}"><i
                            class="side-menu__icon fa fas fa fa-circle-o"></i><span
                            class="side-menu__label">Status</span></a>
            @endif
            </li>
            <li>
                <a class="side-menu__item" href="{{ route('kelas') }}">
                    <i class="ti-book" data-toggle="tooltip" title="ti-book"></i><span
                        class="side-menu__label">&nbsp;&nbsp; Kelas</span></a>
            </li>
            <li>
                <a class="side-menu__item" href="{{ route('jurusan') }}"><i
                        class="side-menu__icon fa fas fa-book"></i><span class="side-menu__label">Jurusan</span></a>
            </li>

            <li>
                <h3>Other</h3>
            </li>
            <li>
                <a class="side-menu__item" href="{{ route('approve-status-pendaftaran') }}"><i
                        class="side-menu__icon fa fas fa-book"></i><span class="side-menu__label">Approve
                        Register</span></a>
            </li>
            <li>
                <a class="side-menu__item" href="{{ route('jenis-biaya') }}">
                    <i class="ti-money" data-toggle="tooltip" title="ti-money"></i><span class="side-menu__label">&nbsp;
                        Jenis
                        Biaya</span></a>
            </li>
            <li>
                <h3>Note</h3>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Invoice</span><i
                        class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('invoice') }}" class="slide-item"> Invoice</a></li>
                    <li><a href="{{ route('bukti-invoice') }}" class="slide-item"> Bukti Transfer</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Laporan</span><i
                        class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('laporan-calon-siswa') }}" class="slide-item">Laporan Calon Siswa</a></li>
                    <li><a href="{{ route('laporan-jurusan') }}" class="slide-item">Laporan Jurusan</a></li>
                </ul>
            </li>
        @endif
        {{-- <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-bar-chart-2"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="chart-chartist.html" class="slide-item">Chartist Charts</a></li>
                <li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
                <li><a href="chart-js.html" class="slide-item"> Charts js</a></li>
                <li><a href="chart-peity.html" class="slide-item"> Pie Charts</a></li>
                <li><a href="chart-echart.html" class="slide-item"> Echart Charts</a></li>
                <li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
                <li><a href="chart-nvd3.html" class="slide-item"> Nvd3 Charts</a></li>
                <li><a href="chart-dygraph.html" class="slide-item">Dygraph Charts</a></li>
            </ul>
        </li> --}}
        {{-- <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-layout"></i><span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="tables.html" class="slide-item">Default table</a></li>
                <li><a href="datatable.html" class="slide-item"> Data Tables</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Advanced UI</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="chat.html" class="slide-item"> Default Chat</a></li>
                <li><a href="notify.html" class="slide-item"> Notifications</a></li>
                <li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
                <li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
                <li><a href="scroll.html" class="slide-item"> Content Scroll bar</a></li>
                <li><a href="counters.html" class="slide-item">Counters</a></li>
                <li><a href="loaders.html" class="slide-item"> Loaders</a></li>
                <li><a href="time-line.html" class="slide-item"> Time Line</a></li>
                <li><a href="rating.html" class="slide-item"> Rating</a></li>
                <li><a href="accordion.html" class="slide-item"> Accordions</a></li>
                <li><a href="tabs.html" class="slide-item"> Tabs</a></li>
                <li><a href="footers.html" class="slide-item">Footers</a></li>
                <li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a></li>
                <li><a href="users-list.html" class="slide-item"> User List</a></li>
                <li><a href="search.html" class="slide-item"> Search page</a></li>
            </ul>
        </li> --}}
        {{-- <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-compass"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
                <li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
                <li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
                <li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
                <li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
                <li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
                <li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
                <li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
                <li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
                <li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
            </ul>
        </li> --}}
        <li>
            <h3>Pages</h3>
        </li>
        {{-- <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-briefcase"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="profile.html" class="slide-item"> Profile</a></li>
                <li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
                <li><a href="email.html" class="slide-item"> Email</a></li>
                <li><a href="emailservices.html" class="slide-item"> Email Inbox</a></li>
                <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
                <li><a href="about.html" class="slide-item"> About Company</a></li>
                <li><a href="services.html" class="slide-item"> Services</a></li>
                <li><a href="faq.html" class="slide-item"> FAQS</a></li>
                <li><a href="terms.html" class="slide-item"> Terms and Conditions</a></li>
                <li><a href="empty.html" class="slide-item"> Empty Page</a></li>
                <li><a href="construction.html" class="slide-item"> Under Construction</a></li>
                <li><a href="blog.html" class="slide-item"> Blog</a></li>
                <li><a href="invoice.html" class="slide-item"> Invoice</a></li>
                <li><a href="pricing.html" class="slide-item"> Pricing Tables</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">E-Commerce</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="product.html" class="slide-item"> Products</a></li>
                <li><a href="product-details.html" class="slide-item">Product Details</a></li>
                <li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
            </ul>
        </li> --}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i
                    class="side-menu__icon fe fe-unlock"></i><span class="side-menu__label">Custom</span><i
                    class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('profile') }}" class="slide-item"> Profile</a></li>
                @if (Auth::user()->user_role === 'admin')
                    <li><a href="{{ route('register-user') }}" class="slide-item"> Register</a></li>
                @endif

            </ul>
        </li>
    </ul>
</aside>
