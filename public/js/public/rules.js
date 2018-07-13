/**
 * 手机号验证
 */

function checkPhone(phone) {
    var pattern =  /^1[34578]\d{9}$/;
    return pattern.test(phone);
}