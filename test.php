<html>
<head>
 <link type="text/css" rel="stylesheet" href="image-picker/image-picker.css" />
<script type="text/javascript" src="image-picker/image-picker.js"></script>
<script type="text/javascript" src="image-picker/image-picker.min.js"></script>
<script>
$(document).ready(function () {
    $("#selectImage").imagepicker({
        hide_select: true
    });

    var $container = $('.image_picker_selector');
    // initialize
    $container.imagesLoaded(function () {
        $container.masonry({
            columnWidth: 30,
            itemSelector: '.thumbnail'
        });
    });
});
</script>
</head>
<body>
<select id="selectImage" class="image-picker">
  <option data-img-src="http://placekitten.com/220/200" value="1">Cute Kitten 1</option>
  <option data-img-src="http://placekitten.com/180/200" value="2">Cute Kitten 2</option>
  <option data-img-src="http://placekitten.com/130/200" value="3">Cute Kitten 3</option>
  <option data-img-src="http://placekitten.com/270/200" value="4">Cute Kitten 4</option>
</select>
</body>
</html>