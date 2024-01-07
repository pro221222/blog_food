
$(document).ready(function () {

    var myElement = document.getElementById('myElement');
    var calories = document.getElementById('calories');



    const createTableRow = (obj) => {
        let html =  ` <tr>
                <th>${obj.parsed[0].quantity}</th>
                <th>${obj.parsed[0].measure}</th>
                <th>${ obj.parsed[0].food}</th>
                <th>${obj.parsed[0].nutrients.ENERC_KCAL.quantity.toFixed(2)} kcal</th>
                <th>${obj.parsed[0].weight.toFixed(2)} g</th>

            </tr> `;

        return html;
    }

    // Hiển thị dữ liệu trong console (để kiểm tra)


    $("#submitButton").click(function () {
        myElement.innerHTML = '';
        calories.innerHTML = '';
        // Lấy giá trị từ textarea
        var textareaValue = $("#myTextarea").val();
        var data = {
            "ingr": textareaValue.split(',').map(item => item.trim())
        }
        var response = postData(data);

        response.then(data => {
            let   fragment = [];
            //  parent.innerHTML = "";
            Object.keys(data.ingredients).forEach(key => {
                let obj = data.ingredients[key];

                const tableRow = createTableRow(obj);
                fragment.push(tableRow)
            });
            myElement.innerHTML =  `<table class="table">
        <thead>
            <tr>
                <th>Qty</th>
                <th>Unit</th>
                <th>Food</th>
                <th>Calories</th>
                <th>Weight</th>
            </tr>
        </thead>
        <tbody>
            ${fragment.join('')}
        </tbody>
    </table>`;


    let   fragmentcalories = [];
    let combinedObject = { ...data.totalDaily, ...data.totalNutrients };
            // Thêm xử lý cho data.totalDaily nếu cần
           // Object.keys(combinedObject).forEach(key => {
                let objTotalDaily = data.totalDaily;
                let objTotalNutrients = data.totalNutrients;
                console.log(objTotalNutrients.ENERC_KCAL.label);
                let calorieshtml = `                     <table class="performance-facts__table">
                <tbody>
                    <tr>
                        <th colspan="2" id="lkcal-val-cal"><b>Calories</b></th>
                        <td class="nob">${data.calories}</td>
                    </tr>
                    <tr class="thick-row">
                        <td colspan="3" class="small-info"><b>% Daily Value*</b></td>
                    </tr>
                    <tr>
                        <th colspan="2"><b>Total Fat</b> ${objTotalNutrients.FAT.quantity.toFixed(2)} g</th>
                        <td><b>${objTotalDaily.FAT.quantity.toFixed(2)} %</b></td>
                    </tr>
                    <tr>
                        <td class="blank-cell"></td>
                        <th>Saturated Fat ${objTotalNutrients.FASAT.quantity.toFixed(2)} g</th>
                        <td><b>${objTotalDaily.FASAT.quantity.toFixed(2)} %</b></td>
                    </tr>
                    <tr>
                        <td class="blank-cell"></td>
                        <th>Trans Fat ${objTotalNutrients.FATRN.quantity.toFixed(2)} g</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2"><b>Cholesterol</b> ${objTotalNutrients.CHOLE.quantity.toFixed(2)} mg</th>
                        <td><b> ${objTotalDaily.CHOLE.quantity.toFixed(2)}  %</b></td>
                    </tr>
                    <tr>
                        <th colspan="2"><b>Sodium</b> ${objTotalNutrients.NA.quantity.toFixed(2)} mg</th>
                        <td><b>${objTotalDaily.NA.quantity.toFixed(2)} %</b></td>
                    </tr>
                    <tr>
                        <th colspan="2"><b>Total Carbohydrate</b> ${objTotalNutrients.CHOCDF.quantity.toFixed(2)} g</th>
                        <td><b>${objTotalDaily.CHOCDF.quantity.toFixed(2)} %</b></td>
                    </tr>
                    <tr>
                        <td class="blank-cell"></td>
                        <th>Dietary Fiber ${objTotalNutrients.FIBTG.quantity.toFixed(2)} g</th>
                        <td><b>${objTotalDaily.FIBTG.quantity.toFixed(2)} %</b></td>
                    </tr>
                    <tr>
                        <td class="blank-cell"></td>
                        <th>Total Sugars ${objTotalNutrients.SUGAR.quantity.toFixed(2)}  g</th>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="blank-cell"></td>
                        <th>Includes - Added Sugars</th>
                        <td></td>
                    </tr>
                    <tr class="thick-end">
                        <th colspan="2"><b>Protein</b>  ${objTotalNutrients.PROCNT.quantity.toFixed(2)}  g</th>
                        <td><b> ${objTotalDaily.PROCNT.quantity.toFixed(2)} %</b></td>
                    </tr>
                </tbody>
            </table>
            <table class="performance-facts__table--grid">
                <tbody>
                    <tr>
                        <th>Vitamin D  ${objTotalNutrients.VITD.quantity.toFixed(2)}  µg</th>
                        <td><b>${objTotalDaily.VITD.quantity.toFixed(2)} %</b></td>
                    </tr>
                    <tr>
                        <th>Calcium ${objTotalNutrients.CA.quantity.toFixed(2)}  mg</th>
                        <td><b>${objTotalDaily.CA.quantity.toFixed(2)}  %</b></td>
                    </tr>
                    <tr>
                        <th>Iron ${objTotalNutrients.FE.quantity.toFixed(2)} mg</th>
                        <td><b>${objTotalDaily.FE.quantity.toFixed(2)} %</b></td>
                    </tr>
                    <tr class="thin-end">
                        <th>Potassium ${objTotalNutrients.K.quantity.toFixed(2)} mg</th>
                        <td><b>${objTotalDaily.K.quantity.toFixed(2)} %</b></td>
                    </tr>
                </tbody>
            </table>
              `;
              fragmentcalories.push(calorieshtml)
        //    });

            calories.innerHTML = `${fragmentcalories.join('')}`;


        });
    });

    function postData(data) {
        var url = "https://api.edamam.com/api/nutrition-details?app_id=59b83ab4&app_key=b99698a66a263d9bf7c7d4b5f88218cc&beta=true&force=true";

        return fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        })
            .then(response => response.json())
            .catch(error => {
                console.error("There was a problem with the fetch operation:", error);
            });
    }

});
