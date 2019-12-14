jQuery(document).ready(function($) {

    // Usuwanie pojedyñczego wpisu asynchronicznie

    $('.ajax-remove-post').click(function() {
        alert($(this).attr('data-token'));
    });

    // Asynchroniczne usuwanie strony

    $('.ajax-delete-page').click(function() {
        var id = $(this).attr('data-target');
        $.ajax({
            url: "../../scripts/page/delete.php",
            method: "POST",
            data: {
                id: $(this).attr('data-target')
            }
        }).success(function(data) {
            var page = '#page-' + id;
            $(page).fadeOut();
        });
    });

    $('.ajax-delete-category').click(function() {
        var id = $(this).attr('data-target');
        $.ajax({
            url: "../../scripts/category/delete.php",
            method: "POST",
            data: {
                id: $(this).attr('data-target')
            }
        }).success(function(data) {
            var category = '#category-' + id;
            $(category).fadeOut();
        });
    });

    $('.ajax-delete-comments').click(function() {
        var id = $(this).attr('data-target');
        $.ajax({
            url: "../../scripts/comments/delete.php",
            method: "POST",
            data: {
                id: $(this).attr('data-target')
            }
        }).success(function(data) {
            var comments = '#comments-' + id;
            $(comments).fadeOut();
        });
    });

    $('.ajax-delete-post').click(function() {
        var id = $(this).attr('data-target');
        $.ajax({
            url: "../../scripts/post/delete.php",
            method: "POST",
            data: {
                id: $(this).attr('data-target')
            }
        }).success(function(data) {
            var comments = '#post-' + id;
            $(comments).fadeOut();
        });
    });
	
	$('.ajax-delete-user').click(function() {
        var id = $(this).attr('data-target');
        $.ajax({
            url: "../../scripts/user/delete.php",
            method: "POST",
            data: {
                id: $(this).attr('data-target')
            }
        }).success(function(data) {
            var comments = '#user-' + id;
            $(comments).fadeOut();
        });
    });

    $('.ajax-change-comments').click(function() {
        var id = $(this).attr('data-target');
        var status = $(this).attr('data-status');
        $.ajax({
            url: "../../scripts/comments/status.php",
            method: "POST",
            data: {
                id: $(this).attr('data-target'),
                status : $(this).attr('data-status')
            }
        }).success(function(data) {
            location.reload();
        });
    });


});