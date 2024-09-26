$(document).on('click',"#add-new-account", function () {

    // alert("clicked")
    $('#add-new-account-modal').modal('toggle');
});

/*
document.addEventListener('click', function (event) {
    if (event.target.id === 'add-new-account') {
        // alert("clicked")
        document.getElementById('add-new-account-modal').classList.toggle('show');
        }
        });
        */

       $(document).on('click',"#create-or-update-account", async function () {
           const inputs = $("#add-new-account-modal .modal-body :input") //this selector is used to get all input fields and to be specific with all inputs elements(select,text area,button,etc) and stored in the variable "inputs"


           //  alert(inputs); //test in console log

           let objectAccount = {}; // variable declaring an empty object
           for (const [key, value] of Object.entries(inputs)) { // for loop that check all the keys (types,etc) and value  of the inputs
            const name = $(value).attr('name')
            if(name){
                const inputValue = $(value).val()
                objectAccount[name] = inputValue;

            }
        }
        // console.log(objectAccount)   //test in console log


        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        })

        const {success, msg} = await $.ajax({
            type: 'POST',
            url: 'api/createorupdateaccount',
            data: {
                objectAccount:objectAccount
            }
        })

        Swal.fire({
            icon: success ? 'success' : 'error',
            title: msg
        }).then((e) => {
            $("#add-new-account-modal").modal('toggle');
        Livewire.dispatch('refreshbudgetlist')
    })
    //  console.log(objectAccount);

});
// ---------------------------------------------------------------------------------------------------------------------
// UPDATE
$(document).on('click', "#update-data-account", function () {
    // Get the account ID from the data attribute
    var accountId = $(this).data('accountid');


    // Set the value of an input field with the ID of `account-id-input`
    $('#account-id-input').val(accountId);


    // Toggle the modal
    $('#update-account-modal').modal('toggle');
});

$(document).on('click', "#update-account", async function () {
    // Collect input values from the update modal
    const inputs = $('#update-account-modal .modal-body :input');
    console.log(inputs); // Log the inputs for debugging

    let objectAccount = {}; // Create an empty object to store input values
    let accountId = $('#account-id-input').val();


    // Loop through inputs and add them to the object
    inputs.each(function () {
        const name = $(this).attr('name'); // Get the name attribute of the input
        if (name) {
            const inputValue = $(this).val(); // Get the value of the input
            objectAccount[name] = inputValue; // Store the value in the object
        }
    });

    // Ensure the account ID is part of the object being sent
    objectAccount['accountId'] = accountId;


    // Setup CSRF token for secure AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        }
    });

    try {
        // Make an AJAX PATCH request to update the account
        const { success, msg } = await $.ajax({
            type: 'PUT',
            url: `api/updateaccount/${accountId}`, // Pass the account ID in the URL
            data: {
                objectAccount: objectAccount // Send the account object
            }
        });

        // Handle success or error response with SweetAlert
        Swal.fire({
            icon: success ? 'success' : 'error',
            title: msg
        }).then(() => {
            $('#update-account-modal').modal('toggle'); // Close the modal after success
            Livewire.dispatch('refreshbudgetlist'); // Refresh the list of accounts
        });

    } catch (error) {
        console.error('Error updating account:', error);
        Swal.fire({
            icon: 'error',
            title: 'Failed to update the account!',
            text: error.responseJSON?.message || 'An error occurred during the update.'
        });
    }
});
// first delete button
$(document).on('click', "#delete-data-account", function () {
    // Get the account ID from the button's data attribute
    var accountId = $(this).data('accountid');

    // Set the label text inside the modal
    $('#account-id-delete').text('Are you sure you want to delete: ' + accountId);
    $('#deletehidden').val(accountId);

    // Show the modal
    $('#delete-account-modal').modal('toggle');
});

// DELETE BTN IN THE MODAL
$(document).on('click', "#delete-account", async function () {
    // Collect input values from the update modal
    const inputs = $('#delete-account-modal .modal-body :input');
    console.log(inputs); // Log the inputs for debugging

    let objectAccount = {}; // Create an empty object to store input values
    let accountId = $('#account-id-input').val();


    // Loop through inputs and add them to the object
    inputs.each(function () {
        const name = $(this).attr('name'); // Get the name attribute of the input
        if (name) {
            const inputValue = $(this).val(); // Get the value of the input
            objectAccount[name] = inputValue; // Store the value in the object
        }
    });

    // Ensure the account ID is part of the object being sent
    objectAccount['accountId'] = accountId;


    // Setup CSRF token for secure AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        }
    });;
    // alert($('#deletehidden').val());
    const deleteddata = $('#deletehidden').val();

    try {

        // Make an AJAX PATCH request to update the account
        const { success, msg } = await $.ajax({
            type: 'DELETE',
            url: `api/deleteaccount/${deleteddata}`, // Pass the account ID in the URL
            data: {
                objectAccount: objectAccount // Send the account object
            }
        });

        // Handle success or error response with SweetAlert
        Swal.fire({
            icon: success ? 'success' : 'error',
            title: msg
        }).then(() => {
            $('#delete-account-modal').modal('toggle'); // Close the modal after success
            Livewire.dispatch('refreshbudgetlist'); // Refresh the list of accounts
        });

    } catch (error) {
        console.error('Error updating account:', error);
        Swal.fire({
            icon: 'error',
            title: 'Failed to update the account!',
            text: error.responseJSON?.message || 'An error occurred during the update.'
        });
    }
});


