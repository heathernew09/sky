<?php
/*
Template Name: Kitchen Sink
*/
get_header(); ?>

<?php get_template_part('inc/pages/pageHero');?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/hamburgers.css">
<div id="content">
  
    <div id="inner-content" class="row">
  
        <main id="main" class="large-12 medium-12 columns" role="main">
  
<h2>Design Elements</h2>

<h1>H1 Text Is the Top of The Totem-pole</h1>
<h2>This Is the Size of H2 Text</h2>
<h3>This Is H3 Sized Text</h3>
<h4>H4 Text is Sized Like This</h4>
<h5>Level 5 Text as an H5</h5>
<h6>The Jester of the Headers H6</h6>
<p>This is standard p text sizing</p>
<p class="kicker">Kicker text for getting you to notice something</p> 

<p class="lead">A slightly-larger-than-normal block of text, useful for decks, blurbs, or other descriptive text using <em>.lead</em></p>

<h1 class="subheader">h1.subheader</h1>
<h2 class="subheader">h2.subheader</h2>
<h3 class="subheader">h3.subheader</h3>
<h4 class="subheader">h4.subheader</h4>
<h5 class="subheader">h5.subheader</h5>
<h6 class="subheader">h6.subheader</h6>

<p><strong>This is what strong text looks like</strong></p>
<p><em>This is what italic text looks like</em></p>

<a href="/">This is the styling for an a href</a>

<h3 class="color1">This Is an H3 in Color 1</h3>
<h3 class="color2">This Is an H3 in Color 2</h3> 
<h3 class="color3">This Is an H3 in Color 3</h3> 
<h3 class="color4">This Is an H3 in Color 4</h3>

<h3 class="color1Bk">This Is an H3 in Color 1</h3>
<h3 class="color2Bk">This Is an H3 in Color 2</h3> 
<h3 class="color3Bk">This Is an H3 in Color 3</h3> 
<h3 class="color4Bk">This Is an H3 in Color 4</h3>


<h3>H3 Small Header Segments <small>Wrapped in Small Tags</small></h3>

<hr>Styling for an hr</hr>

<h3>Standard Styling for Bulleted List</h3>
<ul>
     <li>Bullet 1</li>
     <li>Bullet 2
       <ul>
          <li>Nested list item</li>
          <li>Nested list item</li>
          <li>Nested list item</li>
      </ul>
     </li>
     <li>Bullet 3</li>
</ul>

<h3>Standard Styling for Ordered List</h3>
<ol>
     <li>Bullet 1</li>
     <li>Bullet 2
      <ul>
          <li>Nested list item</li>
          <li>Nested list item</li>
          <li>Nested list item</li>
      </ul>
     </li>
     <li>Bullet 3</li>
</ol>

<h3>ul.no-bullet</h3>
<ul class="no-bullet">
  <li>List item with a much longer description or more content.</li>
  <li>List item</li>
  <li>List item
    <ul>
      <li>Nested list item</li>
      <li>Nested list item</li>
      <li>Nested list item</li>
    </ul>
  </li>
  <li>List item</li>
  <li>List item</li>
  <li>List item</li>
</ul>

<h3>Definition Lists</h3>
<dl>
  <dt>Time</dt>
  <dd>The indefinite continued progress of existence and events in the past, present, and future regarded as a whole.</dd>
  <dt>Space</dt>
  <dd>A continuous area or expanse that is free, available, or unoccupied.</dd>
  <dd>The dimensions of height, depth, and width within which all things exist and move.</dd>
</dl>

<h3>Blockquotes</h3>
<blockquote>
  Those people who think they know everything are a great annoyance to those of us who do.
  <cite>Isaac Asimov</cite>
</blockquote>

<h3>Statistics</h3>
<p>Days until take off</p>
<div class="stat">808</div>

<h2>Text Alignment</h2>
<strong>text-left</strong>
<p class="text-left">The universe works in mysterious ways. There I was, attending a luncheon when I realized that the speaker for our discussion on digital trends was none other than someone I met during my college days working in a coffee shop. We had to cut our geek-out conversation short so that he could jump up and present.</p>
<strong>text-right</strong>
<p class="text-right">What my friend outlined in the discussion wasn’t just the key trends in digital media. Many of the trends are well-known, must-haves to those of us in the digital community. He highlighted one overarching theme: give consumers what they want.</p>
<strong>text-center</strong>
<p class="text-center">While the presentation did a wonderful job breaking down the confusing topics of coding languages, search engine optimization and site optimization, it all related back to what the viewer wants out of a website:</p>
<strong>text-justify</strong>
<p class="text-justify">The next trend topic centered around mobile. And to put it simply, if you’re not paying attention to how your brand presence in mobile you can say goodbye to at least half of your traffic. What consumers want from your website is the same for mobile. As consumers, however, we’re more impatient when it comes to mobile and it may be easiest to convey mobile trends with what viewers don’t want.</p>


<h2>Accordion</h2>

<ul class="accordion" data-accordion role="tablist">
  <li class="accordion-item is-active">
    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-heading" aria-controls="panel1d">Accordion 1</a>
    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel1d-heading">
      Panel 1. Lorem ipsum dolor
    </div>
  </li>
  <li class="accordion-item">
    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-heading" aria-controls="panel1d">Accordion 1</a>
    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel1d-heading">
      Panel 2. Lorem ipsum dolor
    </div>
  </li>
  <li class="accordion-item">
    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-heading" aria-controls="panel1d">Accordion 1</a>
    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel1d-heading">
      Panel 3. Lorem ipsum dolor
    </div>
  </li>
</ul>

<h2>Accordion Menu</h2>

<ul class="vertical menu" data-accordion-menu>
  <li>
    <a href="#">Item 1</a>
    <ul class="menu vertical nested is-active">
      <li>
        <a href="#">Item 1A</a>
        <ul class="menu vertical nested">
          <li><a href="#">Item 1Ai</a></li>
          <li><a href="#">Item 1Aii</a></li>
          <li><a href="#">Item 1Aiii</a></li>
        </ul>
      </li>
      <li><a href="#">Item 1B</a></li>
      <li><a href="#">Item 1C</a></li>
    </ul>
  </li>
  <li>
    <a href="#">Item 2</a>
    <ul class="menu vertical nested">
      <li><a href="#">Item 2A</a></li>
      <li><a href="#">Item 2B</a></li>
    </ul>
  </li>
  <li><a href="#">Item 3</a></li>
</ul>

<h2>Badge</h2>

<span class="secondary badge">2</span>
<span class="success badge">3</span>
<span class="alert badge">A</span>
<span class="warning badge">B</span>

<h2>Breadcrumbs</h2>

<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs">
    <li><a href="#">Home</a></li>
    <li><a href="#">Features</a></li>
    <li class="disabled">Gene Splicing</li>
    <li>
      <span class="show-for-sr">Current: </span> Cloning
    </li>
  </ul>

<h2>Button</h2>

<!-- Anchors (links) -->
<a href="about.html" class="button">Learn More</a>
<a href="#features" class="button">View All Features</a>

<!-- Buttons (actions) -->
<button type="button" class="success button">Save</button>
<button type="button" class="alert button">Delete</button>

<a class="tiny button" href="#">So Tiny</a>
<a class="small button" href="#">So Small</a>
<a class="large button" href="#">So Large</a>
<a class="expanded button" href="#">Such Expand</a>

<div class="button-group">
  <a class="button">One</a>
  <a class="button">Two</a>
  <a class="button">Three</a>
</div>

<h2>Callout</h2>

<div class="callout">
  <h5>This is a callout.</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It's dangerous to go alone, take this.</a>
</div>

<div class="callout secondary">
  <h5>This is a secondary callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It's dangerous to go alone, take this.</a>
</div>

<div class="callout success">
  <h5>This is a success callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It's dangerous to go alone, take this.</a>
</div>

<div class="callout warning">
  <h5>This is a warning callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It's dangerous to go alone, take this.</a>
</div>

<div class="callout alert">
  <h5>This is an alert callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It's dangerous to go alone, take this.</a>
</div>

<h2>Close Button</h2>

<div class="callout">
  <button class="close-button" aria-label="Close alert" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
  <p>This is a static close button example.</p>
</div>

<h2>Drilldown Menu</h2>

<ul class="vertical menu" data-drilldown style="width: 200px" id="m1">
  <li>
    <a href="#">Item 1</a>
    <ul class="vertical menu" id="m2">
      <li>
        <a href="#">Item 1A</a>
        <ul class="vertical menu" id="m3">
          <li><a href="#">Item 1Aa</a></li>
          <li><a href="#">Item 1Ba</a></li>
          <li><a href="#">Item 1Ca</a></li>
          <li><a href="#">Item 1Da</a></li>
          <li><a href="#">Item 1Ea</a></li>
        </ul>
      </li>
      <li><a href="#">Item 1B</a></li>
      <li><a href="#">Item 1C</a></li>
      <li><a href="#">Item 1D</a></li>
      <li><a href="#">Item 1E</a></li>
    </ul>
  </li>
  <li>
    <a href="#">Item 2</a>
    <ul class="vertical menu">
      <li><a href="#">Item 2A</a></li>
      <li><a href="#">Item 2B</a></li>
      <li><a href="#">Item 2C</a></li>
      <li><a href="#">Item 2D</a></li>
      <li><a href="#">Item 2E</a></li>
    </ul>
  </li>
  <li>
    <a href="#">Item 3</a>
    <ul class="vertical menu">
      <li><a href="#">Item 3A</a></li>
      <li><a href="#">Item 3B</a></li>
      <li><a href="#">Item 3C</a></li>
      <li><a href="#">Item 3D</a></li>
      <li><a href="#">Item 3E</a></li>
    </ul>
  </li>
  <li><a href='#'> Item 4</a></li>
</ul>

<h2>Dropdown Menu</h2>

<ul class="dropdown menu" data-dropdown-menu>
  <li>
    <a>Item 1</a>
    <ul class="menu">
      <li><a href="#">Item 1A Loooong</a></li>
      <li>
        <a href='#'> Item 1 sub</a>
        <ul class='menu'>
          <li><a href='#'>Item 1 subA</a></li>
          <li><a href='#'>Item 1 subB</a></li>
          <li>
            <a href='#'> Item 1 sub</a>
            <ul class='menu'>
              <li><a href='#'>Item 1 subA</a></li>
              <li><a href='#'>Item 1 subB</a></li>
            </ul>
          </li>
          <li>
            <a href='#'> Item 1 sub</a>
            <ul class='menu'>
              <li><a href='#'>Item 1 subA</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="#">Item 1B</a></li>
    </ul>
  </li>
  <li>
    <a href="#">Item 2</a>
    <ul class="menu">
      <li><a href="#">Item 2A</a></li>
      <li><a href="#">Item 2B</a></li>
    </ul>
  </li>
  <li><a href="#">Item 3</a></li>
  <li><a href='#'>Item 4</a></li>
</ul>

<h2>Dropdown Pane</h2>

<button class="button" type="button" data-toggle="example-dropdown">Toggle Dropdown</button>
<div class="dropdown-pane" id="example-dropdown" data-dropdown>
  Just some junk that needs to be said. Or not. Your choice.
</div>

<h2>Equalizer</h2>

<div class="row" data-equalizer data-equalize-on="medium" id="test-eq">
  <div class="medium-4 columns">
    <div class="callout" data-equalizer-watch>
      <img src= "<?php echo get_site_url(); ?>/wp-content/uploads/2020/07/screenshot.png">
    </div>
  </div>
  <div class="medium-4 columns">
    <div class="callout" data-equalizer-watch>
      <p>Pellentesque habitant morbi tristique senectus et netus et, ante.</p>
    </div>
  </div>
  <div class="medium-4 columns">
    <div class="callout" data-equalizer-watch>
      <img src= "<?php echo get_site_url(); ?>/wp-content/uploads/2020/07/screenshot.png">
    </div>
  </div>
</div>

<h2>Flex Grid</h2>

<div class="row display">
  <div class="small-6 columns">6 columns</div>
  <div class="small-6 columns">6 columns</div>
</div>
<div class="row display">
  <div class="medium-6 large-4 columns">12/6/4 columns</div>
  <div class="medium-6 large-8 columns">12/6/8 columns</div>
</div>


<div class="row display">
  <div class="small-6 columns">6 columns</div>
  <div class="small-6 columns">6 columns</div>
</div>
<div class="row display">
  <div class="medium-6 large-4 columns">12/6/4 columns</div>
  <div class="medium-6 large-8 columns">12/6/8 columns</div>
</div>

<h2>Flex Video</h2>

<div class="flex-video">
  <iframe width="420" height="315" src="https://www.youtube.com/embed/wIsVPZU8PXE?rel=0&amp;showinfo=0?ecver=2" frameborder="0" allowfullscreen></iframe>
</div>

<h2>Float Classes</h2>


<div class="callout clearfix">
  <a class="button float-left">Left</a>
  <a class="button float-right">Right</a>
</div>

<h2>Grid</h2>

<div class="row">
  <div class="small-2 medium-3 large-4 columns">2/3/4 columns</div>
  <div class="small-4 medium-3 large-4 columns">4/3/4 columns</div>
  <div class="small-6 large-4 columns">6/6/4 columns</div>
</div>
<div class="row">
  <div class="large-3 columns">12/12/3 columns</div>
  <div class="large-6 columns">12/12/6 columns</div>
  <div class="large-3 columns">12/12/3 columns</div>
</div>
<div class="row">
  <div class="small-6 large-2 columns">6/6/2 columns</div>
  <div class="small-6 large-8 columns">6/6/8 columns</div>
  <div class="small-12 large-2 columns">12/12/2 columns</div>
</div>
<div class="row">
  <div class="small-3 columns">3 columns</div>
  <div class="small-9 columns">9 columns</div>
</div>
<div class="row">
  <div class="medium-8 large-4 columns">12/8/4 columns</div>
  <div class="medium-4 large-8 columns">12/4/8 columns</div>
</div>


<div class="row display">
  <div class="small-2 medium-3 large-4 columns">2/3/4 columns</div>
  <div class="small-4 medium-3 large-4 columns">4/3/4 columns</div>
  <div class="small-6 large-4 columns">6/6/4 columns</div>
</div>
<div class="row display">
  <div class="large-3 columns">12/12/3 columns</div>
  <div class="large-6 columns">12/12/6 columns</div>
  <div class="large-3 columns">12/12/3 columns</div>
</div>
<div class="row display">
  <div class="small-6 large-2 columns">6/6/2 columns</div>
  <div class="small-6 large-8 columns">6/6/8 columns</div>
  <div class="small-12 large-2 columns">12/12/2 columns</div>
</div>
<div class="row display">
  <div class="small-3 columns">3 columns</div>
  <div class="small-9 columns">9 columns</div>
</div>
<div class="row display">
  <div class="medium-8 large-4 columns">12/8/4 columns</div>
  <div class="medium-4 large-8 columns">12/4/8 columns</div>
</div>

<h2>Interchange</h2>
<img data-interchange="[<?php echo get_site_url(); ?>/wp-content/uploads/2020/07/screenshot.png, small], [<?php echo get_site_url(); ?>/wp-content/uploads/2020/07/screenshot.png, medium], [<?php echo get_site_url(); ?>/wp-content/uploads/2020/07/screenshot.png, large]">

<h2>Label</h2>
<span class="secondary label">Secondary Label</span>
<span class="success label">Success Label</span>
<span class="alert label">Alert Label</span>
<span class="warning label">Warning Label</span>

<h2>Magellan</h2>

<ul class="horizontal menu" data-magellan>
  <li><a href="#first">First Arrival</a></li>
  <li><a href="#second">Second Arrival</a></li>
  <li><a href="#third">Third Arrival</a></li>
</ul>
<div class="sections">
  <section id="first" data-magellan-target="first">
    <h4>First section</h4>
    <p>Duis scelerisque ligula ut metus rhoncus scelerisque. Integer ut egestas metus. Nulla facilisi. Aenean luctus magna lobortis ligula rhoncus, sit amet lacinia lorem sagittis. Sed ultrices at metus id aliquet. Vestibulum in condimentum quam, id ornare erat. Vivamus nec justo quis ex fringilla condimentum ac non quam.</p>
  </section>
  <section id="second" data-magellan-target="second">
    <h4>Second section</h4>
    <p>Sed vulputate, felis interdum molestie viverra, neque urna placerat dui, ac efficitur est magna eu tellus. Nunc sodales consequat eros at bibendum. Vestibulum hendrerit gravida elit non eleifend. Nunc at vehicula ipsum. Vestibulum eu suscipit felis. Proin ipsum felis, consequat congue quam ac, efficitur tincidunt ex. Morbi accumsan sem iaculis nunc malesuada tincidunt.</p>
  </section>
  <section id="third" data-magellan-target="third">
    <h4>Third section</h4>
    <p>Aliquam orci orci, maximus a pulvinar id, tincidunt a neque. Suspendisse eros diam, finibus et faucibus ac, suscipit feugiat orci. Morbi scelerisque sem id blandit malesuada. Donec suscipit tincidunt dolor in blandit. Nam rhoncus risus vitae lacinia dictum. Cras lobortis, nulla non faucibus mattis, tellus nibh condimentum eros, posuere volutpat arcu risus vel ante. In ut ullamcorper eros, et vestibulum risus. Fusce auctor risus vitae diam viverra tincidunt.</p>
  </section>
</div>



<h2>Media Object</h2>

<div class="media-object">
  <div class="media-object-section">
    <img src= "http://placeimg.com/200/200/people">
  </div>
  <div class="media-object-section">
    <h4>Dreams feel real while we're in them.</h4>
    <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
  </div>
</div>

<h2>Menu</h2>
<ul class="menu">
  <li><a href="#">One</a></li>
  <li><a href="#">Two</a></li>
  <li><a href="#">Three</a></li>
  <li><a href="#">Four</a></li>
</ul>

<ul class="menu icon-top">
  <li><a href="#"><i class="fi-list"></i> <span>One</span></a></li>
  <li><a href="#"><i class="fi-list"></i> <span>Two</span></a></li>
  <li><a href="#"><i class="fi-list"></i> <span>Three</span></a></li>
  <li><a href="#"><i class="fi-list"></i> <span>Four</span></a></li>
</ul>

<h2>Off-canvas</h2>

<body>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
      <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
        <!-- left off-canvas markup -->
      </div>
      <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
        <!-- right off-canvas markup -->
      </div>
      <div class="off-canvas-content" data-off-canvas-content>
        <!-- page content -->
      </div>
    </div>
  </div>
</body>

<p>html_example</p>
<button type="button" class="button" data-toggle="offCanvasLeft">Open Menu</button>

<h2>Orbit</h2>
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <ul class="orbit-container">
    <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
    <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
    <li class="is-active orbit-slide">
      <div>
        <h3 class="text-center">You can also throw some text in here!</h3>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
        <h3 class="text-center">This Orbit slide has chill</h3>
      </div>
    </li>
    <li class="orbit-slide">
      <div>
        <h3 class="text-center">You can also throw some text in here!</h3>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
        <h3 class="text-center">This Orbit slide has chill</h3>
      </div>
    </li>
    <li class="orbit-slide">
      <div>
        <h3 class="text-center">You can also throw some text in here!</h3>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
        <h3 class="text-center">This Orbit slide has chill</h3>
      </div>
    </li>
    <li class="orbit-slide">
      <div>
        <h3 class="text-center">You can also throw some text in here!</h3>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
        <h3 class="text-center">This Orbit slide has chill</h3>
      </div>
    </li>
  </ul>
  <nav class="orbit-bullets">
   <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
   <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
   <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
   <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
 </nav>
</div>

<h2>Pagination</h2>

<ul class="pagination" role="navigation" aria-label="Pagination">
  <li class="disabled">Previous <span class="show-for-sr">page</span></li>
  <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
  <li><a href="#" aria-label="Page 2">2</a></li>
  <li><a href="#" aria-label="Page 3">3</a></li>
  <li><a href="#" aria-label="Page 4">4</a></li>
  <li class="ellipsis" aria-hidden="true"></li>
  <li><a href="#" aria-label="Page 12">12</a></li>
  <li><a href="#" aria-label="Page 13">13</a></li>
  <li><a href="#" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
</ul>

<h2>Progress Bar</h2>

<div class="success progress" role="progressbar" tabindex="0" aria-valuenow="25" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
  <div class="progress-meter" style="width: 25%">
    <p class="progress-meter-text">25%</p>
  </div>
</div>

<div class="warning progress">
  <div class="progress-meter" style="width: 50%">
    <p class="progress-meter-text">50%</p>
  </div>
</div>

<div class="alert progress">
  <div class="progress-meter" style="width: 75%">
    <p class="progress-meter-text">75%</p>
  </div>
</div>

<h2>Responsive Menu</h2>
<ul class="vertical medium-horizontal menu">
  <li><a href="#">Item 1</a></li>
  <li><a href="#">Item 2</a></li>
  <li><a href="#">Item 3</a></li>
</ul>

<h2>Responsive Toggle</h2>
<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Site Title</li>
      <li class="has-submenu">
        <a href="#">One</a>
        <ul class="submenu menu vertical" data-submenu>
          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
          <li><a href="#">Three</a></li>
        </ul>
      </li>
      <li><a href="#">Two</a></li>
      <li><a href="#">Three</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div>

<h2>Reveal - lightbox</h2>

<p><a data-open="exampleModal1">Click me for a modal</a></p>

<div class="reveal" id="exampleModal1" data-reveal>
  <h1>Awesome. I Have It.</h1>
  <p class="lead">Your couch. It is mine.</p>
  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<h2>Reveal - nested lightbox</h2>
<p><a data-open="exampleModal2">Click me for a modal</a></p>

<!-- This is the first modal -->
<div class="reveal" id="exampleModal2" data-reveal>
  <h1>Awesome!</h1>
  <p class="lead">I have another modal inside of me!</p>
  <a class="button" data-open="exampleModal3">Click me for another modal!</a>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<!-- This is the nested modal -->
<div class="reveal" id="exampleModal3" data-reveal>
  <h2>ANOTHER MODAL!!!</h2>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


<h2>Slider</h2>
<div class="slider" data-slider data-initial-start='50' data-end='200'>
  <span class="slider-handle"  data-slider-handle role="slider" tabindex="1"></span>
  <span class="slider-fill" data-slider-fill></span>
  <input type="hidden">
</div>

<div class="slider vertical" data-slider data-initial-start='25' data-end='200' data-vertical="true">
  <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
  <span class="slider-fill" data-slider-fill></span>
  <input type="hidden">
</div>

<div class="slider" data-slider data-initial-start='25' data-initial-end='75'>
  <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
  <span class="slider-fill" data-slider-fill></span>
  <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
  <input type="hidden">
  <input type="hidden">
</div>

<h2>Sticky</h2>
<div class="row">
  <div class="columns small-12">
    <div class="columns small-6" id="example1" data-something>
      <p id="doodle">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <div class="columns small-6 right" data-sticky-container>
      <div class="sticky" data-sticky data-anchor="example1">
        <img class="thumbnail" src="http://placeimg.com/200/200/people">
      </div>
    </div>
  </div>
</div>

<h2>Switch</h2>

<div class="switch tiny">
  <input class="switch-input" id="tinySwitch" type="checkbox" name="exampleSwitch">
  <label class="switch-paddle" for="tinySwitch">
    <span class="show-for-sr">Tiny Sandwiches Enabled</span>
  </label>
</div>

<div class="switch small">
  <input class="switch-input" id="smallSwitch" type="checkbox" name="exampleSwitch">
  <label class="switch-paddle" for="smallSwitch">
    <span class="show-for-sr">Small Portions Only</span>
  </label>
</div>

<div class="switch large">
  <input class="switch-input" id="largeSwitch" type="checkbox" name="exampleSwitch">
  <label class="switch-paddle" for="largeSwitch">
    <span class="show-for-sr">Show Large Elephants</span>
  </label>
</div>

<h2>Table</h2>
<table>
  <thead>
    <tr>
      <th width="200">Table Header</th>
      <th>Table Header</th>
      <th width="150">Table Header</th>
      <th width="150">Table Header</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Content Goes Here</td>
      <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
      <td>Content Goes Here</td>
      <td>Content Goes Here</td>
    </tr>
    <tr>
      <td>Content Goes Here</td>
      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
      <td>Content Goes Here</td>
      <td>Content Goes Here</td>
    </tr>
    <tr>
      <td>Content Goes Here</td>
      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
      <td>Content Goes Here</td>
      <td>Content Goes Here</td>
    </tr>
  </tbody>
</table>

<h2>Tabs</h2>
<ul class="tabs" data-tabs id="example-tabs">
  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
  <li class="tabs-title"><a href="#panel2">Tab 2</a></li>
  <li class="tabs-title"><a href="#panel3">Tab 3</a></li>
  <li class="tabs-title"><a href="#panel4">Tab 4</a></li>
  <li class="tabs-title"><a href="#panel5">Tab 5</a></li>
  <li class="tabs-title"><a href="#panel6">Tab 6</a></li>
</ul>

<div class="tabs-content" data-tabs-content="example-tabs">
  <div class="tabs-panel is-active" id="panel1">
    <p>one</p>
    <p>Check me out! I'm a super cool Tab panel with text content!</p>
  </div>
  <div class="tabs-panel" id="panel2">
    <p>two</p>
    <img class="thumbnail" src="http://placeimg.com/200/200/people" alt="Image Alt 3">
  </div>
  <div class="tabs-panel" id="panel3">
    <p>three</p>
    <p>Check me out! I'm a super cool Tab panel with text content!</p>
  </div>
  <div class="tabs-panel" id="panel4">
    <p>four</p>
    <img class="thumbnail" src="http://placeimg.com/200/200/people" alt="Image Alt 3">
  </div>
  <div class="tabs-panel" id="panel5">
    <p>five</p>
    <p>Check me out! I'm a super cool Tab panel with text content!</p>
  </div>
  <div class="tabs-panel" id="panel6">
    <p>six</p>
    <img class="thumbnail" src="http://placeimg.com/200/200/people" alt="image alt">
  </div>
</div>

<h2>Thumbnail</h2>

<div class="row">
  <div class="small-4 columns">
    <img class="thumbnail" src="http://placeimg.com/200/200/people" alt="Image Alt 1">
  </div>
  <div class="small-4 columns">
    <img class="thumbnail" src="http://placeimg.com/200/200/people" alt="Image Alt 2">
  </div>
  <div class="small-4 columns">
    <img class="thumbnail" src="http://placeimg.com/200/200/people" alt="Image Alt 3">
  </div>
</div>

<h2>Title Bar</h2>

<div class="title-bar">
  <div class="title-bar-left">
    <button class="menu-icon" type="button"></button>
    <span class="title-bar-title">Foundation</span>
  </div>
  <div class="title-bar-right">
    <button class="menu-icon" type="button"></button>
  </div>
</div>

<h2>Toggler</h2>

<p><a data-toggle="menuBar">Expand!</a></p>

<ul class="menu" id="menuBar" data-toggler=".expanded">
  <li><a href="#">One</a></li>
  <li><a href="#">Two</a></li>
  <li><a href="#">Three</a></li>
  <li><a href="#">Four</a></li>
</ul>

<h2>Tooltip</h2>

<p>The <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover='false' tabindex=1 title="Fancy word for a beetle.">scarabaeus</span> hung quite clear of any branches, and, if allowed to fall, would have fallen at our feet. Legrand immediately took the scythe, and cleared with it a circular space, three or four yards in diameter, just beneath the insect, and, having accomplished this, ordered Jupiter to let go the string and come down from the tree.</p>

<h2>Top Bar</h2>

<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Site Title</li>
      <li class="has-submenu">
        <a href="#">One</a>
        <ul class="submenu menu vertical" data-submenu>
          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
          <li><a href="#">Three</a></li>
        </ul>
      </li>
      <li><a href="#">Two</a></li>
      <li><a href="#">Three</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div>

<h2>Visibility Classes</h2>

<p>You are on a small screen or larger.</p>
<p class="show-for-medium">You are on a medium screen or larger.</p>
<p class="show-for-large">You are on a large screen or larger.</p>
<p class="show-for-small-only">You are <em>definitely</em> on a small screen.</p>
<p class="show-for-medium-only">You are <em>definitely</em> on a medium screen.</p>
<p class="show-for-large-only">You are <em>definitely</em> on a large screen.</p>

<p class="hide-for-medium">You are <em>not</em> on a medium screen or larger.</p>
<p class="hide-for-large">You are <em>not</em> on a large screen or larger.</p>
<p class="hide-for-small-only">You are <em>definitely not</em> on a small screen.</p>
<p class="hide-for-medium-only">You are <em>definitely not</em> on a medium screen.</p>
<p class="hide-for-large-only">You are <em>definitely not</em> on a large screen.</p>
<p class="hide">Can't touch this.</p>

<p class="invisible">Can sort of touch this.</p>

<p class="show-for-landscape">You are in landscape orientation.</p>
<p class="show-for-portrait">You are in portrait orientation.</p>

<p class="show-for-sr">This text can only be read by a screen reader.</p>
<p>There's a line of text above this one, you just can't see it.</p>

<p aria-hidden="true">This text can be seen, but won't be read by a screen reader.</p>

<p><a class="show-on-focus" href="#mainContent">Skip to Content</a></p>
<header id="header" role="banner">
</header>
<main id="mainContent" role="main" tabindex="0">
</main>
      
            </main> <!-- end #main -->
        
    
  
<h2>Mobile Menu Options</h2>
<style>
    code {
      display: inline-block;
    }

    code,
    .hamburger {
      vertical-align: middle;
    }
  </style>
<div class="row"> <div class="column"><div class="hamburger hamburger--3dx">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  <code>3dx</code></div>

  <br> <div class="column"><div class="hamburger hamburger--3dx-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  <code>3dx-r</code></div>

  <br> <div class="column"><div class="hamburger hamburger--3dy">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  <code>3dy</code></div>

  <br> <div class="column"><div class="hamburger hamburger--3dy-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  <code>3dy-r</code></div>

  <br> <div class="column"><div class="hamburger hamburger--3dxy">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  <code>3dxy</code></div>

  <br> <div class="column"><div class="hamburger hamburger--3dxy-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  <code>3dxy-r</code></div>

  <br>
</div>
<div class="row"> <div class="column"><div class="hamburger hamburger--arrow">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  <code>arrow</code></div>

  <br> <div class="column"><div class="hamburger hamburger--arrow-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  <code>arrow-r</code></div>

  <br> <div class="column"><div class="hamburger hamburger--arrowalt">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  <code>arrowalt</code></div>

  <br> <div class="column"><div class="hamburger hamburger--arrowalt-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>arrowalt-r</code></div>

  <br> <div class="column"><div class="hamburger hamburger--arrowturn">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>arrowturn</code></div>

  <br> <div class="column"><div class="hamburger hamburger--arrowturn-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>arrowturn-r</code></div>

  <br>
</div>
<div class="row"> <div class="column"><div class="hamburger hamburger--boring">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>boring</code></div>

  <br> <div class="column"><div class="hamburger hamburger--collapse">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>collapse</code></div>

  <br> <div class="column"><div class="hamburger hamburger--collapse-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>collapse-r</code></div>

  <br> <div class="column"><div class="hamburger hamburger--elastic">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>elastic</code></div>

  <br> <div class="column"><div class="hamburger hamburger--elastic-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>elastic-r</code></div>

  <br> <div class="column"><div class="hamburger hamburger--emphatic">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>emphatic</code></div>

  <br>
</div>
<div class="row"> <div class="column"><div class="hamburger hamburger--emphatic-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>emphatic-r</code></div>

  <br> <div class="column"><div class="hamburger hamburger--minus">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>minus</code></div>

  <br> <div class="column"><div class="hamburger hamburger--slider">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>slider</code></div>

  <br> <div class="column"><div class="hamburger hamburger--slider-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>slider-r</code></div>

  <br> <div class="column"><div class="hamburger hamburger--spin">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>spin</code></div>

  <br> <div class="column"><div class="hamburger hamburger--spin-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>spin-r</code></div>

  <br>
</div>
<div class="row"> <div class="column"><div class="hamburger hamburger--spring">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>spring</code></div>

  <br> <div class="column"><div class="hamburger hamburger--spring-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>spring-r</code></div>

  <br> <div class="column"><div class="hamburger hamburger--stand">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>stand</code></div>

  <br> <div class="column"><div class="hamburger hamburger--stand-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>stand-r</code></div>

  <br> <div class="column"><div class="hamburger hamburger--squeeze">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>squeeze</code></div>

  <br> <div class="column"><div class="hamburger hamburger--vortex">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>vortex</code></div>

  <br>
</div>
<div class="row">
 <div class="column"> <div class="column"><div class="hamburger hamburger--vortex-r">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
  </code>vortex-r</code></div>
  </div>
</div>
<script>
  /**
   * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
   *
   * @private
   * @author Todd Motto
   * @link https://github.com/toddmotto/foreach
   * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
   * @callback requestCallback      callback   - Callback function for each iteration.
   * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
   * @returns {}
   */
    var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
        }, false);
      });
    }
  </script>
</div> <!-- end #inner-content -->
  
  </div> <!-- end #content -->
<?php get_footer();
