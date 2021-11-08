window.onload = function(){
    var lookup = document.getElementById('lookup');
    var country = document.getElementById('country');
    var httpRequest;

    lookup.addEventListener('click',function(elem){
        elem.preventDefault();
        httpRequest = new XMLHttpRequest;

        var url= "http://localhost/info2180-lab5/world.php?country=" + country.value;
        httpRequest.onreadystatechange = loadCountries;
            httpRequest.open('GET',url);
            httpRequest.send();
            console.log(httpRequest)
            console.log(country.value);
    })

    function loadCountries(){
        if(httpRequest.readyState ===XMLHttpRequest.DONE){
            if(httpRequest.status === 200){
                var response = httpRequest.responseText;
                console.log(response);
                document.getElementById('result').innerHTML = response;
               
            }else{
                alert('there was a problem')
            }
        }
    }
}