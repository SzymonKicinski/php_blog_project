function confirm_del(delete_link) {
	if(confirm('Czy na pewno usunąć rekord ?')) {
		window.location.href=delete_link;
	}
}