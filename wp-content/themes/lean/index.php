<?php get_header(); ?>

<div id="container" style="width:90%;"> 
<div id="left" style="float:left; width:70%;margin-left:2%">

<?php

if ( is_home() ) {


echo '<br>';
get_search_form(true); 
}
echo '<br>';
echo '<br>';
?>


<?php

        if ( is_home() ) {

echo '<div style="font-size:140%;font-family: \'Titillium Web\', sans-serif">';
echo 'Posts';
echo '</div>';
echo '<br>';
}

?>


	<div> <!-- content -->

  <?php if(have_posts()): while(have_posts()): the_post(); 
	$nail = get_the_post_thumbnail( get_the_ID(), '-lean-full');?> 
	

     <div id="post-<?php the_ID();?>" <?php echo post_class();?>>

	<?php if($nail): ?> 

<div id="thumbnail-<?php the_ID();?>" class="featured-image"><a href="<?php the_permalink();?>"><?php echo $nail; ?></a>
</div> 

	<?php endif;?> 

<?php

	if ( ! is_home() ) {
	
echo get_post_meta($post->ID, 'Upstream Author', true); 

}
?>

<!--               <div class="heading"> --> 
		<a style="color:#4b0082;text-align:left;text-decoration:none" href="<?php the_permalink();?>">

<?php

        if ( is_home() ) {

if ( in_category ( 'Debug Method Development'  ) )
{

echo '<span id="hcategorya" >';
echo "DMD  ";
echo '</span>';
echo '<span class = "hposts">';
the_title();
echo '</span>';
echo '<span class = "hdate" class="entry-date">';
$date = get_the_date();
echo " $date ";
echo '</span>';

}
elseif ( in_category ( 'Algorithm' ) )
{

echo '<span id="hcategoryb">';
echo "AD  ";
echo '</span>';
echo '<span class = "hposts">';
the_title();
echo '</span>';
echo '<span class = "hdate" class="entry-date">';
$date = get_the_date();
echo " $date ";
echo '</span>';


}

elseif ( in_category ( 'Computer Hardware' ) )
{

echo '<span id="hcategoryc">';
echo "CH  ";
echo '</span>';
echo '<span class = "hposts">';
the_title();
echo '</span>';
echo '<span class = "hdate" class="entry-date">';
$date = get_the_date();
echo " $date ";
echo '</span>';


}



elseif ( in_category ( 'operating system' ) )
{

echo '<span id="hcategoryd">';
echo "OS  ";
echo '</span>';
echo '<span class = "hposts">';
the_title();
echo '</span>';
echo '<span class = "hdate" class="entry-date">';
$date = get_the_date();
echo   " $date";
echo '</span>';
 

}


elseif ( in_category ( 'computer networks' ) )
{

echo '<span id="hcategorye">';
echo "CN  ";
echo '</span>';
echo '<span class = "hposts">';
the_title();
echo '</span>';
echo '<span class = "hdate" class="entry-date">';
$date = get_the_date();
echo " $date ";
echo '</span>';

}

elseif ( in_category ( 'People' ) )
{

echo '<span id="hcategoryf">';
echo "People  ";
echo '</span>';
echo '<span class = "hposts">';
the_title();
echo '</span>';
echo '<span class = "hdate" class="entry-date">';
$date = get_the_date();
echo " $date ";
echo '</span>';

}

elseif ( in_category ( 'Documentation' ) )
{

echo '<span id="hcategoryg">';
echo "Doc  ";
echo '</span>';
echo '<span class = "hposts">';
the_title();
echo '</span>';
echo '<span class = "hdate" class="entry-date">';
$date = get_the_date();
echo " $date ";
echo '</span>';

}

elseif ( in_category ( 'UI' ) )
{

echo '<span id="hcategoryh">';
echo "UI  ";
echo '</span>';
echo '<span class = "hposts">';
the_title();
echo '</span>';
echo '<span class = "hdate" class="entry-date">';
$date = get_the_date();
echo " $date ";
echo '</span>';

}

elseif ( in_category ( 'computer science' ) )
{

echo '<span id="hcategoryi">';
echo "CS  ";
echo '</span>';
echo '<span class = "hposts">';
the_title();
echo '</span>';
echo '<span class = "hdate" class="entry-date">';
$date = get_the_date();
echo " $date ";
echo '</span>';

}

elseif  ( in_category ( 'Sorting' ) ) 
{


echo '<span id="hcategoryj">';
echo "SORT  ";
echo '</span>';
echo '<span class = "hposts">';
the_title();
echo '</span>';
echo '<span class = "hdate" class="entry-date">';
$date = get_the_date();
echo " $date ";
echo '</span>';

}

elseif  ( in_category ( 'THEORY' ) ) 
{


echo '<span id="hcategoryk">';
echo "THEORY  ";
echo '</span>';
echo '<span class = "hposts">';
the_title();
echo '</span>';
echo '<span class = "hdate" class="entry-date">';
$date = get_the_date();
echo " $date ";
echo '</span>';

}


elseif  ( in_category ( 'Programming Languages' ) ) 
{


echo '<span id="hcategoryl">';
echo "PL  ";
echo '</span>';
echo '<span class = "hposts">';
the_title();
echo '</span>';
echo '<span class = "hdate" class="entry-date">';
$date = get_the_date();
echo " $date ";
echo '</span>';

}


elseif  ( in_category ( 'Filter' ) ) 
{


echo '<span id="hcategorym">';
echo "Filter  ";
echo '</span>';
echo '<span class = "hposts">';
the_title();
echo '</span>';
echo '<span class = "hdate" class="entry-date">';
$date = get_the_date();
echo " $date ";
echo '</span>';

}




else {


echo '<span id="hcategoryn">';
echo "To Be Fixed  ";
echo '</span>';
echo '<span class = "hposts">';
the_title();
echo '</span>';
echo '<span class = "hdate" class="entry-date">';
$date = get_the_date();
echo " $date ";
echo '</span>';

}

}

?>

</a>

</div>

<div class="entry">
	<?php 

	if (! is_home() ) {
           echo '<div style="font-size:190%;font-weight:normal;line-height:initial;text-align:left">';
 /*   	   echo '<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>'; */
	   echo '<a style="font-family:\'Overpass\'" href="'.get_permalink().'">'.get_the_title().'</a>';
           echo '</div>';
	   echo '<br>';
           the_content();
	}
	?>

   </div>

	<?php wp_link_pages( array( 
		'before' => '<div class="pagination"><span>' . __( 'Pages:', 'slim' ) . '</span>',
		'after' => '</div>' ) ); ?>



<?php comments_template();?>


<?php endwhile; else: ?>
	<p>No posts found</p>
<?php endif;?>
	 <div class="pagination"><?php LeanTheme::paginavi();?></div> 


	</div><!-- #content -->

 

</div>
<div id="right" style="float:right; width:28%">
 <?php
    if ( is_home() ) {
    

    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "https://api.github.com/repos/ahiliation/beautifulwork/commits");
    curl_setopt($curl, CURLOPT_USERAGENT, 'PHP with php5-curl');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close ($curl);
    $ar = json_decode($result);
     echo '<span style="font-size:100%;font-family: \'Overpass\', sans-serif">';     
     echo  "Data from GitHub: ";
     echo '<br>';
     echo '<span style="color:#c00;font-size:100%">';
     echo $ar[0]->commit->message;
     echo '</span>';
//     echo "]";
     echo '</span>';
  // echo '<pre>' . print_r($ar, true) . '</pre>';

}
?>
</div>
</div>


<?php get_footer();?>
