//Function to confirm continuation of doing shopping
function confirmShopping() {
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to continue shopping?",
        icon: 'question',
        buttons: true,
        dangerMode: true,
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: 'Yes, Continue!',
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
            window.location.href = 'Products.php';
        }
    });

    return false; 
}