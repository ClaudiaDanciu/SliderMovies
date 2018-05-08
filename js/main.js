
/*Set var for image and title with an empty string
* set the string for the moods */
var image = "";
var title = "";
//var moods = [0,1,2,3,4,5,6,7]
var moods = ["Agitated", "Calm", "Happy", "Sad", "Tired", "Wide Awake", "Scared", "Fearless"];
/*I set 4 sliders with a middle value of 5. If you chose left side with a value from 0->5 the value will
 * be the one from left. If you chose from 6->10 the value is from right. If you chose 5 it will be a random one
 */

$( function() {
    /* slider one will take the moods 0,1 from the string (agitated and calm) and so on,  and will select the movie
     * for your mood; value 5 set the slider to be in the middle from the beginning, 
     * */
    $( "#slider-1" ).slider({value:5, min: 0,max: 10,
        slide: function(movie, ui) {
//          will get the value for the mood to prepare to populate the movie(pic/title)
            getData(ui.value, moods[0], moods[1], "image1","title1","nocontent1");
        }
    });
    
    $( "#slider-2" ).slider({value:5, min: 0,max: 10,
        slide: function(movie, ui) {
            getData(ui.value, moods[2], moods[3], "image2","title2","nocontent2");
        }
    });

    $( "#slider-3" ).slider({value:5, min: 0, max: 10,
        slide: function(movie, ui) {
            getData(ui.value, moods[4], moods[5], "image3","title3","nocontent3");
        }
    });

    $( "#slider-4" ).slider({value:5, min: 0, max: 10,
        slide: function(movie, ui) {
            getData(ui.value, moods[6], moods[7], "image4","title4","nocontent4");
        }
    });
    
} );


/* This function will return the XML data from the xml uploaded, will open the xml file films with the extension xml */
    function ajax() {
        return $.ajax({
            type: "GET",
            url: "uploads/films.xml",
            dataType: "xml"
        });
    }

/* A loop that will check the mood values and replace the title, the image
*/
       
/* 
*/
function getData(value, mood1, mood2, imagePlace, titlePlace, remove) {
    
    ajax().done(function(xml) {
        $(xml).find('programme').each(function(movie){
            if(value < 5) {
                if($(this).find('mood').text() == mood1) {
                    image = $(this).find('image').text();
                    title = $(this).find('name').text();
                    displayData(imagePlace,titlePlace, remove);
                }
            } else if(value > 5) {
                if($(this).find('mood').text() == mood2) {
                    image = $(this).find('image').text();
                    title = $(this).find('name').text();
                    displayData(imagePlace,titlePlace, remove);
                }
            } else if(value == 5) {
                if($(this).find('mood').text() == "Random") {
                    image = $(this).find('image').text();
                    title = $(this).find('name').text();
 /*                 I tried to display random pictures(to populate all the pictures) after we select something;
  *                 The issue is that if I will click somewhere on 5 will reset all the movies 
  *                 (We can have some picture to replace the no content ones - but I thought that might be important 
  *                 to have no content fields there)
  *                 
 *                  displayData("image1","title1", "nocontent1");
 *                  displayData("image2","title2", "nocontent2");
 *                  displayData("image3","title3", "nocontent3");
                    displayData("image4","title4", "nocontent4");*/
                    displayData("image5","title5", "nocontent5");
                    
                }
            }

        });
//        if everything goes wrong we will have a message alert
    }).fail(function() {
        console.log("XML file not found!");
    });
}


/* Decide where to display the data */
function displayData(imagePlace, titlePlace, removed){
    $("#" + removed).remove();
    $("#" + imagePlace).attr("src",image);
    $("#" + imagePlace).css("height", "240px");
    $("#" + titlePlace).html(title);
}