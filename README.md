# PHP-Presentation-Custom

The plugin is an extended version of the PHPPresentation Library which enables you to add SlideNumbers at the bottom of the slide in your desired string.

### Usage Instruction
The function that expands the functionality is 

     addSlideNumber($slideIndex, $textString);

You can use the getSlideIndex() function to get the slide number for the 1st argument.

**EXAMPLE** 

     $slide2 = $objPHPPowerPoint->createSlide();
     $slideIndex = $objPHPPowerPoint->getIndex($slide2);
     $objPHPPowerPoint->addSlideNumber($slideIndex, 'Slide {{curSlide}} of {{totalSlide}}');

### Arguments
The addSlideNumber() accepts two parameters and both are required in order to make it work. The details are as follows: 

       Arg 1 : $slideIndex 
       Arg 2 : $textString

**$SlideIndex (Required)**

The Number of the Slide, You can get it by the following function too:
     getSlideIndex();

**Text String (Required)**

A Text strings with the Placeholder text, as following :
     {{totalSlide}} : TO show the total number of slides
     {{curSlide}}  : To show the current slide number

**Example**

       $textString = 'Slide {{curSlide}} of {{totalSlide}}'
       // will output "Slide 1 of 6"

     Note : for each Slide you have to manually add this funciton in order to enable it for that slide.

For Official Library's documentation please Visit [PHPPresentation Docs](https://github.com/PHPOffice/PHPPresentation)