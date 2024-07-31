<!DOCTYPE html>
<html lang="en" data-menu-color="dark" data-topbar-color="light" data-sidebar-view="default">

<head>
    <title>Daftar | I-As.Dev</title>
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
	<?php include BASE_PATH . '/partials/head.php'; ?>
</head>
<body>
	<div class="flex wrapper">
		<div class="w-full max-w-xl m-auto">
			<main class="flex justify-center items-center min-h-screen p-6">
				<div class="card">
					<div class="px-6 py-12">
						<img class="h-30 w-30 m-auto" src="/assets/images/logo-sm.png" alt="logo">
						<h4 class="text-center text-2xl font-bold my-2">Daftar Akun</h4>
						<p class="text-sm text-slate-700 text-center">More complex layouts can also be created with the grid system.</p>
						<form class="mt-12" method="post" action="/register_post">
							<div>
								<label for="fullname" class="text-gray-800 text-sm font-medium inline-block mb-2">Nama Lengkap</label>
								<input name="full_name" type="text" class="form-input" id="fullname" placeholder="Masukan nama lengkap" required>
							</div>
							<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
								<div>
									<label for="username" class="text-gray-800 text-sm font-medium inline-block mb-2">Email</label>
									<input name="username" type="email" class="form-input" id="username" placeholder="Masukan email" required>
								</div>
								<div>
									<label for="password" class="text-gray-800 text-sm font-medium inline-block mb-2">Password</label>
									<input name="password" type="password" class="form-input" id="password" placeholder="Masukan password" required>
								</div>
							</div>
							<div class="flex justify-center mt-12">
								<button type="submit" class="bg-primary py-2 px-4 text-white rounded font-semibold hover:bg-emerald-600">Daftar</button>
							</div>
							<p class="text-sm text-slate-700 text-center mt-4">
								Sudah punya akun? 
								<a class="text-emerald-600 hover:text-emerald-500 hover:underline font-bold" href="/login">MASUK</a>
							</p>
						</form>
					</div>
				</div> 
            </main>
		</div>
	</div>
	<?php include BASE_PATH . '/partials/script.php'; ?>
</body>
</html>
