
<?php 
/* Template Name: Query Practice Template */
echo '<h1>This is an example of a very basic WP_Query Loop.</h1>';
	
	$query = new WP_Query([
		'post_type' => 'post'
	]);
	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		echo '<br>';
	}
echo '<h1>Now let\'s look at what get_posts does.<br>Note that i have added a posts_per_page parameter. It simply limits the number of the posts returned.</h1>';
	$posts = get_posts([
		'post_type' => 'post',
		'posts_per_page' => 1
	]);
	foreach ($posts as $post) {
		var_dump($post);
	}
echo '<h1>Let\'s try a more advanced example of a Query:<br>I am looking for all "posts" from the category "front-end", that are tagged "css". I want them to be ordered by "modified date" and presented in ascending order. *your category and tag names may differ</h1>';
	$query = new WP_Query([
		'post_type' => 'post',
		'category_in' => 'application',
		'tag' => 'php',
		'orderby' => 'modified',
		'order' => 'ASC',
	]);
	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		echo '<br>';
	}


echo '<h1>#Task 1</h1>';

    $lastMod = new WP_Query([
    'post_type' => 'post',
    'orderby' => 'modified',
    'posts_per_page' => 2
]);
    while($lastMod->have_posts()) {
        $lastMod->the_post();
         echo the_title();
         echo "<br>";

};
wp_reset_postdata();

echo "<h1>#Task 2</h1>";
        $allPages = new WP_Query([
            'post_type' => 'page',
            'order' => 'DSC'
] );
    while($allPages->have_posts()){
    $allPages->the_post();
    echo the_title();
    echo "<br>";
};
wp_reset_postdata();

echo "<h1>#Task 3</h1>";
    $postDate = new WP_Query([
        'post_type' => 'post',
        'orederby' => 'date',
        'order' => 'DSC'
] );
    while($postDate->have_posts()){
        $postDate->the_post();
         echo get_the_date();
          echo "<br>";
};
wp_reset_postdata();
   echo "<h1>#Task 4</h1>";
$posts = new WP_Query([
    'post-type' => 'post',
    'tag' => 'css, php '
]);
while ($posts->have_posts()) {
    $posts->the_post();
    $posts_title = the_title();
    $posts_tag = the_tags(' | Tags: ', ',');
    echo $posts_title . $posts_tag;
    echo "<br>";
};

echo "<h1>#Task 5</h1>";
$posts = new WP_Query([
    'post-type' => 'post',
    'tag' => 'photoshop, php',
    'posts_per_page' => 3
]);
while ($posts->have_posts()) {
    $posts->the_post();
    $posts_title = the_title();
    $posts_tag = the_tags(' | Tags: ', ',');
    echo $posts_title . $posts_tag;
    echo "<br>";
};

wp_reset_postdata();

    echo "<h1>#Task 7</h1>";
        $findA = new WP_Query([
            'pagename' =>'contact'
]);
    while($findA->have_posts()){
        $findA->the_post();
            $user = get_user_by('id',1);
                echo 'Username is:'. ' ' .$user->user_nicename. '<br>' .' email is:'. ' '.$user->user_email  ;
};
wp_reset_postdata();

echo "<h1>#Task 8</h1>";
$posts = get_posts([
    'post_type' => 'post',
    'category_name' => 'websites',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
]);

foreach ($posts as $post) {
    var_dump($post);
}
wp_reset_postdata();



echo "<h1>#Task 9</h1>";
    $postC = new WP_Query([
        'post_type' => 'post',
        'category_in' => 2,
        'order' => 'ASC'
] );
while($postC->have_posts()){
    $postC->the_post();
    $user = get_user_by('id','1');
    echo '<ol>'.'<li>'.the_title().'['.$user->user_nicename.']'.get_the_date().'</li>'.'</ol>';
    echo "<br>";
};
wp_reset_postdata();
