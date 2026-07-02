</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

document.querySelectorAll('.btn-hapus').forEach(function(btn){

    btn.addEventListener('click', function(e){

        e.preventDefault();

        let url = this.href;

        Swal.fire({
            title:'Yakin ingin menghapus?',
            text:'Data yang dihapus tidak dapat dikembalikan!',
            icon:'warning',
            showCancelButton:true,
            confirmButtonText:'Ya, Hapus',
            cancelButtonText:'Batal'

        }).then((result)=>{

            if(result.isConfirmed){

                window.location.href = url;

            }

        });

    });

});

</script>

</body>
</html>