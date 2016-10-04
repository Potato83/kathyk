<?php
/*
Template Name: Counting Fix
 */
get_header(); ?>
<div class="padder"></div>
<div class="padder"></div>

<!-- <h1>this is the grand children template aka page-bottom.php</h1> -->

<!-- <h3>Grand Children</h3> -->
<button type="button" class="pull-left btn btn-default visible-xs" id="sidebar-toggle" data-toggle="offcanvas" aria-expanded="false" aria-controls="navbar">
  <i class="fa fa-navicon"></i>
</button>
<aside class="col-xs-12 col-sm-3 sidebar-offcanvas">
<ul class="bottom-cat">
    <li><a href=""></a>one</li>
    <li><a href=""></a>two</li>
    <li><a href=""></a>three</li>
    <li><a href=""></a>four</li>
</ul>
</aside>
<div class="sub-container">
<?php wp_reset_postdata(); ?>
<?php get_template_part('content', 'fix'); ?>
<?php while ( have_posts() ) : the_post(); ?>
					
	<?php the_content(); ?>
	
<?php endwhile; ?>
</div>

<!-- 

<strong>Counting Game</strong>
<table border="0" width="100%">
<tbody>
<tr>
<td></td>
<td>The Counting Game was commissioned by Western Front Gallery
to mark the inauguration of the Vancouver New Public Library in 1995. The idea was to create music for choir which would favour the spatial properties of the new building. Archways, stairs, foyers and esplanades all make for different acoustic environments.</td>
</tr>
</tbody>
</table>
<table border="0" width="100%">
<tbody>
<tr>
<td>Five musical sections of approximately 4 min.were created to make a 20 min. piece performed for a choir of 100 and radio. The soundtrack (musical accompaniment for the choir) was played on a low-watt fm radio transmitter, so that the choir could move freely from one end of the building site to the other . Each section was given a number, from 1 to 8.</td>
<td><img src="http://localhost:8888/kathyk/html/wp-content/uploads/2016/09/counting-game2.jpg" alt="the counting game - radios in arms" width="250" height="185" /></td>
</tr>
</tbody>
</table>
<table border="0" width="100%">
<tbody>
<tr>
<td><img src="http://localhost:8888/kathyk/html/wp-content/uploads/2016/09/counting-game3.jpg" alt="the counting game - a circle of players" width="250" height="184" /></td>
<td>Each "number", or musical section, was based on a relationship with that number. "Two" was sung in both French and English, for example. "Five" was in 5/4 rhythm, etc.</td>
</tr>
</tbody>
</table>
<table border="0" width="100%">
<tbody>
<tr>
<td>There was alot of singing over 20 minutes, and alot of moving from one destination to another around the building. It took alot of counting.</td>
<td><img src="http://localhost:8888/kathyk/html/wp-content/uploads/2016/09/counting-game4.jpg" alt="the counting game - a circle of players" width="250" height="184" /></td>
</tr>
</tbody>
</table>
<table border="0" width="100%">
<tbody>
<tr>
<td><img src="http://localhost:8888/kathyk/html/wp-content/uploads/2016/09/counting-game5.jpg" alt="the counting game - a circle of players" width="250" height="184" /></td>
<td>The team of the Western Front did an amazing job of organizing
this gigantic event.</td>
</tr>
</tbody>
</table>
<table border="0" width="100%">
<tbody>
<tr>
<td>The piece was so popular that our adhoc choir gave encore performances at the Vancouver Art Gallery and at Granville Island.</td>
<td><img src="http://localhost:8888/kathyk/html/wp-content/uploads/2016/09/counting-game6.jpg" alt="the counting game - a circle of players" width="250" height="181" /></td>
</tr>
</tbody>
</table>
<table border="0" width="100%">
<tbody>
<tr>
<td><img src="http://localhost:8888/kathyk/html/wp-content/uploads/2016/09/counting-game7.jpg" alt="the counting game - a circle of players" width="250" height="184" /></td>
<td>The local arts community energetically came together in this upliftingly vocal civic event.</td>
</tr>
</tbody>
</table>




 -->



<?php get_footer(); ?>