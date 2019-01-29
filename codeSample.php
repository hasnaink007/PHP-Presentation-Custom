<?php 

require_once 'libraries/src/PhpPresentation/Autoloader.php';

\PhpOffice\PhpPresentation\Autoloader::register();

require_once 'libraries/common_src/Common/Autoloader.php';

\PhpOffice\Common\Autoloader::register();

use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpPresentation\IOFactory;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Style\Alignment;

$objPHPPowerPoint = new PhpPresentation();


// Create slide
$currentSlide = $objPHPPowerPoint->getActiveSlide();

// Create a shape (drawing)
$shape = $currentSlide->createDrawingShape();
$shape->setName('PHPPresentation logo')
      ->setDescription('PHPPresentation logo')
      ->setPath('resources/powerpoint_logo.png')
      ->setHeight(36)
      ->setOffsetX(10)
      ->setOffsetY(10);
$shape->getShadow()->setVisible(true)
                   ->setDirection(45)
                   ->setDistance(10);

// Create a shape (text)
$shape = $currentSlide->createRichTextShape()
      ->setHeight(300)
      ->setWidth(600)
      ->setOffsetX(170)
      ->setOffsetY(180);
$shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER );
$textRun = $shape->createTextRun('Thank you for using PHPPresentation!');
$textRun->getFont()->setBold(true)
                   ->setSize(60)
                   ->setColor( new Color( 'FFE06B20' ) );

                
// Creating Slide Number 2 

$slide2 = $objPHPPowerPoint->createSlide();
$shape2 = $slide2->createDrawingShape();
$shape2->setName('PHPPresentation logo')
      ->setDescription('PHPPresentation logo')
      ->setPath('resources/powerpoint_logo.png')
      ->setHeight(36)
      ->setOffsetX(10)
      ->setOffsetY(10);
$shape2->getShadow()->setVisible(true)
                   ->setDirection(45)
                   ->setDistance(10);

// Slide 2 Ends here


// slide getting slide index of slide 2
$slidenumber = $objPHPPowerPoint->getIndex($slide2);

// Adding slide number to the slide 2 
$objPHPPowerPoint->addSlideNumber($slidenumber,'Slide {{curSlide}} of {{totalSlide}}');


// Adding Slide number to the slide 1 with the direct $objPHPPowerPoint->getIndex( SLIDE OBJECT ) Method.
$objPHPPowerPoint->addSlideNumber($objPHPPowerPoint->getIndex($currentSlide),'Slide {{curSlide}} of {{totalSlide}}');

// Use the function addSlideNumber(Slide Index Number , Message with the following placeholders {{totalSlide}} {{curSlide}});

/**
 *  Argument Descripition
 *    $SlideIndex   :   The Slide index number, can be got by ->getIndex($SLIDE) funciton
 *    
 *    $MessageString : A String containing the following placeholders on their desidered positions : {{totalSlide}}  AND {{curSlide}} 
 * 
 * 
 */

$oWriterPPTX = IOFactory::createWriter($objPHPPowerPoint, 'PowerPoint2007');
$oWriterPPTX->save(__DIR__ . "/sample.pptx");

?>