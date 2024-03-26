document.addEventListener("DOMContentLoaded",function(){
    // A ("const") nem váltosztatja meg a gombot hanem fixálva van. A ("let{egymunkamenetre alkalmas}"). A ("var") dokument élettartam.
    const insertbutton = document.getElementById("create"); 
    const readbutton = document.getElementById("read");
    const updatebutton = document.getElementById("update");
    const deletebutton = document.getElementById("delete");
    baseUrl = "http://localhost/oraifeladat/pizzaugyfel/index.php?pizzaugyfel";    
    insertbutton.addEventListener("click", async function(){
        let pizza = new FormData(document.getElementById('pizza'));
        let baseUrl="http://localhost/oraifeladat/pizzabackend/index.php?pizzaugyfel";
        /*let dataJSON = {
            "vnev": document.getElementById("vnev").value,
            "vcim": document.getElementById("vcim").value,
        };*/
        let options = {
            method: "POST",
            mode: "cors",
            body: pizza
            /*headers: {
                'Content-type': 'application/json'
            },
            body: JSON.stringify(dataJSON)*/
        }
        let response = await fetch(baseUrl, options);
        alert("Sikeres feltöltés");
    })
    readButton.addEventListener('click', async function () {
        let response = await fetch(baseUrl,);
        if (response.ok) {
            let data = await response.json();
            dolgozokListazasa(data);
        } else {
            console.error('Hiba a szerver válaszában');
        };
    });

    function dolgozokListazasa(vevok) {
        let vevokkDiv = document.getElementById('pizzaugyfellista');
        let tablazat = dolgozoFejles();
        for (let vevo of vevok) {
            tablazat += dolgozoSor(vevo);

        }
        vevokDiv.innerHTML = tablazat + '</tbody></table>';
    }
    function dolgozoSor(vevo) {
        let sor = `<tr>
        <td>${vevo.vazon}</td>
        <td>${vevo.vnev}</td>
        <td>${vevo.vcim}</td>
        <td><button type="button" class="btn btn-outline-secondary" onclick="adatBetoltes(${vevo.vazon})"><i class="fa-regular fa-hand-point-left"></i></button></td>
    </tr>`;
    return sor;
    }


    function dolgozoFejles() {
        let fejlec = `<table class="table table-sprited">
        <thead>
            <tr>
                <th>Azonosító</th>
                <th>Név</th>
                <th>Utca név</th>
                <th>Művelet</th>
            </tr>
        </thead>
        <tbody>`;
    }

});