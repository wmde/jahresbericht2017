<main class="home">
	<section class="home-hero cp cp--nav-zone">
		<div class="limit--l">
			<h1 class="home-hero__title">
				Wikimedia<br>
				Deutschland<br>
				Jahresbericht<br>
				2016
			</h1>
			<img class="home-hero__16" src="assets/img/16_b.png" alt="2016">
		</div>
	</section>
	<section class="section cp home__intro">
		<div class="section__body">
			<h1 class="h--beta">Liebe Leserinnen und Leser,</h1>
			<div class="limit--l">
				<h2 class="section__heading"><div>Begrüssung</div></h2>
				<div class="limit--s">
					<p class="t--gamma-serif">im Januar 2016 wurde die Wikipedia 15 Jahre alt – und an vielen Orten auf der ganzen Welt wurde gratuliert und gefeiert. Bei Wikimedia Deutschland begleitete uns dieses Jubiläum das ganze Jahr über. Als Geschenk an die Wikipedia-Aktiven übergaben wir im Dezember einen Datenträger mit Wikipedia-Artikeln in knapp 180 Sprachen an eine private Weltraummission. Welche Artikel als Momentaufnahme des Wissens der Menschheit auf dem Mond verewigt werden sollen, entschied die weltweite Wikipedia-Community gemeinsam. Die Aktion zeigt, was in nur 15 Jahren aus der Idee einer Enzyklopädie geworden ist, die alle frei bearbeiten können. Es ist das erfolgreichste Projekt seiner Art, genutzt von Millionen Menschen – und wäre undenkbar ohne das ehrenamtliche Engagement tausender Helferinnen und Helfer.</p>
					<p class="t--gamma-serif">15 Jahre nach dem Entstehen der Wikipedia bedeutet Freies Wissen weit mehr als kostenlose Artikel auf einer Website: Communitys schreiben, fotografieren, verfolgen Projekte, treffen sich virtuell und persönlich. Bei Wikimedia Deutschland unterstützen wir sie und versuchen, noch mehr Menschen zur Mitarbeit zu motivieren. Wir entwickeln Software, die die Arbeit in den Projekten einfacher macht. Wir setzen uns außerdem für politische und rechtliche Rahmenbedingungen ein, durch die Wissen auch in Zukunft frei geteilt und genutzt werden kann. Auf dieser Website blicken wir nicht nur auf diese drei, sondern auf alle Schwerpunkte unserer Vereinsarbeit 2016 zurück.</p>
					<p class="t--gamma-serif">Wikipedia ist nur möglich dank der Menschen, die sie schreiben. Das Gleiche gilt für die Arbeit von Wikimedia Deutschland und unsere zahlreichen Mitglieder ‒ 50.000 sind es Anfang 2017 ‒ sowie Spenderinnen und Spender. Herzlichen Dank an Alle, die uns im Jahr 2016 unterstützt haben!</p>
				</div>
			</div>
			<div class="limit--m figs">
				<figure class="fig">
					<img class="fig__image" src="/assets/img/abraham_taherivand.jpg" alt="Porträt von Abraham Taherivand">
					<figcaption class="fig__caption">Abraham Taherivand<br>Geschäftsführender Vorstand</figcaption>
				</figure>
				<figure class="fig">
					<img class="fig__image" src="/assets/img/tim_moritz_hector.jpg" alt="Porträt von Tim Moritz Hector">
					<figcaption class="fig__caption">Tim Moritz Hector<br>Vorsitzender des Präsidiums</figcaption>
				</figure>
			</div>
		</div>
	</section>
	<section class="achievements">
		<ul>
			<li class="achievement--store" data-category="xeins" data-number="999" data-postfix=" %">
				Hier steht text
			</li>
			<li class="achievement--store" data-category="xzwei" data-number="9" data-postfix="">
				Hier steht text2
			</li>
			<li class="achievement--store" data-category="xdrei" data-number="129809" data-postfix="">
				Hier steht text3
			</li>
			<li class="achievement--store" data-category="xvier" data-number="329" data-postfix="%">
				Hier steht text4
			</li>
			<li class="achievement--store" data-category="xfünf" data-number="1024" data-postfix="px">
				Hier steht text5
			</li>
		</ul>

		<div class="achievements__flex-wrapper">
			<div class="achievements__left">
				<div class="achievement">
					<h2 class="achievement__category t--epsilon">Technologie</h2>
					<div class="achievement__number t--alpha" data-number="999">
						<div class="achievement__number__placeholder">
							999
						</div>
						<div class="achievement__number__postfix">%</div>
					</div>
					<div class="achievement__teaser t--delta-serif">Menschen haben aufgrund unserer Kampagnen ihre erste Bearbeitung in der Wikipedia gemacht</div>
					<a href="" class="achievement__link t--zeta-emph">&mdash;&nbsp;&nbsp; Zum Projekt</a>
				</div>
			</div>
			<div class="achievements__cube">
				<div class="achievements__cube__side achievements__cube__side--left">
					<div class="achievements__cube__side achievements__cube__side--left"></div>
				</div>
				<div class="achievements__cube__side achievements__cube__side--top">
					<div class="achievements__cube__side achievements__cube__side--top"></div>
				</div>
				<div class="achievements__cube__side achievements__cube__side--right">
					<div class="achievements__cube__side achievements__cube__side--right"></div>
				</div>
			</div>
			<div class="achievements__right">
				<div class="achievement">
					<h2 class="achievement__category t--epsilon">Technologie</h2>
					<div class="achievement__number t--alpha" data-number="40321">
						<div class="achievement__number__placeholder">
							40.321
						</div>
						<div class="achievement__number__postfix">%</div>
					</div>
					<div class="achievement__teaser t--delta-serif">Menschen haben aufgrund unserer Kampagnen ihre erste Bearbeitung in der Wikipedia gemacht</div>
					<a href="" class="achievement__link t--zeta-emph">&mdash;&nbsp;&nbsp; Zum Projekt</a>
				</div>
			</div>
		</div>
		<div class="achievements__button invis">
			<div class="achievements__button--symbol"></div>
			Neue Erfolge laden
		</div>
	</section>
	<section class="section cp--center-section bg--green home__facts">
		<div class="section__body limit--l">
			<h2 class="section__heading"><div>Jahresrückblick</div></h2>
			<div class="section__body">
				<div class="jb-fact limit--s">
					<a href="<?= $url($fact['path'], $lang) ?>" class="fig jb-fact__icon">
						<img src="<?= $fact['icon'] ?>"></img>
					</a>
					<div class="jb-fact__content">
						<?php if ($fact['head'][$lang] !== ''): ?>
							<p class="t--delta jb-fact__content-head"><?= $fact['head'][$lang] ?></p>
						<?php endif ?>
						<h1 class="h--alpha jb-fact__title"><?= $fact['number'][$lang] ?></h1>
						<p class="t--delta"><?= $fact['tail'][$lang] ?></p>
						<a class="button" href="<?= $url('review', $lang) ?>">Alle Fakten sehen</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section cp--center-section">
		<div class="limit--l">
			<h2 class="section__heading"><div>Themen</div></h2>
			<div class="section__body slider swiper-container loading">
				<div class="swiper-wrapper">
					<?php foreach ($reports as $report): ?>
					<div class="swiper-slide">
						<div class="jb-vsplit">
							<figure
								class="jb-vsplit__cover"
								style="background-image: url('<?= $report['cover'] ?>');"
							></figure>
							<div class="jb-vsplit__content">
								<h1 class="h--beta jb-vsplit__title"><?= $report['title'][$lang] ?></h1>
								<div class="jb-vsplit__teaser">
									<?php echo $report['teaser'][$lang] ?>
								</div>
								<a
									class="jb-vsplit__button button button--outline-green"
									href="<?= $url('report/' . $report['name'], $lang) ?>"
								>
									Zu diesem Thema
								</a>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
				<div class="swiper-button-next swiper-button-next--green"></div>
				<div class="swiper-button-prev swiper-button-prev--green"></div>
			</div>
			<div class="section__actions">
				<a class="button button--bg-green" href="<?= $url('report', $lang) ?>">Zur Themenübersicht</a>
			</div>
		</div>
	</section>
	<section class="finance-banner">
		<div class="home__bagels">
			<?php // animation powered by skrollr; vertical translation according to bagel css values, e.g. "top" or "bottom" ?>
			<figure
				class="home__bagel--1"
				data-anchor-target=".finance-banner"
				data-bottom-top="top: -700px; transform:rotate(-180deg);"
				data-top-bottom="top: 100px; transform:rotate(180deg);"
			>
				<img src="/assets/img/start_finanzen_circle_1.png" alt="Image of a random bagel chart">
			</figure>
			<figure
				class="home__bagel--2"
				data-anchor-target=".finance-banner"
				data-bottom-top="bottom: 0px; transform:rotate(80deg);"
				data-top-bottom="bottom: -800px; transform:rotate(0deg);"
			>
				<img src="/assets/img/start_finanzen_circle_2.png" alt="Image of random bagel chart">
			</figure>
		</div>
		<h1 class="h--alpha">Finanzen 2016</h1>
		<a class="button finance-banner__button" href="<?= $url('finance', $lang) ?>">Zum Finanzteil</a>
	</section>
	<section class="section cp--upped-section home__join">
		<h1 class="h--beta">Werde Mitglied bei Wikimedia Deutschland!</h1>
		<div class="section__body">
			<p class="t--delta">Es geht ganz einfach online und ab 2 Euro pro Monat.</p>
		</div>
		<div class="section__actions">
			<a href="https://spenden.wikimedia.de/apply-for-membership?piwik_campaign=jb2017&piwik_kwd=mitglieds_btn" target="new" class="button button--bg-green">Mitglied werden</a>
		</div>
	</section>
</main>
