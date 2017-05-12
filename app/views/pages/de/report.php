<main class="report-landing bg--icons-light-blue cp cp--6x-top cp--6x-bottom">
	<h1 class="h--beta report-landing__title">Unsere Themen im Überblick</h1>

	<div class="limit--m">
		<div class="jb-hsplit-list">
		<?php foreach ($reports as $report): ?>
			<a class="jb-hsplit" href="<?= $url('report/' . $report['name'], $lang) ?>">
				<div class="jb-hsplit__overlay bg--big-icons-green">
					<span class="button button--outline-white">
						Zu diesem Thema
					</span>
				</div>
				<figure
					class="jb-hsplit__cover"
					style="background-image: url('<?= $report['cover'] ?>');"
				></figure>
				<div class="jb-hsplit__content">
					<h1 class="h--beta jb-hsplit__title"><?= $report['title'][$lang] ?></h1>
				</div>
			</a>
		<?php endforeach ?>
		</div>
	</div>
</main>