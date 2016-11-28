<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<?php
//$theme_path = base_path() . 'sites/all/themes/africana_library_cornell_edu_theme/';
$theme_path = drupal_get_path('theme',$GLOBALS['theme']) . '/';
?>

<!-- <?php print $theme_path; ?> -->

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

        <!--<a href="http://www.cornell.edu"><img src="<?php print $theme_path; ?>images/cul-africana-logo.svg" /></a>-->


       <?php echo file_get_contents($theme_path . "images/cul-africana-logo.svg"); ?>

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

