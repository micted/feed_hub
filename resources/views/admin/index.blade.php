@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
	<div class="container-full">

		<!-- Main content -->
		<section class="content">

			<div class="row">
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">
							<div class="icon bg-success rounded w-60 h-60">
								<i class="fab fa-google-play"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Top Grossing Apps</p>
								<h3 id="exclusive" class="text-black mb-0 font-weight-500 hidden">Youtube & Google Play Services</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">
							<div class="icon bg-warning rounded w-60 h-60">
								<i class="fab fa-microsoft"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Top Reviewed Product by 1K people is</p>
								<h3 id="exclusive-1" class="text-black mb-0 font-weight-500 hidden">Mediabyte Whiteboard</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">
							<div class="icon bg-info-light rounded w-60 h-60">
								<i class="fab fa-google-play"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Total playstore Reviews</p>
								<h3 class="text-black mb-0 font-weight-500 ">{{ $allpsreview }}</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">
							<div class="icon bg-danger-light rounded w-60 h-60">
								<i class="fab fa-microsoft"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Total Products</p>
								<h3 class="text-black mb-0 font-weight-500">{{ $totapp }} +</h3>
							</div>
						</div>
					</div>
				</div>

				<!-- EARNING SUMMARY -->





				<div class="row">
					<div class="col-xl-6 col-12">
						<div class="box overflow-hidden pull-up bg-success bg-img" style="background-image: url(../images/gallery/bg-1.png)">
							<div class="box-body text-center">
								<div class="box-body text-center" style="font-size: 89px;">
									<i class="fab fa-google-play"></i>
								</div>
								<div class="max-w-500 mx-auto">
									<h2 class="text-white mb-18 font-weight-500 font-size-26">The number of largest installed apps is above {{ round($install) }} million</h2>
									<p class="text-white-50 mb-10 font-size-20">Social media apps are the most grossing</p>
								</div>
							</div>
						</div>

					</div>
					<div class="col-xl-6 col-12">
						<div class="box overflow-hidden pull-up bg-warning bg-img" style="background-image: url(../images/gallery/bg-1.png)">
							<div class="box-body text-center">
								<div class="box-body text-center" style="font-size: 89px;">
									<i class="fab fa-microsoft"></i>
								</div>
								<div class="max-w-500 mx-auto">
									<h2 class="text-white mb-20 font-weight-500 font-size-26">The amount of top paid app in Microsoft Store is {{ $paid }} $</h2>
									<p class="text-white-50 mb-10 font-size-20">The app is Redis Desktop Manager</p>
								</div>
							</div>
						</div>

					</div>



				</div>




				<div class="text-center mb-20 font-weight-500 font-size-26">Installs and Ratings</div>
				<!-- CHART1 -->
				<div id="linechart" style="width: 1000px; height: 390px "></div>

				<div class="text-center mb-20 font-weight-500 font-size-26">Access exclusive chart via Coil</div>

				<!-- CHART2 -->


				<div id="exclusive-chart" class="row hidden">
					<div id="linechart2" style="width: 1000px; height: 390px "></div>
				</div>


			</div>


			<!-- CHART 1 -->
			<script type="text/javascript">
				var increment = <?php echo $increment; ?>;
				console.log(increment);
				google.charts.load('current', {
					'packages': ['corechart']
				});
				google.charts.setOnLoadCallback(lineChart);

				function lineChart() {
					var data = google.visualization.arrayToDataTable(increment);
					var options = {

						titleColor: 'black',
						titleStyle: 'bold',
						backgroundColor: 'white',
						curveType: 'function',
						legend: {
							position: 'bottom'
						}

					};
					var chart = new google.visualization.LineChart(document.getElementById('linechart'));
					chart.draw(data, options);
				}
			</script>
			<!-- CHART 2 -->
			<script type="text/javascript">
				var all = <?php echo $all; ?>;
				console.log(all);
				google.charts.load('current', {
					'packages': ['corechart']
				});
				google.charts.setOnLoadCallback(lineChart);

				function lineChart() {
					var data = google.visualization.arrayToDataTable(all);
					var options = {
						titleColor: 'black',
						titleStyle: 'bold',
						backgroundColor: 'white',
						curveType: 'function',
						legend: {
							position: 'bottom'
						}

					};
					var chart = new google.visualization.LineChart(document.getElementById('linechart2'));
					chart.draw(data, options);
				}
			</script>


			<!-- CHART MONETIZATION -->
			<script>
				if (document.monetization) {
					document.monetization.addEventListener('monetizationstart', () => {
						document.getElementById('exclusive-chart').classList.remove('hidden')
					})
				}
			</script>


		</section>
		<!-- /.content -->
	</div>
</div>

@endsection