$(document).ready(function(){
    var ctx1 = document.getElementById("myRaderChart1");
    var myRadarChart1 = new Chart(ctx1, {
        type: 'radar', 
        data: { 
            labels: ["HTML & CSS", "Javascript", "vue", "JQuery", "CSSFw"],
            datasets: [{
                label: 'Front end',
                data: [3, 3, 2, 3, 3],
                backgroundColor: 'RGBA(225,95,150, 0.1)',
                borderColor: 'RGBA(225,95,150, 1)',
                borderWidth: 1,
                pointBackgroundColor: 'RGB(46,106,177)'
            }]
        },
        options: {
            title: {
                display: true,
                
            },
            scale:{
                ticks:{
                    suggestedMin: 0,
                    suggestedMax: 5,
                    stepSize: 1,
                    callback: function(value, index, values){
                        return  value
                    }
                }
            }
        }
    });
    var ctx2 = document.getElementById("myRaderChart2");
    var myRadarChart2 = new Chart(ctx2, {
        type: 'radar', 
        data: { 
            labels: ["C#", "Java", "spring boot", "php", "laravel", "SQL"],
            datasets: [{
                label: 'Back end',
                data: [4, 3, 2, 3, 2, 4],
                backgroundColor: 'RGBA(68,138,255, 0.1)',
                borderColor: 'RGBA(68,138,255, 1)',
                borderWidth: 1,
                pointBackgroundColor: 'RGB(46,106,177)'
            }]
        },
        options: {
            title: {
                display: true,
            },
            scale:{
                ticks:{
                    suggestedMin: 0,
                    suggestedMax: 5,
                    stepSize: 1,
                    callback: function(value, index, values){
                        return  value
                    }
                }
            }
        }
    });
    var ctx3 = document.getElementById("myRaderChart3");
    var myRadarChart3 = new Chart(ctx3, {
        type: 'radar', 
        data: { 
            labels: ["Unity", "Swift", "python", "vba", "英語"],
            datasets: [{
                label: 'その他',
                data: [3, 2, 3, 2, 4],
                backgroundColor: 'RGBA(68,255,255, 0.1)',
                borderColor: 'RGBA(68,255,138, 1)',
                borderWidth: 1,
                pointBackgroundColor: 'RGB(46,106,177)'
            }]
        },
        options: {
            title: {
                display: true,
            },
            scale:{
                ticks:{
                    suggestedMin: 0,
                    suggestedMax: 5,
                    stepSize: 1,
                    callback: function(value, index, values){
                        return  value
                    }
                }
            }
        }
    });
    jQuery(function ($){
        $(window).scroll(function(){
            var top = $(this).scrollTop();
            if(top > 250){
                $('#box1').addClass('animated animate__animated animate__fadeInUp');
            }else{
                $('#box1').removeClass('animated animate__animated animate__fadeInUp');
            }
            if(top > 300){
                $('#box2').addClass('animated animate__animated animate__fadeInUp');
            }else{
                $('#box2').removeClass('animated animate__animated animate__fadeInUp');
            }
            if(top > 500){
                $('#box3').addClass('animated animate__animated animate__fadeInUp');
            }else{
                $('#box3').removeClass('animated animate__animated animate__fadeInUp');
            }
            if(top > 800){
                $('#box4').addClass('animated animate__animated animate__fadeInUp');
            }else{
                $('#box4').removeClass('animated animate__animated animate__fadeInUp');
            }
        });
    });
   
});