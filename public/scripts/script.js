function confirmExclusao(id) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: 'Tem certeza?',
        text: "Essa ação não pode ser desfeita.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sim, excluir!',
        confirmButtonColor: '#3085d6',
        cancelButtonText: 'Cancelar',
        cancelButtonColor: '#d33',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.getElementById('formExcluirItem_' + id);
            form.submit();
        }
    });
}