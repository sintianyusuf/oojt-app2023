<div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    @guest
                        @else
                    <li>
                        <a class="" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    @canany(['panitia-access'])
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">ADMINISTRATOR</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('akun.index')}}">User</a></li>
                          </ul>
                          <ul aria-expanded="false">
                            <li><a href="{{ route('mdata.index')}}">Master Data</a></li>
                          </ul>
                    </li>
                    <li>

                        <a href="{{ route('info.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Infromasi</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">OJT</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./index.html">Mahasiswa</a></li>
                          </ul>
                          <ul aria-expanded="false">
                            <li><a href="./index.html">Absen</a></li>
                          </ul>
                          <ul aria-expanded="false">
                            <li><a href="./index.html">Surat Izin</a></li>
                          </ul>
                          <ul aria-expanded="false">
                            <li><a href="./index.html">Jurnal</a></li>
                          </ul>
                          <ul aria-expanded="false">
                            <li><a href="./index.html">Nilai</a></li>
                          </ul>
                          <ul aria-expanded="false">
                            <li><a href="./index.html">Monitoring</a></li>
                          </ul>
                    </li>
                    <li>
                        <a class="" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Pengaturan User</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Akses Menu</span>
                        </a>
                    </li>
                    @endcanany

                    @canany(['mhs-access'])

                    <li>
                        <a href="{{ route('resume.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Resume</span>
                        </a>
                    </li>
                   <li>
                        <a href="{{ route('absenmhs.index')}}" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Absenku</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('suratizin.index')}}" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Surat Izin</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('jurnal.index')}}" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Jurnal</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tugasakhir.index')}}" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Tugas Akhir</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="javascript:void()" aria-expanded="false">
                         <i class="icon-speedometer menu-icon"></i><span class="nav-text">Pengaturan User</span>
                        </a>
                    </li>
                    @endcanany

                    @canany(['dpl-access'])
                    <li>
                        <a class="" href="{{ route('monitoring.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Daftar Mahasiswa OJT</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('suratizin.index')}}" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Laporan Absen</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('suratizin.index')}}" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Surat Izin</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('suratizin.index')}}" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Laporan Jurnal</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{ route('monitoring.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Monitoring</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('suratizin.index')}}" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Laporan Nilai</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{ route('nilai2.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Nilai2</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('suratizin.index')}}" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Laporan Tugas Akhir</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Pengaturan User</span>
                        </a>
                    </li>

                    @endcanany

                    @canany(['instansi-access'])
                    <li>
                        <a class="" href="{{ route('absensi.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Absen Intansi</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{ route('nilai1.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Nilai1</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Pengaturan User</span>
                        </a>
                    </li>
                    @endcanany

                 @endguest
                </ul>
            </div>
        </div>
