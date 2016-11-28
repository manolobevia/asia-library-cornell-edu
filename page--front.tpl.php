<header class="home">

    <section class="CUL-branding">
        
        <?php echo file_get_contents($theme_path . "images/cul-africana-logo.svg"); ?>

    </section>

    <section class="CUL-branding-mobile">

        <a href="http://www.cornell.edu"><img src="<?php print $theme_path; ?>images/cu-logo.png" /></a>

    </section>

    <h1><a href="https://www.library.cornell.edu/">Cornell University Library</a></h1>
    <h2><a href="/">John Henrik Clarke Africana Library</a></h2>


    <?php print render($page['navigation']); ?>


    <section class="hours">

        <!-- RESEARVATION HOURS --> 
        <?php print render($page['hours']); ?>

    </section>



</header>

<!-- SEARCH BOX -->
<section class="search-home">

    <!-- Pay attention to METHOD -->
    <form id="search" name="form1" method="get" action="https://newcatalog.library.cornell.edu/search">

        <label for="name">Search <span class="search-filter-selected">Library Catalog</span></label>


        <div class="filtered-search">

            <input type="text" class="search-homepage" name="q" value="" id="edit_keys" />

            <!--<select name="search_type" id="search_type" size="1" onChange="chgAction()" class="form-control filter">

                <option value="catalog" selected="selected">Library Catalog</option>
                <option value="worldcat">WorldCat</option>
                <option value="site">Site Search</option>

            </select>-->

            <div class="filter-search"><span class="active">Library Catalog</span> <span class="glyphicon glyphicon-chevron-down"></span>

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
          <li><a href="/collections/selecteddatabases">Databases</a> / </li>
          <li><a href="/guides">Research Guides</a></li>
        </ul>
    </form>

</section>

<div class="hero"></div>
<div class="henrik-clarke"></div>

<div class="highlights carousel-slick">

    <?php print render($page['highlights']); ?>  

</div>



<section class="row features">

    <?php print render($page['features']); ?> 

</section>

<?php print render($page['footer']); ?>








