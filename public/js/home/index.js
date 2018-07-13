/**
 * 用户登陆
 */
$(".submit").click(function () {
    var phone = $("#contact-form input[name='phone']").val();
    var vercode = $("#contact-form input[name='vercode']").val();
    if (!checkPhone(phone)) {

    }
    console.log(phone);
    console.log(vercode);
});