<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
						<!-- Page Heading -->
						<div class="d-sm-flex align-items-center justify-content-between mb-4">
							<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
						</div>

						<!-- Content Row -->
						<div class="row">
							<!-- Total Assets Card -->
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
													Total Assets
												</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">
													$<?=number_format($assetsTotal, 2);?>
												</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-calendar fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Total Liabilities Card -->
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-success shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
													Total Liabilities
												</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">
												$<?=number_format($liabilitiesTotal, 2);?>
												</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Total Entries Card -->
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-warning shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
													Total Entries
												</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">
												<?=$entriesTotal;?> Total Entries
												</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-book fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Total Pending Entries Card -->
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-danger shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
													Pending Entries
												</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">
												<a style="text-decoration: none;" href="<?=site_url('entries');?>"><?=$entriesPendingTotal;?> Total Pending Entries</a>
												</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-edit fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Content Row -->
						<div class="row">
							<!-- Quick Ratio -->
<?php
	$status = 'success';
	if ($quickRatio < 1){
		$status = 'warning';
		if ($quickRatio < 0.5){
			$status = 'danger';
		}
	}
?>
							<div class="col-xl-4 col-lg-3">
								<div class="card bg-<?=$status;?> text-white shadow">
									<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary">Quick Ratio</h6>
									</div>
									<div class="card-body text-center">
										<h2><?=number_format($quickRatio, 2);?></h2>
									</div>
								</div>
							</div>

							<!-- Current Ratio -->
<?php
	$status = 'success';
	if ($currentRatio < 2){
		$status = 'warning';
		if ($currentRatio < 1.5){
			$status = 'danger';
		}
	}
?>
							<div class="col-xl-4 col-lg-3">
								<div class="card bg-<?=$status;?> text-white shadow">
									<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary">Current Ratio</h6>
									</div>
									<div class="card-body text-center">
										<h2><?=number_format($currentRatio, 2);?></h2>
									</div>
								</div>
							</div>

							<!-- Debt Ratio -->
<?php
	$status = 'danger';
	if ($debtRatio < 0.8){
		$status = 'warning';
		if ($debtRatio < 0.6){
			$status = 'success';
		}
	}
?>
							<div class="col-xl-4 col-lg-3">
								<div class="card bg-<?=$status;?> text-white shadow">
									<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary">Debt Ratio</h6>
									</div>
									<div class="card-body text-center">
										<h2><?=number_format($debtRatio, 2);?></h2>
									</div>
								</div>
							</div>

							<!-- Return On Equity Ratio -->
<?php
	$status = 'success';
	if ($returnOnEquityRatio < 0.25){
		$status = 'warning';
		if ($returnOnEquityRatio < 0.10){
			$status = 'danger';
		}
	}
?>
							<div class="col-xl-4 col-lg-3">
								<div class="card bg-<?=$status;?> text-white shadow">
									<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary">Return On Equity Ratio</h6>
									</div>
									<div class="card-body text-center">
										<h2><?=number_format($returnOnEquityRatio, 2);?></h2>
									</div>
								</div>
							</div>

							<!-- Return On Assets Ratio -->
<?php
	$status = 'success';
	if ($returnOnAssetsRatio < 0.25){
		$status = 'warning';
		if ($returnOnAssetsRatio < 0.05){
			$status = 'danger';
		}
	}
?>
							<div class="col-xl-4 col-lg-3">
								<div class="card bg-<?=$status;?> text-white shadow">
									<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary">Return On Assets Ratio</h6>
									</div>
									<div class="card-body text-center">
										<h2><?=number_format($returnOnAssetsRatio, 2);?></h2>
									</div>
								</div>
							</div>

							<!-- Asset Turnover Ratio -->
<?php
	$status = 'success';
	if ($assetTurnoverRatio < 2){
		$status = 'warning';
		if ($assetTurnoverRatio < 1){
			$status = 'danger';
		}
	}
?>
							<div class="col-xl-4 col-lg-3">
								<div class="card bg-<?=$status;?> text-white shadow">
									<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary">Asset Turnover Ratio</h6>
									</div>
									<div class="card-body text-center">
										<h2><?=number_format($assetTurnoverRatio, 2);?></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
