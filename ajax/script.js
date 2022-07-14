var request = new XMLHttpRequest();
request.open('GET', 'https://learnwebcode.github.io/json-example/animals-2.json');
request.onload = function(){
    //document.write(request.responseText);
    var data = JSON.parse(request.responseText);
    console.log(data[0]);
    document.write(data[0].foods.likes[0]);
};
request.onerror = function(){
    document.write('error');
}
request.send();
