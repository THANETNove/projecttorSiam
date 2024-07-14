
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

// check-input  n
function getCheckedValues() {
    var checkedValues = [];
    // วนลูปผ่าน checkboxes ทั้งหมดที่มี class form-check-input
    var checkboxes = document.querySelectorAll('.form-check-input');
    checkboxes.forEach(function (checkbox) {
        if (checkbox.checked) {
            checkedValues.push(checkbox.value);
        }
    });
    console.log('Checked values:', checkedValues);
    // ส่งค่าไปที่ backend หรือทำการประมวลผลต่อไป
}
// ตัวอย่างภาพ
function previewImages(event) {
    var preview = document.getElementById('imagePreview');
    preview.innerHTML = '';
    var files = event.target.files;

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = function (event) {
            var img = document.createElement('img');
            img.setAttribute('src', event.target.result);
            img.setAttribute('style', 'max-width:100px; max-height:100px; margin: 10px;');
            preview.appendChild(img);
        }


        reader.readAsDataURL(file);
    }
    var imageEditElement = document.getElementById('image-edit');
    if (imageEditElement) {
        imageEditElement.style.display = 'none';
    }
}