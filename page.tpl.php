<!--<?php
//$theme_path = base_path() . 'sites/all/themes/africana_library_cornell_edu_theme/';
$theme_path = drupal_get_path('theme',$GLOBALS['theme']) . '/';
?>-->


<!-- INTERIOR SEARCH -->
<section class="search-slider">

    <div class="search-interior">

        <!-- Pay attention to METHOD -->
        <form id="search" name="form1" method="get" action="https://newcatalog.library.cornell.edu/search">

            <label for="name">Search <span class="search-filter-selected">Library Catalog</span></label>


            <div class="filtered-search">

                <input type="text" class="search-homepage" name="q" value="" id="edit_keys" />

                <div class="filter-search"><span class="active">Library Catalog</span> <span class="glyphicon glyphicon-chevron-down filter-default"></span>

                  <ul id="filter-search-nav">
                      <li role="listitem"><a href="#" title="">Library Catalog</a></li>
                      <li role="listitem"><a href="#" title="">Site Search</a></li>
                  </ul>

              </div>



                <!--a class="filter" href="#">LAW LIBRARY <span class="caret-icon">></span></a> -->
                <button type="submit" class="submit-search" href="#">
                  <span class="glyphicon glyphicon-search"></span>
                </button>

            </div>

            <ul class="external-search">
              <li><a href="/selecteddatabases">Databases</a> / </li>
              <li><a href="/guides">Research Guides</a></li>
            </ul>
        </form>

    </div>

</section>

<a href="#" class="close-search">
  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
</a>

<header class="interior">

    <section class="CUL-branding">

       <!--<?php echo file_get_contents($theme_path . "images/cul-africana-logo.svg"); ?>-->

    </section>

    <section class="CUL-branding-mobile">

        <a href="http://www.cornell.edu"><img src="/<?php print $theme_path; ?>images/cu-logo.png" /></a>

    </section>

    <h1><a href="https://www.library.cornell.edu/">Cornell University Library</a></h1>
    <h2><a href="/">John Henrik Clarke Africana Library</a></h2>

    
    <a class="search-icon show-hide-search" title="Search our Site" href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>

    <?php print render($page['navigation']); ?>

</header>

<div class="hero"></div>

<section class="row page-content">

    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-item">

        <?php print $messages; ?>

        <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
        <?php endif; ?>

        <?php if (!empty($page['help'])): ?>
            <?php print render($page['help']); ?>
        <?php endif; ?>

        <!--<nav class="breadcrumbs">

            <ul>
                <li><a href="#">About / </a></li>
                <li>Mission</li>
            </ul>
        </nav>-->

		<h3><?php print $title ?></h3>
        
        <?php print render($page['content']); ?>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 side-nav">

        <?php print render($page['sidebar']); ?>
        
    </div>

</section>

<?php print render($page['footer']); ?>

