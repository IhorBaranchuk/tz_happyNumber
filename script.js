window.addEventListener("load", function () {
    let resultDiv = document.querySelector("#result");

    function sendData() {
        const XHR = new XMLHttpRequest();

        const FD = new FormData(form);

        XHR.addEventListener("load", function (event) {
            const obj = JSON.parse(event.target.responseText);
            if (obj.status == "success") {
                if (resultDiv) {
                    resultDiv.innerHTML = "Number of tickets: " + obj.number;
                }
            } else {
                alert(obj.description);
            }
        });

        XHR.open("POST", "action.php");
        XHR.send(FD);
    }

    const form = document.getElementById("happyNumberForm");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        sendData();
    });
});
