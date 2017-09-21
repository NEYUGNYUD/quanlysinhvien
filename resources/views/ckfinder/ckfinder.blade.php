<script src="{{ asset('/ckfinder/ckfinder.js') }}"></script>
<script>
    function openPopup() {
        CKFinder.popup( {
            chooseFiles: true,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    document.getElementById( {{ $id }} ).value = file.getUrl();
                } );
                finder.on( 'file:choose:resizedImage', function( evt ) {
                    document.getElementById( {{ $id }} ).value = evt.data.resizedUrl;
                } );
            }
        } );
    }
</script>
<input type="text" size="48" name=" {{ $name }}" id="{{ $id }}" />
<button onclick="openPopup()">Select file</button>