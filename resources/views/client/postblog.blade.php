@extends('layout')
@section('main')

<div class="status" style="margin-left: 200px">
    <h1>Đăng bài mới</h1>

    <form method="post" action="{{ route('post') }}" enctype="multipart/form-data" id="postForm">
        <div style="margin-top: 10px">
            <label for=""> Tên món ăn:</label>
            <input type="text" name="nameFood" required>
        </div>
        <div style="margin-top: 10px">
            <label for="">Mô tả:</label>
            <input type="text" name="description" required>
        </div>
        <div style="margin-top: 10px">
            <label for="categorySelect">category:</label>
            <select id="categorySelect" name="category">
                @foreach ($category as $item)
                    <option value="{{ $item['idCategory'] }}">{{ $item['nameCategory'] }}</option>
                @endforeach

            </select>
        </div>
        <div style="margin-top: 10px">
            <label for="">cookingTime:</label>
            <input type="text" name="cookingTime" required>
        </div>
        <div style="margin-top: 10px">
            <label for="">Nguyên liêu:</label>
            <textarea name="ingredients" required></textarea>
        </div>
        <div class="form-group" style="margin-top: 10px">
            <label for="imageInput">Chọn tệp ảnh:</label>
            <input type="file" accept="image/*" id="imageInput" onchange="displayImage()" name="thumbnail" required>
            <img id="displayedImage" style="display:none; max-width: 100%;">
        </div>
        <textarea name="textarea" id="default" required></textarea>
        <input type="button" value="Tải lên" class="btn btn-primary" onclick="uploadAndSubmit()" >
    </form>
</div>

<script src="https://cdn.tiny.cloud/1/2qhosjxlbqkxkube8z9zk9mrfy0zgvl6xia0yeo40qt5vt2c/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: 'textarea#default',
        width: 1000,
        height: 300,
        plugins: [
            'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak', 'imagetools', 'code',
            'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media',
            'table', 'emoticons', 'template', 'codesample'
        ],
        toolbar: 'undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify |' +
            'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
            'forecolor backcolor emoticons',
        menu: {
            favs: { title: 'menu', items: 'code visualaid | searchreplace | emoticons' }
        },
        menubar: 'favs file edit view insert format tools table',
        content_style: 'body { font-family: Helvetica, Arial, sans-serif; font-size: 16px }',

        image_title: true,
        automatic_uploads: true,
        file_picker_types: 'image',
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.onchange = function () {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    cb(blobInfo.blobUri(), { title: file.name });
                };
                reader.readAsDataURL(file);
            };

            input.click();
        }
    });

    function displayImage() {
        var input = document.getElementById('imageInput');
        var image = document.getElementById('displayedImage');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                image.src = e.target.result;
                image.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function uploadAndSubmit() {
        // Add additional logic if needed before submitting the form
        document.getElementById('postForm').submit();
    }
</script>

@endsection
