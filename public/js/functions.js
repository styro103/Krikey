const HOST_URL = "http://localhost:8000/";


function searchEmployees() {
    let name = document.getElementById("employeeName").value;
    let title = document.getElementById("jobTitle").value;
    let age = document.getElementById("age").value;
    let employees = document.getElementById("employees");
    let data = {};

    if (!isEmpty(name)) {
        data.name = name;
    }
    if (!isEmpty(title)) {
        data.title = title;
    }
    if (!isEmpty(age)) {
        data.age = age;
    }

    $.ajax({
        type: "GET",
        data: data,
        dataType: "jsonp",
        url: HOST_URL+"/api/employees",
        //url: CONTROLLERS_LOCATION+"/EmployeeController.php",
        xhrFields: { withCredentials: true },
        success: function(employeeList){
            employees.innerHTML = "";

            console.log(employeeList);

            for (let employeeIndex in employeeList) {
                let employee = employeeList[employeeIndex];

                for(let property in employee) {
                    let displayText = property + ": " + employee[property];
                    employees.appendChild(document.createTextNode(displayText));
                    employees.appendChild(document.createElement("br"));
                }

                employees.appendChild(document.createElement("br"));
            }
        },
        error: function(data){
            employees.innerHTML = data;
            alert("Error Searching Employees");
        }
    });
}

function isEmpty(str) {
    return (!str || 0 === str.length);
}
