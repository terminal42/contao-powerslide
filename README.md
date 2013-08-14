PowerSlide
==============


THE powerful Contao slider
----------------------------------------------------------

The PowerSlide module lets you use all kinds of content elements in a slider. 

Images, text, tables, list, even video can be used as elements in the slider, and you are not limited to one element per slide-page either. You want to slide 3 images on every single slide with some text and at the last slide-page a video? No problem with PowerSlide!

But it can do even more. 

With the preview elements you are not limited to the standard bullet points and previous/next-buttons to switch between different slide-pages. You can used a combinations of (formatted) text and images to access a particular slide-page within the slider. 


Basics
----------------------------------------------------------

After installing the module and updating the database under "Extension manager" you need to create and open the article in which you want to place your slider.

The first element you need is the "Power Slide - Setup" element. With this you can choose the basic settings of your slider. This includes things like overall dimensions, sliding speed and interval, animations/transitions, if and what kind of buttons you wish to have displayed.

After this step I suggest you include the "Power Slide - Terminate" element. All this element does is telling the module that this is the end of the slider section.

Now you're close to see something slide. 

At this point you should have some rough idea of what the content of your slider will be. 

**Note**: 

Everything that is supposed to move needs to be placed between the "Power Slide - Setup" and  "Power Slide - Terminate" elements. 

You can have as many elements on an individual slide as you wish. With the "Power Slide - Section" element you tell the module that the elements before and after are on a different slide-page. 

**Example** (Content Elements):

[Power Slide - Setup]

[Power Slide - Section] // this defines the beginning of the first page

[Image] // image 

[Power Slide - Section] //  this defines the beginning of the second page

[Image] // image 

[Power Slide - Terminate]


**Explanation**:

This is the most basic PowerSlide-slider possible, it has two pages that each contain one image.


Multiple Elements per Page
----------------------------------------------------------

If you installed PowerSlide you probably want to do more than just slide two images. 

Maybe you have on every page 3 images and an area with text and on the last one a video. To do this, you'd have to arrange the content elements as follows: 


**Example** (Content Elements):

[Power Slide - Setup]

[Power Slide - Section] // first page

[Image] 

[Image] 

[Image] 

[Text] 

[Power Slide - Section] // second page

[Image] 

[Image] 

[Image] 

[Text]  

[Power Slide - Section] // third page

[Video] 

[Power Slide - Terminate]



**Explanation**:

All you need to do at this point is make sure that the content and the buttons (if you want them) are formatted properly. 


Preview Elements 
----------------------------------------------------------


Let's assume you have a a slider with some elements that you want to access (jump to) manually. 

Normally you do this with the "previous", "next" and the "°"-buttons. None of those allows you to have an element that you can customize a lot. 

For this there's the "Power Slide - Preview" content element.

Let's use the simple example at the beginning of this document with two "Preview"-Elements: 


**Example** (Content Elements):

[Power Slide - Setup]

[Power Slide - Section] // first page

[Image] 

[Power Slide - Preview]

[Power Slide - Section] // second page

[Image] 

[Power Slide - Preview]

[Power Slide - Terminate]


**Explanation**:

As you can see, after both images there's now a "Preview" element. If you open a "Power Slide - Preview" element you'll see that there are options for adding text and images. 

The preview element will be generated accordingly on the front-end and will have the javascript events that make it work as an additional button that focuses on the chosen page of the slider.


Sliding News 
----------------------------------------------------------

With PowerSlide you can also Slide the entires of your News. 

All you have to do is create a "Power Slide - News Sections" content element, select the desired News list module and place the "News Section" element between "Setup" and "Terminate" elements. The news will now be cycled. 


**Example** (Content Elements):

[Power Slide - Setup]

[Power Slide - News Sections]

[Power Slide - Terminate]  


