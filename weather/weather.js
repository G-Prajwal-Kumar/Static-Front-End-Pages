let request = new XMLHttpRequest();


function selectval(){

var city = document.getElementById("drop").value;
var url = 'https://api.openweathermap.org/data/2.5/weather?q='+city+'&appid=93f26e3c57081a6210de53b8dcfdfea4';

//open a connection
request.open('GET',url,true);

request.onload = function() {
    if( request.status >=200 && request.status < 400) {
        //get the data
        console.log(" success!!!");

        let data=JSON.parse(request.responseText);
        console.log(data);
        let imgsrc = 'https://openweathermap.org/img/w/'+data.weather[0].icon+'.png';
        document.getElementById('cont').innerHTML= "Country : "+data.sys.country;
        document.getElementById('head').innerHTML= "Weather Report for "+data.  name;
        document.getElementById('mypara').innerHTML= "Temperature : "+data.main.temp+'F';
        document.getElementById('desc').innerHTML= "Description : "+data.weather[0].description;
        document.getElementById('humid').innerHTML= "Humidity : "+data.main.humidity+"%";
        document.getElementById('wind').innerHTML= "Wind Speed : "+data.wind.speed;
        document.getElementById('myimg').src=imgsrc;
        /*document.getElementById('bdy').style.background-image = "url(C:/Users/prajwal/Downloads/"+city+".jpg);"*/

    }
    else {
        console.log(" could not connect to server")
    }
}
// error
request.onerror = function() {
    console.log("error!!")
}

//send the request
request.send();

}