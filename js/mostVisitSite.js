MOST_VISIT_SITE = (function(){
    const changeMostNumber=()=>{
        let $select = document.getElementById('mostNumber');
        let $most_list = document.getElementById('most_list');
        $('#mostNumber').bind('click keyup', function(){
            $count = $select.value;
            $most_list.innerHTML = "";
            for(let i=0;i<$count;i++)
            {
                $most_list.innerHTML += "<li><a href=\"#\">Strona 1</a> / 100</li>";
            }
        });
    }

    return{
        'changeMostNumber': changeMostNumber
    }
})();