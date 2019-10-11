


<div class="container-fluid login-section ">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Acesso Restrito</h3>
				<!-- <div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					
				</div> -->
			</div>
			<div class="card-body">
				<form method='post' action='<?= site_url('login/entrar') ?>'>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user fa-lg"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="usuário" name='login'>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key fa-lg"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="senha" name='senha'>
					</div>
					
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn lgn-button">
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
