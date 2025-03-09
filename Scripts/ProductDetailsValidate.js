//Function to confirm proct adding to the cart
function confirmAdding(form) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to add this product to the cart?",
        icon: 'question',
        buttons: true,
        dangerMode: true,
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: 'Yes, Add to cart!',
        cancelButtonText: "Don't add it", 
        buttonsStyling: false,
        didRender: () => {
        const confirmButton = Swal.getConfirmButton();
        const cancelButton = Swal.getCancelButton();
    
        // Apply styles directly using JavaScript
        confirmButton.style.backgroundColor = '#015f30';
        confirmButton.style.color = 'white';
        confirmButton.style.width = '450px';
        confirmButton.style.border = 'none';
        confirmButton.style.borderRadius = '5px';
        confirmButton.style.padding = '10px';
        confirmButton.style.fontWeight = 'bold';
        confirmButton.style.fontSize = 'medium';
        confirmButton.style.cursor = 'pointer';

        cancelButton.style.backgroundColor = 'red'; 
        cancelButton.style.color = 'white';
        cancelButton.style.width = '450px';
        cancelButton.style.border = 'none';
        cancelButton.style.borderRadius = '5px';
        cancelButton.style.padding = '10px';
        cancelButton.style.fontWeight = 'bold';
        cancelButton.style.fontSize = 'medium';
        cancelButton.style.cursor = 'pointer'
        cancelButton.style.marginTop = '10px';
        },
    })
    .then((result) =>{
        if(result.isConfirmed){
            setTimeout(function () {
                Swal.fire(
                    {
                        title: 'Success',
                        text: "Product is added to the cart!",
                        icon: 'success',
                        buttons: true,
                        dangerMode: true,
                        buttonsStyling: false,
                        showCancelButton: false,
                        confirmButtonText: 'OK', 
                        buttonsStyling: false,
                        didRender: () => {
                        const confirmButton = Swal.getConfirmButton();
                    
                        // Apply styles directly using JavaScript
                        confirmButton.style.backgroundColor = '#015f30';
                        confirmButton.style.color = 'white';
                        confirmButton.style.width = '450px';
                        confirmButton.style.border = 'none';
                        confirmButton.style.borderRadius = '5px';
                        confirmButton.style.padding = '10px';
                        confirmButton.style.fontWeight = 'bold';
                        confirmButton.style.fontSize = 'medium';
                        confirmButton.style.cursor = 'pointer';
                        },
                    }
                ).then(() => {
                    form.submit();
                });
            }, 1000);
        }
    });

    return false; 
}

//Function to confirm update request
function confirmUpdate(form) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to update quantity?",
        icon: 'question',
        buttons: true,
        dangerMode: true,
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: 'Yes, Update!',
        cancelButtonText: 'Cancel', 
        buttonsStyling: false,
        didRender: () => {
        const confirmButton = Swal.getConfirmButton();
        const cancelButton = Swal.getCancelButton();
    
        // Apply styles directly using JavaScript
        confirmButton.style.backgroundColor = '#015f30';
        confirmButton.style.color = 'white';
        confirmButton.style.width = '450px';
        confirmButton.style.border = 'none';
        confirmButton.style.borderRadius = '5px';
        confirmButton.style.padding = '10px';
        confirmButton.style.fontWeight = 'bold';
        confirmButton.style.fontSize = 'medium';
        confirmButton.style.cursor = 'pointer';

        cancelButton.style.backgroundColor = 'red'; 
        cancelButton.style.color = 'white';
        cancelButton.style.width = '450px';
        cancelButton.style.border = 'none';
        cancelButton.style.borderRadius = '5px';
        cancelButton.style.padding = '10px';
        cancelButton.style.fontWeight = 'bold';
        cancelButton.style.fontSize = 'medium';
        cancelButton.style.cursor = 'pointer'
        cancelButton.style.marginTop = '10px';
        },
    })
    .then((result) =>{
        if(result.isConfirmed){
            setTimeout(function () {
                Swal.fire(
                    {
                        title: 'Success',
                        text: "Product is updated!",
                        icon: 'success',
                        buttons: true,
                        dangerMode: true,
                        buttonsStyling: false,
                        showCancelButton: false,
                        confirmButtonText: 'OK', 
                        buttonsStyling: false,
                        didRender: () => {
                        const confirmButton = Swal.getConfirmButton();
                    
                        // Apply styles directly using JavaScript
                        confirmButton.style.backgroundColor = '#015f30';
                        confirmButton.style.color = 'white';
                        confirmButton.style.width = '450px';
                        confirmButton.style.border = 'none';
                        confirmButton.style.borderRadius = '5px';
                        confirmButton.style.padding = '10px';
                        confirmButton.style.fontWeight = 'bold';
                        confirmButton.style.fontSize = 'medium';
                        confirmButton.style.cursor = 'pointer';
                        },
                    }
                ).then(() => {
                    form.submit();
                });
            }, 1000);
        }
    });

    return false; 
}