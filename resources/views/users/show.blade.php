@extends('layouts.app',['user' => $user])
@section('content')
<div class="col">
	<div class="app-content-body ">
		<div class="bg-light lter">
			<ul class="breadcrumb bg-grey-breadcrumb m-b-none">
				<li><a href="#" class="btn no-shadow" ui-toggle-class="app-aside-folded" target=".app">
					<i class="icon-bdg_expand1 text"></i>
					<i class="icon-bdg_expand2 text-active"></i>
				</a>   </li>
				<li><a href>Home</a></li>
				<li><i class="fa fa-angle-right"></i><a href="#">Pages</a></li>
				<li class="active"><i class="fa fa-angle-right"></i>Profile</li>
			</ul>
		</div>
		<div style="background:url(/img/bg-profile.jpg) center center; background-size:cover">
			<div class="no-padder bg-dark-ov-80">
				<div class="row wrapper-xl">

					<div class="col-sm-12 m-t-lg">
						<a href class="thumb-md pull-left m-r avatar ">
							<img src="/img/ridwan_kamil.jpg" class="img-circle b-3x b-white">
						</a>
						<div class="clear m-b">
							<div class="m-b-sm m-t-sm">
								<span class="text22 text-white font-semibold">{{$user->name}}</span>
								<small class="m-l-sm text-info"><a href="#"><span>@</span>{{$user->name}}</a></small>
							</div>
							<div class="">
								<span class="text12 m-b-md text-grey"><i class="text-white fa fa-map-marker text14 m-r-xs"></i> {{$user->country}}</span><br>
                <span class="text12 m-b-md text-grey"> ID : {{$user->id}}</span><br>
                <span class="text12 m-b-md text-grey"> SAML ID : {{$user->saml_id}}</span><br>
                <span class="text12 m-b-md text-grey"> Email : {{$user->email}}</span><br>
                <span class="text12 m-b-md text-grey"> Organization : {{$user->organization}}</span><br>
                <span class="text12 m-b-md text-grey"> Address : {{$user->address}}</span><br>
                <span class="text12 m-b-md text-grey"> Lastname : {{$user->lastname}}</span><br>
                <span class="text12 m-b-md text-grey"> IM : {{$user->im}}</span><br>
                <span class="text12 m-b-md text-grey"> URL : {{$user->url}}</span><br>
                <span class="text12 m-b-md text-grey"> Mobile : {{$user->mobile}}</span><br>
							</div>
							<p class="m-b m-t-sm">
								<a href class="m-r-sm text-white btn-icon"><i class="text16 fa fa-twitter"></i></a>
								<a href class="m-r-sm text-white btn-icon"><i class="text16 fa fa-facebook-square"></i></a>
								<a href class="m-r-sm text-white btn-icon"><i class="text16 fa fa-instagram"></i></a>
							</p>
						</div>
					</div>
				</div>
				<div class="row padder-lg m-l-none m-r-none bg-dark-ov-30 text-white">

					<div class="col-sm-12">
						<div class="pull-left pull-none-xs text-center profile-stats">
							<a href class="inline padder-v padder-md">
								<span class="h3 block font-bold m-b-xs">2k</span>
								<small class="text-10 text-grey">Followers</small>
							</a>
							<a href class="inline padder-v padder-md">
								<span class="h3 block font-bold m-b-xs">250</span>
								<small class="text-10 text-grey">Following</small>
							</a>
							<a href class="inline padder-v padder-md">
								<span class="h3 block font-bold m-b-xs">101</span>
								<small class="text-10 text-grey">Collection</small>
							</a>
							<a href class="inline padder-v padder-md">
								<span class="h3 block font-bold m-b-xs">257</span>
								<small class="text-10 text-grey">Activity</small>
							</a>
						</div>
						<div class="pull-right  text-right">
							<button class="btn btn-sm inline m-t-lg m-r-sm btn-default"><i class="m-r-xs fa fa-envelope"></i>Message</button>
							<button class="btn btn-sm inline m-t-lg btn-info "><i class="m-r-xs fa fa-plus"></i>Follow</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wrapper-lg m-t ">
			<div class="streamline b-l b-grey m-l-lg m-b padder-v">

				<div class="pull-left m-t-n-lg full-width m-b-xl">
					<span class="pull-left bg-info circle m-l-n-xs m-t-xs"></span>
					<a class="m-l-sm pull-left pointer-year font-bold text-info text14">2016</a>
				</div>

				<div>
					<a class="pull-left thumb-sm avatar m-l-n-md">
						<img src="/img/ridwan_kamil_head.jpg" class="b-2x b-white img-circle" alt="...">
					</a>
					<div class="m-l-xxl">
						<div class="m-b-sm">
							<a href class="h4 font-semibold">Ridwan Kamil</a>
							<span class="text-muted m-l-sm pull-right">
								Just now
							</span>
						</div>
						<div class="m-b">
							<div>Pemerintah kota/kab tiap tahun diberi rapor kinerja melalui SAKIP (Sistem Akuntabilitas Kinerja Instansi Pemerintah) </div>
							<div class="m-t-sm">
								<a href class="text-muted m-xs"><i class="text14 fa fa-share"></i></a>
								<a href class="text-muted m-xs"><i class="text14 fa fa-heart"></i></a>
								<a href class="text-muted m-xs"><i class="text14 fa fa-refresh"></i> 13</a>
							</div>
						</div>
					</div>
				</div>

				<div class="m-l-xxl m-t-lg">
					<a class="pull-left thumb-sm avatar">
						<img src="/img/ridwan_kamil_head.jpg" alt="...">
					</a>
					<div class="m-l-xxxl panel b-a">
						<div class="panel-heading-white pos-rlt bg-white">
							<span class="arrow left pull-up"></span>
							<span class="text-muted m-l-sm pull-right">
								10m ago
							</span>
							<a href>Ridwan Kamil</a>
							Report this comment is helpful
						</div>
					</div>
				</div>

				<div>
					<div class="m-l-n-md m-t-lg">
						<a class="pull-left thumb-sm avatar">
							<img src="/img/ridwan_kamil_head.jpg" alt="...">
						</a>
						<div class="m-l-very-large panel b-a">
							<div class="panel-heading-white pos-rlt bg-white">
								<span class="arrow left pull-up"></span>
								<span class="text-muted m-l-sm pull-right">
									10m ago
								</span>
								<a href>Ridwan Kamil</a>
								Report this comment is helpful
							</div>
							<div class="panel-body">
								<p>
									Budaya adl rutinitas perilaku yg menjadi ciri beda suatu masy. Ada yg diterjemahkan dg berkesenian atau etos kerja. Kita butuh keduanya.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div>
					<a class="pull-left thumb-sm avatar m-l-n-md">
						<img src="/img/ridwan_kamil_head.jpg" class="b-2x b-white img-circle" alt="...">
					</a>
					<div class="m-l-xxl">
						<div class="m-b-sm">
							<a href class="h4 font-semibold">Ridwan Kamil</a>
							<span class="text-muted m-l-sm pull-right">
								Just now
							</span>
						</div>
						<div class="m-b">
							<div>Sehari Setelah Diresmikan, Teras Cikapundung Langsung Diserbu Warga. </div>
							<div class="panel-image m-t-md">
								<img src="/img/slider1.jpg" class="full-width" alt="">

							</div>
						</div>
					</div>
				</div>

				<div class="pull-left m-t-xs full-width m-b-xl">
					<span class="pull-left bg-grey circle m-l-n-xs m-t-xs"></span>
					<a class="m-l-sm pull-left pointer-year font-bold text-light-grey text14">2002</a>
				</div>
			</div>
		</div>
	</div>
	<!-- App Content body -->
</div

@endsection
