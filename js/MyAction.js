$(function () {
    let WP_ADMIN_AJAX;
    let MyActionNonce;
    jQuery.ajax({
        url: WP_ADMIN_AJAX,
        method: 'POST',
        data: {
            action: 'MyAction',
            nonce: MyActionNonce,
            username: 'Admin',
        },
        success: function () {
            alert("Success Ajax request!");
        },
    });
});