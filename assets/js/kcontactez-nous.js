var form = document.querySelector('#form');
var msg = document.querySelector('#msg');

form.addEventListener('submit', function (e) {
    e.preventDefault();
    var data = new FormData(form);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.status == 200 && xhr.readyState == 4) {
            if (xhr.response.err) {
                // msg.className = 'alert-success text-center rounded';
                // msg.innerHTML = xhr.response.msg;
                alert(xhr.response.msg);
                
                setTimeout(() => {
                    window.location.href = '?p=accueil';
                }, 2000);
            } else {
                alert(xhr.response.msg);
                // msg.innerHTML = xhr.response.msg;
                // msg.className = 'alert-danger text-center rounded';
            }
        }
        // console.log(xhr.response);
    }


    xhr.open('POST', 'traitement/envoi_msg.php', true);
    xhr.responseType = 'json';
    xhr.send(data);
});