var obj = [];
var states = [];
$(document).ready(function() {
    var div;
    $.ajax({
        url: "https://raw.githubusercontent.com/thatisuday/indian-cities-database/master/cities.json",
        method: "GET",
        success: function(result) {
            obj = (JSON.parse(result));

            for (var i in obj) {

                if (states.includes(obj[i]['state']) == false) {
                    states.push(obj[i]['state']);
                }
            }
            div = "<select onchange='myfun(this.value)'>";
            div += "<option default>Choose state</option>";
            for (var i in states) {
                var n = `<option value='${states[i]}' name='${states[i]}'>${states[i]}</option>`;
                div += n;
            }
            div += "</select>";
            $("#container").html(div);

        }
    });

})

function myfun(state) {

    $.ajax({
        url: 'fetch.php',
        type: 'POST',
        data: {
            state: state
        },

        success: function(response) {
            $("#sp2").html(response);

        }

    });
}