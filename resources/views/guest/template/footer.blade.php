		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Tentang Kami</h2>
								<p>Kami adalah Perusahaan Daerah yang mengelola penyediaan air bersih untuk wilayah Kabupaten Situbondo. Berdiri sejak tahun 1991 hingga kini kami terus berusaha memberikan pelayanan optimal bagi masyarakat pelanggan maupun non-pelanggan.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="{{url('https://m.facebook.com/funbike.tirtabaluran.3?tsid=0.9136297381321135&source=result')}}"><i class="icofont-facebook"></i></a></li>
									<li><a href="{{url('https://www.instagram.com/pdamtirtabaluran/')}}"><i class="icofont-instagram"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Link Cepat</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="{{url('/')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Beranda</a></li>
											<li><a href="{{url('/pendaftaran')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Pendaftaran</a></li>
											<li><a href="{{url('/baliknama')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Balik Nama</a></li>
											<li><a href="{{url('/pengaduan')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Pengaduan</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Jam Buka</h2>
								<p>Jam Buka Layanan Pembayaran</p>
								<ul class="time-sidual">
									<li class="day">Senin-Kamis<span>07.15 - 13.15</span></li>
									<li class="day">Jumat<span>07.15 - 10.45</span></li>
									<li class="day">Sabtu<span>07.15 - 12.15</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Kritik dan saran</h2>
								<p>Kami menerima segala kritik dan saran untuk pelayanan yang lebih baik lagi</p>
								@if(session('sukses'))
								<div class="alert alert-primary alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-check-circle"></i> Data berhasil di input...
								</div>
								@else
								<p></p>
								@endif
								<form action="{{url('saran/add')}}" method="post" class="newsletter-inner {{$errors->has('isi_saran') ? 'has-error' : ''}}">
									@method('post')
									@csrf
									<input name="isi_saran" type="text" placeholder="Kritik dan Saran">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
									@if($errors->has('isi_saran'))
									<span class="help-block">{{$errors->first('isi_saran')}}</span>
									@endif
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2021 | Dibuat Oleh <a href="#" target="_blank">Tim IT PDAM</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>