<?php


/**
 * Created by PhpStorm.
 * User: duype
 * Date: 9/21/2017
 * Time: 2:56 PM
 */

//hàm hiển thị ô upload ảnh dùng ckfinder
function uploadFile($id, $name) {
    ?>
    <script src="/ckfinder/ckfinder.js"></script>
     <script>
         function openPopup() {
             CKFinder.popup( {
                 chooseFiles: true,
                 onInit: function( finder ) {
                 finder.on( 'files:choose', function( evt ) {
                     var file = evt.data.files.first();
                     document.getElementById("<?php echo $id;?>").value = file.getUrl();
                 } );
                 finder.on( 'file:choose:resizedImage', function( evt ) {
                     document.getElementById("<?php echo $id;?>").value = evt.data.resizedUrl;
                 } );
                }
             } );
         }
     </script>
     <input type="text" size="48" name="<?php echo $name;?>" id="<?php echo $id;?>" />
     <button onclick="openPopup()" class="btn btn-default">Chọn file</button>
<?php
}
?>
