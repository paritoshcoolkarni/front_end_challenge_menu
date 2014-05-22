
<html>
<head>
    <meta charset="utf-8">
    <title> Affair Recovery 12 Steps</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>
    
<body>    
    <h1>12 Weeks Program</h1>
    
    <div id="content">
        <div class="gallery-wrap">
            <div class="gallery">
                
                <div class="gallery__item">
                    <img src="images/twelvesteps/Slide01.png" class="gallery__img" alt="" />         
                </div>
                 
                <div class="gallery__item">
                    <img src="images/twelvesteps/Slide02.png" class="gallery__img" alt="" />         
                </div>
                
                <div class="gallery__item">
                    <img src="images/twelvesteps/Slide03.png" class="gallery__img" alt="" />         
                </div>
                
                <div class="gallery__item">
                    <img src="images/twelvesteps/Slide04.png" class="gallery__img" alt="" />         
                </div>
                
                <div class="gallery__item">
                    <img src="images/twelvesteps/Slide05.png" class="gallery__img" alt="" />         
                </div>
                
                <div class="gallery__item">
                    <img src="images/twelvesteps/Slide06.png" class="gallery__img" alt="" />         
                </div>
                
                <div class="gallery__item">
                    <img src="images/twelvesteps/Slide07.png" class="gallery__img" alt="" />         
                </div>
                
                <div class="gallery__item">
                    <img src="images/twelvesteps/Slide08.png" class="gallery__img" alt="" />         
                </div>
                
                <div class="gallery__item">
                    <img src="images/twelvesteps/Slide09.png" class="gallery__img" alt="" />         
                </div>
                
                <div class="gallery__item">
                    <img src="images/twelvesteps/Slide10.png" class="gallery__img" alt="" />         
                </div>
                
                <div class="gallery__item">
                    <img src="images/twelvesteps/Slide11.png" class="gallery__img" alt="" />         
                </div>
                
                <div class="gallery__item">
                    <img src="images/twelvesteps/Slide12.png" class="gallery__img" alt="" />         
                </div>
                
                <div class="gallery__item">
                    <img src="images/twelvesteps/Slide13.png" class="gallery__img" alt="" />         
                </div>
                
            </div> <!-- .gallery -->
            
            
            <div class="gallery__controls">
                <div href="#" class="gallery__controls-prev">
                    <img src="images/twelvesteps/next.png" alt="" />
                </div>
                
                <div href="#" class="gallery__controls-next">
                    <img src="images/twelvesteps/next.png" alt="" />
                </div>
            </div> <!-- .gallery__controls -->
        </div> <!-- .gallery-wrap -->
    </div> <!-- #content -->

    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
        
        
        
    // Only run everything once the page has completely loaded
    $(window).load(function(){

        // Set general variables
        // ====================================================================
        var totalWidth = 0;

        // Total width is calculated by looping through each gallery item and
        // adding up each width and storing that in `totalWidth`
        $(".gallery__item").each(function(){
            totalWidth = totalWidth + $(this).outerWidth(true);
        });

        // The maxScrollPosition is the furthest point the items should
        // ever scroll to. We always want the viewport to be full of images.
        var maxScrollPosition = totalWidth - $(".gallery-wrap").outerWidth();

        // This is the core function that animates to the target item
        // ====================================================================
        function toGalleryItem($targetItem){
            // Make sure the target item exists, otherwise do nothing
            if($targetItem.length){

                // The new position is just to the left of the targetItem
                var newPosition = $targetItem.position().left;

                // If the new position isn't greater than the maximum width
                if(newPosition <= maxScrollPosition){

                    // Add active class to the target item
                    $targetItem.addClass("gallery__item--active");

                    // Remove the Active class from all other items
                    $targetItem.siblings().removeClass("gallery__item--active");

                    // Animate .gallery element to the correct left position.
                    $(".gallery").animate({
                        left : - newPosition
                    });
                } else {
                    // Animate .gallery element to the correct left position.
                    $(".gallery").animate({
                        left : - maxScrollPosition
                    });
                };
            };
        };

        // Basic HTML manipulation
        // ====================================================================
        // Set the gallery width to the totalWidth. This allows all items to
        // be on one line.
        $(".gallery").width(totalWidth);

        // Add active class to the first gallery item
        $(".gallery__item:first").addClass("gallery__item--active");

        // When the prev button is clicked
        // ====================================================================
        $(".gallery__controls-prev").click(function(){
            // Set target item to the item before the active item
            var $targetItem = $(".gallery__item--active").prev();
            toGalleryItem($targetItem);
        });

        // When the next button is clicked
        // ====================================================================
        $(".gallery__controls-next").click(function(){
            // Set target item to the item after the active item
            var $targetItem = $(".gallery__item--active").next();
            
            toGalleryItem($targetItem);
        });
    });
    </script>

</body>
</html>