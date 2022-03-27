var random_images_array = ["banner2.png", "banner3.png", "banner4.png"];
var num = Math.floor( Math.random() * random_images_array.length );
var img = random_images_array[ num ];
path = 'img/';
var imgStr = '<img src="' + path + img + '" alt="xingNet">';
document.write(imgStr); document.close();

