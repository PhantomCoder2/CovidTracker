function fetch(){
    $.get("https://api.covid19api.com/summary",
    function(data){
        var total=document.getElementById("indiatotal");
        var rec=document.getElementById("indiarec");
        var death=document.getElementById("indiadeath");
        var gtotal=document.getElementById("globalcon");
        var grec=document.getElementById("globalrec");
        var gdeath=document.getElementById("globaldeath");

        gtotal.innerHTML=data['Global']['TotalConfirmed'];
        grec.innerHTML=data['Global']['TotalRecovered'];
        gdeath.innerHTML=data['Global']['TotalDeaths'];


        total.innerHTML=data['Countries'][76]['TotalConfirmed'];
        rec.innerHTML=data['Countries'][76]['TotalRecovered'];
        death.innerHTML=data['Countries'][76]['TotalDeaths'];
    }
    )
}
