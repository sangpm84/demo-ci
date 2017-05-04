<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>MVNOモジュール共通API</title>
		<link rel="stylesheet" href="<?= site_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?= site_url('assets/vendor/metisMenu/metisMenu.min.css'); ?>">
		<link rel="stylesheet" href="<?= site_url('assets/vendor/datatables-plugins/dataTables.bootstrap.css'); ?>">
		<link rel="stylesheet" href="<?= site_url('assets/vendor/datatables-responsive/dataTables.responsive.css'); ?>">
		<link rel="stylesheet" href="<?= site_url('assets/vendor/sb-admin-2/css/sb-admin-2.css'); ?>">
		<link rel="stylesheet" href="<?= site_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
		<link rel="stylesheet" href="<?= site_url('assets/css/app.css'); ?>">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">MVNOモジュール共通API</h3>
						</div>
						<div class="panel-body">
							<form role="form" method="post" action="<?= site_url('login') ?>">
								<fieldset>
									<?php if ($this->session->has_userdata('error_message')): ?>
										<div class="alert alert-dismissible alert-danger">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<strong>エラー</strong>
											<p><?= $this->session->flashdata('error_message') ?></p>
										</div>
									<?php endif; ?>
									<div class="form-group">
										<input class="form-control" placeholder="ログインID" name="username" type="text" value="<?= set_value('username',''); ?>" required autofocus>
									</div>
									<div class="form-group">
										<input class="form-control" placeholder="パスワード" name="password" type="password" value="" required>
									</div>
									<button class="btn btn-lg btn-success btn-block" type="submit"><i class="fa fa-sign-in fa-fw"></i>ログイン</button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="<?= site_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
		<script src="<?= site_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
		<script src="<?= site_url('assets/vendor/metisMenu/metisMenu.min.js'); ?>"></script>
		<script src="<?= site_url('assets/vendor/sb-admin-2/js/sb-admin-2.js'); ?>"></script>
		<script src="<?= site_url('assets/js/app.js'); ?>"></script>
	</body>
</html>