<?php
namespace Ryelle\About_Patterns;

// Uses a lorem ipsum generator to save on the demo size.
if ( ! class_exists( 'joshtronic\LoremIpsum' ) ) {
	return;
}
$lipsum = new \joshtronic\LoremIpsum();
?>
<style>
.is-lipsum {
	opacity: 0.6;
}
.ap-color-chip {
	display: inline-block;
	margin-right: 0.5em;
	width: 1.5ch;
	height: 1.5ch;
}
</style>
<div class="wrap about__container">

	<div class="about__header">
		<div class="about__header-text">
			About page pattern demos. This is the<br />
			featured header, with some demo navigation.
		</div>

		<div class="about__header-title">
			<p>About Patterns</p>
		</div>

		<nav class="about__header-navigation nav-tab-wrapper wp-clearfix" aria-label="Secondary menu">
			<a href="#" class="nav-tab nav-tab-active" aria-current="page">Active Item</a>
			<a href="#" class="nav-tab">Second Tab</a>
			<a href="#" class="nav-tab">Third Tab</a>
		</nav>
	</div>

	<hr />

	<div class="about__section is-feature has-accent-background-color">
		<h1>About Page Design System</h1>
		<p>This page will demo all possible About section layouts using the design/CSS system in place. There are notes throughout the page, and you can <a href="#">view the HTML source here.</a> The placeholder text here is lighter for demonstration only.</p>
	</div>

	<hr />

	<div class="about__section">
		<h2>Colors</h2>
		<ul>
			<li><span class="ap-color-chip" style="background-color:var(--text);"></span><code>--text</code> Main text color</li>
			<li><span class="ap-color-chip" style="background-color:var(--background);"></span><code>--background</code> Page background</li>
			<li><span class="ap-color-chip" style="background-color:var(--subtle-background);"></span><code>--subtle-background</code> Used for section backgrounds if given the class <code>has-subtle-background-color</code></li>
			<li><span class="ap-color-chip" style="background-color:var(--accent-1);"></span><code>--accent-1</code> Used for section backgrounds if given the class <code>has-accent-background-color</code></li>
			<li><span class="ap-color-chip" style="background-color:var(--accent-2);"></span><code>--accent-2</code>, <span class="ap-color-chip" style="background-color:var(--accent-3);"></span><code>--accent-3</code> These are used in different places throughout the page, in navigation, links, etc</li>
		</ul>
	</div>

	<hr class="is-large" />

	<div class="about__section has-1-column">
		<div class="column">
			<h2>One-column layout</h2>
			<p><strong>This layout is intentionally narrow, to fit a comfortable reading length.</strong> <span class="is-lipsum"><?php echo $lipsum->sentences( 2 ); ?></span></p>
		</div>
	</div>

	<div class="about__section">
		<div class="column about__image is-edge-to-edge">
			<img src="data:image/svg+xml,%3Csvg width='1000' height='500' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='0' y='0' width='100%25' height='100%25' fill='%23ddd' /%3E%3Ctext text-anchor='middle' font-family='sans-serif' font-size='24' y='50%25' x='50%25'%3Eimage width: 1000px%3C/text%3E%3C/svg%3E" alt="" />
		</div>
	</div>

	<hr />

	<div class="about__section has-2-columns has-subtle-background-color">
		<header class="is-section-header">
			<h2>Two-column layouts</h2>
			<p>There are 3 variations to the 2-column layout. This section uses the <code>has-subtle-background-color</code> style. A plain <code>hr</code> is above, giving space between image & section.</p>
		</header>
		<div class="column">
			<h3>Even layout</h3>
			<p><span class="is-lipsum"><?php echo $lipsum->sentences( 3 ); ?></span></p>
		</div>
		<div class="column about__image">
			<img src="data:image/svg+xml,%3Csvg width='436' height='250' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='0' y='0' width='100%25' height='100%25' fill='%23ddd' /%3E%3Ctext text-anchor='middle' font-family='sans-serif' font-size='24' y='50%25' x='50%25'%3Eimage width: 436px%3C/text%3E%3C/svg%3E" alt="" />
		</div>
	</div>

	<div class="about__section has-2-columns is-wider-left has-subtle-background-color">
		<div class="column">
			<h3>Two-column layout: wide left</h3>
			<p><span class="is-lipsum"><?php echo $lipsum->sentences( 3 ); ?></span></p>
		</div>
		<div class="column about__image">
			<img src="data:image/svg+xml,%3Csvg width='269' height='250' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='0' y='0' width='100%25' height='100%25' fill='%23ddd' /%3E%3Ctext text-anchor='middle' font-family='sans-serif' font-size='24' y='50%25' x='50%25'%3Eimage width: 269px%3C/text%3E%3C/svg%3E" alt="" />
		</div>
	</div>

	<div class="about__section has-2-columns is-wider-right has-subtle-background-color">
		<div class="column">
			<h3>Two-column layout: wide right</h3>
			<p><span class="is-lipsum"><?php echo $lipsum->sentences( 1 ); ?></span></p>
		</div>
		<div class="column about__image">
			<img src="data:image/svg+xml,%3Csvg width='602' height='250' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='0' y='0' width='100%25' height='100%25' fill='%23ddd' /%3E%3Ctext text-anchor='middle' font-family='sans-serif' font-size='24' y='50%25' x='50%25'%3Eimage width: 602px%3C/text%3E%3C/svg%3E" alt="" />
		</div>
	</div>

	<hr />

	<div class="about__section has-3-columns">
		<div class="column">
			<h2>Three-column layout</h2>
			<p><span class="is-lipsum"><?php echo $lipsum->sentences( 2 ); ?></span></p>
		</div>
		<div class="column has-accent-background-color">
			<p>This image uses <code>is-edge-to-edge</code> to remove the padding from the image. Individual columns can have background colors too, this uses <code>has-accent-background-color</code>.</p>
		</div>
		<div class="column about__image is-edge-to-edge">
			<img style="align-self:center;" src="data:image/svg+xml,%3Csvg width='333' height='333' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='0' y='0' width='100%25' height='100%25' fill='%23ddd' /%3E%3Ctext text-anchor='middle' font-family='sans-serif' font-size='24' y='50%25' x='50%25'%3Eimage width: 333px%3C/text%3E%3C/svg%3E" alt="" />
		</div>
	</div>

	<hr />

	<div class="about__section has-4-columns">
		<h2 class="is-section-header">Four-column layout</h2>
		<div class="column">
			<p>This layout is good for short text, about 1 sentence or so. Small, simple images work too. Videos would be hard to see at this size.</p>
			<p class="has-accent-color">An accent color can be used on text too, with <code>has-accent-color</code>.</p>
		</div>
		<div class="column">
			<p><span class="is-lipsum"><?php echo $lipsum->sentences( 1 ); ?></span></p>
		</div>
		<div class="column">
			<p><span class="is-lipsum"><?php echo $lipsum->sentences( 1 ); ?></span></p>
		</div>
		<div class="column">
			<p><span class="is-lipsum"><?php echo $lipsum->sentences( 1 ); ?></span></p>
		</div>
	</div>

	<hr />

	<div class="about__section">
		<div class="column">
			<h2>Text columns</h2>
			<p class="has-text-columns">This uses CSS columns to split text into two columns. The class to use is <code>has-text-columns</code>. <span class="is-lipsum"><?php echo $lipsum->sentences( 4 ); ?></span></p>
		</div>
	</div>

	<hr />

	<div class="about__section has-4-columns">
		<h2 class="is-section-header">Vertical alignments</h2>
		<div class="column">
			<p><span class="is-lipsum"><?php echo $lipsum->sentences( 2 ); ?></span></p>
		</div>
		<div class="column is-vertically-aligned-top">
			<p>This section is vertically aligned to the container top with <code>is-vertically-aligned-top</code>.</p>
		</div>
		<div class="column is-vertically-aligned-center">
			<p>This section is centered vertically using <code>is-vertically-aligned-center</code>.</p>
		</div>
		<div class="column is-vertically-aligned-bottom">
			<p>This section is vertically aligned to the container bottom with <code>is-vertically-aligned-bottom</code>.</p>
		</div>
	</div>

</div>
