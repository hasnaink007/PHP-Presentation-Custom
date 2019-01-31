# PHP-Presentation-Custom

The plugin is an extended version of the PHPPresentation Library which enables you to add SlideNumbers at the top left of the slide.

### Usage Instructions
The function that expands the functionality is 

     addSlideNumber($slideObj);

You must use the slide object you are using to add shapes or drawings etc.

**EXAMPLE** 

     $slide2 = $objPHPPowerPoint->createSlide();
     $objPHPPowerPoint->addSlideNumber($slide2);

### Arguments
The addSlideNumber() accepts one parameter and it is required in order to make it work. The details are as follows: 

       Arg 1 : $Slide 

**$SlideIndex (Required)**

The Slide object which you have used to create the slide.



     Note : for each Slide you have to manually add this funciton in order to enable it for that slide.

For Official Library's documentation please Visit [PHPPresentation Docs](https://github.com/PHPOffice/PHPPresentation)
