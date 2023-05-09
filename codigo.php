//VISIBILIDADE ELEMENTOR PARA LOGADO E DESLOGADO
add_filter('body_class','er_logged_in_filter');
function er_logged_in_filter($classes) {
if( is_user_logged_in() ) {
$classes[] = 'logged-in-condition';
} else {
$classes[] = 'logged-out-condition';
}
// return the $classes array
return $classes;
}