<script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
<textarea name="{{ $name }}" id="{{ $id }}" class="form-control" cols="30" rows="10"></textarea>
<script type="text/javascript">
    CKEDITOR.replace("{{ $id }}", {
        filebrowserBrowseUrl: "{{ asset('/ckfinder/ckfinder.html') }}",
        filebrowserImageBrowseUrl: "{{ asset('/ckfinder/ckfinder.html?type=Images') }}",
        filebrowserFlashBrowseUrl: "{{ asset('/ckfinder/ckfinder.html?type=Flash') }}",
        filebrowserUploadUrl: "{{ asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
        filebrowserImageUploadUrl: "{{ asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
        filebrowserFlashUploadUrl: "{{ asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}"
    } );
</script>