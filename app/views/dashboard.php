<!DOCTYPE html>
<html lang="en" data-menu-color="dark" data-topbar-color="light" data-sidebar-view="default">

<head>
    <title>Dashboard | I-As.Dev</title>
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
	<?php include BASE_PATH . '/partials/head.php'; ?>
</head>
<body>
	<div class="flex wrapper">
		<?php include BASE_PATH . '/components/menu.php'; ?>
        <div class="page-content">
			<?php include BASE_PATH . '/components/header.php'; ?>
			
            <main class="flex-grow p-6">
                <div class="flex items-center justify-between flex-wrap gap-2 mb-6">
                    <div>
                        <h4 class="text-slate-900 text-lg font-medium mb-2">Starter Page</h4>

                        <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
                            <a href="#" class="text-sm font-medium text-slate-700">Menu</a>
                            <i class="material-symbols-rounded text-xl flex-shrink-0 text-slate-500">chevron_right</i>
                            <a href="#" class="text-sm font-medium text-slate-700" aria-current="page">Starter Page</a>
                        </div>
                    </div>
                </div>
            </main>
			
			<?php include BASE_PATH . '/components/footer.php'; ?>
        </div>
    </div>
	<?php include BASE_PATH . '/partials/script.php'; ?>
</body>
</html>
