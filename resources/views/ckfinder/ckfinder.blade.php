<script src="{{ asset('/ckfinder/ckfinder.js') }}"></script>
<script>
    function openPopup() {
        CKFinder.popup( {
            chooseFiles: true,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
//                    $fileId phai la so moi dung
                    document.getElementById( {{ $fileId }} ).value = file.getUrl();
                } );
                finder.on( 'file:choose:resizedImage', function( evt ) {
                    document.getElementById( {{ $fileId }} ).value = evt.data.resizedUrl;
                } );
            }
        } );
    }
</script>
<input type="text" size="48" name=" {{ $fileName }}" id="{{ $fileId }}" class="form-control" value="{{ old($fileName) }}" readonly required/><br>
<button onclick="openPopup()" class="btn btn-default">Select file</button>