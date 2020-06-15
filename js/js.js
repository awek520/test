function getTime() 
{
    return (new Date()).toLocaleTimeString();
}

document.getElementById('data').innerHTML = getTime();

setInterval(function() {

    document.getElementById('data').innerHTML = getTime();
    
}, 1000);
