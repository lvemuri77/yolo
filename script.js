function slides(){
        //var imgLen = document.getElementById('slideshow');
        var images = document.getElementById('slideshow').getElementsByTagName('img');
        var counter = 1;

        if(counter <= images.length){
            setInterval(function(){
                images[0].src = images[counter].src;
                //images[0].src = "images/pets"+counter+".jpg"; 
                counter++;

                if(counter === images.length){
                    counter = 1;
                }
            },4000);
        }
};
