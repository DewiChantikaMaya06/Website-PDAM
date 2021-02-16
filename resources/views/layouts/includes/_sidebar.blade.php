<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

				<li><a href="/kegiatan" class=""><i class="lnr lnr-picture"></i> <span>Kegiatan</span></a></li>
				<li><a href="/tarif" class=""><i class="lnr  lnr-chart-bars"></i> <span>Tarif</span></a></li>
				<li><a href="/berita" class=""><i class="lnr lnr-earth"></i> <span>Berita</span></a></li>
				<li><a href="/info" class=""><i class="lnr lnr-apartment"></i> <span>Info PDAM</span></a></li>
				<li><a href="/pelanggan"><i class="lnr lnr-printer"></i><span>Tagihan</span></a></li>
				<li>
					<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pendaftaran</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
					<div id="subPages" class="collapse ">
						<ul class="nav">
							<li><a href="{{url('/pendaftaran')}}" class="">Daftar Pelanggan Baru</a></li>
							<li><a href="{{url('/baliknama')}}" class="">Daftar Balik Nama</a></li>
						</ul>
					</div>
				</li>
				<li><a href="/pengaduan" class=""><i class="lnr lnr-phone-handset"></i> <span>Pengaduan</span></a></li>
				<li><a href="/saran" class=""><i class="lnr lnr-book"></i> <span>Kritik dan Saran</span></a></li>
				<li>
					<a href="#subPagesBackup" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Data Backup</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
					<div id="subPagesBackup" class="collapse">
						<ul class="nav">
							<li><a href="{{url('/tarif/backup')}}" class="">Tarif</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</nav>
	</div>
</div>