
CKEDITOR.replace('editor1');

function countCharacters(event) {
    var content = CKEDITOR.instances.editor1.getData();
    var maxLength = 1000; // กำหนดจำนวนตัวอักษรสูงสุดที่ต้องการ
    /* if (content.length > maxLength) {
        alert('คุณไม่สามารถใส่ตัวอักษรเกิน ' + maxLength + ' ตัว');
        event.cancel();
    } */
}
document.addEventListener("DOMContentLoaded", function () {
    CKEDITOR.instances.editor1.on('change', countCharacters);
});
CKEDITOR.replace('editor2');

function countCharacters(event) {
    var content = CKEDITOR.instances.editor2.getData();
    var maxLength = 1000; // กำหนดจำนวนตัวอักษรสูงสุดที่ต้องการ
    /* if (content.length > maxLength) {
        alert('คุณไม่สามารถใส่ตัวอักษรเกิน ' + maxLength + ' ตัว');
        event.cancel();
    } */
}
document.addEventListener("DOMContentLoaded", function () {
    CKEDITOR.instances.editor2.on('change', countCharacters);
});


function manuBarApi(id) {
    $.ajax({
        url: '/product/manuBarApi/' + id,  // ใส่ URL ของ endpoint ของคุณ
        method: 'GET',
        success: function (data) {
            $('#menu-bars').empty();  // เคลียร์เนื้อหาเก่าของ #menu-bars
            data.forEach(function (item) {
                $('#menu-bars').append(`<div>Use: ${item.use}, Resolution: ${item.resolution}</div>`);
            });
        },
        error: function (error) {
            console.error('Error fetching menu bars:', error);
        }
    });
}