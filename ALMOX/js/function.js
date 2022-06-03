document.addEventListener('DOMContentLoaded', function(){
    
    document.querySelector('#btn').addEventListener('click',function(){
        let ytb = document.querySelector('#texto').value;

        document.getElementById('frm').src= ytb;

        //document.querySelector('#result').innerHTML = ytb;
    })


    /*document.querySelector('#btn').addEventListener('click',function(){
        let text = document.querySelector('#texto').value;

        let red = document.getElementById('result').style.textTransform = "capitalize";
        document.querySelector('#result').innerHTML = text;
        
    })
    /*function upper(text){
        return text.toUpperCase();
    }*/
})
