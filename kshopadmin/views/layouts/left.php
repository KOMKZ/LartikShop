<aside class="main-sidebar">

	<section class="sidebar">

		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
			</div>
			<div class="pull-left info">
				<p>Alexander Pierce</p>

				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>

		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search..."/>
			  <span class="input-group-btn">
				<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
				</button>
			  </span>
			</div>
		</form>
		<!-- /.search form -->

		<?= dmstr\widgets\Menu::widget(
			[
				'options' => ['class' => 'sidebar-menu'],
				'items' => [
					[
						'label' => "商品管理",
						'icon' => 'share',
						'url' => '#',
						'items' => [
							['label' => '创建商品', 'icon' => 'file-code-o', 'url' => ['/goods/create'],],
						],
					],
					[
						'label' => "分类管理",
						'icon' => 'share',
						'url' => '#',
						'items' => [
							['label' => '分类列表', 'icon' => 'file-code-o', 'url' => ['/classification/index'],],
							['label' => '创建分类', 'icon' => 'file-code-o', 'url' => ['/classification/create'],],
							['label' => '修改分类', 'icon' => 'file-code-o', 'url' => ['/classification/update'], 'visible' => Yii::$app->requestedRoute == 'classification/update'],

						],
					],
					[
						'label' => 'Same tools',
						'icon' => 'share',
						'url' => '#',
						'items' => [
							['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
							['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
							[
								'label' => 'Level One',
								'icon' => 'circle-o',
								'url' => '#',
								'items' => [
									['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
									[
										'label' => 'Level Two',
										'icon' => 'circle-o',
										'url' => '#',
										'items' => [
											['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
											['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
										],
									],
								],
							],
						],
					],
				],
			]
		) ?>

	</section>

</aside>
