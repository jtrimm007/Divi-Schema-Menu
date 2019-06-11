
    var urlOne = new URL(window.location.href);

    var params = urlOne.searchParams.get('s');


    if(params != null)
    {
        jQuery("<meta itemprop=\"target\" content=\"" + window.location.href + "\"/>").appendTo("form.et-search-form");

    }
   jQuery("<meta itemprop=\"url\" content=\"" + window.location + "\"/>").appendTo("div.et_search_outer");


    //define variables
    var url = window.location.href;

    var j = jQuery.noConflict();


    // Add itemscope and itemtype to div
    j("div.et_search_outer").attr("itemscope", "").attr("itemtype", "http://schema.org/WebSite");

    // insert meta with itemprop url and content website address
    j("div.et_search_outer").attr("itemprop", "name");

    //Form tag - itemprop potentialAction itemscope itemtype schema.org SearchAction
    j("nav ul li a").attr("itemprop", "url");

    //Search input - itemprop query input name search_term_string
    j("div.et_search_outer form").attr("itemprop", "potentialAction").attr("itemscope", "").attr("itemtype", "http://schema.org/SearchAction");

    j("div.et_search_outer form input").attr("itemprop", "query-input");


    //main nav schema
    // Put itemscope and itemtype into navigation ul
    jQuery("nav ul").attr("itemscope", "").attr("itemtype", "http://www.schema.org/SiteNavigationElement");
    // put itemprop in lis
    jQuery("nav ul li").attr("itemprop", "name");
    //put itemprop url in anchors
    jQuery("nav ul li a").attr("itemprop", "url");


    //secondary aka "first menu on the site" schema
    // Put itemscope and itemtype into navigation ul
    jQuery("#et-secondary-menu").attr("itemscope", "").attr("itemtype", "http://www.schema.org/SiteNavigationElement");

    jQuery("#et-secondary-menu ul").attr("itemscope", "itemscope");

    // put itemprop in lis
    jQuery("#et-secondary-menu ul li").attr("itemprop", "name");
    //put itemprop url in anchors
    jQuery("#et-secondary-menu ul li a").attr("itemprop", "url");


    //footer navigation schema
    // Put itemscope and itemtype into navigation ul
    jQuery("#et-footer-nav").attr("itemscope", "itemscope").attr("itemtype", "http://www.schema.org/SiteNavigationElement");

    jQuery("#et-footer-nav ul").attr("itemscope", "itemscope");

    // put itemprop in lis
    jQuery("#et-footer-nav ul li").attr("itemprop", "name");
    //put itemprop url in anchors
    jQuery("#et-footer-nav ul li a").attr("itemprop", "url");

    //footer widget schema
    // Put itemscope and itemtype into navigation ul
    jQuery("#footer-widgets").attr("itemscope", "itemscope").attr("itemtype", "http://www.schema.org/SiteNavigationElement");

    jQuery("#footer-widgets ul").attr("itemscope", "itemscope");

    // put itemprop in lis
    jQuery("#footer-widgets ul li").attr("itemprop", "name");
    //put itemprop url in anchors
    jQuery("#footer-widgets ul li a").attr("itemprop", "url");

    //Logo schema
    // Put itemscope and itemtype into navigation ul
    jQuery("img#logo").attr("itemprop", "logo").attr("itemtype", "http://www.schema.org/SiteNavigationElement");

    //email and phone schema
    // Put itemscope and itemtype into navigation ul
    jQuery("#et-info a").attr("itemprop", "email");
    jQuery("#et-info span#et-info-phone").attr("itemprop", "telephone");

    //blog schema
    // Put itemscope and itemtype into navigation ul
    jQuery("article").attr("itemscope", "itemscope").attr("itemtype", "http://schema.org/Article");
    jQuery("article h2.entry-title a").attr("itemprop", "name");
    jQuery("article p.post-meta span.author a").attr("itemprop", "author");
    jQuery("article p.post-meta span.published").attr("itemprop", "datePublished");


    //WP Header and Footer schema
    // Put itemscope and itemtype into navigation ul
    jQuery("header").attr("itemscope", "itemscope").attr("itemtype", "http://schema.org/WPHeader");
    jQuery("footer").attr("itemscope", "itemscope").attr("itemtype", "http://schema.org/WPfooter");

    //general schema
    // Put itemscope and itemtype into navigation ul
    jQuery("h1").attr("itemprop", "name");





